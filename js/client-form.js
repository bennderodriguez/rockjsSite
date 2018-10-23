$("#clientform").validator().on("submit", function (event) {
   if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Llene los campos obligatorios");
    } else {
        // everything looks good!
        //event.preventDefault();
        //submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
	console.log(name);
	var email = $("#email").val();
	console.log(email);
	var company = $("#company").val();
	console.log(company);
	var iam = $("#iam").val();
	console.log(iam);
	var country = $("#country").val();
	console.log(country);
	var phone = $("#phone").val();
	console.log(phone);
	var system_name = $("#system_name").val();
	console.log(system_name);
	var number_user = $("#number_user").val();
	console.log(number_user);
	var version = $("#version").val();
	console.log(version);
	var is_critical = $("#is_critical").val();
	console.log(is_critical);
	var drp = $("#drp").val();
	console.log(drp);
	var attention_schedule = $("#attention_schedule").val();
	console.log(attention_schedule);
	var type_technology = $("#type_technology").val();
	console.log(type_technology);
	var programming_language = $("#programming_language").val();
	console.log(programming_language);
	var additional_components = $("#additional_components").val();
	console.log(additional_components);
	var number_screen = $("#number_screen").val();
	console.log(number_screen);
	var is_distributed = $("#is_distributed").val();
	console.log(is_distributed);
	var source_code = $("#source_code").val();
	console.log(source_code);
	var have_documentation_system = $("#have_documentation_system").val();
	console.log(have_documentation_system);
	var have_documentation_proccess = $("#have_documentation_proccess").val();
	console.log(have_documentation_proccess);
	var environments_desa = $("#environments_desa").val();
	console.log(environments_desa);
	var environment_QA = $("#environment_QA").val();
	console.log(environment_QA);
	var version_manager = $("#version_manager").val();
	console.log(version_manager);
	var use_satellite_systems = $("#use_satellite_systems").val();
	console.log(use_satellite_systems);
	var use_third_party_software = $("#use_third_party_software").val();
	console.log(use_third_party_software);
	var database_name = $("#database_name").val();
	console.log(database_name);
	var database_version = $("#database_version").val();
	console.log(database_version);
	var os = $("#os").val();
	console.log(os);
	var number_users = $("#number_users").val();
	console.log(number_users);
	var observations = $("#observations").val();
	console.log(observations);
	
	var database_name2 = $("#database_name2").val();
	console.log(database_name2);
	var database_version2 = $("#database_version2").val();
	console.log(database_version2);
	var os2 = $("#os2").val();
	console.log(os2);
	var number_users2 = $("#number_users2").val();
	console.log(number_users2);
	var observations2 = $("#observations2").val();
	console.log(observations2);
	
	

	$.ajax({
        type: "POST",
        url: "new_lavantamiento.php",
        data: "name=" + name + "&email=" + email + "&company=" + company + "&iam=" + iam
			  + "&country=" + country + "&phone=" + phone+ "&system_name=" + system_name+ "&number_user=" + number_user+  "&version=" + version
			  + "&is_critical=" + is_critical+ "&drp=" + drp+ "&attention_schedule=" + attention_schedule+ "&type_technology=" + type_technology+ "&programming_language=" + programming_language
			  + "&additional_components=" + additional_components+ "&number_screen=" + number_screen+ "&is_distributed=" + is_distributed+ "&source_code=" + source_code+ "&have_documentation_system=" + have_documentation_system
			  + "&have_documentation_proccess=" + have_documentation_proccess+ "&environments_desa=" + environments_desa+ "&environment_QA=" + environment_QA+ "&version_manager=" + version_manager+ "&use_satellite_systems=" + use_satellite_systems
			  + "&use_third_party_software=" + use_third_party_software+ "&database_name=" + database_name+ "&database_version=" + database_version+ "&os=" + os+ "&number_users=" + number_users
			  + "&observations=" + observations+ "&database_name2=" + database_name2+ "&database_version2=" + database_version2+ "&os2=" + os2+ "&number_users2=" + number_users2
			  + "&observations2=" + observations2,
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
    $("#clientform")[0].reset();
    submitMSG(true, "Hemos recibido sus datos. Gracias!")
}

function formError(){
    $("#clientform").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
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