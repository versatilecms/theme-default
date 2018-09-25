@if ($posts)
    <div class="vspace-2"></div>

    <div class="grid-container">
        <div class="cell small-12">
            <div class="grid-x grid-padding-x">
                @foreach($posts as $post)
                    <div class="cell small-12 medium-6">
                        <div class="block-image-text">
                            <div class="block-image-text-img">
                                <a href="{{ route('versatile-frontend.portfolio.post', ['slug' => $post->slug]) }}">
                                    <img src="{{ Versatile::image( $post->image ) }}" style="width:100%">
                                </a>
                            </div> <!-- /.block-image-text-img -->

                            <div class="block-image-text-content">
                                <a href="{{ route('versatile-frontend.portfolio.post', ['slug' => $post->slug]) }}">
                                    <h4>{{ $post->title }}</h4>
                                </a>
                                @if ($post->excerpt)
                                    <p>{{ str_limit($post->excerpt, 50, '&hellip;') }}</p>
                                @endif
                            </div> <!-- /.block-image-text-content -->
                        </div> <!-- /.block-image-text -->
                    </div> <!-- /.cell -->
                @endforeach
            </div> <!-- /.grid -->
        </div> <!-- /.cell -->
    </div> <!-- /.grid-container -->

    <div class="vspace-1"></div>
@endif
