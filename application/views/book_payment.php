<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>JSP Page</title>
		<?php include_once "head.php" ?>
	</head>
	<body>
		<form action="Controller">
			<div class="col-md-12">
			<div class="col-md-12">
				<img class="myimg" src="Sources/registerpage.jpg">
			</div>


			<div class="col-md-12"><br><br><br>
				Hình thức thanh toán:
				<select required name="hinhthucthanhtoan">
					<optgroup>
						<option>ATM nội địa</option>
						<option>Visa quốc tế</option>
					</optgroup>
				</select><br>
				<br>
				<textarea class="" readonly  style="width: 100%; height: 200px; text-align: left">
Điều kiện và điều khoản

Quý khách vui lòng đọc đầy đủ nội dung Điều khoản và Điều kiện sử dụng Website thương mại điện tử của Vietnam Airlines tại liên kết Điều khoản sử dụng
Nội dung dưới đây áp dụng cho đặt chỗ thực hiện trên website này.
Khi Quý khách mua vé trực tuyến đồng nghĩa với việc Quý khách đã đọc và đồng ý với tất cả, không chỉ giới hạn bởi các nội dung được viết tại Điều kiện và Điều khoản sử dụng. Nếu Quý khách không chấp nhận bất kỳ nội dung nào của các Điều kiện và Điều khoản áp dụng, đề nghị Quý khách không sử dụng và thoát khỏi chức năng mua vé trực tuyến.Quý khách đảm bảo đủ yêu cầu độ tuổi theo pháp luật để sử dụng và chịu trách nhiệm cho bất kỳ vấn đề nào phát sinh trong quá trình sử dụng chức năng mua vé trực tuyến.
Ngoài các Điều kiện và Điều khoản chung, Quý khách xác nhận đã đọc và đồng ý các nội dung sau:
• Chịu trách nhiệm về tài chính đối với các giao dịch trên Website và những thông tin truy cập dưới tên của Quý khách
• Chịu trách nhiệm về sự chính xác và trung thực các thông tin do quý khách hoặc các thành viên trong gia đình mà Quý khách tạo ra trên Website
• Phí hoàn, huỷ, đổi có thể được áp dụng tùy theo điều kiện giá vé
• Thông tin về hành lý có thể được tìm thấy tại điều kiện giá vé và điều lệ vận chuyển
• Nếu Quý khách thanh toán bằng thẻ VISA/MASTER/JCB, Chủ thẻ có thể được yêu cầu xác thực thẻ khi làm thủ tục lên máy bay HOẶC tại các Phòng vé của Vietnam Airlines trước chuyến bay
• Khi quý khách chọn hình thức thanh toán bằng thẻ nội địa Việt Nam, Vé điện tử của Quý khách sẽ không có thông tin về số thẻ mà chỉ có thông tin về Mã thanh toán cho giao dịch đã thực hiện của Quý khách
• Để thay đổi (đổi hành trình, gia hạn…) cho vé mua và hành trình đặt chỗ trực tuyến, Quý khách cần liên hệ với Phòng vé Vietnam Airlines gần nhất
• Quý khách chịu trách nhiệm thanh toán thuế, lệ phí của các nhà chức trách/chính phủ. Mức thuế, lệ phí này có thể thay đổi và các thay đổi áp dụng ngay cả với những vé đã mua
• Quý khách không sử dụng Hệ thống mua vé trực tuyến để (i)bán lại các dịch vụ được cung cấp trên Website (ii) thực hiện bất kỳ hành động trái pháp luật, iii) gây ảnh hưởng đến khả năng truy cập của người khác, (iv) cố tình sử dụng các biện pháp khác để giao dịch hoặc lấy thông tin khi Hệ thống không cho phép
• Nếu Vietnam Airlines nhận thấy Quý khách đang vi phạm hoặc có nguy cơ vi phạm những điều kiện trên, chúng tôi bảo lưu quyền được hủy đặt chỗ mà không cần đưa ra lý do hoặc viện dẫn nào
• Chính phủ có thể yêu cầu Hãng vận chuyển cung cấp thông tin hoặc cho phép truy cập thông tin khách hàng
•Vietnam Airlines không chịu trách nhiệm đối với các khoản phí có thể phát sinh do ngân hành phát hành thẻ thu thêm.                 
				</textarea>
				<br><br>
				<input type="checkbox" required name="test" /> Tôi đã đọc và chấp nhận các Điều kiện giá, Điều kiện và Điều khoản.   
				<br><br><br><br>
				<input type="submit" class="btn btn-primary" name="btnOk" style="margin-left: 50%" value="Thanh toán"/>
			</div>
		</form>

		<div class="col-md-12">
			<?php include_once "bottom2.php" ?>
		</div>
		</div>
	</body>
</html>
