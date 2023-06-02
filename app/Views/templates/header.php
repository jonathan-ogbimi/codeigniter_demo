<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Users</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
    <style>
        
        .form {
            max-width: 500px;
        }
        

        .error {
            display: block;
            padding-top: 5px;
            font-size: 14px;
            color: red;
        }
    </style>
</head>
<body>
<div id="app">
<div class="container mt-4">
<div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/assets') ?>" class="btn btn-success mb-2">Manage Assets</a>
        &nbsp;
        <a href="<?php echo site_url('/users') ?>" class="btn btn-success mb-2">Manage Users</a>
        &nbsp;
        <a href="<?php echo site_url('/add-user') ?>" class="btn btn-success mb-2">Add User</a>
        &nbsp;
        <a href="<?php echo site_url('/add-asset') ?>" class="btn btn-success mb-2">Add Asset</a>
        &nbsp;
        <a href="<?php echo site_url('/logout') ?>" class="btn btn-success mb-2">Logout</a>
</div>
<?php
if(isset($_SESSION['msg'])){
   echo $_SESSION['msg'];
}
?>