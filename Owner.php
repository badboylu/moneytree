<?php
  $servername="dt3bgg3gu6nqye5f.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
  $dBUsername="fn5xp8yu9vmphif8";
  $dBPassword="j0oarzobzrwqy40b";
  $dBName="eebooc1cx2mejqru";
   $conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
   $authtoken = $_GET['auth'];
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
    <title>Owner</title>

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
                    <h6 class="mt-3 f-14">Lunga</h6>
                    <p>Director</p>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="Owner.html"><i data-feather="home"></i><span>Dashboard</span></a></li>
                    <li><a class="sidebar-header" href="#"><i data-feather="box"></i><span>Agents</span></a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="#">
                                    <span>Caller</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Distro</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Driver</span>
                                </a>
                            </li>
                           <li>
                                <a href="#">
                                    <span>Alfa Distro</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="user-plus"></i><span>Recruitment</span></a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="RC.php">
                                    <span>Add Caller</span> 
                                </a>
                            </li>
                            <li>
                                <a href="RD.php">
                                    <span>Add Distro</span> 
                                </a>
                            </li>
                            <li>
                                <a href="RDR.php">
                                    <span>Add Driver</span> 
                                </a>
                            </li>
                            <li>
                                <a href="RAD.php">
                                    <span>Add Alfa Distro</span> 
                                </a>
                            </li>
                        </ul>
                     <li><a class="sidebar-header" href="#"><i data-feather="chrome"></i><span>Stock management</span></a>
                     <ul class="sidebar-submenu">
                            <li><a href="ST1.php?username=<?php echo $_GET['username'];?>&auth=<?php echo $_GET['auth'];?>&location=<?php echo $locae ?>"><i class="fa fa-circle"></i>Recieve</a></li>
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

        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Dashboard
                                    <small>Canibuy Overview</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="Owner.html"></a></li>
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
                        <div class="card o-hidden widget-cards">
                            <div class="bg-warning card-body">
                                <div class="media static-top-widget row">
                                    <div class="icons-widgets col-4">
                                        <div class="align-self-center text-center"><i data-feather="navigation" class="font-warning"></i></div>
                                    </div>
                                    <div class="media-body col-8"><span class="m-0">Earnings</span>
                                        <h3 class="mb-0">$ <span class="counter">6659</span><small> This Month</small></h3>
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
                                    <div class="media-body col-8"><span class="m-0">Products</span>
                                        <h3 class="mb-0">$ <span class="counter">9856</span><small> This Month</small></h3>
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
                                    <div class="media-body col-8"><span class="m-0">Messages</span>
                                        <h3 class="mb-0">$ <span class="counter">893</span><small> This Month</small></h3>
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
                                    <div class="media-body col-8"><span class="m-0">New Vendors</span>
                                        <h3 class="mb-0">$ <span class="counter">45631</span><small> This Month</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 xl-100">
                        <div class="card">
                            <div class="card-header">
                                <h5>Latest Orders</h5>
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
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Order Total</th>
                                            <th scope="col">Payment Method</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="digits">$120.00</td>
                                            <td class="font-danger">Bank Transfers</td>
                                            <td class="digits">On Way</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="digits">$90.00</td>
                                            <td class="font-secondary">Ewallets</td>
                                            <td class="digits">Delivered</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="digits">$240.00</td>
                                            <td class="font-warning">Cash</td>
                                            <td class="digits">Delivered</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="digits">$120.00</td>
                                            <td class="font-primary">Direct Deposit</td>
                                            <td class="digits">$6523</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td class="digits">$50.00</td>
                                            <td class="font-primary">Bank Transfers</td>
                                            <td class="digits">Delivered</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <a href="order.html" class="btn btn-primary">View All Orders</a>
                                </div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="" data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                    <pre class=" language-html"><code class=" language-html" id="example-head1">
