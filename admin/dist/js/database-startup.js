$("#startup").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Llene los campos requeridos");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var db_name = $("#db_name").val();
    //console.log(db_name);
    var db_path = $("#db_path").val();
    //console.log(db_path);
    var db_port = $("#db_port").val();
    //console.log(db_port);
    var pf_name = $("#pf_name").val();
    //console.log(pf_name);
    var progress_path = $("#progress_path").val();
    //console.log(progress_path);
    var wrk_path = $("#wrk_path").val();
    //console.log(wrk_path);
    var other_argument = $("#other_argument").val();
    if (other_argument=="") {
        other_argument= " ";
    }
    if (db_port=="") {
        db_port= " ";
    }
    //console.log(other_argument);


    $.ajax({
        type: "POST",
        url: "add_database_startup.php",
        data: "db_name=" + db_name + "&db_path=" + db_path + "&db_port=" + db_port + "&pf_name=" + pf_name + "&progress_path=" + progress_path
              + "&wrk_path=" + wrk_path + "&other_argument=" + other_argument,
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
    $("#startup")[0].reset();
    submitMSG(true, "The configuration has been saved")
}

function formError(){
    $("#startup").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
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