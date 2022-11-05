<?php
	$page="index";
	$title="Home";
	require_once('header.php');
?>		
		<div class="container-fluid">
		  <div class="row slider">
			<div class="col-lg-14">			
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner" role="listbox">
					<div class="item active">
					  <img src="images/art1.jpg" width="1000" height="500" alt="Chania">
					</div>
					<div class="item">
					  <img src="images/art15.jpg" width="1200" height="1100" alt="Chania">
					</div>
					<div class="item">
					  <img src="images/art16.jpg" width="1100" height="1200" alt="Flower">
					</div>
				  </div>
				  
				  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		  </div>
		
		  <div class="row home_info">
			<div class="col-md-12 recent_product">
                <div class="panel panel-default">
				    <div class="panel-heading" align="center">Recent Products</div>
				        <div class="panel-body">
                            <div class="container recent_product_container">
                              <div class="row recent_img">
                                <div class="col-md-4"><img src="images/fire%20butterfly.jpg" class="img-thumbnail home_img" alt="Cinque Terre"></div>
                                <div class="col-md-4"><img src="images/acrylic%20painting.jpg" class="img-thumbnail home_img" alt="Cinque Terre"></div>
                                <div class="col-md-4"><img src="images/lisa%20art.jpg" class="img-thumbnail home_img" alt="Cinque Terre"></div>
                              </div>
                                <div class="row recent_img_desc">
                                    <div class="col-md-4">Fire Butterfly</div>
                                    <div class="col-md-4">Acrylic Painting</div>
                                    <div class="col-md-4">Lisa Art</div>
                                </div>
                                <div class="row recent_img_desc">
                                    <div class="col-md-4"><button type="button" class="btn-add-cart">Add Cart</button></div>
                                    <div class="col-md-4"><button type="button" class="btn-add-cart">Add Cart</button></div>
                                    <div class="col-md-4"><button type="button" class="btn-add-cart">Add Cart</button></div>
                                </div>
                            </div>
                        </div>
                </div>
			</div>
		  </div>
<?php

	require('footer.php');
?>	
