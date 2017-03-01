@extends('layouts.app')

@section('header')
    <meta property="fb:app_id" content="395891594097766">
    <meta property="og:url" content="{{ url("/post/" . $blog->id) }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{  strip_tags($blog->title) }}" />
    <meta property="og:description" content="{{  str_limit( strip_tags($blog->post), $limit = 255, $end = '...') }}" />
@endsection

@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-push-3">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">{!! $blog->title !!}</div>
                        <div class="panel-body">{!! $blog->post !!}</div>
                        <div class="panel-footer text-right">Posted: {{$blog->created_at}}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-md-pull-6">
                <div>
                    <h3>By: <a href="{{ url("about") }}">Bret Combast</a></h3>
                </div>
                <div class="striped">
                    @foreach($full as $post)
                        <div>
                            <a href="{{url("/post/" . $post->id) }}">{{ date_format($post->created_at, "m/d/Y") }} - {{strip_tags($post->title)}}</a>
                        </div>
                    @endforeach
                </div>
                <div><a href="{{ url('/') }}">Home</a></div>
            </div>
            <div class="col-md-3">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- bret.combast.me.2 -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:300px;height:600px"
                     data-ad-client="ca-pub-6849314491293990"
                     data-ad-slot="8190422788"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
    </div>
@endsection
