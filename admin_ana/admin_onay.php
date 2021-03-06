<?php require_once("../baglan.php"); ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="tr"> <!--<![endif]-->

<!-- BEGIN HEAD-->
<head>
   
     <meta charset="UTF-8" />
    <title>SANAL | MARKET</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- END PAGE LEVEL  STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <!-- END PAGE LEVEL  STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END  HEAD-->
    <!-- BEGIN BODY-->
<body class="padTop53 " >
    <?php session_start(); ?>
     <!-- MAIN WRAPPER -->
    <div id="wrap">


         <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="index.php" class="navbar-brand">
                    <img src="assets/img/logo.png" alt="" /></a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    <!-- MESSAGES SECTION -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-success">2</span>    <i class="icon-envelope-alt"></i>&nbsp; <i class="icon-chevron-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                       <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Today</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                        <br />
                                        <span class="label label-primary">Important</span> 

                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>Raphel Jonson</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                         <br />
                                        <span class="label label-success"> Moderate </span> 
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>Chi Ley Suk</strong>
                                        <span class="pull-right text-muted">
                                            <em>26 Jan 2014</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                         <br />
                                        <span class="label label-danger"> Low </span> 
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Read All Messages</strong>
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <!--END MESSAGES SECTION -->

                    <!--TASK SECTION -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-danger">5</span>   <i class="icon-tasks"></i>&nbsp; <i class="icon-chevron-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-tasks">
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> Profile </strong>
                                            <span class="pull-right text-muted">40% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> Pending Tasks </strong>
                                            <span class="pull-right text-muted">20% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> Work Completed </strong>
                                            <span class="pull-right text-muted">60% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> Summary </strong>
                                            <span class="pull-right text-muted">80% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Tasks</strong>
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <!--END TASK SECTION -->

                    <!--ALERTS SECTION -->
                    <li class="chat-panel dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-info">8</span>   <i class="icon-comments"></i>&nbsp; <i class="icon-chevron-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-alerts">

                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-comment" ></i> New Comment
                                    <span class="pull-right text-muted small"> 4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-twitter info"></i> 3 New Follower
                                    <span class="pull-right text-muted small"> 9 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-envelope"></i> Message Sent
                                    <span class="pull-right text-muted small" > 20 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-tasks"></i> New Task
                                    <span class="pull-right text-muted small"> 1 Hour ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-upload"></i> Server Rebooted
                                    <span class="pull-right text-muted small"> 2 Hour ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <!-- END ALERTS SECTION -->

                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i> User Profile </a>
                            </li>                         
                            <li class="divider"></li>
                            <li><a href="cikis.php"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
       <div id="left">
                <div class="media user-media well-small">
                    <a class="user-link" href="#">
                        <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif" />
                    </a>
                    <br />
                    <div class="media-body">
                        <h5 class="media-heading" style="font-weight: inherit; text-transform: capitalize; font-size: 16px;">
                            <?php 
                            if($_SESSION){               
                                echo $_SESSION["uye"];        
                            }
                            ?>  
                        </h5>
                        <ul class="list-unstyled user-info">                      
                            <li>
                                 <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                               
                            </li>
                        </ul>
                    </div>
                    <br />
                </div>

          <ul id="menu" class="collapse">

                <li class="panel">
                    <a href="index.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav">
                        ANASAYFA          
                    </a>               
                </li>

                <!-- F??RMA CRUD ????LEMLER?? KISMI -->
                <li class="panel">
                    <a href="admin_firma.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav1">
                        F??RMA ????LEMLER??            
                    </a>               
                </li>
                <!-- F??RMA CRUD B??TT?? -->

                <!-- M????TER?? CRUD ????LEMLER?? KISMI -->
                <li class="panel">
                    <a href="admin_kullan??c??.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav2">
                        M????TER?? ????LEMLER??                                     
                    </a>                  
                </li>
                <!-- M????TER?? CRUD B??TT?? -->


                <!-- ADM??N ONAY ????LEMLER?? KISMI -->
                <li class="panel">
                    <a href="admin_onay.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav3">
                        ONAY ????LEMLER??                                     
                    </a>          
                </li>
                <!-- ADM??N ONAY  B??TT?? -->

                <!-- MESAJ ????LEMLER?? KISMI -->
                <li class="panel">
                    <a href="admin_mailbox.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav4">
                        MESAJ ????LEMLER??                                     
                    </a>             
                </li>
                <!-- MESAJ B??TT?? -->

                <!-- ??STAT??ST??KLER ????LEMLER?? KISMI -->
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav5">
                        ??STAT??ST??K ????LEMLER??                                     
                    </a>
                    <ul class="collapse" id="blank-nav5">                        
                        <li><a href="blank.html"><i class="icon-angle-right"></i> Blank Page One  </a></li>
                        <li><a href="blank2.html"><i class="icon-angle-right"></i> Blank Page Two  </a></li>
                    </ul>
                </li>
                <!-- ??STAT??ST??KLER B??TT?? -->

                <li><a href="cikis.php"><i class="icon-signin"></i> Login Page </a></li>

             </ul>

        </div>
        <!--END MENU SECTION -->

        <script language="javascript">
            function confirmOnay() {
                var agree=confirm("Bu i??lemi onaylamak istedi??inizden emin misiniz?\nBu i??lem geri al??namaz!");
                    if (agree) {
                        return true ; }
                    else {
                      return false ;}
            }
        </script>

        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>ADM??N ONAY ????LEMLER??NE HO??GELD??N??Z</h2>
                    </div>
                </div>
                <hr />              
                
                <div class="row"> 

                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            KULLANICI ONAY L??STES??
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <form action="" method="post">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Kullan??c?? Ad??</th>
                                            <th>Kullan??c?? E-mail</th>
                                            <th>Durum</th>
                                            <th>Onay</th>
                                        </tr>
                                    </thead>
                                    <?php                               
                                        $veri= $db->query("SELECT * FROM uye where uye_durum='0' and uye_tur='Kullan??c??'", PDO::FETCH_ASSOC);            
                                            foreach($veri as $row){  
                                               $row['uye_id'];
                                               $a=$row['uye_id'];
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row['uye_id'] ?></td>                                
                                            <td><?php echo $row['uye_adsoyad'] ?></td>
                                            <td><?php echo $row['uye_eposta'] ?></td>
                                            <td><?php echo $row['uye_durum'] ?></td>
                                            <td><button type="submit" class="btn btn-success btn-sm" name="kullanici_onay" onclick="return confirmOnay();"></i>Onay</button> </td>
                                        </tr>          
                                    </tbody>
                                    <?php
                                    }
                                    ?>  
                                    <?php
                                        if(isset($_POST['kullanici_onay'])){                  
                                            $guncelle = $db->prepare("UPDATE uye SET uye_durum=? WHERE uye_id =".$a."");
                                            $guncelle->execute(array('1'));
                                            $hata = $guncelle->errorInfo();                                                      
                                        }   
                                    ?>   
                                </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                

                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            F??RMA ONAY L??STES??
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <form action="" method="post">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Firma Ad??</th>
                                            <th>Firma E-mail</th>
                                            <th>Durum</th>
                                            <th>Onay</th>
                                        </tr>
                                    </thead>
                                    <?php                               
                                        $veri= $db->query("SELECT * FROM uye where uye_durum='0' and uye_tur='Firma'", PDO::FETCH_ASSOC);
                                            foreach($veri as $row){  
                                               $row['uye_id'];
                                               $a=$row['uye_id'];
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row['uye_id'] ?></td>                                
                                            <td><?php echo $row['uye_firmaad'] ?></td>
                                            <td><?php echo $row['uye_eposta'] ?></td>
                                            <td><?php echo $row['uye_durum'] ?></td>
                                            <td>
                                            <button type="submit" class="btn btn-success btn-sm" name="firma_onay" onclick="return confirmOnay();"></i>Onay</button> 
                                            </td>
                                        </tr>          
                                    </tbody>                            
                                    <?php
                                    }
                                    ?>  
                                    <?php
                                        if(isset($_POST['firma_onay'])){                  
                                            $guncelle = $db->prepare("UPDATE uye SET uye_durum=? WHERE uye_id =".$a."");
                                            $guncelle->execute(array('1'));
                                            $hata = $guncelle->errorInfo();                                            
                                        }   
                                    ?>      
                                </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
            </div>

       <!--END PAGE CONTENT -->


    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
    <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
</body>
    <!-- END BODY-->
    
</html>
