<?php 
    foreach($product as $value){
?>
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
</nav>

<main class="product-content">
	<div class="wrap-content">
        <img src="<?= $value->product_images[0]->image_link; ?>" alt="">
        <section>
            <div class="product-name"> <?= $value->name?></div>
            <div class="product-description">
                <?= $value->description;?>
            </div>
            <div class="product-action">action here</div>
        </section>
    </div>
    <footer class="site-footer clearfix" style="position: inherit;bottom: 0px;margin-top:4%">
		<a href="#top" id="back-to-top" class="back-top"></a>
		<div class="text-center">
			<a href="#"> Coppyright &copy; 2020 Ishop Inc.</a><br/>
			<span><a href="https://facebook.com/anh.20176690">Created by Quang Anh</a><span>
		</div>
    </footer>
</main>

<?php }?>