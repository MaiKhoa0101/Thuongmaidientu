<?php
//Lay du lieu
	$ten = $_POST["ten"];
	$dc = $_POST["diachi"];
	$sdt = $_POST["sdt"];
	$taikhoan = $_POST["taikhoan"];
	$matkhau = $_POST["matkhau"];
	$xacnhan = $_POST["xacnhan"];
	echo $ten;
	//So sanh User va Pass
	if($xacnhan!=$matkhau){
		echo "<script language='javascript'>";
	  	echo "alert('Xác nhận mật khẩu và mật khẩu không trùng nhau, hãy nhập lại')";  //not showing an alert box.
	  	echo "</script>";
		//echo "<p align='center' >Không được để trống!!! Mời đăng nhập lại</p><br>";
		echo "<meta http-equiv='refresh' content ='0;URL=dangki.html'><br>";
	}
	else{
		//Ket noi
		$servername = "localhost"; // Địa chỉ máy chủ MySQL
        $username = "root"; // Tên người dùng MySQL
        $password = ""; // Mật khẩu MySQL
        $dbname = "quanlybanhang"; // Tên cơ sở dữ liệu

        // Kết nối tới MySQL
        $conn = mysqli_connect($servername, $username, $password, $dbname);

		//Tải dữ liệu lên sql
        $sql = "insert into taikhoan(tendangnhap,matkhau,quyenhan,ten,diachi,sdt) values ('$taikhoan','$matkhau',2,'$ten','$dc','$sdt')";
        $query = mysqli_query($conn, $sql);
		mysqli_close($conn);

		echo "<script language='javascript'>";
	  	echo "alert('Đăng kí thành công, chào mừng bạn đến với cửa hàng')";  //not showing an alert box.
	  	echo "</script>";
		echo "<meta http-equiv='refresh' content ='0;URL=index.html'><br>";	//quay trở về trang chủ
	}
	
?>


