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
        @if (Auth::check())
            <div class="panel panel-default">
                <div class="panel-heading">
                    Write something already.
                </div>
                <div class="panel-body">
                    <form method="post" action="{{url("/update")}}">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{url("/markdown")}}" id="url">
                        <input type="hidden" name="id" value="{{$blog->id}}">
                        <div class="form-group">
                            <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{ $blog->getOriginal("title") }}">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" about="Blog" cols="80" rows="10" name="blog" id="blog" placeholder="Blog">{{$blog->getOriginal("post")}}</textarea>
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
@endsection
