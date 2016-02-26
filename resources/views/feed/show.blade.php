<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style media="screen">
    @-webkit-keyframes $animation_name {
100% {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
}
@-moz-keyframes $animation_name {
100% {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
}
@keyframes $animation_name {
100% {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
}
@-webkit-keyframes $animation_name {
100% {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
}
@-moz-keyframes $animation_name {
100% {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
}
@keyframes $animation_name {
100% {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
}
/* apply a natural box layout model to all elements */
*, *:before, *:after {
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
}



.video {
width: 100%;
height: 35vw;
background: url({{$gif['fixed_height_small_still_url']}}) ;
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 background-size: cover;
position: relative;
}
.video video {
width: 100%;
height: 100%;
}
.playbutton {
display: block;
position: absolute;
top: 50%;
left: 50%;
width: 100px;
height: 100px;
margin-top: -50px;
margin-left: -50px;
text-indent: -9999;
color: transparent;
-moz-transition-property: all;
-o-transition-property: all;
-webkit-transition-property: all;
transition-property: all;
-moz-transition-duration: 600ms;
-o-transition-duration: 600ms;
-webkit-transition-duration: 600ms;
transition-duration: 600ms;
-moz-transition-timing-function: ease-out;
-o-transition-timing-function: ease-out;
-webkit-transition-timing-function: ease-out;
transition-timing-function: ease-out;
}
.playbutton:before {
content: '';
position: absolute;
top: 30px;
left: 40px;
display: block;
width: 0;
height: 0;
border-top: 20px solid transparent;
border-bottom: 20px solid transparent;
border-left: 30px solid #FFF;
-moz-transition-property: all;
-o-transition-property: all;
-webkit-transition-property: all;
transition-property: all;
-moz-transition-duration: 300ms;
-o-transition-duration: 300ms;
-webkit-transition-duration: 300ms;
transition-duration: 300ms;
-moz-transition-timing-function: ease-out;
-o-transition-timing-function: ease-out;
-webkit-transition-timing-function: ease-out;
transition-timing-function: ease-out;
}
.playbutton:after {
content: '';
opacity: 0;
position: absolute;
top: 30px;
left: 40px;
display: block;
width: 30px;
height: 40px;
border-left: 10px solid #FFF;
border-right: 10px solid #FFF;
-moz-transition-property: all;
-o-transition-property: all;
-webkit-transition-property: all;
transition-property: all;
-moz-transition-duration: 300ms;
-o-transition-duration: 300ms;
-webkit-transition-duration: 300ms;
transition-duration: 300ms;
-moz-transition-timing-function: ease-out;
-o-transition-timing-function: ease-out;
-webkit-transition-timing-function: ease-out;
transition-timing-function: ease-out;
-webkit-transform: translate3d(0, 0, 0);
}
.playbutton:hover:after {
opacity: 1;
width: 150px;
left: -25px;
}
.playbutton.loading:before {
opacity: 0;
}
.playbutton.loading:after {
opacity: 1;
width: 150px;
left: -25px;
border-radius: 3px;
-webkit-animation: spin 800ms linear infinite;
-moz-animation: spin 800ms linear infinite;
-ms-animation: spin 800ms linear infinite;
-o-animation: spin 800ms linear infinite;
animation: spin 800ms linear infinite;
}
.playbutton.playing {
top: 90%;
left: 90%;
}
.playbutton.playing:after {
-webkit-animation: endspin 600ms;
-moz-animation: endspin 600ms;
-ms-animation: endspin 600ms;
-o-animation: endspin 600ms;
animation: endspin 600ms;
-webkit-animation-iteration-count: 1;
-moz-animation-iteration-count: 1;
-ms-animation-iteration-count: 1;
-o-animation-iteration-count: 1;
animation-iteration-count: 1;
top: 30px;
left: 40px;
width: 30px;
opacity: 1;
opacity: .1;
}
.playbutton.playing:before {
opacity: 0;
}
.playbutton.playing:hover:after {
opacity: 1;
}
.playbutton.playing.paused:before {
opacity: 1;
}
.playbutton.playing.paused:after {
opacity: 0;
}

    </style>
  </head>
  <body>
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="container" style="width:65%">
  <div class="navbar-header">
    <a class="navbar-brand" href="#">Brand</a>
  </div>
   <ul class="nav navbar-nav navbar-right">

    <li><a href="#">More</a></li>
      <li><a href="#"><i class="icon-random"></i>Random</a></li>
  </ul>
</div>
</div>
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Portfolio Item
                    <small>Item Subheading</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">
            <div class="col-md-8">
              <div class="video">

                <a href="{{$gif['image_mp4_url']}}" class="playbutton">
                  Play Video</a>
              </div>
            </div>

            <div class="col-md-4">
                <h3>Project Description</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                <h3>Project Details</h3>
                <ul>
                    <li>Lorem Ipsum</li>
                    <li>Dolor Sit Amet</li>
                    <li>Consectetur</li>
                    <li>Adipiscing Elit</li>
                </ul>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Related Projects</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
  <script type="text/javascript">
  $(document).ready(function(){
// Showcase video of my latest project
var vimeoUrl = "{{$gif['image_mp4_url']}}";

var $video = $('<video>').attr('src', vimeoUrl);
var video = $video[0];

var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
var loaded = false;


$('.playbutton').on('click', function(e){
  e.preventDefault();

  var $button = $(this);
  var $holder = $(this).parent();
  var state = $button.hasClass('paused') ? 'paused' 	:
        $button.hasClass('playing') ? 'playing' :
        'loading';

  if( state == 'loading'){
    $holder.prepend($video);

    if( isMobile ){
      video.play();
      $button.addClass('playing');
      return;
    }

    $button.addClass('loading');

    if( loaded ){
      $button.addClass('playing');
      video.play();
    }

    video.load();

    $video.on('canplay', function(){
      loaded = true;
      $button.addClass('playing');
      $button.removeClass('loading');
      video.play();
    });

    $video.on('ended', function(){
      video.play();
    });

    return;
  }

  if( state === 'playing' ){
    video.pause();
    $button.addClass('paused');

    return;
  }

  if( state === 'paused' ){
    video.play();
    $button.removeClass('paused');

    return;
  }

})
})
  </script>
</html>
