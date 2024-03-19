<?php
if (isset($_REQUEST["btnOK"])) {
    include_once "course.php";
    //trang da dc submit lay du lieu vo db
    $name = $_REQUEST["cname"];
    $fee = $_REQUEST["cfee"];
    $khoa_hoc = new course(null, $name, $fee);
    // courseDAO::insert($khoa_hoc);
    $kq = courseDAO::insert($khoa_hoc);
    if ($kq) {
        header("location:course_view.php");
    }
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
        <h3>insert new course</h3>
        <p>
            <a href="d06/course_view.php"></a>
        </p>
        <hr>
        <div class="row">
            <form class=" col-md-6">
                <div class="form-group">
                    <div class="form-group">
                        <label for="">Course Name</label>
                        <input type="text" name="cname" id="cname" required value="" >

                    </div>
                    <div class="form-group">
                        <label for="">Course Fee</label>
                        <input type="number" name="cfee" id="cfee" required value="" class="form-control" >
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