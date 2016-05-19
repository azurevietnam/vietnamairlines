<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <jsp:include page="head.jsp"/>
    </head>
    <body>
        <div class="row">
            <div class="col-md-12" style="padding: 0px 100px 10px 100px">
                <div class="col-md-12">
                    <img class="myimg" src="Sources/registerpage.jpg">
                </div>
                <div class="col-md-12">
                    <p>
                        <span style=" text-align: center; font-size: 25px; color: #0081c1; font-weight: bold; margin-left: 30%">Đăng ký hội viên Bông Sen Vàng</span><br>
                        Bằng việc nhấp vào nút “Tạo Hồ Sơ Thành Viên” bên dưới, Hội viên xác nhận đã đọc và đồng ý với "Điều lệ chương trình Bông Sen Vàng". Vui lòng sử dụng tiếng Việt không dấu khi nhập thông tin.
                    </p>
                </div>
                <div class="col-md-12" style="margin-bottom: 10px" >
                    <div class ="col-md-12" style="background-color: #d9edf7; height: 50px; padding-top: 15px">
                        <div class="col-md-6" style="color: #156192">
                            <span style="font-size: 15px"><b>Thông tin khách hàng</b></span>
                        </div>
                        <div class="col-md-6 pull-right" style="color: #156192">
                            <span style="font-size: 15px"><b>* Thông tin bắt buộc</b></span>
                        </div>
                    </div>
                </div>


                <form action="Controller" name="register">
                    <div class="col-md-6" >
                        <div class="col-md-5" style="margin-bottom: 10px">
                            Danh tính:
                        </div>
                        <div class="col-md-7" style="margin-bottom: 10px">
                            <select name="cb_danhtinh_rg" style="width: 100%; height: 30px">
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
                            <input name="txt_hoten_rg" type="text" style="width: 100%; margin-bottom: 10px">
                        </div>
                        <div class="col-md-5" style="margin-bottom: 10px">
                            Số CMND/ Hộ chiếu:
                        </div>
                        <div class="col-md-7">
                            <input name="txt_cmnd_rg" type="text" style="width: 100%; margin-bottom: 10px">
                        </div>
                        <div class="col-md-5" style="margin-bottom: 10px">
                            Giới tính:
                        </div>
                        <div class="col-md-7">
                            <select name="cb_gioitinh_rg" style="width: 100%; height: 30px">
                                <option>Nam</option>
                                <option>Nữ</option>
                            </select>
                        </div>
                        <div class="col-md-5" style="margin-top: 10px">
                            Ngày sinh:
                        </div>
                        <div class="col-md-7">
                            <input type="date" name="date_ngaysinh_book" style="width: 100%; height: 30px; margin-top: 10px">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-5" style="margin-bottom: 10px">
                            Đọc và đồng ý
                        </div>
                        <div class="col-md-7">
                            <a style="margin-bottom: 10px" href="#">
                                Điều kiện và điều khoản Chương trình Bông Sen Vàng
                            </a>
                        </div>
                        <div class="col-md-5" style="margin-bottom: 10px">
                            Quốc tịch:
                        </div>
                        <div class="col-md-7">
                            <select name="cb_quoctich_rg" style="width: 100%; height: 30px; margin-bottom: 10px">
                                <option>Việt Nam</option>
                                <option>Anh</option>
                            </select>
                        </div>
                        <div class="col-md-5" style="margin-bottom: 10px">
                            Ngôn ngữ:
                        </div>
                        <div class="col-md-7">
                            <select name="cb_ngonngu_rg" style="width: 100%; height: 30px; margin-bottom: 10px">
                                <option>Việt Nam</option>
                                <option>Tiếng Anh</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12" style="margin-top: 10px; margin-bottom: 10px" >
                        <div class ="col-md-12" style="background-color: #d9edf7; height: 50px; padding-top: 15px;">
                            <div class="col-md-12" style="color: #156192">
                                <span style="font-size: 15px"><b>Thông tin truy cập tài khoản - Số thẻ Bông Sen Vàng sẽ được tạo sau khi Quý khách hoàn tất đơn đăng ký gia nhập chương trình.</b></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-5" style="margin-bottom: 10px">
                            Tên hiển thị trên thẻ
                        </div>
                        <div class="col-md-7">
                            <input name="txt_tenhienthi_rg" type="text" style="width: 100%; margin-bottom: 10px">
                        </div>
                        <div class="col-md-5" style="margin-bottom: 10px">
                            Mật khẩu
                        </div>
                        <div class="col-md-7">
                            <input name="pw_matkhau_rg" type="password"  style="width: 100%; margin-bottom: 10px">
                        </div>
                        <div class="col-md-5" style="margin-bottom: 10px">
                            Xác nhận mã PIN
                        </div>
                        <div class="col-md-7">
                            <input style="width: 100%; margin-bottom: 10px">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-5" style="margin-bottom: 10px">
                            Câu hỏi nhắc mật khẩu:
                        </div>
                        <div class="col-md-7" style="margin-bottom: 10px">
                            <select name="cb_cauhoi_rg" style="width: 100%; height: 30px; margin-bottom: 10px">
                                <option>Câu 1</option>
                                <option>Câu 2</option>
                            </select>
                        </div>
                        <div class="col-md-5" style="margin-bottom: 10px">
                            Trả lời
                        </div>
                        <div class="col-md-7">
                            <input name="txt_traloi_rg" type="text" style="width: 100%; margin-bottom: 10px">
                        </div>
                    </div>

                    <div class="col-md-12" style="margin-top: 10px; margin-bottom: 10px" >
                        <div class ="col-md-12" style="background-color: #d9edf7; padding: 15px 10px 15px 10px;">
                            <div class="col-md-12" style="color: #156192">
                                <span style="font-size: 15px"><b>Liên hệ- Thẻ hội viên và các thông tin ấn phẩm sẽ được chuyển phát theo địa chỉ Quý khách cung cấp. Đối với địa chỉ cơ quan, vui lòng điền đầy đủ tên cơ quan và chức danh.
                                        <br>Đối với địa chỉ nhà, vui lòng điền thông tin từ Địa chỉ (dòng 1)</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-2">
                            Địa chỉ
                        </div>
                        <div class="col-md-10" style="padding-left: 50px">
                            <input name="txt_diachi_rg" type="text"  style="width: 100%; margin-bottom: 10px">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-5" style="margin-bottom: 10px">
                            Quốc gia
                        </div>
                        <div class="col-md-7">
                            <select  name="cb_quocgia_rg" style="width: 100%; height: 30px; margin-bottom: 10px">
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
                            <input name="txt_sdt_rg" type="text" style="width: 100%; margin-bottom: 10px">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-5" style="margin-bottom: 10px">
                            Email
                        </div>
                        <div class="col-md-7">
                            <input  name="txt_email_rg" type="text"  style="width: 100%; margin-bottom: 10px">
                        </div>
                    </div>

                    <div class="col-md-12" style="margin-top: 20px">
                        <input name="btnOk" class="mybutton" style="margin-left: 43%; height: 30px" type="submit" value="Tạo hồ sơ thành viên">
                    </div>
                </form>
                <div class="col-md-12">
                    <jsp:include page="bottom2.jsp"/>
                </div>
            </div>


        </div>
    </body>
</html>
