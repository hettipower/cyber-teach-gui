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
    <div class="sidebarDashboard">
        <div class="logoWrap">
            <a href="http://localhost/cyber-teach-gui/">
                <img src="./images/logo.png" alt="Logo" />
            </a>
        </div>

        <div class="navContentWrap d-flex">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="http://localhost/cyber-teach-gui/dashbord.php"><i class="fas fa-th-large"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/cyber-teach-gui/dashbord-notofication.php"><i class="fas fa-bell"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/cyber-teach-gui/dashbord-messages.php">
                        <i class="fas fa-envelope"></i>
                        <span class="count">03</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/cyber-teach-gui/dashbord-edit.php"><i class="fas fa-pencil-alt"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/cyber-teach-gui/dashbord-users.php">
                        <i class="fas fa-user-friends"></i>
                        <span class="count">25</span>
                    </a>
                </li>
            </ul>
            <div class="navDetailsWrap">
                <div class="infoContent">
                    <h3>Physiscs lesson 02</h3>
                    <p>By Marlon Iddamalgoda</p>
                    <h5>Topics we are discussing</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu</p>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboardContWrap">
        <div class="dashboardHeader d-flex justify-content-between">
            <div class="roomName">
                <i class="fas fa-home"></i> Home Room
                <a href="#" class="btn recordingBtn"><i class="fas fa-video"></i> Start Recording</a>
            </div>
            <div class="timeWrapper">
                <div class="time">
                    <i class="far fa-clock"></i> Remaining time : <strong>03.59.25</strong>
                </div>
                <div class="users">
                    <i class="fas fa-users"></i> Online users : <strong>25</strong>
                </div>
                <a href="#" class="btn iconBtn iconLeft leaveBtn">
                    <span class="icon"><i class="fas fa-power-off"></i></span>
                    Leave meeting
                </a>
            </div>
        </div>

        <div class="dashboradContentWrapper">
            <div class="usersWrapper d-flex justify-content-center flex-wrap">

                <div class="userItem" style="background-image : url('./images/user-1.jpg')">
                    <div class="actionBtn">
                        <a href="#"><i class="fas fa-video"></i></a>
                        <a href="#"><i class="fas fa-microphone-slash"></i></a>
                    </div>
                    <h5>Sirimali Perera</h5>
                </div>

                <div class="userItem" style="background-image : url('./images/user-2.jpg')">
                    <div class="actionBtn">
                        <a href="#"><i class="fas fa-video"></i></a>
                        <a href="#"><i class="fas fa-microphone"></i></a>
                    </div>
                    <h5>Marlon Iddamalgoda</h5>
                </div>

            </div>
            <div class="sliderSecWrap"></div>
            <div class="actionsBarWrap"></div>
        </div>
    </div>
</div>

<?php include './footer.php';