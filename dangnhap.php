<?php
	//Lay du lieu
	$User = $_POST["txtUser"];
	$Pass = $_POST["txtPass"];
	$bien = 0;
	$bien1 = 0;
	//So sanh User va Pass
	if($User == "" && $Pass == ""){
		echo "<script language='javascript'>";
	  	echo "alert('Không được để trống!!! Mời đăng nhập lại')";  //not showing an alert box.
	  	echo "</script>";
		//echo "<p align='center' >Không được để trống!!! Mời đăng nhập lại</p><br>";
		echo "<meta http-equiv='refresh' content ='0;URL=login.html'><br>";
	}
	else{
		//Ket noi
		$servername = "localhost"; // Địa chỉ máy chủ MySQL
        $username = "root"; // Tên người dùng MySQL
        $password = ""; // Mật khẩu MySQL
        $dbname = "quanlybanhang"; // Tên cơ sở dữ liệu

        // Kết nối tới MySQL
        $conn = mysqli_connect($servername, $username, $password, $dbname);

		//mysqli_query("SET character_set_results=utf8", $conn); //SET character_set_results=utf8: Hỗ trợ xuất ra tiếng việt
		//$query = mysqli_query("Select * from taikhoan");

        $sql = "Select * from taikhoan";
        $query = mysqli_query($conn, $sql);

        if (mysqli_num_rows($query) == 0) {
			echo "Chua co du lieu";
		}
		else{
			while($row = mysqli_fetch_array($query)){
				$bien1++;
				if($User == "$row[tendangnhap]"){
					if($Pass == "$row[matkhau]"){
						$_SESSION["Login"] = true;
						$_SESSION["User"] = "$row[quyenhan]";
						echo "$row[quyenhan] vừa đăng nhập thành công!!!<br>";
                        echo "Đúng mật khẩu!!!";
						echo "<meta http-equiv='refresh' content ='0;URL=index.html'><br>";	//quay trở về trang chủ					
					}	
					else{
						echo "Sai mật khẩu!!!";
						echo "<meta http-equiv='refresh' content ='2;URL=login.html'><br>"; // quay về login
						break;
					}
				}
				if($bien1 == mysqli_num_rows($query)){
					echo "Email không tồn tại<br>";
					echo "<meta http-equiv='refresh' content ='2;URL=login.html'><br>";
					break;
				}			
			}
		}
		mysqli_close($conn);
	}
?>


