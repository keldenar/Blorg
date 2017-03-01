@extends('layouts.app')

@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-push-3">
                @yield("blog-content")
            </div>
            <div class="col-md-3 col-md-pull-6">
                <div class="outlined container-fluid">
                    <div>
                        <h3>By: <a href="{{ url("about") }}">Bret Combast</a></h3>
                    </div>
                    <div class="striped pad-bottom">
                        @foreach($full as $post)
                            <div>
                                <a href="{{url("/post/" . $post->id) }}">{{ date_format($post->created_at, "m/d/Y") }} - {{strip_tags($post->title)}}</a>
                            </div>
                        @endforeach
                    </div>
                    <div class="container-fluid pad-bottom">
                        <a class="col-md-12 btn btn-default" role="button" href="{{url("/") }}">Home</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3" id="ads">
                <script>
                    check_ads()
                </script>
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