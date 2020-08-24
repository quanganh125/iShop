<header class="main-header " id="showSlide" style="background-image: url(/img/ipads/ipad.png)">
	<div class="vertical">
		<div class="main-header-content inner">
			<h1 class="page-title">Make them yours</h1>
			<div class="entry-title-divider">
				<span></span><span></span><span></span>
			</div>
			<h2 class="page-description">Thoughts, reviews and ideas since 2020.</h2>
		</div>
	</div>
  <a class="scroll-down icon-arrow-left" href="#content" hidden></a>
</header>
  
<script>
  var images = [
    "/img/watches/applewatch.jpg",
    "/img/macbooks/macbook.jpg",
    "/img/earpods/airpod.jpg",
    "/img/iphones/iphone.png",
    "/img/ipads/ipad.png"
  ]

  var imageHead = document.getElementById('showSlide');
  var i = 0;
  setInterval(function(){
    imageHead.style.backgroundImage =  "url("+ images[i] +")";
    i++;
    if( i==images.length) i = 0;
  }, 2000);
</script>