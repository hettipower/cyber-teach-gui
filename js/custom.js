jQuery(document).ready( function ($) {

    $('#roomRecordings').DataTable();

    $('.dashboardContWrap .recordingActionBar .left .record').on('click' , function(e){
        e.preventDefault();
        $(this).addClass('d-none');
        $('.dashboardContWrap .recordingActionBar .left .recording').addClass('start');
    });

    $('.dashboardContWrap .recordingActionBar .left .recording .stop').on('click' , function(e){
        e.preventDefault();
        $('.dashboardContWrap .recordingActionBar .left .record').removeClass('d-none');
        $('.dashboardContWrap .recordingActionBar .left .recording').removeClass('start');
    });

} );

function copyWebinarLink(){
    /* Get the text field */
    var copyText = document.getElementById("webinarLink");

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /*For mobile devices*/

    /* Copy the text inside the text field */
    document.execCommand("copy");

    jQuery('#toastCopy').toast('show');
}