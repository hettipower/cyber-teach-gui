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
    <div class="loginSidebarWrap">
        <div class="logoWrap">
            <a href="http://localhost/cyber-teach-gui/">
                <img src="./images/logo.png" alt="Logo" />
            </a>
        </div>
        <div class="linksWrap">
            <a href="#" class="btn iconBtn iconLeft createNewBtn">
                <span class="icon"><i class="fas fa-plus"></i></span>
                Create a room
            </a>

            <div class="listRooms">
                
                <a href="#" class="roomItem">
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <div class="content">
                        <span class="label">Home New</span>
                        <span class="sessionTime"><i class="far fa-clock"></i> Last session 2020.04.10</span>
                        <span class="subIcon"><i class="fas fa-ellipsis-v"></i></span>
                    </div>
                </a>
                
                <a href="#" class="roomItem">
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <div class="content">
                        <span class="label">Test 1</span>
                        <span class="sessionTime"><i class="far fa-clock"></i> Last session 2020.04.10</span>
                        <span class="subIcon"><i class="fas fa-ellipsis-v"></i></span>
                    </div>
                </a>

                <a href="#" class="roomItem">
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <div class="content">
                        <span class="label">Test 2</span>
                        <span class="sessionTime"><i class="far fa-clock"></i> Last session 2020.04.10</span>
                        <span class="subIcon"><i class="fas fa-ellipsis-v"></i></span>
                    </div>
                </a>

            </div>
        </div>
    </div>
    <div class="loginContWrap" >
        <div class="headerLoginWarp">
            <div class="menuWrap">
                <ul class="nav mainNavi">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">All Recordings</a>
                    </li>
                </ul>
            </div>
            <div class="dropdown accountWrap">
                <a class="btn dropdown-toggle" href="#" role="button" id="accountDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="userImage"></span>
                    Marlon Iddamalgoda
                </a>

                <div class="dropdown-menu" aria-labelledby="accountDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <div class="roomDetailsWrap">
            <!-- Content Area -->
        </div>
    </div>

    <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="true" id="toastCopy" data-delay="1000">
        <div class="toast-body">
            <strong>Copied</strong>
        </div>
    </div>
</div>

<?php include './footer.php';