<?= $this->element('page2_nav');?>

<!-- <header class="main-header " id="showSlide" style="height: 100px; position:relative">
	
</header> -->
<nav class="main-nav overlay clearfix" style="height: 128px;background-color:white;z-index:8;">
       
</nav>
<!-- <header class="myPage2"> -->
</header>
<main class="content" role="main" id="content" style="position:relative; top:180px;">
<div class="wraps">
	<img src="/img/shadow.png" class="wrapshadow">
	<div class="grid">		
		<div class="grid-item">
			<?php $test = 'watch';?>		
			<article class="post tag-romance">
			<a href=<?= $this->Url->build(['controller'=>'shops',
										'action'=>'showProduct',
										$test])?>><img src="/img/watches/watchS4_1.jpg"></a>
			<div class="wrapgriditem">
				<header class="post-header">
				<h2 class="post-title"><a href=<?= $this->Url->build(['controller'=>'shops',
																	'action'=>'showProduct',
																	$test])?>>Apple Watch.</a></h2>
				</header>
				<section class="post-excerpt">
				<p>
					With the Always-On Retina display. <br>
					You've never seen a watch like this. 	
					 <a class="read-more" href="<?= $this->Url->build(['controller'=>'shops',
																	 'action'=>'showProduct',$test])?>">&raquo;</a>
				</p>
				</section>
			</div>
			</article>
		</div>
	</div>
</div>
</main>

<footer class="site-footer clearfix" style="bottom: -25px; position:fixed;">
    <!-- <a class="back-top icon-arrow-right" href="#top" id="back-to-top"></a> -->
    <a href="#top" id="back-to-top" class="back-top"></a>
    <div class="text-center">
        <a href="#"> Coppyright &copy; 2020 Ishop Inc.</a><br/>
         <a href="https://facebook.com/anh.20176690">Created by Quang Anh</a>
    </div>
</footer>