@extends('layouts.master')

@section('content')
    <div class="container-fluid pt-3">
        <div class="row">
            <div class='col-12 text-center' id="o-paint">
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
        </div>
    </div>
    <div class="container bg-black home-block">
        <div class="row">
            <div class="col-12 offset-md-2 col-md-6 text-white">
                <div class="my-5 py-5">
                    <h2>welcome to orchestra. </h2>
                    <p class="mt-3">things we do...</p>
                    <a class="btn btn-outline-light btn-offerings mx-1 my-2" href="#" role="button">web development</a>
                    <a class="btn btn-outline-light btn-offerings mx-1 my-2" href="#" role="button">web design</a>
                    <a class="btn btn-outline-light btn-offerings mx-1 my-2" href="#" role="button">graphic design</a>
                    <a class="btn btn-outline-light btn-offerings mx-1 my-2" href="#" role="button">branding</a>
                    <a class="btn btn-outline-light btn-offerings mx-1 my-2" href="#" role="button">ground / aerial
                        photography</a>
                    <br>
                    <p class="mt-3">where to find us...</p>
                    <a class="btn btn-outline-light btn-offerings mx-1 my-2" href="#" role="button">edinburgh</a>
                    <a class="btn btn-outline-light btn-offerings mx-1 my-2" href="#" role="button">london</a>
                    <a class="btn btn-outline-light btn-offerings mx-1 my-2" href="#" role="button">online</a>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <img class="d-none d-md-block h-100" src="{{ asset('img/violin.jpg') }}">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mt-5 pt-5">work</h2>
                <p>have a browse...</p>
            </div>
        </div>
        @include('includes.work')
    </div>
    <div class="container bg-black home-block">
        <div class="row">
            <div class="col-12">
                <div class="my-5 py-5">
                    <img src="{{ asset('img/sign.png') }}" class="d-block m-auto">
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5 pb-5">
        <div class="row">
            <div class="col-12">
                <h2>blog</h2>
                <p>have a read...</p>
            </div>
        </div>
        @include('includes.blog')
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

