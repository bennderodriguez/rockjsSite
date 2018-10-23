$("#new-conexion").validator().on("submit", function (event) {
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


function submitForm(){
    // Initiate Variables With Form Content
    var name_proyect = $("#name_proyect").val();
    //console.log(name_proyect);
    var p_name = $("#p_name").val();
    //console.log(p_name);
    var database_configuration = $("#database_configuration").val();
    //console.log(database_configuration);
    var notes = $("#notes").val();
    if (notes == "") {
        notes= "S/D";
    }
    //console.log(notes);
    
    $.ajax({
        type: "POST",
        url: "add_new_conexion.php",
        data: "name_proyect=" + name_proyect + "&p_name=" + p_name + "&database_configuration=" + database_configuration + "&notes=" + notes,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}

function formSuccess(){
    $("#new-conexion")[0].reset();
    submitMSG(true, "The configuration has been saved")
}

function formError(){
    $("#new-conexion").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}