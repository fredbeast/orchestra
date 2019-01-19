@extends('layouts.master')

@section('page_info')
    <title>Home | Orchestra</title>
    <meta name="description" content="Award-winning design since 2018."/>
@endsection
@section('facebook_meta')
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="https://s3.eu-west-2.amazonaws.com/orchestra-portfolio/protected/orchestra.jpg">
    <meta property="og:url" content="https://orchestradesign.co/">
@endsection

@section('content')

    <div class="container-fluid" id="hero">
        <div class="row h-100">
            <div class='col-12 text-center my-auto' id="o-paint">
                <div id="o-yt-wrapper" class="mx-auto d-block">
                    <div id="o-yt-wall"></div>
                    <div id="o-yt-ring"></div>
                    <div id="o-yt-middle"></div>
                    <iframe id="oYtIframe" class="d-block d-sm-block " style="margin-left: -100px; margin-top: -90px"
                            width="515"
                            height="500"
                            src="https://www.youtube-nocookie.com/embed/UnJDbDOLBJc?enablejsapi=1&rel=0&controls=0&loop=1​&playlist=UnJDbDOLBJc"
                            frameborder="0"
                            allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div id="o-yt-line" class="mx-auto"></div>
                <i id="play-button" class="fa fa-play o-yt-controls m-1"></i>
                <i id="pause-button" class="fa fa-pause o-yt-controls m-1"></i>
                <i id="mute-button" class="fa fa-volume-mute o-yt-controls m-1"></i>


            </div>
            <div id="scrollDown" class="text-center scroll-wrapper ">
                <a href="#scrollDown">
                    <p>explore</p>
                    <i class="fa fa-arrow-down bounce"></i>
                </a>

            </div>

        </div>

    </div>

    <div id="welcomeBlock" class="container bg-black home-block ">
        <div class="row">
            <div class="col-12 offset-md-2 col-md-6 text-white">
                <div class="my-5 py-5">
                    <h2>welcome to orchestra. </h2>
                    <p class="mt-3">things we do...</p>
                    <a class="btn btn-outline-light btn-offerings mx-1 my-2" href="#work" role="button">web
                        development</a>
                    <a class="btn btn-outline-light btn-offerings mx-1 my-2" href="#work" role="button">web design</a>
                    <a class="btn btn-outline-light btn-offerings mx-1 my-2" href="#work" role="button">graphic
                        design</a>
                    <a class="btn btn-outline-light btn-offerings mx-1 my-2" href="#work" role="button">branding</a>
                    <a class="btn btn-outline-light btn-offerings mx-1 my-2" href="#work" role="button">ground / aerial
                        photography</a>
                    <br>
                    <p class="mt-3">where to find us...</p>
                    <a class="btn btn-outline-light btn-offerings mx-1 my-2" href="https://goo.gl/maps/YeAKvjrQpoG2"
                       target="_blank" role="button">edinburgh</a>
                    <a class="btn btn-outline-light btn-offerings mx-1 my-2"
                       href="https://itsalmo.st/orchestras-london-hq-launch" target="_blank" role="button">london</a>
                    <a class="btn btn-outline-light btn-offerings mx-1 my-2"
                       href="https://www.facebook.com/orchestrastudios/" target="_blank" role="button">online</a>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <img class="d-none d-md-block h-100" src="{{ asset('img/violin.png') }}">
            </div>
        </div>
    </div>

    <div class="container my-md-5" id="work">
        <div class="row">
            <div class="col-12">
                <h2 class="mt-sm-3 mt-md-5"><a href="{{ action('WorkController@index') }}">work</a></h2>
                <p>have a browse...</p>
            </div>
        </div>
        <div class="row">
            @foreach ($jobs as $job)
                <div onclick="location.href='{{ action('WorkController@show', $job -> id)  }}';"
                     class="col-8 offset-2 col-sm-6 offset-sm-0 col-md-3 offset-md-0 my-4 my-md-0">
                    <div class="card rounded shadow card-work" style="width: 100%">
                        <img class="card-img-top rounded work-img" src="{{$job->thumb_col}}" alt="Card image cap">
                        <img class="card-img-top rounded work-img-top" style="position: absolute; top:0; left:0"
                             src="{{ $job->thumb_pen }} " alt="Card image cap">
                        <a class="btn btn-outline-dark rounded btn-card-work" href="#" role="button">{{$job->tag}}</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row my-4">
            <div class="col-12">
                <h5><a href="{{ action('WorkController@index') }}" class="subtle-link text-muted">view all</a></h5>
            </div>
        </div>
    </div>

    <div class="container-fluid px-0 h-100 home-block ">
        <div class="row align-items-center">
            <div class="col-12 col-sm-5 col-md-4 offset-lg-2 bg-black text-white border-light rounded"
                 style="margin-right: -150px; z-index: 4;">
                <div class="my-5 p-5">
                    <h2>who are we?</h2>
                    <p>safe hands for high-end brands</p>
                    <a href="/about" class="btn btn-outline-light">meet the team</a>
                </div>
            </div>
            <div class="col-12 col-sm-7 col-md-5 d-none d-sm-block">
                <img src="{{ asset('img/about-finn.jpg') }}" class="rounded shadow-lg my-5 d-block w-100 mr-auto">
            </div>
        </div>
    </div>
    <div class="container my-5 pb-5">
        <div class="row">
            <div class="col-12">
                <h2 class="mt-sm-3 mt-md-5"><a href="{{ action('BlogController@index') }}">blog</a></h2>
                <p>have a read...</p>
            </div>
        </div>
        <div class="row my-5">
            @foreach ($posts as $post)
                @if ($loop->first)
                    <div class="col-12 col-md-8">

                        <div class="card rounded card-blog card-blog-lg shadow-lg">
                            <div class="row ">
                                <div class="col-12 col-sm-8 col-md-6">
                                    <div class="card-block p-3">
                                        <p class="card-subtitle"><b class="text-muted">LATEST POST</b></p>
                                        <a href="blog/{{ $post-> id }}"><h2 class="card-title">{{ $post->title }}</h2>
                                        </a>
                                        <p class="card-text">{{ $post->description }}</p>
                                        <h5><a href="blog/{{ $post-> id }}" class="subtle-link text-muted">read post</a></h5>
                                    </div>
                                </div>
                                <div class="d-none d-sm-block col-sm-4 col-md-6">
                                    <img src="{{ $post -> image }}" style="min-height:400px;"
                                         class="w-100 card-blog-lg-img d-none d-md-block">
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    @if($loop->iteration == 2)
                        <div class="col-12 col-md-4 ">
                            @endif
                            <div class="row">
                                <div class="col-12">
                                    <div class="card rounded card-blog card-blog-sm shadow-lg mt-2 bg-black text-white">
                                        <div class="row ">
                                            <div class="col-12">
                                                <div class="card-block p-3">
                                                    <p class="card-subtitle">{{ $post->subtitle }}</p>
                                                    <a href="blog/{{ $post-> id }}"><h2
                                                                class="card-title">{{ $post->title }}</h2></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($loop->last)
                        </div>
                    @endif
                @endif
            @endforeach
        </div>
        <div class="row my-4">
            <div class="col-12">
                <h5><a href="{{ action('BlogController@index') }}" class="subtle-link text-muted">view all</a></h5>
            </div>
        </div>
    </div>

    <script>
        var tag = document.createElement('script');
        tag.src = "//www.youtube.com/player_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;
        function fadeIn(element) {
            var op = 0.1;  // initial opacity
            var timer = setInterval(function () {
                if (op >= 1) {
                    clearInterval(timer);
                }
                element.style.opacity = op;
                op += 0.1;
            }, 40);
        }
        function fadeOut(element) {
            var op = 1;  // initial opacity
            var timer = setInterval(function () {
                if (op <= 0.1) {
                    clearInterval(timer);
                }
                element.style.opacity = op;
                op -= 0.1;
            }, 60);
        }

        function onPlayerReady(event) {
            // bind events
            var playButton = document.getElementById("play-button");
            playButton.addEventListener("click", function () {
                fadeOut(document.getElementById("o-yt-ring"));
                fadeOut(document.getElementById("o-yt-middle"));
                player.playVideo();
            });

            var pauseButton = document.getElementById("pause-button");
            pauseButton.addEventListener("click", function () {
                fadeIn(document.getElementById("o-yt-ring"));
                fadeIn(document.getElementById("o-yt-middle"));
                player.pauseVideo();
            });
            var muteButton = document.getElementById("mute-button");
            muteButton.addEventListener("click", function () {
                if (player.isMuted()) {
                    player.unMute();
                }
                else {
                    player.mute();
                }
            });
        }
        function onYouTubePlayerAPIReady() {
            // create the global player from the specific iframe (#video)
            player = new YT.Player('oYtIframe', {
                events: {
                    // call this function when player is ready to use
                    'onReady': onPlayerReady
                }
            });
        }


    </script>
@endsection

