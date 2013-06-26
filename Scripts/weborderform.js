function jsalert(msg) {
    $.msgBox({
        title: "",
        content: msg,
        showButtons: false
    });

}

function jsconfirm(msg) {
    $.msgBox({
        title: "",
        content: msg,
        type: "confirm",
        buttons: [{ value: "Yes" }, { value: "No"}],
        success: function (result) {
        
            // var v = result + " has been clicked\n";
            // alert(v);
            return result;

        }
    });
}



function jslogin(title_msg) {
    $.msgBox({ type: "prompt",
        title: title_msg,
        popuptype: "Login",
         Message: "",
        inputs: [
    { header: "User Name", type: "text", name: "UserName" },
    { header: "Password", type: "password", name: "Password" },
    ],
        buttons: [
    { value: "Login"}],
        success: function (result, values) {
            /*var v = result + " has been clicked\n";
            $(values).each(function (index, input) {
            v += input.name + " : " + input.value +
            (input.checked != null ? (" - checked: " + input.checked) : "") + "\n";
            });
            alert(v);*/
            var username = "";
            var password = "";
            $(values).each(function (index, input) {
                if (input.name == "UserName") {
                    username = input.value;
                }

                if (input.name == "Password") {
                    password = input.value;
                }
               

            });

            if (username.trim() == "admin" && password.trim() == "kenworth") {
                setCookie("username", username, 1);
                	
                	
            }
            else
            {jslogin(title_msg);
            	 	}
            /*else {
                $.msgBox({
                    title: "",
                    content: "Invalid UserName & Password",
                    type: "error",
                    showButtons: false,
                    afterClose: function (result) { jslogin(title_msg) }
                });


            }*/
        }
    });
}

function jsCaterpillarlogin(title_msg) {
    $.msgBox({ type: "prompt",
        title: title_msg,
        popuptype: "Login",
        Message: "User name & password is provided to you through your Caterpillar employee pre order email invitation.",
        inputs: [
    { header: "User Name", type: "text", name: "UserName" },
    { header: "Password", type: "password", name: "Password" },
    ],
        buttons: [
    { value: "Login"}],
        success: function (result, values) {
            /*var v = result + " has been clicked\n";
            $(values).each(function (index, input) {
            v += input.name + " : " + input.value +
            (input.checked != null ? (" - checked: " + input.checked) : "") + "\n";
            });
            alert(v);*/
            var username = "";
            var password = "";
            $(values).each(function (index, input) {
                if (input.name == "UserName") {
                    username = input.value;
                }

                if (input.name == "Password") {
                    password = input.value;
                }
               

            });
           
            if (username.trim() == "988" && password.trim() == "cat") {
                //setCookie("username", username, 1);
              		      	
                	
            }
            else
            {
            	 jsCaterpillarlogin(title_msg);
            	 // $('#append_custom_message').html('User name & password is provided to you through your Caterpillar employee pre order email invitation.');
			       
			        }
			       
		/*	$('#append_custom_message').css('margin-top', '10px');
			$('.msgBox').css('min-height', '276px');
			$('.msgBox').css('width', '550px');
			$('.msgBoxContentlogin').css('width', '50%');
			$('.loginbtnarea').css('width', '45%');
			$('.loginbtnarea').css('text-align', 'justify');
			$('div.msgBoxLoginTitle').css('height', '90px');*/

            /*else {
                $.msgBox({
                    title: "",
                    content: "Invalid UserName & Password",
                    type: "error",
                    showButtons: false,
                    afterClose: function (result) { jslogin(title_msg) }
                });


            }*/
        },
        afterShow: function (result) {
			        $('.msgBox').css('min-height','276px');
			        $('.msgBox').css('width','550px');
			        $('.msgBoxContentlogin').css('width','50%');
			        $('.loginbtnarea').css('width','45%');	
			        $('.loginbtnarea').css('text-align','justify');
			        $('div.msgBoxLoginTitle').css('height','90px'); 
			        $('#append_custom_message').css('margin-top','10px');
        }
    });
}



function setCookie(c_name, value, exdays) {
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
    document.cookie = c_name + "=" + c_value;
}

function getCookie(c_name) {
    var c_value = document.cookie;
    var c_start = c_value.indexOf(" " + c_name + "=");
    if (c_start == -1) {
        c_start = c_value.indexOf(c_name + "=");
    }
    if (c_start == -1) {
        c_value = null;
    }
    else {
        c_start = c_value.indexOf("=", c_start) + 1;
        var c_end = c_value.indexOf(";", c_start);
        if (c_end == -1) {
            c_end = c_value.length;
        }
        c_value = unescape(c_value.substring(c_start, c_end));
    }
    return c_value;
}

function checkCookie() {
	alert()
    var username = getCookie("username");
    if (username != null && username != "") {
        //  alert("Welcome again " + username);
        return true;
    }
    else {

        /*  username = prompt("Please enter your name:", "");
        if (username != null && username != "") {
        setCookie("username", username, 1);
        }*/
        return false;
    }
}