&lt;div class="user-status table-responsive latest-order-table"&gt;
    &lt;table class="table table-bordernone"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Order ID&lt;/th&gt;
                &lt;th scope="col"&gt;Order Total&lt;/th&gt;
                &lt;th scope="col"&gt;Payment Method&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;1&lt;/td&gt;
                &lt;td class="digits"&gt;$120.00&lt;/td&gt;
                &lt;td class="font-secondary"&gt;Bank Transfers&lt;/td&gt;
                &lt;td class="digits"&gt;Delivered&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;2&lt;/td&gt;
                &lt;td class="digits"&gt;$90.00&lt;/td&gt;
                &lt;td class="font-secondary"&gt;Ewallets&lt;/td&gt;
                &lt;td class="digits"&gt;Delivered&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;3&lt;/td&gt;
                &lt;td class="digits"&gt;$240.00&lt;/td&gt;
                &lt;td class="font-secondary"&gt;Cash&lt;/td&gt;
                &lt;td class="digits"&gt;Delivered&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;4&lt;/td&gt;
                &lt;td class="digits"&gt;$120.00&lt;/td&gt;
                &lt;td class="font-primary"&gt;Direct Deposit&lt;/td&gt;
                &lt;td class="digits"&gt;Delivered&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;5&lt;/td&gt;
                &lt;td class="digits"&gt;$50.00&lt;/td&gt;
                &lt;td class="font-primary"&gt;Bank Transfers&lt;/td&gt;
                &lt;td class="digits"&gt;Delivered&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
                                    </code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card order-graph sales-carousel">
                            <div class="card-header">
                                <h6>Total Sales</h6>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="small-chartjs">
                                            <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-3"></div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="value-graph">
                                            <h3>42% <span><i class="fa fa-angle-up font-primary"></i></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <span>Sales Last Month</span>
                                        <h2 class="mb-0">9054</h2>
                                        <p>0.25% <span><i class="fa fa-angle-up"></i></span></p>
                                        <h5 class="f-w-600">Gross sales of August</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                    </div>
                                    <div class="bg-primary b-r-8">
                                        <div class="small-box">
                                            <i data-feather="briefcase"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card order-graph sales-carousel">
                            <div class="card-header">
                                <h6>Total purchase</h6>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="small-chartjs">
                                            <div class="flot-chart-placeholder" id="simple-line-chart-sparkline"></div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="value-graph">
                                            <h3>20% <span><i class="fa fa-angle-up font-secondary"></i></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <span>Monthly purchase</span>
                                        <h2 class="mb-0">2154</h2>
                                        <p>0.13% <span><i class="fa fa-angle-up"></i></span></p>
                                        <h5 class="f-w-600">Avg Gross purchase</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                    </div>
                                    <div class="bg-secondary b-r-8">
                                        <div class="small-box">
                                            <i data-feather="credit-card"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card order-graph sales-carousel">
                            <div class="card-header">
                                <h6>Total cash transaction</h6>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="small-chartjs">
                                            <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-2"></div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="value-graph">
                                            <h3>28% <span><i class="fa fa-angle-up font-warning"></i></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <span>Cash on hand</span>
                                        <h2 class="mb-0">4672</h2>
                                        <p>0.8% <span><i class="fa fa-angle-up"></i></span></p>
                                        <h5 class="f-w-600">Details about cash</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                    </div>
                                    <div class="bg-warning b-r-8">
                                        <div class="small-box">
                                            <i data-feather="shopping-cart"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card order-graph sales-carousel">
                            <div class="card-header">
                                <h6>Daily Deposits</h6>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="small-chartjs">
                                            <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-1"></div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="value-graph">
                                            <h3>75% <span><i class="fa fa-angle-up font-danger"></i></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <span>Security Deposits</span>
                                        <h2 class="mb-0">0782</h2>
                                        <p>0.25% <span><i class="fa fa-angle-up"></i></span></p>
                                        <h5 class="f-w-600">Gross sales of June</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                    </div>
                                    <div class="bg-danger b-r-8">
                                        <div class="small-box">
                                            <i data-feather="calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 xl-100">
                        <div class="card height-equal">
                            <div class="card-header">
                                <h5>Goods return</h5>
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
                                <div class="user-status table-responsive products-table">
                                    <table class="table table-bordernone mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col">Details</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Simply dummy text of the printing</td>
                                            <td class="digits">1</td>
                                            <td class="font-primary">Pending</td>
                                            <td class="digits">$6523</td>
                                        </tr>
                                        <tr>
                                            <td>Long established</td>
                                            <td class="digits">5</td>
                                            <td class="font-secondary">Cancle</td>
                                            <td class="digits">$6523</td>
                                        </tr>
                                        <tr>
                                            <td>sometimes by accident</td>
                                            <td class="digits">10</td>
                                            <td class="font-secondary">Cancle</td>
                                            <td class="digits">$6523</td>
                                        </tr>
                                        <tr>
                                            <td>Classical Latin literature</td>
                                            <td class="digits">9</td>
                                            <td class="font-primary">Return</td>
                                            <td class="digits">$6523</td>
                                        </tr>
                                        <tr>
                                            <td>keep the site on the Internet</td>
                                            <td class="digits">8</td>
                                            <td class="font-primary">Pending</td>
                                            <td class="digits">$6523</td>
                                        </tr>
                                        <tr>
                                            <td>Molestiae consequatur</td>
                                            <td class="digits">3</td>
                                            <td class="font-secondary">Cancle</td>
                                            <td class="digits">$6523</td>
                                        </tr>
                                        <tr>
                                            <td>Pain can procure</td>
                                            <td class="digits">8</td>
                                            <td class="font-primary">Return</td>
                                            <td class="digits">$6523</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head4" title="" data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                    <pre class=" language-html"><code class=" language-html" id="example-head4">
