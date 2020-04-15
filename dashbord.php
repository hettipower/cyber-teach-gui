<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Teach</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
    <link rel="stylesheet" href="css/master.css">
</head>
<body>

<div class="mainSiteWrapper d-flex flex-wrap">
    <?php
        include './sidebar-dashboard.php';
        include './content-dashboard.php';
    ?>
</div>

<?php include './footer.php';