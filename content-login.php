<div class="loginContWrap" >
    <?php include './header-login.php'; ?>
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