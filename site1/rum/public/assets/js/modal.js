var checkboxVal = '';

function loading(bool) {
    if (bool)
        $("#loading").modal('show');
    else
        $("#loading").modal('hide');

}

function showInfoMessage(title, content, confirm, close) {
    //add title
    $("#message-dialog .modal-header .modal-title").html(title);

    //add content
    $("#message-dialog .modal-body").html(content);

    //show modal dialog
    $("#message-dialog").modal('show');

    //pass confirm function to confirm action
    $("#message-dialog #confirm-modal").on("click", confirm);

    //pass close function to close action
    $("#message-dialog #close-modal").on("click", close);
}

function hideInfoMessage() {
    $("#message-dialog").modal('hide');
}