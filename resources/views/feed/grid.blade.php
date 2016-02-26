<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Image Grid Effects | Demo 2 | Codrops</title>
	<meta name="description" content="Effect inspiration for opening an image grid item." />
	<meta name="keywords" content="image grid, effect, inspiration, css, javascript, animation, masonry" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="http://tympanus.net/Development/ImageGridEffects/fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
  <link href="{{ url('assets/css/style2.css') }}" rel="stylesheet">
  <link href="http://tympanus.net/Development/ImageGridEffects/css/normalize.css" rel="stylesheet">
  <link href="http://tympanus.net/Development/ImageGridEffects/css/demo.css" rel="stylesheet">
  <script src="http://tympanus.net/Development/ImageGridEffects/js/modernizr-custom.js"></script>

</head>

<body class="demo-2">
	<div class="container">
		<header class="codrops-header">
			<div class="codrops-links">
				<a class="codrops-icon codrops-icon--prev" href="http://tympanus.net/Tutorials/CSSProgress/" title="Previous Demo"><span>Previous Demo</span></a>
				<a class="codrops-icon codrops-icon--drop" href="http://tympanus.net/codrops/?p=25256" title="Back to the article"><span>Back to the Codrops article</span></a>
			</div>
			<h1>Image Grid Effects <span>Animations for photography grids</span></h1>
			<nav class="codrops-demos">
				<a href="index.html">Demo 1</a>
				<a class="current-demo" href="index2.html">Demo 2</a>
				<a href="index3.html">Demo 3</a>
				<a href="index4.html">Demo 4</a>
				<a href="index5.html">Demo 5</a>
				<a href="index6.html">Demo 6</a>
			</nav>
		</header>
		<div class="content">
			<div class="grid">
        @foreach($gif as $gif)
        <div class="grid__item" data-size="1280x857">
					<a href="{{$gif['url']}}" class="img-wrap"><img src="{{$gif['images']['fixed']['embed_url']}}" alt="img06" />
						<div class="description description--grid">

							<div class="details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
									<li><i class="icon icon-iso"></i><span>80</span></li>
								</ul>
							</div>
						</div>
					</a>
				</div>
				@endforeach
			</div>
			<!-- /grid -->
			<div class="preview">
				<button class="action action--close"><i class="fa fa-times"></i><span class="text-hidden">Close</span></button>
				<div class="description description--preview"></div>
			</div>
			<!-- /preview -->
		</div>
		<!-- /content -->
		<!-- Related demos -->
		<section class="content content--related">
			<p>Quotes from <a href="http://www.pledgevegan.com/vegan-spotlight/top-100-vegan-quotes">Pledge Vegan</a></p>
			<p>Images from <a href="http://www.unsplash.com">Unsplash.com</a></p>
			<p>If you enjoyed this demo you might also like:</p>
			<a class="media-item" href="http://tympanus.net/Development/AnimatedGridLayout/">
				<img class="media-item__img" src="img/related/GridItemAnimation.jpg">
				<h3 class="media-item__title">Grid Item Animation Layout</h3>
			</a>
			<a class="media-item" href="http://tympanus.net/Tutorials/ShapeHoverEffectSVG/">
				<img class="media-item__img" src="img/related/ShapeHoverEffect.png">
				<h3 class="media-item__title">Shape Hover Effect with SVG</h3>
			</a>
		</section>
	</div>
	<!-- /container -->
	<script src="{{url('assets/js/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{url('assets/js/masonry.pkgd.min.js')}}"></script>
	<script src="{{url('assets/js/classie.js')}}"></script>
	<script src="{{url('assets/js/main.js')}}"></script>
	<script>
		(function() {
			var support = { transitions: Modernizr.csstransitions },
				// transition end event name
				transEndEventNames = { 'WebkitTransition': 'webkitTransitionEnd', 'MozTransition': 'transitionend', 'OTransition': 'oTransitionEnd', 'msTransition': 'MSTransitionEnd', 'transition': 'transitionend' },
				transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
				onEndTransition = function( el, callback ) {
					var onEndCallbackFn = function( ev ) {
						if( support.transitions ) {
							if( ev.target != this ) return;
							this.removeEventListener( transEndEventName, onEndCallbackFn );
						}
						if( callback && typeof callback === 'function' ) { callback.call(this); }
					};
					if( support.transitions ) {
						el.addEventListener( transEndEventName, onEndCallbackFn );
					}
					else {
						onEndCallbackFn();
					}
				};

			new GridFx(document.querySelector('.grid'), {
				imgPosition : {
					x : -0.5,
					y : 1
				},
				onOpenItem : function(instance, item) {
					instance.items.forEach(function(el) {
						if(item != el) {
							var delay = Math.floor(Math.random() * 50);
							el.style.WebkitTransition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), -webkit-transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
							el.style.transition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
							el.style.WebkitTransform = 'scale3d(0.1,0.1,1)';
							el.style.transform = 'scale3d(0.1,0.1,1)';
							el.style.opacity = 0;
						}
					});
				},
				onCloseItem : function(instance, item) {
					instance.items.forEach(function(el) {
						if(item != el) {
							el.style.WebkitTransition = 'opacity .4s, -webkit-transform .4s';
							el.style.transition = 'opacity .4s, transform .4s';
							el.style.WebkitTransform = 'scale3d(1,1,1)';
							el.style.transform = 'scale3d(1,1,1)';
							el.style.opacity = 1;

							onEndTransition(el, function() {
								el.style.transition = 'none';
								el.style.WebkitTransform = 'none';
							});
						}
					});
				}
			});
		})();
	</script>
</body>

</html>
