<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>iShop</title>
<meta name="description" content="Thoughts, reviews and ideas since 1999."/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<script src="https://kit.fontawesome.com/fb8dce20e7.js" crossorigin="anonymous"></script>
<link rel="shortcut icon" href="#">
<link rel="stylesheet" type="text/css" href="/css/screen.css"/>
<link rel="stylesheet" type="text/css" href="/css/product.css"/>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700,700italic|Playfair+Display:400,700,400italic,700italic"/>
</head>
<body class="author-template">
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
    <nav class="main-nav overlay clearfix" style="height: 128px;background-color:white;z-index:8;">     
    </nav>	

	<main class="content" role="main" id="content" style="margin-top:140px; margin-bot: 100px;border-top:none">
		
	</main>

	<footer class="site-footer clearfix" style="position: absolute;bottom: 0px">
		<a href="#top" id="back-to-top" class="back-top"></a>
		<div class="text-center">
			<a href="#"> Coppyright &copy; 2020 Ishop Inc.</a><br/>
			<a href="https://facebook.com/anh.20176690">Created by Quang Anh</a>
		</div>
</footer>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/js/masonry.min.js"></script>
<script type="text/javascript" src="/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="/js/index.js"></script>
</body>
</html>