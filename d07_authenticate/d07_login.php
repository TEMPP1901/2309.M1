<?php
if (isset($_REQUEST["btnOK"])) {
    include_once "acount.php";
    //nhap thong tin va bam nut submit
    // lay du lieu username va passprd va logiin
    $user = $_REQUEST["uid"];
    $pass = $_REQUEST["pwd"];
    $kq = accountDAO::get(username: $user, password: $pass);
    if ($kq) {
            //kiem tra password hop le
            if ($kq[0]->password == $pass) {
                //dang nhap thanh cong->chuyen trang view cac khoa hoc
                header("location:../d06/course_view.php");
                exit;
            } else {
                echo "<h4> invalid password !</h4>";
            }
        } else {
            echo " <h4> invalid account</h4>";
        }
    }
?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h3>Login</h3>
        <form action="" method="get">
            <div>
                <label for="">username:</label>
                <input type="text" name="uid" id="uid" value="guest" required /><br />
                <div>
                    <label for="">password:</label>
                    <input type="password" name="pwd" id="pwd" value="1235" /><br />
                </div>
                <div>
                    <input type="submit" value="submit" class="btn btn-warning" name="btnOK" />
                    <input type="rest" value="reset" class="btn btn btn-info" />
                </div>
            </div>
        </form>
    </div>
    <button onclick="javascript:history.back()">back</button>
</body>

</html>