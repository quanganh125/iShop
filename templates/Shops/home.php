<?= $this->element('header'); ?>
<main class="content" role="main" id="content">
	<div class="grid">
		<?php foreach ($products as $key => $product) { ?>		
		<div class="grid-item">
			<article class="post tag-romance">
			<a href="article.html"><img src="/img/macbook.jpg"></a>
			<div class="wrapgriditem">
				<header class="post-header">
				<h2 class="post-title"><a href="article.html"><?= $product->title; ?></a></h2>
				</header>
				<section class="post-excerpt">
				<p>
					<?= $product->content; ?> <a class="read-more" href="article.html">&raquo;</a>
				</p>
				</section>
				<footer class="post-meta">
				<img class="author-thumb" src="/img/quanganh.jpg" alt="Quang Anh" nopin="nopin"/>
				Quang Anh on <a href="#">romance</a>
				<time class="post-date"><?= $product->updated_at->format("m/d/Y H:i"); ?></time>
				</footer>
			</div>
			</article>
		</div>
		<?php }?>
	</div>	
		
    <nav class="pagination" role="navigation">
        <span class="page-number">Page 1 of 2</span>
        <a class="older-posts" href="#">Older Posts &rarr;</a>
    </nav>
</main>