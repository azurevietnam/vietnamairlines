<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Register</title>
		<?php include_once "head.php" ?>
	</head>
	<body>

		<div class="row">
			<div class="col-md-12" style="padding: 0px 100px 10px 100px">
				<div class="col-md-12">
					<img class="myimg" src="/VietNamAirlines/application/views/Sources/registerpage.jpg">
				</div>
				<div class="col-md-12">
					<p>
						<span style=" text-align: center; font-size: 25px; color: #0081c1; font-weight: bold; margin-left: 30%">Đăng ký thông tin khách hàng</span><br>
						Vui lòng dùng tiếng Việt không dấu khi nhập thông tin. Quý khách nhập đệm & tên theo thứ tự trên giấy tờ tuỳ thân.
						Theo yêu cầu của nhà chức trách Hàn Quốc, Trung Quốc, Nhật Bản, Úc, Canada, Đài Loan và Vương quốc Anh, hành khách đi đến/từ các quốc gia hay vùng lãnh thổ này bắt buộc phải cung cấp thông tin hộ chiếu. Hành khách có thể bị từ chối xuất nhập cảnh nếu không điền các thông tin hộ chiếu dưới đây.
					</p>
				</div>
				<div class="col-md-12" style="margin-bottom: 10px" >
					<div class ="col-md-12" style="background-color: #d9edf7; height: 50px; padding-top: 15px">
						<div class="col-md-6" style="color: #156192">
							<span style="font-size: 15px"><b>Thông tin khách hàng</b></span>
						</div>
					</div>
				</div>

				<form action="Controller" name="book_customerinfo">
					<div class="col-md-6" >
						<div class="col-md-5" style="margin-bottom: 10px">
							Danh tính:
						</div>
						<div class="col-md-7" style="margin-bottom: 10px">
							<select required name="cb_danhtinh_rg" style="width: 100%; height: 30px">
								<option>Chọn</option>
								<option>Ông</option>
								<option>Bà</option>
								<option>Anh</option>
								<option>Chị</option>
							</select>
						</div>
						<div class="col-md-5" style="margin-bottom: 10px">
							Họ tên:
						</div>
						<div class="col-md-7">
							<input  name="txt_hoten_rg" type="text" style="width: 100%; margin-bottom: 10px" required="" />
						</div>
						<div class="col-md-5" style="margin-bottom: 10px">
							Số CMND/ Hộ chiếu:
						</div>
						<div class="col-md-7">
							<input required name="txt_cmnd_rg" type="text" style="width: 100%; margin-bottom: 10px">
						</div>
						<div class="col-md-5" style="margin-bottom: 10px">
							Giới tính:
						</div>
						<div class="col-md-7">
							<select required name="cb_gioitinh_rg" style="width: 100%; height: 30px">
								<option>Nam</option>
								<option>Nữ</option>
							</select>
						</div>
						<div  class="col-md-5" style="margin-top: 10px">
							Ngày sinh:
						</div>
						<div class="col-md-7">
							<input required type="date" name="date_ngaysinh_book" style="width: 100%; height: 30px; margin-top: 10px">
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-5" style="margin-bottom: 10px">
							Quốc tịch:
						</div>
						<div class="col-md-7">
							<select required name="cb_quoctich_rg" style="width: 100%; height: 30px; margin-bottom: 10px">
								<option>Việt Nam</option>
								<option>Anh</option>
							</select>
						</div>
					</div>

					<div class="col-md-12" style="margin-top: 10px; margin-bottom: 10px" >
						<div class ="col-md-12" style="background-color: #d9edf7; height: 50px; padding-top: 15px;">
							<div class="col-md-12" style="color: #156192">
								<span style="font-size: 15px"><b>Thông tin liên hệ.</b></span>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="col-md-2">
							Địa chỉ
						</div>
						<div class="col-md-10" style="padding-left: 50px">
							<input required name="txt_diachi_rg" type="text"  style="width: 100%; margin-bottom: 10px">
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-5" style="margin-bottom: 10px">
							Quốc gia
						</div>
						<div  class="col-md-7">
							<select required name="cb_quocgia_rg" style="width: 100%; height: 30px; margin-bottom: 10px">
								<option>VN</option>
								<option>Mỹ</option>
							</select>
						</div>
					</div>

					<div class="col-md-12" style="margin-bottom: 10px">
						<div class ="col-md-12" style="background-color: #d9edf7; height: 50px; padding-top: 15px">
							<div class="col-md-12" style="color: #156192">
								<span style="font-size: 15px"><b>Điện thoại liên lạc/Email</b></span>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-5" style="margin-bottom: 10px">
							Số điện thoại
						</div>
						<div class="col-md-7">
							<input required name="txt_sdt_rg" type="text" style="width: 100%; margin-bottom: 10px">
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-5" style="margin-bottom: 10px">
							Email
						</div>
						<div class="col-md-7">
							<input required name="txt_email_rg" type="email"  style="width: 100%; margin-bottom: 10px">
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-5" style="margin-bottom: 10px">
							Mật khẩu
						</div>
						<div class="col-md-7">
							<input required name="pw_matkhau_book" type="password" style="width: 100%; margin-bottom: 10px">
						</div>
					</div>
					<div class="col-md-6">
					</div>

					<div class="col-md-12" style="margin-top: 20px">
						
					</div>
					
					<input type='submit' name='btnOk' class='btn btn-primary' style='margin-left: 43%; height: 40px' value='Hoàn tất đăng ký' />
				</form>

				<div class="col-md-12">
					<?php include_once "bottom2.php" ?>
				</div>
			</div>

		</div>
	</body>
</html>

