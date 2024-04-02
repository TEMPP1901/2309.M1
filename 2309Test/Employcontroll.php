<?php

include_once "employ.php";

if (isset($_REQUEST["btSearch"])) {
    $tenKH = $_REQUEST["search"];
    //lay danh sach tat ca cac khoa hoc muon tim theo ten nhap trong o 'search', luu vo mang ds
    $ds = EmployDAO::get(EmployName: $tenKH);
} else {
    //lay danh sach tat ca cac khoa hoc, luu vo mang ds
    $ds = EmployDAO::get();
}

if ($ds == null) {
    exit;}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLOY-CONTROLL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>EPLOYEE</h2>
        <hr>
        <div>
            <form action="" method="get">
                <input type="text" name="search" id="search" placeholder="input name for search">
                <button type="submit" name="btsearch" class="btn btn-danger"> Search</button>

            </form>
        </div>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Pass</th>
                    <th>action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($ds as $item) {

                    echo "
                    <tr>";
                    echo "<td>$item->EmployId</td>";
                    echo "<td>$item->EmployName</td>";                   
                    echo "<td>$item->Age</td>";
                    echo "<td>$item->Pass</td>";                
                    echo "<td>
                            <a href='update.php?EmployId=$item->EmployId' onclick='return dongy();'> Update</a>           
                        </td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>


</body>

</html>