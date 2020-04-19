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
                    <a class="nav-link" href="http://localhost/cyber-teach-gui/dashbord.php"><i class="fas fa-th-large"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/cyber-teach-gui/dashbord-notofication.php"><i class="fas fa-bell"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="http://localhost/cyber-teach-gui/dashbord-messages.php">
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
                <div class="messageItem">
                    <div class="authorDetails d-flex justify-content-between align-items-center">
                        <div class="author d-flex align-items-center">
                            <span class="userImage" style="background-image : url('./images/user-1.jpg')"></span>
                            <span class="userName">Sirimali Perera</span>
                        </div>
                        <div class="time">30 Sec</div>
                    </div>
                    <div class="message">
                        <p>Thanks @Marlon It works perfectly now</p>
                        <div class="messageAction">
                            <a href="#" class="trash"><i class="far fa-trash-alt"></i></a>
                            <a href="#" class="reply"><i class="fas fa-reply"></i></a>
                        </div>
                    </div>
                </div>

                <div class="messageItem currentUser">
                    <div class="authorDetails d-flex justify-content-between align-items-center">
                        <div class="author d-flex align-items-center">
                            <span class="userName">You</span>
                        </div>
                        <div class="time">50 Sec</div>
                    </div>
                    <div class="message">
                        <p>Yes we can i think you need to check your speaker settings</p>
                    </div>
                </div>

                <div class="messageItem">
                    <div class="authorDetails d-flex justify-content-between align-items-center">
                        <div class="author d-flex align-items-center">
                            <span class="userImage" style="background-image : url('./images/user-1.jpg')"></span>
                            <span class="userName">Sirimali Perera</span>
                        </div>
                        <div class="time">1 Min</div>
                    </div>
                    <div class="message">
                        <p>Can you guys here me ? Does my mic work ?</p>
                        <div class="messageAction">
                            <a href="#" class="trash"><i class="far fa-trash-alt"></i></a>
                            <a href="#" class="reply"><i class="fas fa-reply"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboardContWrap">
        <div class="dashboardHeader d-flex justify-content-between">
            <div class="roomName">
                <i class="fas fa-home"></i> Home Room
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
            <div class="actionsBarWrap recordingActionBar">
                <div class="actionSec left">
                    <a href="#" class="action mute">
                        <i class="fas fa-microphone-slash"></i>
                        <span class="label">mute</span>
                    </a>
                    <a href="#" class="action video">
                        <i class="fas fa-video"></i>
                        <span class="label">Start Video</span>
                    </a>
                    <a href="#" class="action record">
                        <i class="fas fa-video"></i>
                        <span class="label">Record</span>
                    </a>
                    <span class="action recording">
                        <span class="cont">
                            <i class="fas fa-video"></i>
                            <span>10.10</span>
                        </span>
                        <span class="otherAction">
                            <a href="#" class="stop"><i class="fas fa-stop"></i></a>
                            <a href="#" class="pause"><i class="fas fa-pause"></i></a>
                        </span>
                    </span>
                    <a href="#" class="action invite">
                        <i class="fas fa-user-plus"></i>
                        <span class="label">Invite</span>
                    </a>
                </div>
                <div class="actionSec right">
                    <span class="action edit"><i class="fas fa-pencil-alt"></i></span>
                    <span class="action record"></span>
                    <span class="action back"><i class="fas fa-undo"></i></span>
                    <span class="action trash"><i class="far fa-trash-alt"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include './footer.php';