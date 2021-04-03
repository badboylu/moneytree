<?php
  $servername="dt3bgg3gu6nqye5f.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
  $dBUsername="fn5xp8yu9vmphif8";
  $dBPassword="j0oarzobzrwqy40b";
  $dBName="eebooc1cx2mejqru";
  $conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
  $authtoken = $_GET['auth'];
  $username = $_GET['username'];
  $query='SELECT * FROM distrouser WHERE idDistro="'.$username.'" ';
  $result=mysqli_query($conn,$query);
  while($row=mysqli_fetch_array($result)){
   $location[]=$row['idLocation'];
  }
  $locae=Min($location);
  $sql="SELECT idDriver FROM driveruser WHERE idLocation=?";
$stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:RDR2.php?error=SQL1");
       exit();
}
mysqli_stmt_bind_param($stmt,"s",$locae);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $resultCheck=mysqli_stmt_num_rows($stmt);
   if(!$resultCheck){
   $resultCheck=0;
   }
$sql="SELECT idPrepper FROM prepperuser WHERE idLocation=?";
$stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:RP2.php?error=SQL1");
       exit();
}
mysqli_stmt_bind_param($stmt,"s",$locae);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $resultCheckPrep=mysqli_stmt_num_rows($stmt);
   if(!$resultCheckPrep){
   $resultCheckPrep=0;
   }

$sql='SELECT * FROM oders WHERE idOrderConfirmation='Pending' AND idUsername=? ';
   $stmt=mysqli_stmt_init($conn);
 if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Signin.php?error=SQL1");
       exit();
}
   mysqli_stmt_bind_param($stmt,"s",$locae);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $pending=mysqli_stmt_num_rows($stmt);
   if(!$pending){
   $pending=0;
   }
?>

