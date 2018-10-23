$("#update-service").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Todos los campos son requeridos");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm() {
    // Initiate Variables With Form Content
    var id = $("#id").val();
    console.log(id);
    var name_conf = $("#name_conf").val();
    console.log(name_conf);
    var urli = $("#url").val();
    console.log(urli);
    var DLC = $("#dlc").val();
    console.log(DLC);
    var PATHPROG = $("#pathprog").val();
    console.log(PATHPROG);
    var PROCGI = $("#parameter-file").val();
    console.log(PROCGI);
    var BD = $("#db").val();
    console.log(BD);
    var LOG = $("#lg").val();
    console.log(LOG);
    var param = $("#notes").val();
    console.log(param);



    $.ajax({
        type: "POST",
        url: "update-data-service.php",
        data: "id=" + id +
                "&name_conf=" + name_conf +
                "&urli=" + urli +
                "&DLC=" + DLC +
                "&PATHPROG=" + PATHPROG +
                "&PROCGI=" + PROCGI +
                "&BD=" + BD +
                "&LOG=" + LOG +
                "&param=" + param,
        success: function (text) {
            if (text == "success") {
                formSuccess();
            } else {
                formError();
                submitMSG(false, text);
            }
        }
    });
}

function formSuccess() {
    $("#update-service")[0].reset();
    submitMSG(true, "The configuration has been Updated")
    setTimeout(10000);
    location.href ="showdatabase.php?update-responce=ok";
}

function formError() {
    $("#update-service").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        $(this).removeClass();
    });
}

function submitMSG(valid, msg) {
    if (valid) {
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}