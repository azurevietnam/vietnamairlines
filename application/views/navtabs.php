<form id="myDiv" name="Booking" action="Controller" >
	<div class="col-md-12 booking-tabs">
		<div class="tab-content">

			<!-- BOOKING -->
			<form name="Booking" action="booking/search">
				<div id="sectionA" class="tab-pane fade in active list" style="">
					
					<div class="flex flex--space-between">
						<div>
							<input type="radio" id="optionType" name="optionType" checked="checked" value="khuhoi" >
							<label for="khuhoi">Khứ hồi</label>
						</div>
						<div>
							<input type="radio" id="optionType" name="optionType" checked="checked" value="motchieu" >
							<label for="motchieu">Một chiều</label>
						</div>
						<div>
							<input type="radio" id="optionType" name="optionType" checked="checked" value="nhieuchang" >
							<label for="nhieuchang">Nhiều chặng</label>
						</div>
					</div>

					<div class="flex">
						<div class="flex__auto">
							<label>Đi từ</label>
							<select name="op_from_index">
								<option>Hà Nội</option>
								<option>Hồ Chí Minh</option>
							</select>
						</div>
						<div class="flex__auto">
							<label>Đến</label>
							<select name="op_from_index">
								<option>Hà Nội</option>
								<option>Hồ Chí Minh</option>
							</select>
						</div>
					</div>

					<div class="flex">
						<div class="flex__auto">
							<label>Ngày đi</label>
							<input type="date"/>
						</div>
						<div class="flex__auto">
							<label>Ngày về</label>
							<input type="date"/>
						</div>
					</div>

					<div class="flex list--margin-right">
						<div>
							<label>Người lớn</label>
							<select name="num_of_adult" >
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
							</select>
						</div>
						<div>
							<label>Trẻ em (2-<12 tuổi)</label>
							<select name="child">
								<option>0</option>
								<option>1</option>
								<option>2</option>
							</select>
						</div>
						<div>
							<label>Trẻ sơ sinh (<2 tuổi)</label>
							<select name="baby">
								<option>0</option>
								<option>1</option>
							</select>
						</div>
					</div>

					<div class="flex flex--space-between">
						<div>
							Mã khuyến mại <input type="text" name="txtPromotion">
						</div>
						<div>
							<input class="mybutton" type="submit" value="Tìm chuyến bay" name="btnOk">
						</div>
					</div>

					<div class="col-md-12">
						<hr>
					</div>

					<div class="col-md-6">
						<a href="giavenoidia.jsp">Các loại giá vé</a><br>
						<a href="#">Chính sách Hành lý & Dịch vụ đặc biệt</a><br>
						<a href="#">Tra cứu giờ cất, hạ cánh</a><br>
					</div>
					<div class="col-md-6">
						<a href="dieulevanchuyen.jsp">Điều khoản sử dụng</a><br>
						<a href="lephi.jsp">Thuế, phí, lệ phí và phụ thu</a><br>
						<a href="#">Góp ý</a><br>
					</div>
				</div>
			</form>
			<!-- CHECK IN -->
			<div id="sectionB" class="tab-pane fade">
				<div class="col-md-12" style="margin-bottom: 10px">
					Qúy khách có thể làm thủ tục trực tuyến 24 đến 02 tiếng trước chuyến bay<br><br>
					<b>Vui lòng nhập đúng thông tin hiển thị trên vé</b>
				</div>

				<div class="col-md-3" style="margin-bottom: 10px">
					Họ tên:<br>
				</div>
				<div class="col-md-9" style="margin-bottom: 10px">
					<input type="text" name="txtName" style="width: 100%;"><br>
				</div>
				<div class="col-md-3" style="margin-bottom: 10px">
					Đi từ:
				</div>
				<div class="col-md-9" style="margin-bottom: 10px">
					<select name="op_from_index" style="width: 100%; height: 25px">

					</select>
				</div>
				<div class="col-md-12" style="margin-top: 10px; margin-bottom: 10px">
					<b>Quý khách nhập một trong các dữ liệu sau</b>
				</div>
				<div class="col-md-6">
					<input type="radio" name="op_checkin">Mã đặt chỗ 6 ký tự chữ in hoa<br>
					<input type="radio" name="op_checkin">Số vé điện tử (738xxxxxxxxxx)<br>
					<input type="radio" name="op_checkin">Số thẻ FFP<br>
				</div>
				<div class="col-md-6">
					<input type="text" name="txt_checkin_index"><br>
					<input type="text" name=""><br>
					<input type="text" name=""><br>
				</div>
				<div class="col-md-12">
					<hr>
				</div>
				<div class="col-md-2">
					<input class="mybutton"  type="submit" name="btnOk" value="Làm thủ tục" style="">
				</div>

			</div>
			</div>
	</div>
</form>