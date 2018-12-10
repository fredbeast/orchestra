@extends('layouts.master')

@section('content')
    <div class="container-fluid py-3">

        <div class="row">
            <div class='col-12 o-paint'>
                <div class="o-yt-wrapper mx-auto d-block">
                    <div class="o-wall"></div>
                    <div class="o-yt-middle"></div>
                    <iframe id="oYtIframe" class="d-none d-sm-block " style="margin-left: -100px; margin-top: -90px"
                            width="515"
                            height="500"
                            src="https://www.youtube-nocookie.com/embed/UnJDbDOLBJc?enablejsapi=1&rel=0&controls=0&autoplay=1&loop=1​&playlist=UnJDbDOLBJc"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="o-yt-line mx-auto"></div>

                <a class="btn btn-primary" id="play-button">Play</a>
                <a class="btn btn-primary" id="pause-button">Pause</a>
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


        function onPlayerReady(event) {
            // bind events
            var playButton = document.getElementById("play-button");
            playButton.addEventListener("click", function () {
                console.log('hey');
                player.playVideo();
            });

            var pauseButton = document.getElementById("pause-button");
            pauseButton.addEventListener("click", function () {
                player.pauseVideo();
            });
            var pauseButton = document.getElementById("pause-button");
            pauseButton.addEventListener("click", function () {
                player.pauseVideo();
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

