<nav class="main-nav overlay clearfix">
        <a class="blog-logo" href="index.html"><img src="/img/logo.png" alt="I Shop Logo"/></a>
        <ul id="menu">
            <li class="nav-home nav-current" role="presentation">
                <a href=<?= $this->Url->build(['controller'=>'shops','action'=>'home'])?>>Home</a></li>
            <li class="nav-article-example" role="presentation">
                <a href=<?= $this->Url->build(['controller'=>'shops','action'=>'postProduct'])?>>Post Product</a></li>
            
            <span class="socialheader">
            <a href="https://twitter.com/" target="_blank"><span class='symbol'><i class="fab fa-twitter" aria-hidden="true"></i></span></a>
            <a href="https://facebook.com/" target="_blank"><span class='symbol'><i class="fab fa-facebook" aria-hidden="true"></i></span></a>
            <a href="https://myaccount.google.com/" target="_blank"><span class='symbol'><i class="fab fa-google-plus" aria-hidden="true"></i></span></a>
            <a href="mailto:wowthemesnet@gmail.com"><span class='symbol'><i class="fas fa-envelope" aria-hidden="true"></i></span></a>
            </span>
        </ul>
</nav>