<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Bay cùng Vietnam Airlines: Hãng Hàng Không Quốc Gia Việt Nam</title>
		<?php include_once "external_css.php" ?>
	</head>
	<body class="container">

		<?php
		$isFirstView = $this->session->userdata('isFirstView');
		?>
		<div <?php if($isFirstView != 'notIsFirstView') echo "style = 'display: block'" ?> id="popup">
			<div  id="opacity" class="opacity">
			</div>
			<div class="msg">
				<img id="cancel" class="btnCancel" src="<?php echo base_url();?>resource/img/btnCancel.png"/>
				<img src="<?php echo base_url();?>resource/img/popup.png">
			</div>
		</div>
		<?php
		if($isFirstView == NULL){
			$data['isFirstView'] = 'notIsFirstView';
			$this->session->set_userdata($data);

		}
		?>

		<!-- TOP -->
		<header class="margin--vertical">
			<?php include_once "top.php" ?>
		</header>

		<!-- NAVIGATION BAR -->
		<div class="margin--vertical">
			<?php include_once "navbar.php" ?>
		</div>

		<!-- TABS & SLIDE -->
		<div class="row margin--vertical">
			<!-- TABS -->
			<div class="col-md-6">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#sectionA">Mua vé trực tuyến</a></li>
					<li><a data-toggle="tab" href="#sectionB">Làm thủ tục trực tuyến</a></li>
				</ul>
				<?php include_once "navtabs.php" ?>
			</div>

			<!-- SLIDE -->
			<div class="col-md-6 margin--top-25">
				<?php include_once "slide.php" ?>
			</div>
		</div>


		<!-- REGISTER, FAQ, SOCIAL || PROMOTION -->
		<div class="row margin--vertical">
			<!-- LEFT -->
			<div class="col-md-6" style="height: 20%">

				<div>
					<!-- REGISTER  -->
					<div id="register" class="col-md-7" style="background-image: url('<?php echo base_url();?>resource/img/register.jpg');">
						<div  class="col-md-12">
							<div class="col-md-6">
								Số thẻ <br>
								<input type="text" name="txtID" style="width: 100%"><br>
								Mật khẩu <br>
								<input type="password" name="pwPassID" style="width: 100%"> <br>
								<br>
								<input class="mybutton" type="submit" name="btnLogin" value="Login">
							</div>
							<div class="col-md-6">
								<a href ="register.jsp"><b>Đăng ký thành viên</b></a><br>
								<a href ="#">GLP mang lại cho bạn những lợi ích gì?</a>
							</div>
						</div>
					</div>
					<!-- FAQs -->
					<div class="col-md-5" style="padding: 0px 0px 0px 0px">
						<div id='FAQ' class="col-md-12" style="height: 160px">
							<div class="col-md-12" style="background-color: #d09a2d; padding: 0px 10px">
								<span style="background-color: d09a2d; color: white"><b>HỎI VÀ ĐÁP</b></span><br>
							</div>
							<div class="col-md-12" style="padding: 10px">
								<a href="hoidap_muavett.jsp">Mua vé trực tuyến</a><br>
								<a href="hoidap_lamthutuctaisanbay.jsp">Làm thủ tục tại sân bay</a><br>
								<a href="hoidap_lamthutuctt.jsp">Làm thủ tục trực tuyến</a><br>
								<a href="hoidap_ctbongsenvang.jsp">Chương trình Bông Sen Vàng</a><br>
							</div>
						</div>
					</div>
				</div>

				<div>
					<!-- SOCIAL -->
					<div id="social" class="col-md-12 flex">
						<div class="flex__auto">
							<img style="" src="<?php echo base_url();?>resource/img/icon_facebook.png">
							<a href="https://www.facebook.com/VietnamAirlinesCorp">Facebook</a>
						</div>
						<div class="flex__auto">
							<img style="" src="<?php echo base_url();?>resource/img/icon_youtube.png">
							<a href="http://www.youtube.com/user/vietnamairlinescorp">Youtube</a>
						</div>
						<div class="flex__auto">
							<div class="col-md-4" style="padding: 0px">
								<img style="" src="<?php echo base_url();?>resource/img/icon_baocao.png">
							</div>
							<div class="col-md-8" style="padding: 6px 0px 0px 4px">
								<a href="#">Thông cáo<br>báo chí</a>
							</div>
						</div>
						<div class="flex__auto">
							<div class="col-md-4" style="padding: 0px">
								<img style="" src="<?php echo base_url();?>resource/img/icon_email.png">
							</div>
							<div class="col-md-8" style="padding: 6px 0px 0px 4px">
								<a href="#">Đăng kí thư<br> khuyến mại</a>
							</div>
						</div>
					</div>
				</div>


			</div>

			
			<!-- RIGHT -->
			<div class="col-md-6">
				<!-- PROMOTIONS -->
				<div class="col-md-12" style="background-color: #ebebeb; padding: 0px">
					<div class='promotion col-md-4' style='height: 100px; text-align: center'>
						<span style='font-size: 15px; color: black; font-weight: bold; text-align: center'>SINGAPORE<br></span>
						<span style='font-size: 11px; color: black; text-align: center'>Giá hai chiều từ<br></span>
						<span style='font-size: 20px; color:  #d09a2d; font-weight: bold; text-align: center'>18 USD<br></span>
						<span style='font-size: 11px; color: black; text-align: center'>Khởi hành từ Phú Quốc</span>
					</div>
					<div class='promotion col-md-4' style='height: 100px; text-align: center'>
						<span style='font-size: 15px; color: black; font-weight: bold; text-align: center'>SINGAPORE<br></span>
						<span style='font-size: 11px; color: black; text-align: center'>Giá hai chiều từ<br></span>
						<span style='font-size: 20px; color:  #d09a2d; font-weight: bold; text-align: center'>18 USD<br></span>
						<span style='font-size: 11px; color: black; text-align: center'>Khởi hành từ Phú Quốc</span>
					</div>
					<div class='promotion col-md-4' style='height: 100px; text-align: center'>
						<span style='font-size: 15px; color: black; font-weight: bold; text-align: center'>SINGAPORE<br></span>
						<span style='font-size: 11px; color: black; text-align: center'>Giá hai chiều từ<br></span>
						<span style='font-size: 20px; color:  #d09a2d; font-weight: bold; text-align: center'>18 USD<br></span>
						<span style='font-size: 11px; color: black; text-align: center'>Khởi hành từ Phú Quốc</span>
					</div>
					<div class='promotion col-md-4' style='height: 100px; text-align: center'>
						<span style='font-size: 15px; color: black; font-weight: bold; text-align: center'>SINGAPORE<br></span>
						<span style='font-size: 11px; color: black; text-align: center'>Giá hai chiều từ<br></span>
						<span style='font-size: 20px; color:  #d09a2d; font-weight: bold; text-align: center'>18 USD<br></span>
						<span style='font-size: 11px; color: black; text-align: center'>Khởi hành từ Phú Quốc</span>
					</div>
					<div class='promotion col-md-4' style='height: 100px; text-align: center'>
						<span style='font-size: 15px; color: black; font-weight: bold; text-align: center'>SINGAPORE<br></span>
						<span style='font-size: 11px; color: black; text-align: center'>Giá hai chiều từ<br></span>
						<span style='font-size: 20px; color:  #d09a2d; font-weight: bold; text-align: center'>18 USD<br></span>
						<span style='font-size: 11px; color: black; text-align: center'>Khởi hành từ Phú Quốc</span>
					</div>
					<div class='promotion col-md-4' style='height: 100px; text-align: center'>
						<span style='font-size: 15px; color: black; font-weight: bold; text-align: center'>SINGAPORE<br></span>
						<span style='font-size: 11px; color: black; text-align: center'>Giá hai chiều từ<br></span>
						<span style='font-size: 20px; color:  #d09a2d; font-weight: bold; text-align: center'>18 USD<br></span>
						<span style='font-size: 11px; color: black; text-align: center'>Khởi hành từ Phú Quốc</span>
					</div>
				</div>

				<!-- NOTES -->
				<div id="note" class="col-md-12">
					* Giá chưa bao gồm thuế và phí
				</div>
			</div>
		</div>

		<div class="row">
			<!-- BOTTOM -->
			<div class="col-md-12">
				<hr>
				<?php include_once "bottom.php" ?>
			</div>
		</div>  

		<script>
			$(document).ready(function(){
				$('#opacity, #cancel').click(function(){
					$('#popup').hide();
				});
			});

		</script>      

	</body>

</html>