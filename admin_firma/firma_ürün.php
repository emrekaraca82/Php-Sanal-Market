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
                                $b= $_SESSION["firma"];      
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
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav2">
                        KATEGOR?? ????LEMLER??                                     
                    </a>                   
                </li>
                <!-- KATEGOR?? CRUD B??TT?? -->


                <!-- S??PAR???? ????LEMLER?? KISMI -->
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav3">
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
            <div class="inner" style="min-height:1200px;">

                <div class="row">
                    <div class="col-lg-12">
                        <h3>??R??N ????LEMLER??NE HO??GELD??N??Z</h3>
                    </div>
                </div>
                <hr /> 

                <!--??R??N EKLEME MODAL -->            
                <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#uiModal">??R??N ADD</a><hr /> 
                <div class="modal fade" id="uiModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" style="margin-left: 200px;" id="H3">??r??n Ekleme</h4>
                            </div>
                                <div class="modal-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>??r??n ??sim</label>
                                        <input class="form-control" name="urun_isim" required />                                    
                                    </div>

                                    <div class="form-group">
                                        <label>??r??n Kategori</label>
                                            <?php $ustkategorilist = $db->query("SELECT * FROM kategori where kategori_ust=0")->fetchAll(PDO::FETCH_ASSOC); ?>
                                            <select class="form-control" name="urun_kategori" id="ustkategori" required>
                                                <option>Bir Kategori Se??iniz</option>
                                                <?php 
                                                    foreach ($ustkategorilist as $key => $value) {
                                                    echo '<option value="'.$value['kategori_id'].'">'.$value['kategori_isim'].'</option>';
                                                }
                                                ?>                                                                                        
                                            </select>
                                    </div>

                                    <script src="../js/jquery-3.4.0.min.js"  type="text/javascript"></script>
                                    <div class="form-group">
                                        <label>??r??n Alt Kategori</label>
                                            <select class="form-control" name="urun_altkategori" id="altkategori" disabled="disabled" required>
                                                <script type="text/javascript"> 
                                                    var sel=document.getElementById("ustkategori"),text=document.getElementById("altkategori");
                                                    sel.onchange=function(f)
                                                    {
                                                        text.disabled=(sel.value == "Bir Kategori Se??iniz");
                                                    };                  
                                                </script>
                                                <script type="text/javascript"> 
                                                $(document).ready(function(){
                                                    $("#ustkategori").change(function(){
                                                        var kategoriid=$(this).val();
                                                        $.ajax({
                                                            type:"POST",
                                                            url:"../ajax.php",
                                                            data:{"ustkategori":kategoriid},
                                                            success:function(e)
                                                            {                       
                                                                $("#altkategori").html(e);
                                                            }
                                                            });
                                                            })
                                                        });
                                                </script>                                            
                                            </select>
                                    </div>

                                    <div class="form-group">
                                        <label>??r??n Stok</label>
                                        <input class="form-control" name="urun_stok" required />                                    
                                    </div>

                                    <div class="form-group">
                                        <label>??r??n Fiyat</label>
                                        <input class="form-control" name="urun_fiyat" required />                                    
                                    </div>

                                    <div class="form-group">
                                        <label>??r??n Resim</label>
                                        <input type="file" name="urun_resim" required />
                                    </div>

                                    <div class="form-group">
                                        <label>??r??n A????klama</label>
                                        <textarea class="form-control" name="urun_aciklama" rows="5"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>??r??n Tarif</label>
                                        <textarea class="form-control" name="urun_tarif" rows="5"></textarea>
                                    </div>                                                               
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                                    <button type="submit" class="btn btn-primary" name="btn_kaydet">Kaydet</button>
                                </div>
                                </form>
                            </div>
                        </div>
                </div>
                <!-- ??R??N EKLEME MODAL B??TT?? -->


                <!-- PHP ??R??N EKLEME KOD -->
                <?php                     
                    if(isset($_POST['btn_kaydet'])){
                        $urun_firma=$_SESSION["firma"];
                        $urun_isim = $_POST["urun_isim"];
                        $urun_kategori = $_POST["urun_altkategori"];
                        $urun_stok = $_POST["urun_stok"];
                        $urun_fiyat = $_POST["urun_fiyat"];                       
                        $urun_aciklama = $_POST["urun_aciklama"];
                        $urun_tarif = $_POST["urun_tarif"];  
                        @$urun_resim = $_POST["urun_resim"];                   
                        
                            if($_FILES){
                             
                                $maxSize = 7000000;
                                $dosyaUzantisi = substr($_FILES["urun_resim"]["name"],-4,4);
                                $dosyaAdi      = rand(1,999999).$dosyaUzantisi;
                                $dosyaYolu     = "upload/".$dosyaAdi; 
                              
                             
                                if($_FILES["urun_resim"]["size"]> $maxSize){
                                                
                                    echo '<div class="alert alert-warning">dosya boyutu 700 kb dan buyuk olamaz..</div>';
                    
                                                
                                    }
                                    else{
                                                
                                            $dosya = $_FILES["urun_resim"]["type"];
                                                    
                                                    if($dosya == "image/jpeg" || $dosya == "image/png" || $dosya == "image/gif"){
                                                            
                                                        if(is_uploaded_file($_FILES["urun_resim"]["tmp_name"])){
             
                                                        
                                                        $ok = move_uploaded_file($_FILES["urun_resim"]["tmp_name"],$dosyaYolu);
                                                        
                                                        if($ok){
                                                        
                                                        $urun_resim = $dosyaYolu;
                                                            
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
                        
                        $ekle=$db->prepare("insert into urun set urun_firma=?,urun_isim=?,urun_kategori=?,urun_stok=?,urun_fiyat=?,urun_resim=?,urun_aciklama=?,urun_tarif=?");
                        $ekle->execute(array($urun_firma,$urun_isim,$urun_kategori,$urun_stok,$urun_fiyat,$urun_resim,$urun_aciklama,$urun_tarif));
                    }
                ?>
                <!-- PHP ??R??N EKLEME KOD -->


                <script language="javascript">
                    function confirmDel() {
                        var agree=confirm("Bu i??eri??i silmek istedi??inizden emin misiniz?\nBu i??lem geri al??namaz!");
                        if (agree) {
                            return true ; 
                        }
                        else {
                            return false ;
                        }
                    }
                </script>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>         
                                            <th>??R??N RES??M</th>                                 
                                            <th>??R??N ??S??M</th>
                                            <th>??R??N KATEGOR??</th>
                                            <th>??R??N F??YAT</th>                                   
                                            <th>??R??N STOK</th>
                                            <th>G??NCELLE</th>
                                            <th>S??L</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php                               
                                        $veri= $db->query("SELECT * FROM urun where urun_firma='$b'", PDO::FETCH_ASSOC);            
                                            foreach($veri as $row){  
                                               $row['urun_id'];
                                               $a=$row['urun_id'];
                                    ?>
                                        <tr>
                                            <td><img src="<?php echo $row["urun_resim"];?>" style="width: 50%; height: 150px;"></td>
                                            <td><?php echo $row['urun_isim'] ?></td>
                                            <td><?php echo $row['urun_kategori'] ?></td>
                                            <td><?php echo $row['urun_fiyat'] ?></td>
                                            <td><?php echo $row['urun_stok'] ?></td>
                                            <td class="center">                                          
                                                <button class="btn btn-inverse" data-toggle="modal" data-target="#<?php echo $a; ?>"></i> Update</button></a>                              
                                            </td>
                                            <td class="center">
                                                <?php echo "<a href='function.php?id=".$a."'onclick='return confirmDel();'>";?>
                                                <p type="submit" name="urun_delete" class="btn btn-danger">Delete</p></a>
                                            </td>                                                                                    
                                        </tr> 
                                        <?php
                                    }
                                    ?>                                      
                                    </tbody>                           
                                </table>
                            </div>                      
                        </div>
                    </div>
                </div>
            </div>
            <!--row div bitti -->


            <!-- ??R??N G??NCELLEME MODAL -->
            <div class="modal fade" id="<?php echo $a; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" style="margin-left: 200px;" id="H3">??r??n G??ncelleme</h4>
                            </div>
                                <div class="modal-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>??r??n ??sim</label>
                                        <input class="form-control" name="urun_isim"
                                            value="<?php echo $row['urun_isim']; ?>"/>                                    
                                    </div>

                                    <div class="form-group">
                                        <label>??r??n Kategori</label>
                                            <?php $ustkategorilist = $db->query("SELECT * FROM kategori where kategori_ust=0")->fetchAll(PDO::FETCH_ASSOC); ?>
                                            <select class="form-control" name="urun_kategori" id="ust-kategori">
                                                <option>Bir Kategori Se??iniz</option>
                                                <?php 
                                                    foreach ($ustkategorilist as $key => $value) {
                                                    echo '<option value="'.$value['kategori_id'].'">'.$value['kategori_isim'].'</option>';
                                                }
                                                ?>                                                                                        
                                            </select>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label>??r??n Alt Kategori</label>
                                            <select class="form-control" name="urun_altkategori" id="alt-kategori" >
                                               
                                                <script type="text/javascript"> 
                                                $(document).ready(function(){
                                                    $("#ust-kategori").change(function(){
                                                        var kategoriid=$(this).val();
                                                        $.ajax({
                                                            type:"POST",
                                                            url:"../ajax.php",
                                                            data:{"ust-kategori":kategoriid},
                                                            success:function(e)
                                                            {                       
                                                                $("#alt-kategori").html(e);
                                                            }
                                                            });
                                                            })
                                                        });
                                                </script>                                            
                                            </select>
                                    </div>

                                    <div class="form-group">
                                        <label>??r??n Stok</label>
                                        <input class="form-control" name="urun_stok" 
                                        value="<?php echo $row['urun_stok']; ?>"/>                                    
                                    </div>

                                    <div class="form-group">
                                        <label>??r??n Fiyat</label>
                                        <input class="form-control" name="urun_fiyat"
                                        value="<?php echo $row['urun_fiyat']; ?>"/>                                    
                                    </div>

                                    <div class="form-group">
                                        <label>??r??n Resim</label>
                                        <input type="file" name="urun_resim" />
                                    </div>

                                    <div class="form-group">
                                        <label>??r??n A????klama</label>
                                        <textarea class="form-control" name="urun_aciklama" rows="5" 
                                        value="<?php echo $row['urun_aciklama']; ?>"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>??r??n Tarif</label>
                                        <textarea class="form-control" name="urun_tarif" rows="5"
                                        value="<?php echo $row['urun_tarif']; ?>"></textarea>
                                    </div>                                                               
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                                    <button type="submit" name="urun_update" class="btn btn-primary">Kaydet</button>
                                    <?php echo $a; ?>
                                </div>
                                </form>
                            </div>
                        </div>
                </div>
                <!-- ??R??N G??NCELLEME MODAL B??TT?? -->


                <!-- PHP ??R??N G??NCELLEME KOD -->
<?php 
    if(isset($_POST['urun_update']))
       {   
            $urun_isim = $_POST["urun_isim"];
            @$urun_kategori = $_POST["urun_altkategori"];
            $urun_stok = $_POST["urun_stok"];
            $urun_fiyat = $_POST["urun_fiyat"];                       
            $urun_aciklama = $_POST["urun_aciklama"];
            $urun_tarif = $_POST["urun_tarif"];  
            @$urun_resim = $_POST["urun_resim"];
                        
                if($_FILES){
                    $maxSize = 7000000;
                    $dosyaUzantisi = substr($_FILES["urun_resim"]["name"],-4,4);
                    $dosyaAdi      = rand(1,999999).$dosyaUzantisi;
                    $dosyaYolu     = "upload/".$dosyaAdi;    
                             
                        if($_FILES["urun_resim"]["size"]> $maxSize){
                                                
                            echo '<div class="alert alert-warning">dosya boyutu 700 kb dan buyuk olamaz..</div>';
                                                
                                }
                                    else{
                                                
                                            $dosya = $_FILES["urun_resim"]["type"];
                                                    
                                                    if($dosya == "image/jpeg" || $dosya == "image/png" || $dosya == "image/gif"){
                                                            
                                                        if(is_uploaded_file($_FILES["urun_resim"]["tmp_name"])){
             
                                                        @unlink($row["urun_resim"]);

                                                        $ok = move_uploaded_file($_FILES["urun_resim"]["tmp_name"],$dosyaYolu);
                                                        
                                                        if($ok){
                                                        
                                                        $urun_resim = $dosyaYolu;
                                                            
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
        $guncelle=$db->prepare("UPDATE urun SET urun_isim=?,urun_kategori=?,urun_stok=?,urun_fiyat=?,urun_resim=?,urun_aciklama=?,urun_tarif=? WHERE urun_id=?");
        $guncelle->execute(array($urun_isim,$urun_kategori,$urun_stok,$urun_fiyat,$urun_resim,$urun_aciklama,$urun_tarif,$a)); 
    }
?>
<!-- PHP ??R??N G??NCELLEME -->

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
