<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h3>CASIO</h3>
        <hr>
        <div class="mt-5  col-5">
            <form action="/casio/cong" method="get">
                <div class="form-group">
                    <label for="n1" class="form-label">input fist number:</label>
                    <input type="number" name="n1" id="n1" value="100" required class="form-control">
                </div>
                <div class="mb-3 ">

                    <div class="form-group">
                        <label for="n2" class="form-label">input second number:</label>
                        <input type="number" name="n2" id="n2" value="30" required class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">add</button>
            </form>

        </div>
        <div class="mt-3">
            <p> @if(isset($result))
                {{$result}}
                @endif
            </p>
            <p>
                <?php
                if (isset($result)) {
                    echo $result;
                }
                ?>
            </p>
        </div>
    </div>
</body>

</html>