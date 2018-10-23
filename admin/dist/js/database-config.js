$("#contactForm").validator().on("submit", function (event) {
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
    var name_conf = $("#name_conf").val();
    //console.log(name_conf);
    var sw = $("#sw").val();
    //console.log(sw);
    var parameter_file = $("#parameter-file").val();
    //console.log(parameter_file);
    var pathprog = $("#pathprog").val();
    //console.log(pathprog);
    var dlc = $("#dlc").val();
    //console.log(dlc);
     var db = $("#db").val();
    //console.log(db);
     var lg = $("#lg").val();
    //console.log(lg);
    var notes = $("#notes").val();
    if (notes == "") {
        notes= " ";
    }
    //console.log(notes);
    
    $.ajax({
        type: "POST",
        url: "add_database_config.php",
        data: "parameter_file=" + parameter_file + "&url=" + sw + "&pathprog=" + pathprog + "&dlc=" + dlc + "&name_conf=" + name_conf + "&notes=" + notes+ "&db=" + db+ "&lg=" + lg,
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
    $("#contactForm")[0].reset();
    submitMSG(true, "The configuration has been saved")
    location.href ="showdatabase.php?add-conf=ok";
}

function formError(){
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
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