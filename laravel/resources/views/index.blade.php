<html>
<head>
    <title>Key Value Store</title>
</head>
<body>
    <form action="key-value" method="post">
        {{ csrf_field() }}
        <label for="key">Key Name</label>
        <input type="text" id="key" name="key">
        <label for="value">Value Name</label>
        <input type="text" id="value" name="value">
        <input type="submit" value="Save">
    </form>

    <form action="key-value" method="get">
        {{ csrf_field() }}
        <label for="key">Key Name</label>
        <input type="text" id="key" name="key">
        <input type="submit" value="Load">
    </form>
    <div>
        {{ $data or 'No data found.' }}
    </div>

    <div>
        <img src="http://www.qygjxz.com/data/out/41/5213615-car-picture.png" alt="No Image" style="width: 100px; height: auto">
    </div>
</body>
</html>