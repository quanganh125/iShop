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
                <form method="post" action="">  
                    <button type="submit" formaction="/users/logout" class="logout" style="margin-left: 5px;">  
                    <!-- <label for="Logout"> -->
                        <i class="fas fa-sign-out-alt"></i>
                    <!-- </label> -->
                    </button>
                </form>
            </span>
        </ul>
</nav>


<main class="product-content">
    <div class="shop-image">
        <img src="/img/post.JPG">
    </div>
	<h2 class="header">Your Products</h2>
	<div class="wrap-content">
		<table class="table">
			<thead class="dark">
				<tr class="column-name">
					<th>#</th>
					<th>Name</th>
					<th>Category</th>
					<th>Description</th>
					<th>Quatity</th>
					<th>Cost</th>
					<th>Updated_at</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($product_of_login_user as $value){ ?>
					<tr class="column-content">
						<th><?=$value->id ?></th>
						<td><?=$value->name ?></td>
						<td><?=$value->category ?></td>
						<td class="description" ><?=$value->description ?></td>
						<td><?=$value->total ?></td>
						<td><?=$value->cost ?></td>
						<td><?=$value->updated_at->format('d/m/Y') ?></td>
					</tr>
				<?php }?>
			</tbody>
		</table>

		
    </div>
    <footer class="site-footer clearfix" style="position: inherit;bottom: 0px;margin-top:4%">
		<a href="#top" id="back-to-top" class="back-top"></a>
		<div class="text-center">
			<a href="#"> Coppyright &copy; 2020 Ishop Inc.</a><br/>
			<span><a href="https://facebook.com/anh.20176690">Created by Quang Anh</a><span>
		</div>
    </footer>
</main>
