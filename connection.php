<?php

//Thông số kết nối CSDL
$severname = "localhost"; //Địa chỉ IP máy chứa CSL

$username = "root"; // Tên đăng nhập

$password = ""; //Mật khẩu truy cập

$dbname = "blogs"; //Tên CSDL muốn kết nối đến


//Tạo kết nối đến CSDL

$conn = new mysqli($severname,$username,$password,$dbname);
