<div class="site-wrapper">
    <nav class="main-nav overlay clearfix">
        <a class="blog-logo" href="#"><img src="/img/logo2.jpg" alt="I Shop Logo"/></a>
        <ul id="menu">
            <li class="nav-home nav-current" role="presentation">
                <a href=<?= $this->Url->build(['controller'=>'shops',
                                            'action'=>'home'])?>>Home</a></li>
            
            <li class="nav-article-example" role="presentation">
                <a href=<?= $this->Url->build(['controller'=>'shops',
                                            'action'=>'showProduct',
                                            'iphone'])?>>iPhone</a></li>
            
            <li class="nav-article-example" role="presentation">
                <a href=<?= $this->Url->build(['controller'=>'shops',
                                            'action'=>'showProduct',
                                            'macbook'])?>>Macbook</a></li>
           
           <li class="nav-article-example" role="presentation">
                <a href=<?= $this->Url->build(['controller'=>'shops',
                                            'action'=>'showProduct',
                                            'ipad'])?>>iPad</a></li>
            
            <li class="nav-article-example" role="presentation">
                <a href=<?= $this->Url->build(['controller'=>'shops',
                                            'action'=>'showProduct',
                                            'watch'])?>>Watch</a></li>
            
            <li class="nav-article-example" role="presentation">
                <a href=<?= $this->Url->build(['controller'=>'shops',
                                            'action'=>'showProduct',
                                            'airpod'])?>>AirPod</a></li>
            
            <li class="nav-article-example" role="presentation">
                <a href=<?= $this->Url->build(['controller'=>'shops',
                                            'action'=>'postProduct'])?>>Post-Product</a></li>
            <span class="socialheader">
            <a href="https://twitter.com/" target="_blank"><span class='symbol'><i class="fab fa-twitter" aria-hidden="true"></i></span></a>
            <a href="https://facebook.com/" target="_blank"><span class='symbol'><i class="fab fa-facebook" aria-hidden="true"></i></span></a>
            <a href="https://myaccount.google.com/" target="_blank"><span class='symbol'><i class="fab fa-google-plus" aria-hidden="true"></i></span></a>
            <a href="mailto:wowthemesnet@gmail.com"><span class='symbol'><i class="fas fa-envelope" aria-hidden="true"></i></span></a>
            </span>
        </ul>
    </nav>
    <nav class="main-nav overlay clearfix" style="height:64px;padding-top:64px;text-align:center;z-index:8;">  
        <form class="search-suggest" method="get" action="<?= $this->Url->build(['controller'=>'shops',
                                                                            'action'=>'find',
                                                                           $category])?>"> 
            <input class="search" type="text" placeholder="Search..." name="target">
            <i class="fas fa-times" id="clear-btn" ></i>
            <button type="submit"><i class="fas fa-search" id="search-btn"></i></button>
           
        </form>
       
        <div class="sort-box">
                <div class="dropdown">
                    <select name="two" class="dropdown-select" >
                    <option value="1" selected class="high-low">Price: High to Low</option>
                    <option value="2" class="low-high">Price: Low to High</option>
                    <option value="3" onload="<?= $this->Url->build(['controller'=>'shops',
																	'action'=>'sort',
																	$products,'name-az'])?>" class="name-az">Name (A-Z)</option>
                    <option value="4" onload="<?= $this->Url->build(['controller'=>'shops',
																	'action'=>'sort',
																	$products,'new-old'])?>" class="new-old">Newest Arrivals</option>
                    </select>
                </div>
        </div>
    </nav>	
</div>

<div class="main-content-and-footer"style="position:relative; padding-top:5%;height:-webkit-fill-available;">
	
	<main class="content" role="main" id="content" style="position:inherit; border-top:none;
														margin-top:none; margin-bottom:40px;
														padding-left:3%; padding-right:3%;">
		<div class="wraps">
			<img src="/img/shadow.png" class="wrapshadow" style="width: 105.8%">
			<div class="grid">	
                
            
				<?php foreach($products as $value){
					$product= $value->product_images[0]; ?>     
					<div class="grid-item" style="text-align: center;">		
						<article class="post tag-romance">
						<a href=<?= $this->Url->build(['controller'=>'shops',
													'action'=>'seeMore',
													$product->id])?>>
						<img src="<?= $product->image_link;?>" width="100%" height="275px"></a>
						<div class="wrapgriditem" style="border-top: 1px solid #EBF2F6">
							<header class="post-header">
							<h2 class="post-title"><a href=<?= $this->Url->build(['controller'=>'shops',
																				'action'=>'seeMore',
																				$product->id])?>> <?= $value->name;?></a></h2>
							</header>
							<section class="post-excerpt">
							<p><b><?= $value->cost." "; ?></b><p>
							</section>
							<a href=<?= $this->Url->build(['controller'=>'shops',
															'action'=>'seeMore',
															$product->id])?>><button class="see-more-btn">SEE MORE</button></a>
						</div>
						</article>
					</div>
				<?php } ?>
			</div>	
		</div>
		<nav class="pagination" role="navigation">
			<span class="page-number"><?= ucfirst($category);?></span>
		</nav>
	</main>

	<footer class="site-footer clearfix" style="position: inherit;bottom: 0px">
		<a href="#top" id="back-to-top" class="back-top"></a>
		<div class="text-center">
			<a href="#"> Coppyright &copy; 2020 Ishop Inc.</a><br/>
			<span><a href="https://facebook.com/anh.20176690">Created by Quang Anh</a><span>
		</div>
    </footer>
</div>

