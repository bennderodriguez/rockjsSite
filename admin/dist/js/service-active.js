$("#active-service").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Imposible activar servicio Compruebe la disponibilidad del ServiceWeb");
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
    var urli = $("#url").val();
    console.log(urli);
    var name_conf = $("#name_conf").val();
    console.log(name_conf);
    var PROCGI = $("#parameter-file").val();
    console.log(PROCGI);
    var PATHPROG = $("#pathprog").val();
    console.log(PATHPROG);
    var DLC = $("#dlc").val();
    console.log(DLC);
    var BD = $("#db").val();
    console.log(BD);
    var LOG = $("#lg").val();
    console.log(LOG);
    var param = $("#notes").val();
    console.log(param);


    $.ajax({
        type: "POST",
        url: urli,
        data: "PROCGI=" + PROCGI +
                "&DLC=" + DLC +
                "&PATHPROG=" + PATHPROG +
                "&BD=" + BD +
                "&LOG=" + LOG +
                "&param=" + param,
        success: function (text) {
            if (text == "success") {
                formSuccess();
                location.href ="showdatabase.php?act=true&id="+id;
            } else {
                formError();
                submitMSG(false, "Error al cargar "+urli+" El origen o recurso solicitado no está presente.");
            }
        }
    });
}

function formSuccess() {
    $("#active-service")[0].reset();
    submitMSG(true, "The configuration has been saved")
}

function formError() {
    $("#active-service").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
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