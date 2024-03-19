<?php
include_once "course.php";
if(isset($_REQUEST["btsearch"])){
    $tenKH=$_REQUEST["search"];
    $ds=courseDAO::get(name:$tenKH);   
}
else{
    $ds=courseDAO::get();
}
if ($ds == null) {
    exit;
}
?>
<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>COURSE</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <div class="container mt-4">
            <h3> List of Course</h3>
            <hr>
            <div>
                <form action="" method="get">               
                    <input type="text" name="search" id="search" placeholder="input name for search">
                    <button type="submit" name="btsearch" class="btn btn-danger"> Search</button>

                </form>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th> Course-Id</th>
                        <th> Course-Name</th>
                        <th> Course-Fee</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($ds as $item) {
                        echo "<tr>";
                        echo "<td>$item->id</td>";
                        echo "<td>$item->name</td>";
                        echo "<td>$item->fee</td>";
                        echo "<td>
                        <a href='course_delete.php?id=$item->id' onclick='return dongy();'> Delete</a>  ||
                        <a href='course_edit.php?id=$item->id' > Edit</a>                
                       </td>";

                        echo "</tr>";
                    }
                    ?>

                </tbody>
            </table>
        </div>
        <script>
            function dongy(){
                return confirm("are you sure");
            }
        </script>
    </body>

    </html>
</DOCTYPE>