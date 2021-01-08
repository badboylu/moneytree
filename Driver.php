<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$query="SELECT * FROM address WHERE idOrderConfirmation='Pending'";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
if($count>1){
 while($row=mysqli_fetch_array($result)){
 $ordernumbers[]=$row['idUser'];
  }
 $order=Min($ordernumbers);
 $final="SELECT * FROM address WHERE idUser=".$order;
 $finalresult=mysqli_query($conn,$final);
 $row = mysqli_fetch_array($finalresult);
}
else if($count>0){
 $row=mysqli_fetch_array($result);
}
else{
  header("Location:D.php");
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
    <title>Delivery Agent</title>

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
                <div class="logo-wrapper"></div>
            </div>
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
                </div>
            </div>
            <div class="nav-right col">
                <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
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
                    <h6 class="mt-3 f-14">Lunga M</h6>
                    <p>Delivery Agent</p>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="reports.html"><i data-feather="bar-chart"></i><span>Earnings</span></a></li>
                    </li>
                    <li><a class="sidebar-header" href="reports.html"><i data-feather="bar-chart"></i><span>Distribution History</span></a></li>
                    </li>
                    <li><a class="sidebar-header" href="reports.html"><i data-feather="bar-chart"></i><span>Canceled orders</span></a></li>
                    </li>
                    <li><a class="sidebar-header" href="reports.html"><i data-feather="bar-chart"></i><span>Performance report</span></a></li>
                    </li>
                    <li><a class="sidebar-header" href="logout.html"><i data-feather="log-in"></i><span>Logout</span></a>
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
                                <h3>Canibuy delivery
                                    <small>Delivery management</small>
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
                        <h5>Order collection protocol</h5>
                    </div>
                    <div class="card-body vendor-table" >
                         <br>
                         <div id="hideProvince">
                         <strong><span>Collection code:</strong><span> </span></span>
                         <br>
                         <br>
                         <div id="hideProvince">
                         <strong><span>Province:</strong><span> </span><?php print_r($row['idProvince']); ?></span>
                         <br>
                         <br>
                         </div>
                         <div id="hideCity">
                         <strong><span>City:</strong><span> </span><?php print_r($row['idCity']); ?></span>
                         <br>
                         <br>
                         </div>
                         <div id="hideTown">
                         <strong><span>Town:</strong><span> </span><?php print_r($row['idTown']); ?></span>
                         <br>
                         <br>
                         </div>
                         <div id="hideSuburb">
                         <strong><span>Suburb:</strong><span> </span><?php print_r($row['idSuburb']); ?></span>
                         <br>
                         <br>
                         </div>
                         <div id="hideCrib">
                         <strong><span>Structure:</strong><span> </span><?php print_r($row['idCrib']); ?></span>
                         <br>
                         <br>
                         </div>
                         <div id="hideBuilding">
                         <strong><span>Building name:</strong><span> </span><?php print_r($row['idBuilding']); ?></span>
                         <br>
                         <br>
                         </div>
                         <div id="hideEstate">
                         <strong><span>Estate name:</strong><span> </span><?php print_r($row['idEstate']); ?></span>
                         <br>
                         <br>
                         </div>
                         <div id="hideComplex">
                         <strong><span>Complex name:</strong><span> </span><?php print_r($row['idComplex']); ?></span>
                         <br>
                         <br>
                         </div>
                         <div id="hideMall">
                         <strong><span>Mall name:</strong><span> </span><?php print_r($row['idMall']); ?></span>
                         <br>
                         <br>
                         </div>
                         <div id="hideShop">
                         <strong><span>Shop name:</strong><span> </span><?php print_r($row['idShop']); ?></span>
                         <br>
                         <br>
                         </div>
                         <div id="hideStreet">
                         <strong><span>Street name:</strong><span> </span><?php print_r($row['idStreet']); ?></span>
                         <br>
                         <br>
                         </div>
                         <div id="hideUnit">
                         <strong><span>Unit-number:</strong><span> </span><?php print_r($row['idUnitNumber']); ?></span>
                         <br>
                         <br>
                         </div>
                         <div id="hideHouse">
                         <strong><span>House-number:</strong><span> </span><?php print_r($row['idHouseNumber']); ?></span>
                         <br>
                         <br>
                         </div>
                         <form action="Ordersystemdelivery.php" method="post" id="form">
                         <label><strong>Delivery code: </strong></label> <span> </span> <input type="text" name="Shop" placeholder="Enter code here" required>
                         <input type="submit" name="Delivered" value="Delivered" id="Blanks" "/>
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

 var crib = <?php echo $row['idCrib'] ?>;
 
if(crib = 'Mall'){
   document.getElementById("hideBuilding").style.display = "none";
 }
if(mall == null){
   document.getElementById("hideMall").style.display = "none";
 }
if(shop == null){
   document.getElementById("hideShop").style.display = "none";
 }
if(house == null){
   document.getElementById("hideHouse").style.display = "none";
 }
if(street == null){
   document.getElementById("hideStreet").style.display = "none";
 }
if(estate == null){
   document.getElementById("hideEstate").style.display = "none";
 }
if(complex == null){
   document.getElementById("hideComplex").style.display = "none";
 }
}
hideOrder();
</script>
</body>

<!-- Mirrored from themes.pixelstrap.com/multikart/back-end/list-vendor.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Oct 2020 12:38:33 GMT -->
</html>
