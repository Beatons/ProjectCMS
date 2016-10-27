<?php

$product = mysqli_fetch_array($productAdmin);

echo '
	<div class="item thumbnail container">
		<div class="row">
			<div class="col-md-6">
				<div class="itemImageFrame">
					<img class="itemPictureBig thumbnail" src="' . $product['images'] . '">
					<br>
					<input class="input-group" type="file" name="user_image" accept="image/*" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="itemInformation pull-right">
	
<div class="panel panel-default">
  <!-- Default panel contents -->
  	<div class="panel-heading"><h3><strong><input name="product_name" placeholder="Product Name" id="product_input" type="text" value=" ' . $product['name'] . '"</strong></h3><br/>
  	</div>
  		<div class="panel-body">
  			<h4>Price: in DKK<strong><input name="product_price" id="product_input" type="text" value=" ' . $product['price'] . '" ></strong></h4><br/>
				
		</div>
  <!-- List group -->
  				<ul class="list-group">
  	<li class="list-group-item">Product_ID<strong><input name="Product_ID" id="product_input" type="text" value=" ' . $product['Product_ID'] . '"></strong></li>			
  	<li class="list-group-item">Description:<strong><input name="product_description" id="product_input" type="text" value=" ' . $product['description'] . '"></strong></li>			
    <li class="list-group-item">Manufacturer:<strong><input name="product_manufacturer" id="product_input" type="text" value=" ' . $product['manufacture'] . '"></strong></li>
    <li class="list-group-item">Color:<strong><input name="product_color" id="product_input" type="text" value=" ' . $product['color'] . '"></strong></li>
    <li class="list-group-item">Size:<strong><input name="product_size" id="product_input" type="text" value=" ' . $product['size'] . '"></strong></li>
    <li class="list-group-item">Delivery time:<strong><input name="product_category" id="product_input" type="text" value=" ' . $product['category'] . ' "></strong></li>
    <li class="list-group-item">On stock:<strong><input name="product_stock" id="product_input" type="text" value=" ' . $product['stock'] . ' "></strong></li>
   
  				</ul>
  				
		</div>
	<a href="admin.php?page=products"><button type="button" class="pull-left btn-lg btn btn-default">Back <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></button></a>
	<form method="post">
	<button type="button" name="btn_save_updates"  class="pull-left btn-lg btn btn-primary">Update <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button>
	</form>
    <button title="Click to Delete" onclick="return confirm(\'Are you sure you want to delete it?\')" type="button" class="pull-left btn-lg btn btn-danger">Delete <span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span></button><br/>
  </div>
  </div>
	
				</div>
			</div>
		</div>
    </div>';

?>
