<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>REQUEST DEMO</title>
</head>
<?php if(isset($_GET["btnOK"])){
    $name=$_GET["user"];
    $nang=$_REQUEST["weigth"];
    $gt=$_REQUEST["gender"];
    $que=$_REQUEST["home"];
    echo"<div class='container mt-5'>";
    echo"<h3> chuc mung ban da dang ki thanh cong</h3>";
    echo"<p> ho ten:$name</p>";
    echo"<p> can nang:$nang</p>";
    echo"<p> gioi tinh:$gt</p>";
    echo"<p> que quan:$que</p>";
    echo"</div>";
    exit;
} 
?>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
<h3>$_request[] php  demo</h3>
<hr>
<form action="">
<div class="form-group">
<label for="">user name</label>
<input type="text" name="user" id="user" value="nguyen anh huy" required class="form-control ">
</div>
 <div class="form-group">
    <labe for="">weigth</label>
    <input type=" number" name="weigth" id="weigth" value="62" min="30" max="100"
    required class="form-control">
 </div>
<div class="form-check">
<input class="form-check-input" type="radio" name="gender" id="rmale" value="nam" checked>
<label class="form-check-label" for="gender">Male</label>
</div>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="rfemale" value="nu" >
    <label class="form-check-label" for="rfemale">FEMALE</label>
    </div>
    </div>
 </div>
 <div class="form-group">
<label for="">home town</label>
<select class="form-select" name="home">
    <option value="hue">hue</option>
    <option value="sg">sai gon</option>
    <option value="hn">ha noi</option>
    <option value="dn">da nang</option>
</select>
</div>
 <div class="form-group mt-3">
    <button type="submit" name="btnOK" class="btn btn-danger">submit</button>
    <button type="reset" class="btn btn-info">reset</button>
 </div>
</form>
</div>
</body>
</html>