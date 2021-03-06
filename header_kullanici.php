<?php require_once("baglan.php"); ?>
<!-- php üye giriş kontrol -->
	<?php 
		session_start();
		
		$v = $db->prepare("select * from uye where uye_eposta=? and uye_sifre=?");
		
		if(isset($_POST['btn_giris'])){
			
			$uye_eposta = $_POST["uye_eposta"];
			$uye_sifre = $_POST["uye_sifre"];
			
		$v->execute(array($uye_eposta,$uye_sifre));
		
		$x = $v->fetch(PDO::FETCH_ASSOC);
		
		$d = $v->rowCount();
		
		if($d){
			
			$_SESSION["id"] = $x["uye_id"];
			$_SESSION["uye"] = $x["uye_adsoyad"];
			$_SESSION["durum"] = $x["uye_durum"];
			$_SESSION["firma"] = $x["uye_firmaad"];
			$_SESSION["tur"] = $x["uye_tur"];
			$_SESSION["eposta"] = $x["uye_eposta"];
			


			if($_SESSION["durum"] == 1){
				
				if($_SESSION["tur"]=="Kullanici"){
					header ("Location:index_kullanici.php");
				}

				else if($_SESSION["tur"]=="Firma"){
					header ("Location:admin_firma/index.php");
				}

				else
					header ("Location:admin_ana/index.php");			
			}

			else {
					echo '<div class="alert alert-danger">Üyeliğiniz Henüz Onaylanmadı</div>';
					header('Refresh: 2; url=index.php'); 
				}
		}

		else{
			echo '<div class="alert alert-danger">Kullanıcı Adı veya Parola Yanlış</div>';
			header("refresh: 2; url=index.php");
		}	
		}
	?>
	<!-- php üye giriş kontrol bitti -->

