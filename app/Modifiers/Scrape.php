<?php

namespace App\Modifiers;

use Statamic\Support\Arr;
use Statamic\Modifiers\Modifier;
use Illuminate\Support\Facades\Cache;

class Scrape extends Modifier
{
    public function index($url, $params)
    {
        $data = $this->scrapeDataFromUrl($url, Arr::get($params, 1, 24));

        return Arr::get($data, Arr::get($params, 0, 'title'));
    }

    private function scrapeDataFromUrl($url, $hours)
    {
        return Cache::remember('scraped-' . $url, now()->addHours($hours), function () use ($url) {
            $data = [];
            $dom = new \DOMDocument();

            if (@$dom->loadHTMLFile($url)) {

                foreach($dom->getElementsByTagName('meta') as $meta) {
                    if ($meta->getAttribute('property') == 'og:image') {
                        $data['og_image'] = $meta->getAttribute('content');
                    }
                }

                $elements = $dom->getElementsByTagName('title');

                if ($elements->length > 0) {
                    $data['title'] = $elements->item(0)->textContent;
                }
            }

            return $data;
        });
    }
}
