<?php
include('../connect.php');
if ($_POST) {
    $mem_user = $_POST['mem_user'];
    $mem_pass = $_POST['mem_pass'];
    $mem_name = $_POST['mem_name'];
    $mem_last = $_POST['mem_last'];
    $mem_mail = $_POST['mem_mail'];
    $mem_phone = $_POST['mem_phone'];
    $mem_address = $_POST['mem_address'];
    $mem_status = $_POST['mem_status'];
    $images = basename($_FILES["file"]["name"]);
    $tragetDir = "../asset/Uploads/";
    $tragetFilepath = $tragetDir . $images;
    $filetype = pathinfo($tragetFilepath, PATHINFO_EXTENSION);

    if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
        $arrowType = ['jpg', 'png', 'jpeg', 'gift', 'pdf'];
        if (in_array($filetype, $arrowType)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $tragetFilepath)) {
                $sql = "INSERT INTO member(mem_id, mem_user, mem_pass, mem_name, mem_last, mem_mail, mem_phone, mem_img, mem_address, mem_status, mem_check) VALUES ('','$mem_user','$mem_pass','$mem_name','$mem_last','$mem_mail','$mem_phone','$images','$mem_address','$mem_status','disable')";
                $query = mysqli_query($connect, $sql);
                if ($query) {
                    echo "<script>alert('register success pleace wait admin accept'); window.location = '../index.php'; <script>";
                }
            }
        }
    } else {
        echo "<script>alert('register failed'); window.location = 'register.php';</script>";
    }
}
