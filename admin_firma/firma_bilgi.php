<?php require_once("../baglan.php"); ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>SANAL | MARKET </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="assets/css/layout2.css" rel="stylesheet" />
    <link href="assets/plugins/flot/examples/examples.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/plugins/timeline/timeline.css" />
    <link href="assets/plugins/jquery-steps-master/demo/css/jquery.steps.css" rel="stylesheet" /> 
    <link rel="stylesheet" href="assets/css/bootstrap-fileupload.min.css" />
    <!-- END PAGE LEVEL  STYLES -->
     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<script src="assets/js/jquery.min.js"></script>

<style>
    .box{
        width:800px;
        margin:0 auto;
    }
    .active_tab1{
        background-color:#fff;
        color:#333;
        font-weight: 600;
    }
    .inactive_tab1{
        background-color: #f5f5f5;
        color: #333;
        cursor: not-allowed;
    }
    .has-error{
        border-color:#cc0000;
        background-color:#ffff99;
    }
</style>


</head>

    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body class="padTop53 " >
    <?php session_start(); ?>

    <!-- MAIN WRAPPER -->
    <div id="wrap" >
        

        <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="index.php" class="navbar-brand">
                    <img src="assets/img/logo.png" alt="" />
                        
                        </a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    <!-- MESSAGES SECTION -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-success">2</span><i class="icon-envelope-alt"></i>&nbsp; <i class="icon-chevron-down"></i>
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
       <div id="left" >
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
                    <a href="firma_??r??n.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav1">
                        ??R??N ????LEMLER??            
                    </a>               
                </li>
                <!-- F??RMA CRUD B??TT?? -->

                <!-- KATEGOR?? CRUD ????LEMLER?? KISMI -->
                <li class="panel">
                    <a href="" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav2">
                        KATEGOR?? ????LEMLER??                                     
                    </a>                   
                </li>
                <!-- KATEGOR?? CRUD B??TT?? -->


                <!-- S??PAR???? ????LEMLER?? KISMI -->
                <li class="panel">
                    <a href="" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav3">
                        S??PAR???? ????LEMLER??                                     
                    </a>
                    <ul class="collapse" id="blank-nav3">                        
                        <li><a href="blank.html"><i class="icon-angle-right"></i> Blank Page One  </a></li>
                        <li><a href="blank2.html"><i class="icon-angle-right"></i> Blank Page Two  </a></li>
                    </ul>
                </li>
                <!-- S??PAR????  B??TT?? -->

                <!-- F??RMA ????LEMLER?? KISMI -->
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav4">
                        F??RMA B??LG??LER??                                   
                    </a>
                    <ul class="collapse" id="blank-nav4">                        
                        <li><a href="firma_bilgi.php"><i class="icon-angle-right"></i>F??RMA B??LG??S?? EKLE  </a></li>
                    </ul>
                </li>
                <!-- F??RMA B??TT?? -->

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

                <!-- SANALKART ????LEMLER?? KISMI -->
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav6">
                        SANALKART ????LEMLER??                                     
                    </a>
                    <ul class="collapse" id="blank-nav6">                        
                        <li><a href="blank.html"><i class="icon-angle-right"></i> Blank Page One  </a></li>
                        <li><a href="blank2.html"><i class="icon-angle-right"></i> Blank Page Two  </a></li>
                    </ul>
                </li>
                <!-- SANALKART B??TT?? -->

                <!-- ??ND??R??M ????LEMLER?? KISMI -->
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav7">
                        ??ND??R??M ????LEMLER??                                     
                    </a>
                    <ul class="collapse" id="blank-nav7">                        
                        <li><a href="blank.html"><i class="icon-angle-right"></i> Blank Page One  </a></li>
                        <li><a href="blank2.html"><i class="icon-angle-right"></i> Blank Page Two  </a></li>
                    </ul>
                </li>
                <!-- ??ND??R??M B??TT?? -->

                <!-- MESAJ ????LEMLER?? KISMI -->
                <li class="panel">
                    <a href="firma_mailbox.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav8">
                        MESAJ ????LEMLER??                                     
                    </a>
                </li>
                <!-- MESAJ B??TT?? -->

                <li><a href="cikis.php"><i class="icon-signin"></i> Login Page </a></li>

             </ul>

        </div>
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">  
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h3> F??RMA B??LG??LER??NE HO??GELD??N??Z </h3>
                    </div>
                </div>
                <hr />

                 <!--BLOCK SECTION -->
    <div class="row">
        <div class="col-lg-12">   

        <div class="container box">        
            <form action="" method="post" id="register_form" enctype="multipart/form-data">
            <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details">F??RMA HAKKINDA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">F??RMA ??LET??????M</a>
            </li>
            <li class="nav-item">
                <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">F??RMA RES??M</a>
            </li>
            </ul>

            <div class="tab-content" style="margin-top:16px;">
                <div class="tab-pane active" id="login_details">
                <div class="panel panel-default">
                <div class="panel-heading">HAKKINDA</div>
                <div class="panel-body">
                <div class="form-group">
                    <textarea name="email" id="email" class="form-control" rows="13"></textarea>  
                    <span id="error_email" class="text-danger"></span>
                </div>
                <br />
                <div align="center">
                    <button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-info btn-lg">??leri</button>
                </div>
                <br />
                </div>
                </div>
                </div>

                <div class="tab-pane fade" id="personal_details">
                <div class="panel panel-default">
                <div class="panel-heading">??LET??????M</div>
                <div class="panel-body">
                <div class="form-group"> 
                    <textarea name="first_name" id="first_name" class="form-control" rows="13"></textarea>                            
                    <span id="error_first_name" class="text-danger"></span>
                </div>
                <br />
                <div align="center">
                    <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Geri</button>
                    <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">??leri</button>
                </div>
                <br />
                </div>
                </div>
                </div>

                <div class="tab-pane fade" id="contact_details">
                <div class="panel panel-default">
                <div class="panel-heading">RES??M</div>
                <div class="panel-body">
                <div class="form-group">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="assets/img/demoUpload.jpg" alt="" /></div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                    <div>
                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="address" id="address"  /></span>
                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                    </div>
                </div>
                <span id="error_address" class="text-danger"></span>
                </div>
                <br />
                <div align="center">
                    <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Geri</button>
                    <input type="submit" name="btn_contact_details" id="btn_contact_details" class="btn btn-success btn-lg" value="Kaydet" />
                </div>
                <br />
                </div>
                </div>
                </div>
            </div>
            </form>
        </div>

        <?php
            if($_POST){
                $firma_isim= $_SESSION["firma"];
                $firma_yetkili= $_SESSION["uye"];
                $firma_hakkinda= $_POST["email"];
                $firma_iletisim= $_POST["first_name"];
                @$firma_resim= $_POST["address"];


                if($_FILES){
                             
                                $maxSize = 7000000;
                                $dosyaUzantisi = substr($_FILES["address"]["name"],-4,4);
                                $dosyaAdi      = rand(1,999999).$dosyaUzantisi;
                                $dosyaYolu     = "upload/".$dosyaAdi; 
                              
                             
                                if($_FILES["address"]["size"]> $maxSize){
                                                
                                    echo '<div class="alert alert-warning">dosya boyutu 700 kb dan buyuk olamaz..</div>';
                    
                                                
                                    }
                                    else{
                                                
                                            $dosya = $_FILES["address"]["type"];
                                                    
                                                    if($dosya == "image/jpeg" || $dosya == "image/png" || $dosya == "image/gif"){
                                                            
                                                        if(is_uploaded_file($_FILES["address"]["tmp_name"])){
             
                                                        
                                                        $ok = move_uploaded_file($_FILES["address"]["tmp_name"],$dosyaYolu);
                                                        
                                                        if($ok){
                                                        
                                                        $firma_resim = $dosyaYolu;
                                                            
                                                        }else {
                                                            
                                                        echo '<div class="alert alert-warning">dosya tas??namad??...</div>';

                                                            
                                                        }
                                                                
                                                            }else{
                                                                
                                                                 echo '<div class="alert alert-warning">dosya yuklenemedi..</div>';
                                                            }
                                                                                                 
                                                            
                                                        }else{
                                                            
                                                            echo '<div class="alert alert-warning">dosya formati sadece resim olmal??d??r...</div>';
                                                            
                                                        }                                      
                                                
                                            }
                             
                         }

            $ekle=$db->prepare("insert into firma set firma_isim=?,firma_yetkili=?, firma_hakkinda=?,firma_iletisim=?,firma_resim=?");
            $ekle->execute(array($firma_isim,$firma_yetkili,$firma_hakkinda,$firma_iletisim,$firma_resim));

            $hata = $ekle->errorInfo();
            echo empty($hata[2]) ?  "Ba??ar??l?? Bir ??ekilde ??al????t??." : $hata[2];
            }  
        ?>

        
    <script>
        $(document).ready(function(){
         
            $('#btn_login_details').click(function(){
          
            var error_email = '';
          
            if($.trim($('#email').val()).length == 0)
            {
            error_email = 'Hakkinda is required';
            $('#error_email').text(error_email);
            $('#email').addClass('has-error');
            }
            else
            {          
            }

            if(error_email != '')
            {
             return false;
            }
            else
            {
            $('#list_login_details').removeClass('active active_tab1');
            $('#list_login_details').removeAttr('href data-toggle');
            $('#login_details').removeClass('active');
            $('#list_login_details').addClass('inactive_tab1');
            $('#list_personal_details').removeClass('inactive_tab1');
            $('#list_personal_details').addClass('active_tab1 active');
            $('#list_personal_details').attr('href', '#personal_details');
            $('#list_personal_details').attr('data-toggle', 'tab');
            $('#personal_details').addClass('active in');
            }
            });
         
            $('#previous_btn_personal_details').click(function(){
            $('#list_personal_details').removeClass('active active_tab1');
            $('#list_personal_details').removeAttr('href data-toggle');
            $('#personal_details').removeClass('active in');
            $('#list_personal_details').addClass('inactive_tab1');
            $('#list_login_details').removeClass('inactive_tab1');
            $('#list_login_details').addClass('active_tab1 active');
            $('#list_login_details').attr('href', '#login_details');
            $('#list_login_details').attr('data-toggle', 'tab');
            $('#login_details').addClass('active in');
            });
         

            $('#btn_personal_details').click(function(){
            var error_first_name = '';
          
            if($.trim($('#first_name').val()).length == 0)
            {
            error_first_name = '??leti??im is required';
            $('#error_first_name').text(error_first_name);
            $('#first_name').addClass('has-error');
            }
            else
            {
            error_first_name = '';
            $('#error_first_name').text(error_first_name);
            $('#first_name').removeClass('has-error');
            }

            if(error_first_name != '')
            {
            return false;
            }
            else
            {
            $('#list_personal_details').removeClass('active active_tab1');
            $('#list_personal_details').removeAttr('href data-toggle');
            $('#personal_details').removeClass('active');
            $('#list_personal_details').addClass('inactive_tab1');
            $('#list_contact_details').removeClass('inactive_tab1');
            $('#list_contact_details').addClass('active_tab1 active');
            $('#list_contact_details').attr('href', '#contact_details');
            $('#list_contact_details').attr('data-toggle', 'tab');
            $('#contact_details').addClass('active in');
            }
            });
         
            $('#previous_btn_contact_details').click(function(){
            $('#list_contact_details').removeClass('active active_tab1');
            $('#list_contact_details').removeAttr('href data-toggle');
            $('#contact_details').removeClass('active in');
            $('#list_contact_details').addClass('inactive_tab1');
            $('#list_personal_details').removeClass('inactive_tab1');
            $('#list_personal_details').addClass('active_tab1 active');
            $('#list_personal_details').attr('href', '#personal_details');
            $('#list_personal_details').attr('data-toggle', 'tab');
            $('#personal_details').addClass('active in');
            });
         
            $('#btn_contact_details').click(function(){
            var error_address = '';

            if($.trim($('#address').val()).length == 0)
            {
            error_address = 'Address is required';
            $('#error_address').text(error_address);
            $('#address').addClass('has-error');
            }
            else
            {
            error_address = '';
            $('#error_address').text(error_address);
            $('#address').removeClass('has-error');
            }
          
            if(error_address != '')
            {
            return false;
            }
            else
            {
            $('#btn_contact_details').attr("disabled", "disabled");
            $(document).css('cursor', 'prgress');
            $("#register_form").submit();
            }
          
            });
         
        });
    </script>
        
            

        </div>
    </div>
    <!--END BLOCK SECTION -->
    <hr />           
             
    </div>
    </div>
     <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
        <div id="right">
            <div class="well well-small">
                <ul class="list-unstyled">
                    <li>Visitor &nbsp; : <span>23,000</span></li>
                    <li>Users &nbsp; : <span>53,000</span></li>
                    <li>Registrations &nbsp; : <span>3,000</span></li>
                </ul>
            </div>

        </div>
         <!-- END RIGHT STRIP  SECTION -->
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
    <script src="assets/plugins/jquery-steps-master/lib/jquery.cookie-1.3.1.js"></script>
    <script src="assets/plugins/jquery-steps-master/build/jquery.steps.js"></script>   
    <script src="assets/js/WizardInit.js"></script> 
    <script src="assets/plugins/jasny/js/bootstrap-fileupload.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->


</body>

    <!-- END BODY -->
</html>