<!DOCTYPE html>
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

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="icofont.css">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="prism.css">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="chartist.css">

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
             </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <h6 class="mt-3 f-14"><?php echo $username ?></h6>
                     <p><?php echo $locae ?></p>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="index.html"><i data-feather="home"></i><span>Dashboard</span></a></li>
                    <li><a class="sidebar-header" href="#"><i data-feather="box"></i><span>Agents</span></a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="#"><i class="fa fa-circle"></i>
                                    <span>Prepper</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-circle"></i>
                                    <span>Driver</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="user-plus"></i><span>Recruitment</span></a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="RP.php?location=<?php echo $locae ?>"><i class="fa fa-circle"></i>
                                    <span>Add Prepper</span> 
                                </a>
                            </li>
                            <li>
                                <a href="RDR.php?location=<?php echo $locae ?>"><i class="fa fa-circle"></i>
                                    <span>Add Driver</span> 
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="chrome"></i><span>Stock management</span></a>
                     <ul class="sidebar-submenu">
                            <li><a href="#"><i class="fa fa-circle"></i>Recieve</a></li>
                            <li><a href="#"><i class="fa fa-circle"></i>Stock log</a></li>
                     </ul>  
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="clipboard"></i><span>Order log</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="#"><i class="fa fa-circle"></i>Daily</a></li>
                             <li><a href="#"><i class="fa fa-circle"></i>Monthly</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="login.html"><i data-feather="log-in"></i><span>Logout</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->

        <!-- Right sidebar Start-->
        <div class="right-sidebar" id="right_side_bar">
            <div>
                <div class="container p-0">
                    <div class="modal-header p-l-20 p-r-20">
                        <div class="col-sm-8 p-0">
                            <h6 class="modal-title font-weight-bold">FRIEND LIST</h6>
                        </div>
                        <div class="col-sm-4 text-right p-0"><i class="mr-2" data-feather="settings"></i></div>
                    </div>
                </div>
                <div class="friend-list-search mt-0">
                    <input type="text" placeholder="search friend"><i class="fa fa-search"></i>
                </div>
                <div class="p-l-30 p-r-30">
                    <div class="chat-box">
                        <div class="people-list friend-list">
                            <ul class="list">
                                <li class="clearfix"><img class="rounded-circle user-image" src="user.png" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Vincent Porter</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="user1.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">Ain Chavez</div>
                                        <div class="status"> 28 minutes ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="user2.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Kori Thomas</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="user3.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Erica Hughes</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="man.png" alt="">
                                    <div class="status-circle offline"></div>
                                    <div class="about">
                                        <div class="name">Ginger Johnston</div>
                                        <div class="status"> 2 minutes ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="user5.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">Prasanth Anand</div>
                                        <div class="status"> 2 hour ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="designer.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Hileri Jecno</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right sidebar Ends-->

        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Dashboard
                                    <small>Distro panel</small>
                                <p></p>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="indexAdmin.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden  widget-cards">
                            <div class="bg-secondary card-body">
                                <div class="media static-top-widget row">
                                    <div class="icons-widgets col-4">
                                        <div class="align-self-center text-center"><i data-feather="box" class="font-secondary"></i></div>
                                    </div>
                                    <div class="media-body col-8"><span class="m-0">Pending orders</span>
                                        <h3 class="mb-0"><span class="counter"><?php echo $pending; ?></span><small> Today</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden  widget-cards">
                            <div class="bg-secondary card-body">
                                <div class="media static-top-widget row">
                                    <div class="icons-widgets col-4">
                                        <div class="align-self-center text-center"><i data-feather="box" class="font-secondary"></i></div>
                                    </div>
                                    <div class="media-body col-8"><span class="m-0">Prepared orders</span>
                                        <h3 class="mb-0"><span class="counter">9856</span><small> Today</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden  widget-cards">
                            <div class="bg-secondary card-body">
                                <div class="media static-top-widget row">
                                    <div class="icons-widgets col-4">
                                        <div class="align-self-center text-center"><i data-feather="box" class="font-secondary"></i></div>
                                    </div>
                                    <div class="media-body col-8"><span class="m-0">Collected orders</span>
                                        <h3 class="mb-0"><span class="counter">9856</span><small> Today</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class="bg-danger card-body">
                                <div class="media static-top-widget row">
                                    <div class="icons-widgets col-4">
                                        <div class="align-self-center text-center"><i data-feather="users" class="font-danger"></i></div>
                                    </div>
                                    <div class="media-body col-8"><span class="m-0">Preparation Agents</span>
                                        <h3 class="mb-0"><span class="counter"><?php echo $resultCheckPrep; ?></span><small> Active</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class="bg-danger card-body">
                                <div class="media static-top-widget row">
                                    <div class="icons-widgets col-4">
                                        <div class="align-self-center text-center"><i data-feather="users" class="font-danger"></i></div>
                                    </div>
                                    <div class="media-body col-8"><span class="m-0">Driver Agents</span>
                                        <h3 class="mb-0"><span class="counter"><?php echo $resultCheck; ?></span><small> Active</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class="bg-warning card-body">
                                <div class="media static-top-widget row">
                                    <div class="icons-widgets col-4">
                                        <div class="align-self-center text-center"><i data-feather="navigation" class="font-warning"></i></div>
                                    </div>
                                    <div class="media-body col-8"><span class="m-0">Delivered orders</span>
                                        <h3 class="mb-0"><span class="counter">6659</span><small> Today</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class="bg-warning card-body">
                                <div class="media static-top-widget row">
                                    <div class="icons-widgets col-4">
                                        <div class="align-self-center text-center"><i data-feather="navigation" class="font-warning"></i></div>
                                    </div>
                                    <div class="media-body col-8"><span class="m-0">Distro earnings</span>
                                        <h3 class="mb-0">R <span class="counter">6659</span><small> Today</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class="bg-primary card-body">
                                <div class="media static-top-widget row">
                                    <div class="icons-widgets col-4">
                                        <div class="align-self-center text-center"><i data-feather="message-square" class="font-primary"></i></div>
                                    </div>
                                    <div class="media-body col-8"><span class="m-0">Cancelled deliveries</span>
                                        <h3 class="mb-0"><span class="counter">893</span><small> Today</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class="bg-primary card-body">
                                <div class="media static-top-widget row">
                                    <div class="icons-widgets col-4">
                                        <div class="align-self-center text-center"><i data-feather="message-square" class="font-primary"></i></div>
                                    </div>
                                    <div class="media-body col-8"><span class="m-0">Late deliveries</span>
                                        <h3 class="mb-0"><span class="counter">893</span><small> Today</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 xl-100">
                        <div class="card">
                            <div class="card-header">
                                <h5>Performance highlight</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="icofont icofont-simple-left"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="user-status table-responsive latest-order-table">
                                    <table class="table table-bordernone">
                                        <thead>
                                        <tr>
                                            <th scope="col">Products</th>
                                            <th scope="col">Quantity disposed</th>
                                            <th scope="col">Quantity in-stock</th>
                                            <th scope="col">Stock status</th>
                                  
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                     
                                      
                                            <td class="font-danger">Durban Poison</td>
                                            <td class="digits"><span>700</span><span> grams</span></td>
                                            <td class="digits"><span>2500</span><span> grams</span>  </td>
                                            <td class="digits"><span>High</span></td>
                                        </tr>
                                        <tr>
                                            
                                            <td class="font-danger">California Orange</td>
                                            <td class="digits"><span>2700</span><span> grams</span></td>
                                            <td class="digits"><span>500</span><span> grams</span>  </td>
                                            <td class="digits"><span>Low</span></td>
                                        </tr>
                                        <tr>
                                            
                                            <td class="font-danger">Northern Lights</td>
                                            <td class="digits"><span>540</span><span> grams</span></td>
                                            <td class="digits"><span>1000</span><span> grams</span>  </td>
                                            <td class="digits"><span>Mid</span></td>
                                        </tr>
                                        <tr>
                                            
                                            <td class="font-danger">Pineapple Express</td>
                                            <td class="digits"><span>4500</span><span> grams</span></td>
                                            <td class="digits"><span>10000</span><span> grams</span>  </td>
                                            <td class="digits"><span>Good</span></td>
                                        </tr>
                                        <tr>
                                            
                                            <td class="font-danger">Dabcapsules (light)</td>
                                            <td class="digits"><span>40</span><span> batch/es</span></td>
                                            <td class="digits"><span>140</span><span> batch/es</span>  </td>
                                            <td class="digits"><span>Mid</span></td>
                                        </tr>
                                        <tr>
                                            
                                            <td class="font-danger">Dabcapsules (strong)</td>
                                            <td class="digits"><span>40</span><span> batch/es</span></td>
                                            <td class="digits"><span>140</span><span> batch/es</span>  </td>
                                            <td class="digits"><span>Mid</span></td>
                                        </tr>
                                        <tr>
                                            
                                            <td class="font-danger">Raw Rizzla</td>
                                            <td class="digits"><span>300</span><span> pack/s</span></td>
                                            <td class="digits"><span>1200</span><span> pack/s</span>  </td>
                                            <td class="digits"><span>good</span></td>
                                        </tr>
                                        <tr>
                                            
                                            <td class="font-danger">Pre-Rolls</td>
                                            <td class="digits"><span>430</span><span> Joints</span></td>
                                            <td class="digits"><span>3000</span><span> Joints</span>  </td>
                                            <td class="digits"><span>Good</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    
                                </div>
                               
                                
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
                        <p class="mb-0">Copyright 2019 © Multikart All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
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

<!--chartist js-->
<script src="chartist.js"></script>

<!--chartjs js-->
<script src="chart.min.js"></script>

<!-- lazyload js-->
<script src="lazysizes.min.js"></script>

<!--copycode js-->
<script src="prism.min.js"></script>
<script src="clipboard.min.js"></script>
<script src="custom-card.js"></script>

<!--counter js-->
<script src="jquery.waypoints.min.js"></script>
<script src="jquery.counterup.min.js"></script>
<script src="counter-custom.js"></script>

<!--peity chart js-->
<script src="peity.jquery.js"></script>

<!--sparkline chart js-->
<script src="sparkline.js"></script>

<!--Customizer admin-->
<script src="admin-customizer.js"></script>

<!--dashboard custom js-->
<script src="dashboard/default.js"></script>

<!--right sidebar js-->
<script src="chat-menu.js"></script>

<!--height equal js-->
<script src="height-equal.js"></script>

<!-- lazyload js-->
<script src="lazysizes.min.js"></script>

<!--script admin-->
<script src="admin-script.js"></script>

</body>

<!-- Mirrored from themes.pixelstrap.com/multikart/back-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Oct 2020 12:31:08 GMT -->
</html>
