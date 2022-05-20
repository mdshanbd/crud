<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>




    <div class="container my-5">
        <form method="post" action="success.php">
            <div class="mb-3">
                <label class="form-label">Enter your Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label class="form-label">Enter your Name</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your Email">
            </div>
            <div class="mb-3">
                <label class="form-label">Enter your Mobile</label>
                <input type="text" class="form-control" name="mobile" placeholder="Enter your Mobile">
            </div>
            <div class="mb-3">
                <label class="form-label">Enter your Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your Password">
            </div>



            <button type="submit" class="btn btn-primary" name="sub">Submit</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>