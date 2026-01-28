<ui-empty-state-menu
    heading="Welcome to Stumblr!"
    subheading="Let's get you out there and posting that sweet, sweet content."
>
    <ui-empty-state-item
        href="{{ cp_route('globals.variables.edit', ['global']) }}"
        icon="edit-paint-palette"
        heading="Tweak your site details"
        description="Customize your site name, tagline, social links, and copyright info."
    ></ui-empty-state-item>

    <ui-empty-state-item
        href="{{ cp_route('collections.show', 'posts') }}"
        icon="media-image-picture-gallery"
        heading="{{ $posts > 0 ? 'Post something new' : 'Create your first post' }}"
        description="{{ $posts > 0 ? 'Get that post out there. Don\'t overthink, just create.' : 'Post your first photo, video, text, quote, audio clip, or video.' }}"
    ></ui-empty-state-item>
</ui-empty-state-menu>