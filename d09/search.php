<?php 
include_once "../d06/course.php";
                if (isset($_REQUEST["btsearch"])) {
                    $tenKH = $_REQUEST["search"];
                    $ds = courseDAO::get(name: $tenKH);
                } else {
                    $ds = courseDAO::get();
                }
                if ($ds == null) {
                    exit;
                }
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>course</title>
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
                    echo "</tr>";
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>