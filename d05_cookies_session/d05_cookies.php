<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>COOKIES</title>
</head>
<body>
   
<div  class="conatiner mt-3">
<?php
$uid="long";
$pwd="123";
    if(isset($_REQUEST["btnOk"])){
        if(empty($_REQUEST["rem"])==false){
         setcookie("user",$_REQUEST["uid"],time()+60);
         setcookie("pass",$_REQUEST["pwd"],time()+60);
         $uid=$_COOKIE["user"];
         $pwd=$_COOKIE["pass"];
         echo"<h4>acount has been saved in 60s</h4>";
        } 
        else{
        setcookie("user",$_REQUEST["uid"],time()-60);
        setcookie("pass",$_REQUEST["pwd"],time()-60);
        }
    }    
?>
    <h3> Cookies demo </h3>
    <hr>
    <div class="row mt-5">
        <div class="col-md-6">
            <form action="" method="post">
             <div class="form-group">
                <label for=""> usser name</label>
                <input type="text" name="uid" id="uid"
                 value="<?php echo $uid ?>"
                 requied class="form-control" >
             </div>
             <div class="form-group">
                <label for="">password</label>
                <input type="password" name="pwd" id="pwd"
                 value="<?php echo $pwd ?>" 
                 requied class="form-control">
             </div>
             <div class="form-check">
                <input  class="form-check-input" type="checkbox" value="true" id="rem" name="rem" checked>
                <label  class=" form-check-label" for="rem">remember account</label>
             </div>
             <div class="mt-3">
             <button type="submit" name="btnOK" class="btn btn-danger">submit</button>
             <button type="reset" class="btn btn-info">reset</button>
             </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>