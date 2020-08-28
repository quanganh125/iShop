<main class="content" role="main" id="content" style="position:inherit; border-top:none;
													margin-top:none; margin-bottom:40px;
													padding-left:3%; padding-righrt:3%;">
		<?php foreach($target as $value){ ?>
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
																			'action'=>'showProduct',$test
																			])?>> <?= $value->name;?></a></h2>
						</header>
						<section class="post-excerpt">
						<p>
							<?= $value->cost." "; ?>VND. 	
							<a class="read-more" href="<?= $this->Url->build(['controller'=>'shops',
																			'action'=>'showProduct',
																			$test])?>">&raquo;</a>
						</p>
						</section>
					</div>
					</article>
				</div>
				<?php } ?>
			</div>	
		</div>
	</main>