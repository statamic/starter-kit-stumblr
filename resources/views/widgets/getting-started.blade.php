<div class="card p-0 content max-w-md mx-auto" x-data="{ showList: false }">
    <div class="py-3 px-4 border-b text-center">
        <h1>Welcome to Stumblr!</h1>
        <p>Let's get you out there and posting that sweet, sweet content.</p>
    </div>
    <div class="py-3 px-6 space-y-3">
        <a href="{{ cp_route('globals.variables.edit', ['global']) }}" class="p-2 flex items-start hover:bg-blue-100 rounded-md group">
            <div class="h-12 w-12 mr-3 text-blue-900 rounded-full bg-blue-100 group-hover:bg-blue-200 p-1">
                <svg viewBox="0 0 32 32" height="32" width="32" xmlns="http://www.w3.org/2000/svg"><g transform="matrix(1.3333333333333333,0,0,1.3333333333333333,0,0)"><path d="M10.932,18.5a5,5,0,0,1-10,0V3.5a3,3,0,0,1,3-3h4a3,3,0,0,1,3,3Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.193,21.116,17.9,8.165a3,3,0,0,0-1.045-4.112L13.416,2.008a3,3,0,0,0-2.927-.078" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.932,10.1v8.4a5,5,0,0,1-2.55,4.359L21.5,15.736A3,3,0,0,0,22.7,11.668L20.8,8.153A3,3,0,0,0,18.32,6.588" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2.932 3.500 L8.932 3.500 L8.932 6.500 L2.932 6.500 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2.932 8.500 L8.932 8.500 L8.932 11.500 L2.932 11.500 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2.932 13.500 L8.932 13.500 L8.932 16.500 L2.932 16.500 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.932,19.749a.25.25,0,1,1-.25.25.25.25,0,0,1,.25-.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>
            </div>
            <div class="flex-1">
                <h2 class="text-blue-darkest">Tweak your site details</h2>
                <p>Customize your site name, tagline, social links, and copyright info.</p>
            </div>
        </a>
        <a href="{{ cp_route('collections.show', 'posts') }}" class="p-2 flex items-start hover:bg-blue-100 rounded-md group">
            <div class="h-12 w-12 mr-3 text-blue-900 rounded-full bg-blue-100 group-hover:bg-blue-200 p-1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g transform="scale(1.33333)"><path d="M15.543 15.543l-2.628-6.571c-.2-.511-.558-.519-.785-.018l-2.087 4.589-1.859-2.231a.667.667 0 00-1.155.089l-2.486 4.142" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><rect x="1.543" y="1.543" width="17" height="17" rx="1" ry="1" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><path d="M20.551 7.424l1 .091a1 1 0 01.901 1.085l-1.181 12.948a1 1 0 01-1.087.9L6.243 21.18M1.543 15.543h17" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><circle cx="6.043" cy="6.043" r="1.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
            </div>
            <div class="flex-1">
                @if ($posts > 0)
                    <h2 class="text-blue-darkest">{{ __('Post something new') }}</h2>
                    <p>Get that post out there. Don't overthink, just create.</p>
                @else
                    <h2 class="text-blue-darkest">{{ __('Create your first post') }}</h2>
                    <p>Post your first photo, video, text, quote, audio clip, or video.</p>
                @endif
            </div>
        </a>
    </div>
</div>
