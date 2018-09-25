@extends('v-theme::layouts.default')
@section('meta_title', $post->title)
@section('meta_description', $post->meta_description)
@section('page_title', $post->title)

@section('content')
    @include('v-theme::partials.page-title')

    <div class="vspace-2"></div>

    <div class="grid-container">
        <div class="grid-x">
            <div class="cell medium-6">
                {!! $post->body !!}
            </div> <!-- /.cell -->

            <div class="cell medium-6">
                {!! $post->testimonial !!}
                <p>
                    {!! $post->testimonial_author !!}
                </p>
            </div> <!-- /.cell -->
        </div> <!-- /.grid -->
    </div> <!-- /.grid-container -->

    <div class="vspace-2"></div>
@endsection
