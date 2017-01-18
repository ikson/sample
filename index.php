<?php include'include/header.php';?>
<?php include 'top_header.php';?>
<!--banner-->
<div class="banner">
    <div class="col-sm-2 banner-mat">
    </div>
    <div class="col-sm-8 matter-banner">
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <li>
                        <img src="client/images/1.png" alt="" >
                     </li>
                     <li>
                        <img src="client/images/2.png" alt="" >   
                     </li>
                     <li>
                        <img src="client/images/3.png" alt="" >
                    </li>   
                </ul>
            </div>
        </div>
    </div>
    <div class="col-sm-2 banner-mat">
    </div>
    <div class="clearfix"> </div>
</div>
<!--//banner-->

<div class="products">
        <div class="container">
           <div class="row">
            <div class="center wow fadeInDown">

                <h1>Product List</h1>
<br>
<br>
                    
            </div>
<?php
                  include 'include/config.php';
                            $query = mysql_query("SELECT * from products order by date_created limit 9 ") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $id = $row['id'];
                                $name = $row['p_name'];
                                $price = $row['p_price'];
                                $image=$row['p_image'];
                                $description=$row['p_description'];
                           $imageFile = 'client/images/'.$image.'';
$imageFile = 'client/images/'.$image.'';
$width = 220;
$info = getimagesize($imageFile);
$aspectRatio = $info[1] / $info[0];
if( $aspectRatio > 1) {
    $width = 220;
    $height = 180/$aspectRatio;
}
else {
    $width = 220*$aspectRatio;
    $height = 160;
}
$width .= "px";
$src = imagecreatefromstring(file_get_contents($imageFile));
$picture= "<img style=\"width: $width; height: $height;\" 
       src=\"$imageFile\" class=\"img-responsive\"/>";

                                ?>
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <input type="hidden" value="<?php echo $id;?>" name="id">
                         <div class="col-md1 simpleCart_shelfItem">
           
                          <?php echo $picture;?>
                         <h3><a href="single.html"><?php echo $name;?></a></h3>
                        <div class="price">
                                <h5 class="item_price"> Php. <?php echo number_format($price)?></h5>
                               <a  href="single.php?id=<?php echo $id;?>&p_name=<?php echo $name;?>" ><i class="glyphicon glyphicon-shopping-cart"> </i>Add to Cart </a>
                                <div class="clearfix"> </div>
                        </div>
                    </div>
                    </div>
                </div>    


                        <?php }?>


            </div><!--/.row-->
        </div><!--/.container-->
    </div><!--/#feature-->

<!--//content-->
	<!-- footer starts here -->
	<?php include'include/footer.php';?>