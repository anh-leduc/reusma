validate = () => {
    let id = $("#id").val();
    let name = $("#name").val();
    let username = $("#username").val();
    let password = $("#password").val();
    let status = $("#status").val();
    let id_level = $("#id_level").val();
    let privillege = $("#privillege").val();
    let gender = $("#gender").val();

    console.log(id + ' ' + name + ' ' + username + ' ' + password + ' ' + status + ' ' + id_level + ' ' + privillege + ' ' + gender);
    if (id == '' || name == '' || username == '' || password == '' || status == '' || id_level == '' || privillege == '' || gender == '') {
        alert("Please enter fully information !!!");
        return false;
    }

    return true;
}

checkUser = (username) => {
    let bool;
    $.ajax({
        type: 'get',
        url: 'employee/checkUser/' + username,
        async: false,
        success: function(data) {
            bool = true;
        },
        error: function(jqXHR, textStatus, errorThrown) {
            if (jqXHR.status == 403) {
                alert(errorThrown);
            } else {
                alert("Username was existed;");
            }
            bool = false;
        }
    });
    return bool;
}

$(document).ready(function() {
    $(".forms-employee").on("submit", function(event) {
        event.preventDefault();

        let formData = new FormData(this);

        if (validate()) {
            let username = $("#username").val();

            if (checkUser(username)) {

                $("#exampleModalLong").modal('hide');

                loading(true);
                $.ajax({
                    type: 'post',
                    url: 'employee/add',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(res) {
                        loading(false);
                        window.location.replace("employee");
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        loading(false);
                        if (jqXHR.status == 403) {
                            showInfoMessage(errorThrown, "You are not allowed");
                        } else {
                            showInfoMessage("Error Message", "Failed to create Employee");
                            $("#exampleModalLong").modal('show');
                        }
                    }
                })
            } else {
                console.log("check fail");
            }
        }
    })
})