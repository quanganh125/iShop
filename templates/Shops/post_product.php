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
                    <button type="submit" formaction="/users/logout" class="button" style="margin-left: 5px;">  
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
                    <th></th>
				</tr>
			</thead>
			<!-- <tbody> -->
				<?php foreach($product_of_login_user as $value){ ?>
					<tr class="column-content">
						<th><?=$value->id ?></th>
						<td><?=$value->name ?></td>
						<td><?=$value->category ?></td>
						<td width="438px"><textarea class="description" rows="4" readonly><?=$value->description ?></textarea></td>
						<td><?=$value->total ?></td>
						<td><?=$value->cost ?></td>
                        <td><?=$value->updated_at->format('d/m/Y') ?></td>
                        <td>
                            <form method="post" action="">  
                                <button type="submit" onclick='return confirm("Are you sure?");' formaction="/shops/delete_product/<?=$value->id?>" class="button">  
                                    <i class="fas fa-eraser" style="color:black"></i>
                                </button>                   
                            </form>
                        </td>
					</tr>
				<?php }?>
			<!-- </tbody> -->
		</table>
        
        <div class="add-product-div">
            <button class="add-product" onclick="$('#product-infor').slideToggle();"><i class="fas fa-plus-circle"></i> Add new product </button>
            <!-- <?= $this->Form->create(null, [
                "id" => "product-infor", 
                "action" => "post",
                "type" => "file" 
            ])?>             -->
            <form action="post" enctype="multipart/form-data" class="product-infor" id="product-infor" method="post" style="display:none">
                <input type="number" name="user_id" value=<?=$user_id?> hidden>
                <div class="new-name">
                    <label for="input">Product Name</label>
                    <input type="text" name="name" placeholder="Product Name" required>
                </div>
                <div class="new-category">
                    <label for="select">Product Catehory</label>
                    <select name="category" class="category" style="width:398px;">
                        <option value="macbook" name="macbook"> Macbook </option>
                        <option value="iphone" name="iphone"> Iphone </option>
                        <option value="ipad" name="ipad"> Ipad </option>
                        <option value="airpod" name="airpod"> Airpod </option>
                        <option value="watch" name="watch"> Apple Watch </option>
                    </select>
                </div> 
                <div class="new-description">
                    <label for="input">Product Description</label>
                    <textarea name="description" cols="40" rows="4"></textarea>
                </div>
                <div class="new-quatity">
                    <label for="input">Stock Quatity</label>
                    <input type="number" name="quatity" min="1" value="1" style="width:100px;" required>
                </div>
                <div class="new-cost" >
                    <label for="input">Main Price</label>
                    <input type="text" name="cost" placeholder="Ex:1000" style="width:100px;" required> $
                </div>
                <div class="new-image">
                    <label for="input">Product Image</label>
                    <input class="form-control" type="file" name="image" accept="image/*" onchange="loadFile(event)">
                    <img id="output" alt="" width="400px">

                    <script>
                        var loadFile = function(event) {
                            var image = document.getElementById('output');
                            image.src = URL.createObjectURL(event.target.files[0]);
                        };
                    </script>
                </div>
                <input type="submit" class="submit" value="Submit">
            </form>
            <!-- <?= $this->Form->end()?> -->
        </div>
	
    </div>
    <footer class="site-footer clearfix" style="position: inherit;bottom: 0px;margin-top:4%">
		<a href="#top" id="back-to-top" class="back-top"></a>
		<div class="text-center">
			<a href="#"> Coppyright &copy; 2020 Ishop Inc.</a><br/>
			<span><a href="https://facebook.com/anh.20176690">Created by Quang Anh</a><span>
		</div>
    </footer>
</main>
