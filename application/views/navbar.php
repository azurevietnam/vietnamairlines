<nav role="navigation" class="navbar navbar-default">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" >
		<ul class="nav navbar-nav">
			<li <?php if($menuActive == 'trang_chu') echo "class = 'active'"; ?>><a href="<?php echo base_url(); ?>">Trang chủ</a></li>
			<li class="dropdown <?php if($menuActive == 'lich_bay') echo 'active'; ?> " >
				<a href="<?php echo base_url();?>index.php/site/lich_bay" class="dropdown-toggle">Lịch bay<b class="caret"></b></a>
				<ul role="menu" class="dropdown-menu">
					<li><a href="#">Mạng đường bay</a></li>
					<li><a href="#">Đội bay</a></li>
					<li><a href="#">Tra cứu lịch bay</a></li>
					<li><a href="#">Tra cứu giờ cất và hạ cánh</a></li>
				</ul>
			</li>
			<li class="dropdown <?php if($menuActive == 'mua_ve_truc_tuyen') echo 'active'; ?> ">
				<a href="<?php echo base_url();?>index.php/site/mua_ve_truc_tuyen" class="dropdown-toggle">Mua vé trực tuyến<b class="caret"></b></a>
				<ul role="menu" class="dropdown-menu">
					<li><a href="#">Mua vé</a></li>
					<li><a href="#">Các loại giá vé</a></li>
					<li><a href="#">Phương thức thanh toán</a></li>
					<a href="#"></a>
					<li><a href="#">Tra cứu vé điện tử</a></li>
					<li><a href="#">Hoàn/Đổi vé</a></li>
					<li><a href="#">Thuế, phí, lệ phí và phụ thu</a></li>
					<li><a href="#">Đặt trước vị trí ngồi</a></li>
				</ul>
			</li>
			<li class="dropdown <?php if($menuActive == 'truoc_chuyen_bay') echo 'active'; ?> ">
				<a href="<?php echo base_url();?>index.php/site/truoc_chuyen_bay" class="dropdown-toggle" id="test" >Trước chuyến bay<b class="caret"></b></a>
				<ul role="menu" class="dropdown-menu">
					<li><a href="#">Yêu cầu giấy tờ</a></li>
					<li><a href="#">Làm thủ tục trực tuyến</a></li>
					<li><a href="#">Làm thủ tục tại sân bay</a></li>
					<li><a href="#">Thông tin hành lý</a></li>
					<li><a href="#">Yêu cầu dịch vụ đặc biệt</a></li>
					<li><a href="#">Thông tin tiện ích</a></li>
					<li><a href="#">Giá trị gia tăng</a></li>
				</ul>
			</li>
			<li class="dropdown <?php if($menuActive == 'tren_chuyen_bay') echo 'active'; ?> ">
				<a href="<?php echo base_url();?>index.php/site/tren_chuyen_bay" class="dropdown-toggle">Trên chuyến bay<b class="caret"></b></a>
				<ul role="menu" class="dropdown-menu">
					<li><a href="#">Hạng Thương gia</a></li>
					<li><a href="#">Hạng Phổ thông đặc biệt</a></li>
					<li><a href="#">Hạng Phổ thông</a></li>
					<li><a href="#">An toàn trên chuyến bay</a></li>
					<li><a href="#">Các bài thể dục trên chuyến bay</a></li>
				</ul>
			</li>
			<li class="dropdown <?php if($menuActive == 'khach_hang_thuong_xuyen') echo 'active'; ?> ">
				<a href="<?php echo base_url();?>index.php/site/khach_hang_thuong_xuyen" class="dropdown-toggle">Khách hàng thường xuyên<b class="caret"></b></a>
				<ul role="menu" class="dropdown-menu">
					<li><a href="#">Chương trình Bông Sen Vàng</a></li>
					<li><a href="#">Cộng dặm</a></li>
					<li><a href="#">Phần thưởng</a></li>
					<li><a href="#">Mua và tặng dặm</a></li>
					<li><a href="#">Các đối tác</a></li>
					<li><a href="#">Tin tức & Khuyến mại</a></li>
					<li><a href="#">Các Biểu mẫu</a></li>
				</ul>
			</li>
			<li class="dropdown <?php if($menuActive == 'khuyen_mai') echo 'active'; ?> ">
				<a href="<?php echo base_url();?>index.php/site/khuyen_mai" class="dropdown-toggle">Khuyến mãi<b class="caret"></b></a>
				<ul role="menu" class="dropdown-menu">
					<li><a href="#">Khuyến mãi theo thị trường</a></li>
					<li><a href="#">Giá trực tuyến</a></li>
					<li><a href="#">Hội nghị và Sự kiện</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>