<?php include'include/header.php';?>
<?php include 'top_header.php';?>
<div class="container">
	<div class="check-out">

		<h1>Checkout</h1>
    	    <table >
		  <tr>
			<th>Item</th>
			<th>Qty</th>		
			<th>Prices</th>
			<th>Subtotal</th>
			<th>Action</th>
		  </tr>

		 <?php
                  include 'include/config.php';
                             $ip=$_SERVER['REMOTE_ADDR'];
                             $qry=mysql_query("select p_id,p_name,p_qty,p_description,p_price,p_image,p_sub_total from costumer_cart where c_ip_add='$ip' and status=''")or die(mysql_error());
                            while ($row = mysql_fetch_array($qry)) {
                                $id = $row['p_id'];
                                $name = $row['p_name'];
                                $qty = $row['p_qty'];
                                $description = $row['p_description'];
                                $price = $row['p_price'];
                                $image = $row['p_image'];
                                $sub_total=$row['p_sub_total'];
                                ?>

		  <tr>
			<td class="ring-in"><a href="single.php?id=<?php echo $id;?>&p_name=<?php echo $name;?>" class="at-in"><img class="img-responsive" src="client/images/<?php echo $image;?>" alt=""></a>
			<div class="sed">
				<h5><?php echo $name;?></h5>
				<p>(<?php echo $description;?> </p>
			
			</div>
			<div class="clearfix"> </div></td>
			<td class="check"><?php echo $qty;?></td>		
			<td class="check"><?php echo $price;?></td>
			<td><?php echo $sub_total;?></td>
			<td>
             <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?php echo $id;?>"><i class="fa fa-trash-o "></i>&nbsp;Remove</button>
			</td>
		  </tr>
		 
<form method="post" action="remove_order.php">
<div id="<?php echo $id;?>" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
               
            </div>
            <div class="modal-body">   
               <p>Are your Sure you want to Remove <?php echo $id;?>
               </p>
                    <input type="hidden" value="<?php echo $id;?>" name="del_id">    
            </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">No</button>

                 <input type="submit" name="submit" value="submit" class="btn btn-danger">
            </div>
        </div>
    </div>
</div>
</form>




	<?php }?>
	 <tr>
		  <th colspan="2"></th>
		  <?php 
		  include 'include/config.php';
		  $ip=$_SERVER['REMOTE_ADDR'];
		  $q=mysql_query("select sum(p_sub_total) as total from costumer_cart where c_ip_add='$ip' and status=''") or die(mysql_error());
		  $row=mysql_fetch_assoc($q) or die(mysql_error());
		  $total=$row['total'];
		  ?>
		  <th align="right">Total</th>
		  <th><?php echo $total ;?></th>
		  </tr>
	</table>
	<a href="login.php" class=" to-buy">PROCEED TO BUY</a>


	

	<div class="clearfix"> </div>
    </div>
</div>
	<!--footer-->
<div class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="col-md-12 top-footer">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.91163207516!2d2.3470599!3d48.85885894999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2sin!4v1436340519910" allowfullscreen=""></iframe>
			</div>
			
			<div class="clearfix"> </div>	
		</div>	
	</div>
	<div class="footer-bottom">
		<div class="container">
				
				<div class="clearfix"> </div>
				<p class="footer-class"> © 2016 E-Commerce Website. All Rights Reserved | Design by <a href="http://www.rylai.3eeweb.com/" target="_blank">Nayr_Lester</a> </p>
			</div>
	</div>
</div>

<!--//footer-->
    <script src="js/jquery.js"></script>
</body>
</html>