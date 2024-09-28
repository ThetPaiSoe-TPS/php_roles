<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">
    <div class="container">
        <div class="row">
            <h1 class="text-center mt-4"><span class="p-3 bg-dark text-white">Add New Data</span></h1>
            <div class="col-lg-4 offset-4">
            <form action="new.php" method="post" class="mt-5" data-sb-form-api-token="API_TOKEN">
                <input type="text" name="name" placeholder="Name" id="name" class="form-control" data-sb-validations="required"> <br>
                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required</div>
                <input type="text" name="value" placeholder="Value" class="form-control"> <br>
                ‌<a href="index.php" class="btn btn-dark">Back</a>
                <button class="btn btn-dark">Create</button>
            </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>