<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">
    <?php
        $db= new PDO("mysql:dbhost=localhost;dbname=project", "root", "");
        $sql= $db->query("select * from roles order by id desc");
        $results= $sql->fetchAll();
    ?>
    <div class="container">
        <div class="row">
        <h1 class="text-center mt-4"><span class="bg-dark p-3 text-white">Role List</span></h1>
            <div class="col-lg-6 offset-3">
                <table class="table table-striped mt-4 table-hover">
                    <thead>
                        <tr class="">
                            <th>Id</th>
                            <th>User Name</th>
                            <th>User Data</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($results as $result) :?>
                            <tr>
                                <td><?= $result['id'] ?></td>
                                <td><?= $result['name'] ?></td>
                                <td><?= $result['value'] ?></td>
                                <td><a href="edit.php?id=<?= $result['id'] ?>" class="btn btn-submit"><i class="fa-regular fa-pen-to-square text-primary"></i></a></td>
                                <td><a href="delete.php?id=<?= $result['id'] ?>" class="btn btn-submit"><i class=" fa-regular fa-trash-can text-danger"></i></a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <a href="add.php" class="btn btn-dark">Add New Data</a>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>