<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="logo pull-left">
							<a href="index_kullanici.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">	
						</div>
					</div>
					<div class="col-sm-9">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Sepet</a></li>
								<li><a href="index.php"><i class="fa fa-crosshairs"></i> Çıkış Yap</a></li>
								<li><a> <b> <?php echo $_SESSION["uye"]; ?></b></a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
		

	<!--kayıt ol modal -->
	<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel" style="font-size:20px; text-align:center">Sisteme Kayıt Ol</h5>	 
		</div>
		<div class="modal-body">
		  <form action="" method="post">
			<div class="form-group">
			  <input class="form-control" name="uye_adsoyad" maxlength="50" id="message-text"  placeholder="Ad Soyad" required/>
			</div>

			<div class="form-group">
			  <input class="form-control" name="uye_eposta" maxlength="50" id="message-text1"  placeholder="E-mail" required/>
			</div>

			<div class="form-group">
			  <input class="form-control" type="password" name="uye_sifre" maxlength="50" id="message-text2"  placeholder="Şifre" required/>
			</div>

			<div class="form-group">
			  	<input class="form-control" name="uye_telefon" maxlength="11" id="message-text3" onkeypress="return isNumberKey(event)" placeholder="Telefon(05xxxxxxxxx)" required/>
			  	<script type="text/javascript">
			  		
			  		 function isNumberKey(evt) 
			  		{
					    var charCode = (evt.which) ? evt.which : event.keyCode;
					    if (charCode > 31 && (charCode < 48 || charCode > 57))
					        return false;
					    return true;
					}
			  	</script>			 
			</div>

			<div class="form-group">
		      <select id="tur" name="uye_tur" class="form-control" required>
		      		<option disabled selected>Lütfen Kullanıcı Tipini Seçiniz</option>
					<option>Firma</option>
					<option>Kullanıcı</option>
		      </select>
			</div>


			<div class="form-group">
		        <input class="form-control" type="text" name="uye_firmaad" maxlength="100" id="message-text4" disabled="disabled"  placeholder="Firma Adını Giriniz" required/>						      		
					<script type="text/javascript"> 
			      		var sel=document.getElementById("tur"),text=document.getElementById("message-text4");
			      		sel.onchange=function(f)
			      		{
			      			text.disabled=(sel.value !== "Firma");
			      		};	      			
		      		</script>
			</div>

			<script src="js/jquery-3.4.0.min.js"  type="text/javascript"></script>
			<div class="form-group">
				<?php $illist = $db->query("SELECT * FROM muh_iller")->fetchAll(PDO::FETCH_ASSOC); ?>
	     		<select id="il" name="uye_il" class="form-control">
					<option> İl Seçiniz</option>
					<?php 
						foreach ($illist as $key => $value) {
						echo '<option value="'.$value['id'].'">'.$value['baslik'].'</option>';
					}
					?>
	      		</select>
			</div>
			
			<div class="form-group">
	      		<select id="ilce" name="uye_ilce" class="form-control">
					<script type="text/javascript"> 
		      			$(document).ready(function(){		      				
		      				$("#il").change(function(){
		      					 	var ilid=$(this).val();
		      					 	$.ajax({
		      					 		type:"POST",
		      					 		url:"ajax.php",
		      					 		data:{"il":ilid},
		      					 		success:function(e)
		      					 		{ 					 	
		      					 		  $("#ilce").html(e);
		      					 		}
		      					 	});
		      				})
		      			});
		      		</script>
	      		</select>
    		</div>	
		</div>

		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
		  <button type="submit" name="btn_gönder" class="btn btn-primary">Gönder</button>
		</div>
		</form>
	  </div>
	</div>
	</div>
	<!-- modal bitiş -->


	<!-- php uye ekleme -->
	<?php 
		if(isset($_POST['btn_gönder'])){
			$uye_adsoyad = $_POST["uye_adsoyad"];
			$uye_eposta = $_POST["uye_eposta"];
			$uye_sifre = $_POST["uye_sifre"];
			$uye_telefon = $_POST["uye_telefon"];
			$uye_tur = $_POST["uye_tur"];
			@$uye_firmaad= $_POST["uye_firmaad"];
			if (empty($uye_firmaad))
			{$uye_firmaad=" ";}
			$uye_il = $_POST["uye_il"];
			$uye_ilce = $_POST["uye_ilce"];			

			$ekle=$db->prepare("insert into uye set uye_adsoyad=?,uye_eposta=?,uye_sifre=?,uye_telefon=?,uye_tur=?,uye_firmaad=?,uye_il=?,uye_ilce=?");
			$ekle->execute(array($uye_adsoyad,$uye_eposta,$uye_sifre,$uye_telefon,$uye_tur,$uye_firmaad,$uye_il,$uye_ilce));
		}
	?>
	<!-- php uye ekleme -->


	<!--sisteme giriş modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title"  id="exampleModalLabel" style="font-size:20px; text-align:center">Sisteme Giriş</h5>
		</div>
		<div class="modal-body">
		  <form action="" method="post">
			<div class="form-group">
			  <input type="text" class="form-control" name="uye_eposta" id="recipient-name" placeholder="E-Postanızı Giriniz">
			</div>
			<div class="form-group">
			  <input type="password" class="form-control" name="uye_sifre" id="message-text"  placeholder="Şifrenizi Giriniz"/>
			</div>
		  
		</div>
		<div class="modal-footer">
			<a class="text-muted" style="float: left; color: black;" href="#">Şifremi Unuttum?</a>
		  	<button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
		  	<button type="submit" name="btn_giris" class="btn btn-primary">Giriş Yap</button>
		</div>
		</form>
	  </div>
	</div>
	</div>
	<!-- modal bitiş -->


	

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index_kullanici.php" class="active">Anasayfa</a></li>
								<li><a href="blog_kullanici.php">Firmalar</a></li> 								 							<li><a href="contact-us_kullanici.php">İletişim</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Arama"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