&lt;div class="user-status table-responsive products-table"&gt;
    &lt;table class="table table-bordernone mb-0"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Details&lt;/th&gt;
                &lt;th scope="col"&gt;Quantity&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
                &lt;th scope="col"&gt;Price&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;Simply dummy text of the printing&lt;/td&gt;
                &lt;td class="digits"&gt;1&lt;/td&gt;
                &lt;td class="font-primary"&gt;Pending&lt;/td&gt;
                &lt;td class="digits"&gt;$6523&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Long established&lt;/td&gt;
                &lt;td class="digits"&gt;5&lt;/td&gt;
                &lt;td class="font-secondary"&gt;Cancle&lt;/td&gt;
                &lt;td class="digits"&gt;$6523&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;sometimes by accident&lt;/td&gt;
                &lt;td class="digits"&gt;10&lt;/td&gt;
                &lt;td class="font-secondary"&gt;Cancle&lt;/td&gt;
                &lt;td class="digits"&gt;$6523&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Classical Latin literature&lt;/td&gt;
                &lt;td class="digits"&gt;9&lt;/td&gt;
                &lt;td class="font-primary"&gt;Return&lt;/td&gt;
                &lt;td class="digits"&gt;$6523&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;keep the site on the Internet&lt;/td&gt;
                &lt;td class="digits"&gt;8&lt;/td&gt;
                &lt;td class="font-primary"&gt;Pending&lt;/td&gt;
                &lt;td class="digits"&gt;$6523&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Molestiae consequatur&lt;/td&gt;
                &lt;td class="digits"&gt;3&lt;/td&gt;
                &lt;td class="font-secondary"&gt;Cancle&lt;/td&gt;
                &lt;td class="digits"&gt;$6523&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Pain can procure&lt;/td&gt;
                &lt;td class="digits"&gt;8&lt;/td&gt;
                &lt;td class="font-primary"&gt;Return&lt;/td&gt;
                &lt;td class="digits"&gt;$6523&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
                                    </code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 xl-100">
                        <div class="card height-equal">
                            <div class="card-header">
                                <h5>Empolyee Status</h5>
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
                                <div class="user-status table-responsive products-table">
                                    <table class="table table-bordernone mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Designation</th>
                                            <th scope="col">Skill Level</th>
                                            <th scope="col">Experience</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="bd-t-none u-s-tb">
                                                <div class="align-middle image-sm-size"><img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="../assets/images/dashboard/user2.jpg" alt="" data-original-title="" title="">
                                                    <div class="d-inline-block">
                                                        <h6>John Deo <span class="text-muted digits">(14+ Online)</span></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Designer</td>
                                            <td>
                                                <div class="progress-showcase">
                                                    <div class="progress" style="height: 8px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="digits">2 Year</td>
                                        </tr>
                                        <tr>
                                            <td class="bd-t-none u-s-tb">
                                                <div class="align-middle image-sm-size"><img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="../assets/images/dashboard/user1.jpg" alt="" data-original-title="" title="">
                                                    <div class="d-inline-block">
                                                        <h6>Holio Mako <span class="text-muted digits">(250+ Online)</span></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Developer</td>
                                            <td>
                                                <div class="progress-showcase">
                                                    <div class="progress" style="height: 8px;">
                                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="digits">3 Year</td>
                                        </tr>
                                        <tr>
                                            <td class="bd-t-none u-s-tb">
                                                <div class="align-middle image-sm-size"><img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="../assets/images/dashboard/man.png" alt="" data-original-title="" title="">
                                                    <div class="d-inline-block">
                                                        <h6>Mohsib lara<span class="text-muted digits">(99+ Online)</span></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Tester</td>
                                            <td>
                                                <div class="progress-showcase">
                                                    <div class="progress" style="height: 8px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="digits">5 Month</td>
                                        </tr>
                                        <tr>
                                            <td class="bd-t-none u-s-tb">
                                                <div class="align-middle image-sm-size"><img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="../assets/images/dashboard/user.png" alt="" data-original-title="" title="">
                                                    <div class="d-inline-block">
                                                        <h6>Hileri Soli <span class="text-muted digits">(150+ Online)</span></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Designer</td>
                                            <td>
                                                <div class="progress-showcase">
                                                    <div class="progress" style="height: 8px;">
                                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="digits">3 Month</td>
                                        </tr>
                                        <tr>
                                            <td class="bd-t-none u-s-tb">
                                                <div class="align-middle image-sm-size"><img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="../assets/images/dashboard/designer.jpg" alt="" data-original-title="" title="">
                                                    <div class="d-inline-block">
                                                        <h6>Pusiz bia <span class="text-muted digits">(14+ Online)</span></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Designer</td>
                                            <td>
                                                <div class="progress-showcase">
                                                    <div class="progress" style="height: 8px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="digits">5 Year</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head5" title="" data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                    <pre class=" language-html"><code class=" language-html" id="example-head5">
