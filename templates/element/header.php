<header class="main-header " id="showSlide" style="background-image: url(/img/applewatch.jpg)">
	<div class="vertical">
		<div class="main-header-content inner">
			<h1 class="page-title">Make them yours</h1>
			<div class="entry-title-divider">
				<span></span><span></span><span></span>
			</div>
			<h2 class="page-description">Thoughts, reviews and ideas since 2020.</h2>
		</div>
	</div>
  <a class="scroll-down icon-arrow-left" href="#content">
    <span class="hidden">Scroll Down</span>
  </a>
  </header>
  
<script>
  var images = [
    "/img/applewatch.jpg",
    "/img/macbook.jpg",
    "/img/kawasaki.jpg"
  ]

  var imageHead = document.getElementById('showSlide');
  var i = 0;
  setInterval(function(){
    imageHead.style.backgroundImage =  "url("+ images[i] +")";
    i++;
    if( i==images.length) i = 0;
  }, 2000);
</script>