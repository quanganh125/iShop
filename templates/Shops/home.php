<?= $this->element('header'); ?>
<main class="content" role="main" id="content">
	<div class="grid">		
		<div class="grid-item">
			<article class="post tag-romance">
			<a href=<?= $this->Url->build(['controller'=>'shops','action'=>'postProduct'])?>><img src="/img/watches/watchS4_1.jpg"></a>
			<div class="wrapgriditem">
				<header class="post-header">
				<h2 class="post-title"><a href=<?= $this->Url->build(['controller'=>'shops','action'=>'postProduct'])?>>Apple Watch.</a></h2>
				</header>
				<section class="post-excerpt">
				<p>
					With the Always-On Retina display. <br>
					You've never seen a watch like this. 
					<a class="read-more" href=<?= $this->Url->build(['controller'=>'shops','action'=>'postProduct'])?>>&raquo;</a>
				</p>
				</section>
			</div>
			</article>
		</div>

		<div class="grid-item">
			<article class="post tag-romance">
			<a href=<?= $this->Url->build(['controller'=>'shops','action'=>'postProduct'])?>><img src="/img/macbooks/MB13_2020.jpg"></a>
			<div class="wrapgriditem">
				<header class="post-header">
				<h2 class="post-title"><a href=<?= $this->Url->build(['controller'=>'shops','action'=>'postProduct'])?>>Macbook Pro.</a></h2>
				</header>
				<section class="post-excerpt">
				<p>
				What's an Intel chip doing in a Mac?<br>
				A whole lot more than it's ever done in a PC. <a class="read-more" href=<?= $this->Url->build(['controller'=>'shops','action'=>'postProduct'])?>>&raquo;</a>
				</p>
				</section>
				<!-- <footer class="post-meta">
				<img class="author-thumb" src="/img/user_avatars/quanganh.jpg" alt="Quang Anh" nopin="nopin"/>
				Quang Anh on <a href="#">romance</a>
				<time class="post-date"></time>
				</footer> -->
			</div>
			</article>
		</div>

		<div class="grid-item">
			<article class="post tag-romance">
			<a href=<?= $this->Url->build(['controller'=>'shops','action'=>'postProduct'])?>><img src="/img/iphones/IPX_2.jpg"></a>
			<div class="wrapgriditem">
				<header class="post-header">
				<h2 class="post-title"><a href=<?= $this->Url->build(['controller'=>'shops','action'=>'postProduct'])?>>iPhone 11.</a></h2>
				</header>
				<section class="post-excerpt">
				<p>
					Lots to love. Less to spend. <br>
					Just the right amount of everything. <a class="read-more" href=<?= $this->Url->build(['controller'=>'shops','action'=>'postProduct'])?>>&raquo;</a>
				</p>
				</section>
			</div>
			</article>
		</div>

		<div class="grid-item">
			<article class="post tag-romance">
			<a href=<?= $this->Url->build(['controller'=>'shops','action'=>'postProduct'])?>><img src="/img/earpods/AP4.jpg"></a>
			<div class="wrapgriditem">
				<header class="post-header">
				<h2 class="post-title"><a href=<?= $this->Url->build(['controller'=>'shops','action'=>'postProduct'])?>>AirPod Pro</a></h2>
				</header>
				<section class="post-excerpt">
				<p>
				Effortless, all-day audio on the go. <br>
				AirPods Pro bring Active Noise Cancellation to an in-ear headphone — with a customizable fit.
				<a class="read-more" href=<?= $this->Url->build(['controller'=>'shops','action'=>'postProduct'])?>>&raquo;</a>
				</p>
				</section>
			</div>
			</article>
		</div>

		<div class="grid-item">
			<article class="post tag-romance">
			<a href=<?= $this->Url->build(['controller'=>'shops','action'=>'postProduct'])?>><img src="/img/ipads/ipad.png"></a>
			<div class="wrapgriditem">
				<header class="post-header">
				<h2 class="post-title"><a href=<?= $this->Url->build(['controller'=>'shops','action'=>'postProduct'])?>>iPad Pro.</a></h2>
				</header>
				<section class="post-excerpt">
				<p>
					Your next computer is not a computer.<br>
					It's a whole new world.
					<a class="read-more" href=<?= $this->Url->build(['controller'=>'shops','action'=>'postProduct'])?>>&raquo;</a>
				</p>
				</section>
			</div>
			</article>
		</div>

		<div class="grid-item">
			<article class="post tag-romance">
			<a href="#"><img src="/img/Apple-logo.jpg"></a>
			<div class="wrapgriditem">
				<header class="post-header">
				<h2 class="post-title"><a href=<?= $this->Url->build(['controller'=>'shops','action'=>'postProduct'])?>>iShop Introduction.</a></h2>
				</header>
				<footer class="post-meta">
				<img class="author-thumb" src="/img/user_avatars/quanganh.jpg" alt="Quang Anh" nopin="nopin"/>
				Quang Anh on <a href="#">romance</a>
				<time class="post-date" datetime="2020-08-21">21 August 2020</time>
				</footer>
			</div>
			</article>
		</div>
	</div>	
		
    <nav class="pagination" role="navigation">
        <span class="page-number">Page 1 of 2</span>
        <a class="older-posts" href="#">Post your product &rarr;</a>
    </nav>
</main>