&lt;div class="user-status table-responsive products-table"&gt;
    &lt;table class="table table-bordernone mb-0"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Name&lt;/th&gt;
                &lt;th scope="col"&gt;Designation&lt;/th&gt;
                &lt;th scope="col"&gt;Skill Level&lt;/th&gt;
                &lt;th scope="col"&gt;Experience&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
                &lt;tr&gt;
                    &lt;td class="bd-t-none u-s-tb"&gt;
                        &lt;div class="align-middle image-sm-size"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="../assets/images/dashboard/user2.jpg" alt="" data-original-title="" title=""&gt;
                        &lt;div class="d-inline-block"&gt;
                        &lt;h6&gt;John Deo &lt;span class="text-muted digits"&gt;(14+ Online)&lt;/span&gt;&lt;/h6&gt;
                        &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/td&gt;
                    &lt;td&gt;Designer&lt;/td&gt;
                    &lt;td&gt;
                        &lt;div class="progress-showcase"&gt;
                        &lt;div class="progress" style="height: 8px;"&gt;
                        &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
                        &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/td&gt;
                    &lt;td class="digits"&gt;2 Year&lt;/td&gt;
                &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="bd-t-none u-s-tb"&gt;
                    &lt;div class="align-middle image-sm-size"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="../assets/images/dashboard/user1.jpg" alt="" data-original-title="" title=""&gt;
                    &lt;div class="d-inline-block"&gt;
                    &lt;h6&gt;Holio Mako &lt;span class="text-muted digits"&gt;(250+ Online)&lt;/span&gt;&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;Developer&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress-showcase"&gt;
                    &lt;div class="progress" style="height: 8px;"&gt;
                    &lt;div class="progress-bar bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class="digits"&gt;3 Year&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="bd-t-none u-s-tb"&gt;
                    &lt;div class="align-middle image-sm-size"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="../assets/images/dashboard/man.png" alt="" data-original-title="" title=""&gt;
                    &lt;div class="d-inline-block"&gt;
                    &lt;h6&gt;Mohsib lara&lt;span class="text-muted digits"&gt;(99+ Online)&lt;/span&gt;&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;Tester&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress-showcase"&gt;
                    &lt;div class="progress" style="height: 8px;"&gt;
                    &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class="digits"&gt;5 Month&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="bd-t-none u-s-tb"&gt;
                    &lt;div class="align-middle image-sm-size"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="../assets/images/dashboard/user.png" alt="" data-original-title="" title=""&gt;
                    &lt;div class="d-inline-block"&gt;
                    &lt;h6&gt;Hileri Soli &lt;span class="text-muted digits"&gt;(150+ Online)&lt;/span&gt;&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;Designer&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress-showcase"&gt;
                    &lt;div class="progress" style="height: 8px;"&gt;
                    &lt;div class="progress-bar bg-secondary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class="digits"&gt;3 Month&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="bd-t-none u-s-tb"&gt;
                    &lt;div class="align-middle image-sm-size"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="../assets/images/dashboard/designer.jpg" alt="" data-original-title="" title=""&gt;
                    &lt;div class="d-inline-block"&gt;
                    &lt;h6&gt;Pusiz bia &lt;span class="text-muted digits"&gt;(14+ Online)&lt;/span&gt;&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;Designer&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress-showcase"&gt;
                    &lt;div class="progress" style="height: 8px;"&gt;
                    &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class="digits"&gt;5 Year&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
                                    </code></pre>
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
