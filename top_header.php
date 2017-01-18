<body>
<!--header-->
<div class="header">
    <div class="header-top">
        <div class="container">
        <div class="col-sm-4 world">
                    <span><i class="glyphicon glyphicon-phone"></i>085 596 234</span>
                </div>
                <div class="col-sm-4 logo">
                    <a href="index.php"><img src="client/images/logo.png" alt=""></a> 
                </div>
        
            <div class="col-sm-4 header-left">      
                    <p class="log"><a href="login.php"  >Login</a>
                        <span>or</span><a  href="register.php"  >Signup</a></p>
                    <div class="cart box_1">
                        <a href="checkout.php">
                        <h3> <div class="total">
                           <?php
                             include 'include/config.php';
                             $ip=$_SERVER['REMOTE_ADDR'];
                             $qry="select sum(p_sub_total) as sub_total from costumer_cart where c_ip_add='$ip' and status=''";
                             $stmt=mysql_query($qry) or die(mysql_error());
                             while ($row=mysql_fetch_assoc($stmt)) {
                                 $total=$row['sub_total'];
                                 echo 'Php '. $total;
                             }

                           ?>
                           </div>
                            <img src="client/images/cart.png" alt=""/></h3>
                        </a>

                    </div>
                    <div class="clearfix"> </div>
            </div>
                <div class="clearfix"> </div>
        </div>
        </div>
        <div class="container">
            <div class="head-top">
                <div class="col-sm-2 number">
                  
                </div>
         <div class="col-sm-8 h_menu4">
                <ul class="memenu skyblue">
                      <li class=" grid"><a  href="index.php">Home</a></li> 
                      <li><a  href="#">School Supplies</a>
                        <div class="mepanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Pens</h4>
                                    <ul>
                                    <li class="subitem1"><a href="products_name.php?name=stabilo">Stabilo </a></li>
                                    <li class="subitem2"><a href="products_name.php?name=titus">Titus </a></li>
                                    <li class="subitem3"><a href="products_name.php?name=pilot">Pilot </a></li>
                                        
                                    </ul>   
                                </div>                          
                            </div>
                             <div class="col1">
                                <div class="h_nav">
                                    <h4>Crayons</h4>
                                    <ul>
                                    <li class="subitem1"><a href="products_name.php?name=crayola">Crayola </a></li>
                                    <li class="subitem2"><a href="products_name.php?name=faber castell">Faber Castell </a></li>
                                    <li class="subitem3"><a href="products_name.php?name=oil pastel">Oil Pastels</a></li>
                                        
                                    </ul>   
                                </div>                          
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Bags</h4>
                                    <ul>
                                    <li class="subitem1"><a href="products_name.php?name=janspot">Jansport </a></li>
                                    <li class="subitem2"><a href="products_name.php?name=heartstring">Heartstring </a></li>
                                    <li class="subitem3"><a href="products_name.php?name=hawk">Hawk</a></li>
                                    
                                    </ul>   
                                </div>                          
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Books</h4>
                                    <ul>
                                    <li class="subitem1"><a href="products_name.php?name=baby">Baby Books </a></li>
                                    <li class="subitem2"><a href="products_name.php?name=educational">Educational books </a></li>
                                    <li class="subitem3"><a href="products_name.php?name=story">Story Books </a></li>
                                    </ul>   
                                </div>                                              
                            </div>
                             <div class="col1">
                                <div class="h_nav">
                                    <h4>Others</h4>
                                    <ul>
                                        <li><a href="products.html">Case</a></li>
                                        <li><a href="products.html">Folders</a></li>
                                        <li><a href="products.html"></a></li>
                                    </ul>   
                                </div>                                              
                            </div>
                          </div>
                        </div>
                    </li>
                    
                <li><a  href="products.php">Products</a></li>              
              </ul> 
            </div>
                        
    <!---->     
        </div>
    </div>
</div>