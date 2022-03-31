<!-- statamic:hide -->
# Stumblr
> Share photos, videos, quotes, links, and more easily with the world. It's like your very own personal Tumblr.
<!-- /statamic:hide -->

## Features

Stumblr is your very own personal, customizable Tumblr. Create beautifully simple posts using one of 6 blueprints: Audio, Link, Photo, Quote, Text, and Video. Organize them by tags and just keep creating.

### Social Media Links

Add links to your most important social networks in your Global variables area and let the kit take care of adding the icons to your nav for you.

### RSS Feed and Sitemap

Your RSS Feed is available at `/feed.xml` and sitemap at `/sitemap.xml`.

### Frontend Build Details

- Built with [TailwindCSS](https://tailwindcss.com)
- Configurable social media links
- Full [static site](https://github.com/statamic/ssg) support
- Mobile/Responsive friendly

## Customizing

### Frontend

Modify the templates and views however you'd like. Just run `npm install` to install the Laravel Mix/webpack tooling and then one of the following commands to compile your css:

- `npm run dev` to compile dev assets
- `npm run watch` to watch and compile dev assets on the fly
- `npm run prod` to compile production-ready assets

### Adding new "Post Types"

You can create new types of posts by adding new [Blueprints](https://statamic.com/blueprints) to the Posts collection.

These blueprints need a matching template partial of the same name in `resources/views/post_types/` to render their output.
