<?php include ("include/makeSession.php"); ?>

<?php include("include/header.php"); ?>

<?php include("include/sidebar.php"); ?>
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                

                                <h4 class="page-title">Dashboard</h4>
                                <p class="text-muted page-title-alt">Welcome to Admin</p>
                            </div>
                        </div>

                       <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="widget-bg-color-icon card-box fadeInDown animated">
                                    <div class="bg-icon bg-icon-info pull-left">
                                        <i class="md md-attach-money text-info"></i>
                                    </div>
                                    <?php $c = mysqli_query($con,"select count(*) as cs from customers where pay_status = 1");
                                   $a = mysqli_fetch_assoc($c);
                                    //print_r($a);
                                    ?>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter"><?php echo $a['cs'];?></b></h3>
                                        <p class="text-muted"><a href="view-product.php?status=1">Total Successful Transaction</a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-pink pull-left">
                                        <i class="md md-add-shopping-cart text-pink"></i>
                                    </div>
                                    <?php $c = mysqli_query($con,"select count(*) as cs from customers where pay_status = 0");
                                   $a = mysqli_fetch_assoc($c);
                                    //print_r($a);
                                    ?>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter"><?php echo $a['cs'];?></b></h3>
                                        <p class="text-muted"><a href="view-product.php?status=0"> Total Rejected Transaction</a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            

                            
                        </div>

                      
                    </div> <!-- container -->
                </div> 

<?php include('include/footer.php');?>