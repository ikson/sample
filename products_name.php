                    <?php include'include/header.php';?>
<?php include 'top_header.php';?>

<div class="products">
    <div class="container">
        <h1>Products</h1>
        <div class="col-md-9">
            <div class="content-top1">
                 <?php
                  include 'include/config.php';

                  $p_name_brand=$_GET['name'];
                            $query = mysql_query("select * from products where p_brand='$p_name_brand' order by id ") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $id = $row['id'];
                                $name = $row['p_name'];
                                $price = $row['p_price'];
                                $image=$row['p_image'];

$imageFile = 'client/images/'.$image.'';
$width = 220;
$info = getimagesize($imageFile);
$aspectRatio = $info[1] / $info[0];
if( $aspectRatio > 1) {
    $width = 220;
    $height = 160/$aspectRatio;
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
                <div class="col-md-4 col-md3">
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
            
              <?php }?>
            <div class="clearfix"> </div>
            </div>  
            
        </div>

<div class="col-md-3 product-bottom">
            <!--categories-->
                <div class=" rsidebar span_1_of_left">
                        <h3 class="cate">Categories</h3>
                             <ul class="menu-drop">
                            <li class="item1"><a href="#">Books </a>
                                <ul class="cute">
                                   <li class="subitem1"><a href="products_name.php?name=baby">Baby Books </a></li>
                                    <li class="subitem2"><a href="products_name.php?name=educational">Educational books </a></li>
                                    <li class="subitem3"><a href="products_name.php?name=story">Story Books </a></li>
                                </ul>
                            </li>
                            <li class="item2"><a href="#">Pen </a>
                                <ul class="cute">
                                     <li class="subitem1"><a href="products_name.php?name=stabilo">Stabilo </a></li>
                                    <li class="subitem2"><a href="products_name.php?name=titus">Titus </a></li>
                                    <li class="subitem3"><a href="products_name.php?name=pilot">Pilot </a></li>
                                </ul>
                            </li>
                            <li class="item3"><a href="#">Bags</a>
                                <ul class="cute">
                                   <li class="subitem1"><a href="products_name.php?name=janspot">Jansport </a></li>
                                    <li class="subitem2"><a href="products_name.php?name=heartstring">Heartstring </a></li>
                                    <li class="subitem3"><a href="products_name.php?name=hawk">Hawk</a></li>
                                </ul>
                            </li>
                            <li class="item3"><a href="#">Crayons</a>
                                <ul class="cute">
                                   <li class="subitem1"><a href="products_name.php?name=crayola">Crayola </a></li>
                                    <li class="subitem2"><a href="products_name.php?name=faber castell">Faber Castell </a></li>
                                    <li class="subitem3"><a href="products_name.php?name=oil pastel">Oil Pastels</a></li>
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
