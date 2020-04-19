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
            <div class="detailsWrap">
                <div class="titlesWrap d-flex justify-content-between">
                    <div class="title">
                        <i class="fas fa-home"></i> Home New
                    </div>
                    <div class="input-group copyWrap">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-link"></i></span>
                        </div>
                        <input type="text" class="form-control" value="https://webinars.elearning.lk/b/mar-njr-4x9" id="webinarLink" />
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <button class="btn webinarLinkCopy" onclick="copyWebinarLink()">Copy</button>
                            </span>
                        </div>
                    </div>
                    <a href="#" class="btn startMetting">START MEETING</a>
                </div>
                <div class="sessionsWrap d-flex justify-content-between">
                    <div class="sessionDetails">1 Sessions | 0 Room Recordings</div>
                    <div class="btnsWrap">
                        <a href="#" class="btn"><i class="fas fa-cog"></i> Room settings</a>
                        <a href="#" class="btn"><i class="fas fa-users-cog"></i> Manage Access</a>
                    </div>
                </div>
            </div>
            <div class="recordingListWrap">
                
                <div class="dataTableWrap">
                    <h3>Room Recordings</h3>
                    <table id="roomRecordings" class="display table table-bordered">
                        <thead>
                            <tr>
                                <th>NAME</th>
                                <th>THUMBNAILS</th>
                                <th>LENGTH</th>
                                <th>USERS</th>
                                <th>VISIBILITY</th>
                                <th>FORMATS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr>
                                <td colspan="6" class="text-center>This room has no recordings</td>
                            </tr> -->
                            <tr>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                            </tr>
                            <tr>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                            </tr>
                            <tr>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="true" id="toastCopy" data-delay="1000">
        <div class="toast-body">
            <strong>Copied</strong>
        </div>
    </div>
</div>

<?php include './footer.php';