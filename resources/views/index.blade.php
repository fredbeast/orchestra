@extends('layouts.master')

@section('content')
    <div class="container-fluid py-3">

        <div class="row">
            <div class='col-12 o-paint text-center'>
                <div class="o-yt-wrapper mx-auto d-block">
                    <div class="o-wall"></div>
                    <div id="o-ring"></div>
                    <div class="o-yt-middle"></div>
                    <iframe id="oYtIframe" class="d-block d-sm-block " style="margin-left: -100px; margin-top: -90px"
                            width="515"
                            height="500"
                            src="https://www.youtube-nocookie.com/embed/UnJDbDOLBJc?enablejsapi=1&rel=0&controls=0&loop=1​&playlist=UnJDbDOLBJc"
                            frameborder="0"
                            allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="o-yt-line mx-auto"></div>
                <i id="play-button" class="fa fa-play o-yt-controls"></i>
                <i id="pause-button" class="fa fa-pause o-yt-controls"></i>
                <i id="mute-button" class="fa fa-volume-mute o-yt-controls"></i>

            </div>
        </div>
    </div>
    <div class="container-fluid bg-black">

        <div class="row">
            <div class="col-12 offset-md-2 col-md-6 text-white">
                <h2 class="mt-5 pt-5">welcome to orchestra. </h2>
                <p>things we do...</p>
                <a class="btn btn-outline-light btn-offerings m-1 py-2 px-4" href="#" role="button">web development</a>
                <a class="btn btn-outline-light btn-offerings m-1 py-2 px-4" href="#" role="button">web design</a>
                <a class="btn btn-outline-light btn-offerings m-1 py-2 px-4" href="#" role="button">photography</a>
                <a class="btn btn-outline-light btn-offerings m-1 py-2 px-4" href="#" role="button">graphic design</a>


            </div>
            <div class="col-12 col-md-4">
                <img class="d-none d-md-block h-100" src="{{ asset('img/violin.jpg') }}">
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
                if (op >= 1){
                    clearInterval(timer);
                }
                element.style.opacity = op;
                op += 0.1;
            }, 10);
        }
        function fadeOut(element) {
            var op = 1;  // initial opacity
            var timer = setInterval(function () {
                if (op <= 0.1){
                    clearInterval(timer);
                }
                element.style.opacity = op;
                op -= 0.1;
            }, 50);
        }

        function onPlayerReady(event) {
            // bind events
            var playButton = document.getElementById("play-button");
            playButton.addEventListener("click", function () {
                fadeOut(document.getElementById("o-ring"));
                player.playVideo();
            });

            var pauseButton = document.getElementById("pause-button");
            pauseButton.addEventListener("click", function () {
                player.pauseVideo();
                fadeIn(document.getElementById("o-ring"));
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

