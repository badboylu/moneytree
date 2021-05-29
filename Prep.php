<?php
 $servername="jhdjjtqo9w5bzq2t.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
 $dBUsername="db361uh5fgdhosa8";
 $dBPassword="c17zbecid7wripme";
 $dBName="uozxi82sks708ppq";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$authtoken=$_GET['auth'];
$user=$_GET['username'];
   

$query="SELECT * FROM oders WHERE idOrderConfirmation='Pending'";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
if($count>1){
 while($row=mysqli_fetch_array($result)){
 $ordernumbers[]=$row['idOrders'];
  }
 $order=Min($ordernumbers);
 $final="SELECT * FROM oders WHERE idOrders=".$order;
 $finalresult=mysqli_query($conn,$final);
 $row = mysqli_fetch_array($finalresult);
}
else if($count>0){
 $row=mysqli_fetch_array($result);
}
else{
    header("Location:D2.php?username=".$user."&auth=".$authtoken."");
    exit();
}
?>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Distribution Agent</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="fontawesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="flag-icon.css">

    <!-- Datatable css-->
    <link rel="stylesheet" type="text/css" href="datatables.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right row">
            <div class="main-header-left d-lg-none">
                <div class="logo-wrapper"> </div>
            </div>
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper"></div>
            </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div>
                    </div>
                    <h6 class="mt-3 f-14"><?php echo $_GET['username'];?></h6>
                    <p>Distribution Agent</p>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="#"><i data-feather="home"></i><span>Dashboard</span></a></li>
                    <li><a class="sidebar-header" href="#"><i data-feather="box"></i><span>Order Preparation</span></a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="Prep.php?username=<?php echo $_GET['username'];?>&auth=<?php echo $_GET['auth'];?>"><i class="fa fa-circle"></i>
                                    <span>Pending orders</span> 
                                </a>
                          
                            </li>
                            <li>
                                <a href="D2.php?username=<?php echo $_GET['username'];?>&auth=<?php echo $_GET['auth'];?>"><i class="fa fa-circle"></i>
                                    <span>Scan pending orders</span> 
                                </a>
                                
                            </li>
                        </ul>
                    </li>
                    
                    
                    
                    <li><a class="sidebar-header" href="#"><i data-feather="chrome"></i><span>Order collection</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="C1.php?username=<?php echo $_GET['username'];?>&auth=<?php echo $_GET['auth'];?>"><i class="fa fa-circle"></i>Collection codes</a></li>
                            
                        </ul>
                    </li>

                    <li><a class="sidebar-header" href="#"><i data-feather="clipboard"></i><span>History</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="#"><i class="fa fa-circle"></i>Transactions</a></li>
                            
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="Logout.php"><i data-feather="log-in"></i><span>Logout</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->

        <!-- Right sidebar Start-->
        
        <!-- Right sidebar Ends-->

        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Canibuy distribution
                                    <small>Distribution management</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item active">Pending orders:<span> </span> <?php print_r($count); ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid" width="100%">
                <div class="card">
                    <div class="card-header">
                        <h5>Order to prepare</h5>
                    </div>
                    <div class="card-body vendor-table" >
                         <br>
                         <strong><span>Order number:</strong><span> </span>[000<?php print_r($row['idOrders']); ?>]</span>
                         <br>
                         <br>
                         <div id="hideDP">
                         <strong><span>Batch A:</strong><span> </span><?php print_r($row['idOrderDPgrams']); ?> grams</span>
                         <br>
                         <br>
                         </div>
                         <div id="hideCC">
                         <strong><span>Batch B:</strong><span> </span><?php print_r($row['idOrderCCbatches']); ?> grams</span>
                         <br>
                         <br>
                         </div>
                         <div id="hideOC">
                         <strong><span>Batch C:</strong><span> </span><?php print_r($row['idOrderOCgrams']); ?> grams</span>
                         <br>
                         <br>
                         </div>
                         <div id="hideBW">
                         <strong><span>Batch D:</strong><span> </span><?php print_r($row['idOrderBWgrams']); ?> grams</span>
                         <br>
                         <br>
                         </div>
                         <div id="hidePR">
                         <strong><span>Batch E:</strong><span> </span><?php print_r($row['idOrderPRjays']); ?> grams</span>
                         <br>
                         <br>
                         </div>
                         <div id="hideNL">
                         <strong><span>Batch F:</strong><span> </span><?php print_r($row['idOrderNLgrams']); ?> grams</span>
                         <br>
                         <br>
                         </div>
                         <div id="hideCCES">
                         <strong><span>Batch G:</strong><span> </span><?php print_r($row['idOrderCCESbatches']); ?> grams</span>
                         <br>
                         <br>
                         </div>
                         <div id="hidePE">
                         <strong><span>Batch H:</strong><span> </span><?php print_r($row['idOrderPEgrams']); ?> grams</span>
                         <br>
                         <br>
                         </div>
                         <form action="Ordersystem.php" method="get" id="form">
                         <input type="hidden" name="auth" value="<?php echo $_GET['auth']; ?>">
                         <input type="hidden" name="username" value="<?php echo $_GET['username']; ?>">
                         <input type="submit" name="Next" value="Complete order" id="Blanks" "/>
                         </form>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>

        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">Copyright 2020 Plug Tech Creations.</p>
                    </div>
                   
                </div>
            </div>
        </footer>
        <!-- footer end-->

    </div>

</div>

<!-- latest jquery-->
<script src="jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="popper.min.js"></script>
<script src="bootstrap.js"></script>

<!-- feather icon js-->
<script src="feather.min.js"></script>
<script src="feather-icon.js"></script>

<!-- Sidebar jquery-->
<script src="sidebar-menu.js"></script>

<!-- Datatables js-->
<script src="jquery.dataTables.min.js"></script>
<script src="custom-basic.js"></script>

<!--Customizer admin-->
<script src="admin-customizer.js"></script>

<!-- lazyload js-->
<script src="lazysizes.min.js"></script>

<!--right sidebar js-->
<script src="chat-menu.js"></script>

<!--script admin-->
<script src="admin-script.js"></script>

<script>
function hideOrder(){
	
var DP = <?php echo $row['idOrderDPgrams'] ?>;
var CC = <?php echo $row['idOrderCCbatches']?>;
var OC = <?php echo $row['idOrderOCgrams']?>;
var BW = <?php echo $row['idOrderBWgrams']?>;
var PR = <?php echo $row['idOrderPRjays']?>;
var CCES = <?php echo $row['idOrderCCESbatches']?>;
var NL = <?php echo $row['idOrderNLgrams']?>;
var PE = <?php echo $row['idOrderPEgrams']?>;
	
if(DP == 0){
   document.getElementById("hideDP").style.display = "none";
 }
if(CC == 0){
   document.getElementById("hideCC").style.display = "none";
 }
if(OC == 0){
   document.getElementById("hideOC").style.display = "none";
 }
if(BW == 0){
   document.getElementById("hideBW").style.display = "none";
 }
if(PR == 0){
   document.getElementById("hidePR").style.display = "none";
 }
if(CCES == 0){
   document.getElementById("hideCCES").style.display = "none";
 }
if(NL == 0){
   document.getElementById("hideNL").style.display = "none";
 }
if(PE == 0){
   document.getElementById("hidePE").style.display = "none";
}
}
hideOrder();
</script>
</body>

<!-- Mirrored from themes.pixelstrap.com/multikart/back-end/list-vendor.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Oct 2020 12:38:33 GMT -->
</html>
