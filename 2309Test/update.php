<<?php
    include_once "employ.php";
    echo 'btnok = ' . isset($_REQUEST["btnOK"]);
    if (isset($_REQUEST["btnOK"])) {

        //trang da dc submit lay du lieu vo db
        $EmployId = $_REQUEST["cid"];
        $EmployName = $_REQUEST["cname"];
        $Age = $_REQUEST["cage"];
        $khoa = new Employ($EmployId, $EmployName, $Age);
        
        $kq = EmployDAO::update($khoa);
        if ($kq) {
            header("location:Employcontroll.php");
            exit;
        }
    }

    if (isset($_REQUEST["EmployId"])) {

        $maKH = $_REQUEST["EmployId"];
        $ds = EmployDAO::get(EmployId: $maKH);
        if ($ds == null) {
            exit;
        }
        $khoa = $ds[0]->EmployId;
        $tenKH = $ds[0]->EmployName;
        $tuoi = $ds[0]->Age;
    } else {
        header("location:Employcontroll.php");
        exit;
    }
    ?> <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UPDATE</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <div class="container mt-4">
            <h3>UPDATE</h3>
            <hr>
            <div class="row">
                <form class=" col-md-6">
                    <div class="form-group">
                        <label for="">id</label>
                        <input type="text" name="cid" id="cid" value="<?= $maKH ?>" readonly>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="cname" id="cname" required value="<?= $tenKH ?>">

                        </div>
                        <div class="form-group">
                            <label for="">Age</label>
                            <input type="number" name="cage" id="cage" required value="<?= $tuoi ?>" class="form-control">
                        </div>
                        <div class="mt-4">
                            <button type="submit" name="btnOK" class="btn btn-danger">Submit</button>
                            <button type="reset" class="btn btn-info">Reset</button>
                        </div>
                </form>
            </div>
        </div>
    </body>

    </html>