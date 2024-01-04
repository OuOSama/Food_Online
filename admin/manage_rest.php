<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Restaurant</title>
    <?php include('../asset/head/head-admin.php');?>
</head>
<body>
    <div class="content">
        <div class="container body shadow p-5 mb-5 bg-body rounded">
            <h1 align="center" class="p-1">Manage Restaurant</h1>
            <table class="table">
                <thead align="center">
                    <th>Categories Id</th>
                    <th>Restaurant Name</th>
                    <th>Restaurant Email</th>
                    <th>Restaurant Phone</th>
                    <th>Open  Day</th>
                    <th>Close Day</th>
                    <th>Openning Day</th>
                    <th>Restaurant Address</th>
                    <th colspan="2">Action</th>
                </thead>
                <tbody>
                    <form action="config_rest.php" method="post">
                        <input type="hidden" name="res_id">
                        <td><input type="text"  name="cate_id"   class="form-control"></td>
                        <td><input type="text"  name="res_name"  class="form-control"></td>
                        <td><input type="email" name="res_mail"  class="form-control"></td>
                        <td><input type="tel"   name="res_phone" class="form-control"></td>
                        <td><input type="time"  name="o_hr"      class="form-control"></td>
                        <td><input type="time"  name="c_hr"      class="form-control"></td>
                        <td>
                            <select name="o_day" class="form-select">
                                <option value="mon-mon">mon-mon</option>
                                <option value="mon-tue">mon-tue</option>
                                <option value="mon-wed">mon-wed</option>
                                <option value="mon-thu">mon-thu</option>
                                <option value="mon-fri">mon-fri</option>
                                <option value="mon-sat">mon-sat</option>
                                <option value="mon-sun">mon-sun</option>
                            </select>
                        </td>
                        <td><input type="text" name="res_address" class="form-control"></td>
                        <td colspan="2"><button type="submit" name="insert" class="btn btn-secondary form-control">Insert</button></td>
                    </form>
                </tbody>
                <?php
                    $sql = "SELECT * FROM restaurant";
                    $query = mysqli_query($connect,$sql);
                ?>
                <?php
                    while($result = mysqli_fetch_array($query)){
                ?>
                <tbody>
                    <form action="config_rest.php" method="post">
                        <input type="hidden" name="res_id" value="<?php echo$result['res_id']?>">
                        <td><input type="text"  name="cate_id"   class="form-control" value="<?php echo $result['cate_id']?>"></td>
                        <td><input type="text"  name="res_name"  class="form-control" value="<?php echo $result['res_name']?>"></td>
                        <td><input type="text"  name="res_mail"  class="form-control" value="<?php echo $result['res_mail']?>"></td>
                        <td><input type="tel"   name="res_phone" class="form-control" value="<?php echo $result['res_phone']?>"></td>
                        <td><input type="time"  name="o_hr"      class="form-control" value="<?php echo $result['o_hr']?>"></td>
                        <td><input type="time"  name="c_hr"      class="form-control" value="<?php echo $result['c_hr']?>"></td>
                        <td>
                            <select name="o_day" class="form-select">
                                <option value="<?php echo$result["o_day"]?>"><?php echo$result["o_day"]?></option>
                                <option value="mon-mon">mon-mon</option>
                                <option value="mon-tue">mon-tue</option>
                                <option value="mon-wed">mon-wed</option>
                                <option value="mon-thu">mon-thu</option>
                                <option value="mon-fri">mon-fri</option>
                                <option value="mon-sat">mon-sat</option>
                                <option value="mon-sun">mon-sun</option>
                            </select>
                        </td>
                        <td><input type="text" name="res_address"      class="form-control" value="<?php echo $result['res_address']?>"></td>
                        <td><button type="submit" name="update" class="btn btn-primary form-control">Update</button></td>
                        <td><button type="submit" name="delete" class="btn btn-danger  form-control">Delete</button></td>
                    </form>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>