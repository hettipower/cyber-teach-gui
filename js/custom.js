jQuery(document).ready( function ($) {

    $('#roomRecordings').DataTable();

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