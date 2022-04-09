<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>WP PHP CRUD</title>
</head>
<body>
<?php if (isset($_SESSION['id'])) { ?>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
<div class="container">
    <a href="action.php?status=index" class="navbar-brand">Logo</a>
    <div class="row">
        <ul class="navbar-nav">
            <li><a href="home.php" class="nav-link">Add Product</a></li>
            <li><a href="action.php?status=manage" class="nav-link">Manage Product</a></li>
            <li><a href="action.php?status=logout" class="nav-link">Logout</a></li>
        </ul>
    </div>
</div>
</nav>
<?php } else { ?>
    <nav class="navbar navbar-expand-md bg-primary navbar-dark">
        <div class="container">
            <a href="" class="navbar-brand">Logo</a>
            <div class="row">
                <ul class="navbar-nav">
                    <li><a href="action.php?status=index" class="nav-link">Home</a></li>
                    <li><a href="login.php" class="nav-link">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
<?php } ?>
