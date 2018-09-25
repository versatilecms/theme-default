<!-- CALLOUT BLOCK -->
<div class="page-block @if (in_array($blockData->spaces, [0, 2])) page-block-space-bottom @endif @if (in_array($blockData->spaces, [1, 2])) page-block-space-top @endif">
    <div
        class="callout callout-size-{{ $blockData->size or '0' }} background-image @if ($blockData->fade_background === 'on') fade-background @endif"
        style="background-image: url({{ image_url($blockData->background_image, 1600, 750, ['crop' => false]) }});"
    >
        <div
            class="grid-container column text-center"
            @if (!empty($blockData->animate)) data-scrollreveal @endif
        >
            @if (!empty($blockData->title))
                @if ($blockData->size > 1) <h1> @else <h2> @endif
                    {{ $blockData->title or '' }}
                @if ($blockData->size > 1) </h1> @else </h2> @endif
            @endif

            @if (!empty($blockData->content))
                <p class="lead">{{ $blockData->content or '' }}</p>
            @endif

            @if (!empty($blockData->link))
                <a href="{{ $blockData->link or '#' }}" class="button light large">
                    {{ $blockData->button_text or 'Learn More' }}
                </a>
            @endif
        </div> <!-- /.container -->
    </div> <!-- /.callout -->
</div> <!-- /.page-block -->
<!-- /.CALLOUT BLOCK -->
