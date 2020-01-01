<head>
    <link href="https://vjs.zencdn.net/7.5.5/video-js.css" rel="stylesheet" />
  
    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    <style>
    
        #my-video{
            margin: 70px auto;
            
        }

        body{
            background: url('assets/img/himanura.jpeg') no-repeat;
            margin: 0 !important;
            background-position: center center;
            background-size: cover;
            opacity: 95%;

        }

    </style>
  </head>
  
  <body>
    <video
      id="my-video"
      class="video-js"
      controls
      preload="auto"
      width="720"
      height="480"
      autoplay
      poster="assets/himanura.jpeg"
      data-setup="{}"
    >
      <source src="{{ asset('\assets\himanura_festival.mp4') }}" type="video/mp4" />
      <p class="vjs-no-js">
        To view this video please enable JavaScript, and consider upgrading to a
        web browser that
        <a href="https://instagram.com" target="_blank"
          >supports HTML5 video</a
        >
      </p>
    </video>
  
    <script src="https://vjs.zencdn.net/7.5.5/video.js"></script>
  </body>