<header class="codrops-header">
	<div class="codrops-links">
		<!-- <a class="codrops-icon codrops-icon--prev" href="http://tympanus.net/Development/RainEffect/" title="Previous Demo"><span>Previous Demo</span></a>
		<a class="codrops-icon codrops-icon--drop" href="http://tympanus.net/codrops/?p=25440" title="Back to the article"><span>Back to the Codrops article</span></a> -->
	</div>
	<h1>2ez.bet <!-- <span>based on <a href="https://dribbble.com/shots/2275597-Spaces-interaction-prototype">Spaces</a> by <a href="https://dribbble.com/bmechairia">Bilal</a></span> --></h1>
</header>
<link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/component.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/animations.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('fonts/icomoon/icomoon.css')}}" />
<script src="{{asset('js/modernizr-custom.js')}}"></script>

<p class="info info--size">View on a larger screen to see the 3D display</p>
<p class="info info--support">Your browser does not support preserve-3d!</p>
<div id="slideshow" class="slideshow">
	<div class="slide">
		<div class="scene">
			<div class="views">
				<div class="view view--rotate view--rotate-left">
					<img class="view__img" src="{{asset('images/A/rad.png')}}" alt="radiant" />
					<div class="item item--jug">
						<img class="item__img" src="{{asset('images/A/jug.png')}}" alt="jug" data-transform-z="90" />
						<div class="item__info">
							<h3 class="item__title">Juggernaut</h3>
							<div class="item__price"><sup>$</sup>129</div>
							<button class="button button--buy"><i class="icon icon--shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
						</div>
						<button class="button button--close"><i class="icon icon--close"></i><span class="text-hidden">Close</span></button>
					</div>
					<div class="item item--axe">
						<img class="item__img" src="{{asset('images/A/axe.png')}}" alt="axe" data-transform-z="80" />
						<div class="item__info">
							<h3 class="item__title">Axe</h3>
							<div class="item__price"><sup>$</sup>39</div>
							<button class="button button--buy"><i class="icon icon--shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
						</div>
						<button class="button button--close"><i class="icon icon--close"></i><span class="text-hidden">Close</span></button>
					</div>
					<div class="item item--ward">
						<img class="item__img" src="{{asset('images/A/ward.png')}}" alt="ward" data-transform-z="60" />
						<div class="item__info">
							<h3 class="item__title">Juggernaut Ward</h3>
							<div class="item__price"><sup>$</sup>59</div>
							<button class="button button--buy"><i class="icon icon--shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
						</div>
						<button class="button button--close"><i class="icon icon--close"></i><span class="text-hidden">Close</span></button>
					</div>
					<!-- <div class="item item--obs">
						<img class="item__img" src="{{asset('images/A/obs.png')}}" alt="obs" data-transform-z="60" />
						<div class="item__info">
							<h3 class="item__title">Observer</h3>
							<div class="item__price"><sup>$</sup>59</div>
							<button class="button button--buy"><i class="icon icon--shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
						</div>
						<button class="button button--close"><i class="icon icon--close"></i><span class="text-hidden">Close</span></button>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<div class="slide">
		<div class="scene">
			<div class="views">
				<div class="view view--rotate view--rotate-right">
					<img class="view__img" src="{{asset('images/B/dire.png')}}" alt="Front" />
					<div class="item item--pillow">
						<img class="item__img" src="{{asset('images/living/pillow.jpg')}}" alt="Vase" data-transform-z="60" />
						<div class="item__info">
							<h3 class="item__title">Deco Pillow</h3>
							<div class="item__price"><sup>$</sup>29</div>
							<button class="button button--buy"><i class="icon icon--shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
						</div>
						<button class="button button--close"><i class="icon icon--close"></i><span class="text-hidden">Close</span></button>
					</div>
					<div class="item item--lamp">
						<img class="item__img" src="{{asset('images/living/lamp.jpg')}}" alt="Lamp" data-transform-z="60" />
						<div class="item__info">
							<h3 class="item__title">Swedish Lamp</h3>
							<div class="item__price"><sup>$</sup>89</div>
							<button class="button button--buy"><i class="icon icon--shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
						</div>
						<button class="button button--close"><i class="icon icon--close"></i><span class="text-hidden">Close</span></button>
					</div>
					<div class="item item--silvervase">
						<img class="item__img" src="{{asset('images/living/silvervase.jpg')}}" alt="Silver Vase" data-transform-z="60" />
						<div class="item__info">
							<h3 class="item__title">Silver Vase</h3>
							<div class="item__price"><sup>$</sup>49</div>
							<button class="button button--buy"><i class="icon icon--shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
						</div>
						<button class="button button--close"><i class="icon icon--close"></i><span class="text-hidden">Close</span></button>
					</div>
				</div>
				<!-- <div class="view">
					<img class="view__img" src="{{asset('images/living/b.jpg')}}" alt="Side" />
				</div> -->
			</div>
		</div>
	</div>
	<div class="slide">
		<div class="scene">
			<div class="views">
				<div class="view">
					<img class="view__img" src="{{asset('images/kitchen/a.jpg')}}" alt="Side" />
					<div class="item item--shakers">
						<img class="item__img" src="{{asset('images/kitchen/shakers.jpg')}}" alt="Shakers" data-transform-z="80" />
						<div class="item__info">
							<h3 class="item__title">Shaker Set</h3>
							<div class="item__price"><sup>$</sup>59</div>
							<button class="button button--buy"><i class="icon icon--shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
						</div>
						<button class="button button--close"><i class="icon icon--close"></i><span class="text-hidden">Close</span></button>
					</div>
					<div class="item item--coffeemachine">
						<img class="item__img" src="{{asset('images/kitchen/coffeemachine.jpg')}}" alt="Coffee Machine" data-transform-z="60" />
						<div class="item__info">
							<h3 class="item__title">Coffee Machine</h3>
							<div class="item__price"><sup>$</sup>149</div>
							<button class="button button--buy"><i class="icon icon--shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
						</div>
						<button class="button button--close"><i class="icon icon--close"></i><span class="text-hidden">Close</span></button>
					</div>
				</div>
				<div class="view view--rotate view--rotate-left">
					<img class="view__img" src="{{asset('images/kitchen/b.jpg')}}" alt="Front" />
					<div class="item item--bowls">
						<img class="item__img" src="{{asset('images/kitchen/bowlset.jpg')}}" alt="Bowl Set" data-transform-z="40" />
						<div class="item__info">
							<h3 class="item__title">Bowl Set</h3>
							<div class="item__price"><sup>$</sup>49</div>
							<button class="button button--buy"><i class="icon icon--shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
						</div>
						<button class="button button--close"><i class="icon icon--close"></i><span class="text-hidden">Close</span></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="slide">
		<div class="scene">
			<div class="views">
				<div class="view">
					<img class="view__img" src="{{asset('images/bathroom/a.jpg')}}" alt="Side" />
				</div>
				<div class="view">
					<img class="view__img" src="{{asset('images/bathroom/b.jpg')}}" alt="Front" />
					<div class="item item--sink">
						<img class="item__img" src="{{asset('images/bathroom/sink.jpg')}}" alt="Sink" data-transform-z="40" />
						<div class="item__info">
							<h3 class="item__title">Grohe Sink</h3>
							<div class="item__price"><sup>$</sup>399</div>
							<button class="button button--buy"><i class="icon icon--shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
						</div>
						<button class="button button--close"><i class="icon icon--close"></i><span class="text-hidden">Close</span></button>
					</div>
					<div class="item item--pillows">
						<img class="item__img" src="{{asset('images/bathroom/pillows.jpg')}}" alt="Pillows" data-transform-z="70" />
						<div class="item__info">
							<h3 class="item__title">Pillow Set</h3>
							<div class="item__price"><sup>$</sup>69</div>
							<button class="button button--buy"><i class="icon icon--shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
						</div>
						<button class="button button--close"><i class="icon icon--close"></i><span class="text-hidden">Close</span></button>
					</div>
				</div>
				<div class="view view--rotate view--rotate-left">
					<img class="view__img" src="{{asset('images/bathroom/c.jpg')}}" alt="Front" />
					<div class="item item--bidet">
						<img class="item__img" src="{{asset('images/bathroom/bidet.jpg')}}" alt="Bidet" data-transform-z="90" />
						<div class="item__info">
							<h3 class="item__title">Grohe Bidet</h3>
							<div class="item__price"><sup>$</sup>259</div>
							<button class="button button--buy"><i class="icon icon--shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
						</div>
						<button class="button button--close"><i class="icon icon--close"></i><span class="text-hidden">Close</span></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="nav">
		<a href="#" class="nav__item"><span class="text-hidden">The Master Bedroom</span></a>
		<a href="#" class="nav__item"><span class="text-hidden">The Dining Room</span></a>
		<a href="#" class="nav__item"><span class="text-hidden">The Bathroom</span></a>
		<a href="#" class="nav__item"><span class="text-hidden">The Office</span></a>
	</nav>
	<div class="titles">
		<h2 class="title">Radiant <span class="title__sub">Axe and Jug</span></h2>
		<h2 class="title">The Living Room <span class="title__sub">Socialize</span></h2>
		<h2 class="title">The Kitchen <span class="title__sub">Create</span></h2>
		<h2 class="title">The Bathroom <span class="title__sub">Refresh</span></h2>
	</div>
</div><!-- /container -->
<script src="{{asset('js/classie.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script>
(function() {
	var slideshow = new Slideshow(document.getElementById('slideshow'));
})();
</script>