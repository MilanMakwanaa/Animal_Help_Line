<?php

require_once('animal_help_line.php');
$query = "select * from users";
$result = mysqli_query($con, $query);

?>

<?php
if (isset($_GET['Id'])) {
    $Id = $_GET['Id'];
    $delete = mysqli_query($con, "DELETE FROM `users` WHERE `Id`='$Id'");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users.php">Users</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Animals
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Mammals</a></li>
                            <li><a class="dropdown-item" href="#">Birds</a></li>
                            <li><a class="dropdown-item" href="#">Reptiles</a></li>
                            <li><a class="dropdown-item" href="#">Amphibians</a></li>
                            <li><a class="dropdown-item" href="#">Fish</a></li>
                            <li><a class="dropdown-item" href="#">Invertebrates</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">users</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td>ID</td>
                                <td>Username</td>
                                <td>Email</td>
                                <td>Age</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>

                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['Id']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['age']; ?></td>
                                    <td><a href="user_edit.php?Id=<?php echo $row['Id']; ?>" class="btn btn-primary">Edit</a></td>
                                    <td><a href="users.php?Id=<?php echo $row['Id']; ?>" class="btn btn-danger">Delete</a></td>
                                </tr>
                            <?php
                            }
                            ?>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>