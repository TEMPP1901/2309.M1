<?php
include_once "course.php";
echo 'btnok = ' . isset($_REQUEST["btnOK"]);
if (isset($_REQUEST["btnOK"])) {

    //trang da dc submit lay du lieu vo db
    $id = $_REQUEST["cid"];
    $name = $_REQUEST["cname"];
    $fee = $_REQUEST["cfee"];
    $khoa_hoc = new course($id, $name, $fee);
    // courseDAO::insert($khoa_hoc);
    $kq = courseDAO::update($khoa_hoc);
    if ($kq) {
        header("location:course_view.php");
        exit;
    }
}

if (isset($_REQUEST["id"])) {

    $maKH = $_REQUEST["id"];
    $ds = courseDAO::get(id: $maKH);
    if ($ds == null) {
        exit;
    }
    $khoa_hoc = $ds[0]->id;
    $tenKH = $ds[0]->name;
    $hoc_phi = $ds[0]->fee;
} else {
    header("location:course_view.php");
    exit;
}
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-4">
        <h3>EDIT VIEW course</h3>
        <p>
            <a href="d06/course_view.php">link</a>
        </p>
        <hr>
        <div class="row">
            <form class="col-md-6">
                <div class="form-group">
                    <label for="">Course Id</label>
                    <input type="text" name="cid" id="cid" value="<?= $maKH ?>" readonly>
                    <div class="form-group">
                        <label for="">Course Name</label>
                        <input type="text" name="cname" id="cname" required value="<?= $tenKH ?>">

                    </div>
                    <div class="form-group">
                        <label for="">Course Fee</label>
                        <input type="number" name="cfee" id="cfee" required value="<?= $hoc_phi ?>" class="form-control">
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