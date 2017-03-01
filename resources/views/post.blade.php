@extends('main')

@section('header')
    <meta property="fb:app_id" content="395891594097766">
    <meta property="og:url" content="{{ url("/post/" . $blog->id) }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{  strip_tags($blog->title) }}" />
    <meta property="og:description" content="{{  str_limit( strip_tags($blog->post), $limit = 255, $end = '...') }}" />
@endsection

@section("blog-content")
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">{!! $blog->title !!}</div>
            <div class="panel-body">{!! $blog->post !!}</div>
            <div class="panel-footer text-right">Posted: {{$blog->created_at}}</div>
        </div>
    </div>
@endsection
