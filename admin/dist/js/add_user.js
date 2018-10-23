$("#adduser").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Todos los campos son requeridos");
        //submitMSG(false, "orales");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    console.log(name);
    var nick = $("#nick").val();
    console.log(nick);
    var email = $("#email").val();
    console.log(email);
    var pass = $("#password").val();
    console.log(pass);
    var type = $("#type").val();
    console.log(type);
	var active = "yes";
	console.log(active);

    $.ajax({
        type: "POST",
        url: "add_user.php",
        data: "name=" + name + "&nick=" + nick + "&email=" + email + "&password=" + pass + "&type=" + type + "&active=" + active,
        success : function(text){
            if (text == "success"){
                formSuccess();
                location.href ="user-rol.php";
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}

function formSuccess(){
    $("#adduser")[0].reset();
    submitMSG(true, "The user has been saved")
}

function formError(){
    $("#adduser").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
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