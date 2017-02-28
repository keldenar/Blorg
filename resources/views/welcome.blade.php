@extends('layouts.app')

@section('header')
    <meta property="fb:app_id" content="395891594097766">
    <meta property="og:url" content="{{ url("/") }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{  strip_tags($latest->title) }}" />
    <meta property="og:description" content="{{  str_limit( strip_tags($latest->post), $limit = 255, $end = '...') }}" />
@endsection

@section("content")
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-push-3">
                    <div class="col-md-12">
                        @if (Auth::check())
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Write something already.
                            </div>
                            <div class="panel-body">
                                <form method="post" action="{{url("new")}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{url("/markdown")}}" id="url">
                                    <div class="form-group">
                                        <input type="text" name="title" id="title" class="form-control" placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" about="Blog" cols="80" rows="10" name="blog" id="blog" placeholder="Blog"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="button button-default">Post</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="title-target">
                            </div>
                            <div class="panel-body" id="blog-target">
                            </div>
                        </div>
                        @endif
                    </div>
                    @foreach($blogs as $blog)
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">{!! $blog->title !!}</div>
                            <div class="panel-body">{!! $blog->post !!}</div>
                            <div class="panel-footer text-right">Posted: {{$blog->created_at}}</div>
                        </div>
                    </div>
                    @endforeach
                    {{ $blogs->links() }}
                </div>
                <div class="col-md-3 col-md-pull-6">
                    <h3>By: <a href="{{ url("about") }}">Bret Combast</a></h3>
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
