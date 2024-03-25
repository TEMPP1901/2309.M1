<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>COURSE</title>
</head>

<body>
    <div class="contaner mt-3">
        <h2>list of course</h2>
        <hr>
        <table>
            <thead>
                <tr>
                    <th>course id</th>
                    <th>name</th>
                    <th>fee</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->fee}}</td>
                    <td>
                        <a href="#">update?id={{$item->id}}</a>
                        <a href="#">delete?id={{$item->id}}</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>