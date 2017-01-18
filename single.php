<?php include'include/header.php';?>
<?php include 'top_header.php';?>

<div class="single">

<div class="container">
	 <?php
                  include 'include/config.php';

$id=$_GET['id'];
//$name=$_GET['p_name'];

                            $query = mysql_query("select * from products where id='$id'") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $id = $row['id'];
                                $name = $row['p_name'];
                                $price = $row['p_price'];
                                $description = $row['p_description'];
                                $image=$row['p_image'];
                                ?>
<div class="col-md-9">
	<div class="col-md-5 grid">		
		<div class="flexslider">
			  <ul class="slides">
			  	<?php
			  	$id=$_GET['id'];
			  	$qry=mysql_query("select p_image from products where id='$id'") or die(mysql_error());
			  	while ($row=mysql_fetch_array($qry)) {
						$image=$row['p_image'];
			  	?>
			    <li data-thumb="client/images/<?php echo $image;?>">
			        <div class="thumb-image"> <img src="client/images/<?php echo $image;?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    
			    <?php }?> 
			  </ul>
		</div>
	</div>	

<div class="col-md-7 single-top-in">
<form method="POST" action="user_cart.php"  enctype="multipart/form-data">	
	<input type="hidden" value="<?php echo $id;?>" name="p_id" >
	<input type="hidden" value="<?php echo $name;?>" name="p_name" >
	<input type="hidden" value="<?php echo $description;?>" name="p_description" >
	<input type="hidden" value="<?php echo $price;?>"  name="p_price">
	<input type="hidden" value="<?php echo $image;?>"  name="image">
						<div class="single-para">
							
							<h1><?php echo $name;?></h1>
							<p><?php echo $description;?></p>
							<div class="star-on">
								<ul>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
								</ul>
								<div class="review">
									<a href="#"> 3 reviews </a>/
									<a href="#">  Write a review</a>
								</div>
							<div class="clearfix"> </div>
							</div>
							
								<label  class="add-to item_price">Php<?php echo $price;?></label>				
							<div class="available">
								<h6>Available Options :</h6>
								Qty: <input type="number" name="qty" style="width:92px;" required="required">
						</div>

							
							<button type="submit" name="submit" class="btn btn-info" >
  							<i class="glyphicon glyphicon-shopping-cart">Add To Cart</i>
							</button>
					</div>
				</div>
	
			<div class="clearfix"> </div>
</form>
			<div class="content-top1">
				<div class="col-md-4 col-md3">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="client/images/pi6.png" alt="" />
						</a>
						<h3><a href="single.html">Jeans</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="col-md-4 col-md3">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="client/images/pi7.png" alt="" />
						</a>
						<h3><a href="single.html">Tops</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-4 col-md3">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="client/images/pi.png" alt="" />
						</a>
						<h3><a href="single.html">Tops</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			
			<div class="clearfix"> </div>
			</div>		
</div>
<?php }?>

<!----->
<div class="col-md-3 product-bottom">
			<!--categories-->
				<div class=" rsidebar span_1_of_left">
                        <h3 class="cate">Categories</h3>
                             <ul class="menu-drop">
                            <li class="item1"><a href="#">Books </a>
                                <ul class="cute">
                                    <li class="subitem1"><a href="single.html">Baby Books </a></li>
                                    <li class="subitem2"><a href="single.html">Educational books </a></li>
                                    <li class="subitem3"><a href="single.html">Story Books </a></li>
                                </ul>
                            </li>
                            <li class="item2"><a href="#">Pen </a>
                                <ul class="cute">
                                    <li class="subitem1"><a href="single.html">Stabilo </a></li>
                                    <li class="subitem2"><a href="single.html">Titus </a></li>
                                    <li class="subitem3"><a href="single.html">Pilot </a></li>
                                </ul>
                            </li>
                            <li class="item3"><a href="#">Bags</a>
                                <ul class="cute">
                                    <li class="subitem1"><a href="single.html">Jansport </a></li>
                                    <li class="subitem2"><a href="single.html">Heartstring </a></li>
                                    <li class="subitem3"><a href="single.html">Hawk</a></li>
                                </ul>
                            </li>
                            <li class="item3"><a href="#">Crayons</a>
                                <ul class="cute">
                                    <li class="subitem1"><a href="single.html">Crayola </a></li>
                                    <li class="subitem2"><a href="single.html">Faber Castell </a></li>
                                    <li class="subitem3"><a href="single.html">Oil Pastels</a></li>
                                </ul>
                            </li>
                            <li class="item3"><a href="#">Others</a>
                                <ul class="cute">
                                    <li><a href="products.html">Case</a></li>
                                    <li><a href="products.html">Folders</a></li>
                                    <li><a href="products.html"></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
				<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
<!--//menu-->
<!--seller-->
				

<!--//seller-->
<!--tag-->
				
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>
	<?php include'include/footer.php';?>

<!-- slide -->
<script src="client/js/jquery.min.js"></script>
<script src="client/js/imagezoom.js"></script>
<!-- start menu -->
<link href="client/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="client/js/memenu.js"></script>
<script src="client/js/simpleCart.min.js"> </script>
<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
						<!-- FlexSlider -->
  <script defer src="client/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="client/css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!---pop-up-box---->
					<link href="client/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="client/js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
					 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>	
