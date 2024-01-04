<?php
    include('../connect.php');
    if(isset($_POST['insert'])){
        $res_id      = $_POST['res_id'];
        $cate_id     = $_POST['cate_id'];
        $res_name    = $_POST['res_name'];
        $res_mail    = $_POST['res_mail'];
        $res_phone   = $_POST['res_phone'];
        $o_hr        = $_POST['o_hr'];
        $c_hr        = $_POST['c_hr'];
        $o_day       = $_POST['o_day'];
        $res_address = $_POST['res_address'];
        $sql = "INSERT INTO `restaurant` (`res_id`, `cate_id`, `res_name`, `res_mail`, `res_phone`, `o_hr`, `c_hr`, `o_day`, `res_address`) VALUES ('$res_id', '$cate_id', '$res_name', '$res_mail', '$res_phone', '$o_hr', '$c_hr', '$o_day', '$res_address')";
        $query = mysqli_query($connect, $sql);
        if($query){
            echo"<script>alert('Add data success'); window.location = 'manage_rest.php';</script>";
        }
    }else if(isset($_POST['update'])){
        $res_id      = $_POST['res_id'];
        $cate_id     = $_POST['cate_id'];
        $res_name    = $_POST['res_name'];
        $res_mail    = $_POST['res_mail'];
        $res_phone   = $_POST['res_phone'];
        $o_hr        = $_POST['o_hr'];
        $c_hr        = $_POST['c_hr'];
        $o_day       = $_POST['o_day'];
        $res_address = $_POST['res_address'];
        $sql = "UPDATE restaurant SET
                                        cate_id     = '$cate_id',                       
                                        res_name    = '$res_name',                       
                                        res_mail    = '$res_mail',                       
                                        res_phone   = '$res_phone',                       
                                        o_hr        = '$o_hr',                       
                                        c_hr        = '$c_hr',                       
                                        o_day       = '$o_day',                       
                                        res_address = '$res_address'  
        WHERE res_id = '$res_id'";
        $query = mysqli_query($connect, $sql);
        if($query){
            echo"<script>alert('Update data success'); window.location = 'manage_rest.php';</script>";
        }
    }else if(isset($_POST['delete'])){
        $res_id = $_POST['res_id'];
        $sql = "DELETE FROM restaurant WHERE res_id = '$res_id' ";
        $query = mysqli_query($connect, $sql);
        if($query){
            echo"<script>alert('Update data success'); window.location = 'manage_rest.php';</script>";
        }
    }
?>