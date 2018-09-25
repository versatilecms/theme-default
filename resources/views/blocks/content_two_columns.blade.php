<!-- TWO COLUMN BLOCK -->
<div class="page-block @if (in_array($blockData->spaces, [0, 2])) page-block-space-bottom @endif @if (in_array($blockData->spaces, [1, 2])) page-block-space-top @endif">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell small-12 medium-6" @if (!empty($blockData->animate)) data-scrollreveal @endif>
                {!! $blockData->html_content_1 or '' !!}
            </div> <!-- /.cell -->

            <div class="cell small-12 medium-6" @if (!empty($blockData->animate)) data-scrollreveal @endif>
                {!! $blockData->html_content_2 or '' !!}
            </div> <!-- /.cell -->
        </div> <!-- /.grid -->
    </div> <!-- /.container -->
</div> <!-- /.page-block -->
<!-- /TWO COLUMN BLOCK -->