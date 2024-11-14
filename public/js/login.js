$(document).ready(function() {  
    var token = localStorage.getItem("accessToken");
    if (token) {
        $(location).prop('href', '/backoffice');
    }

    $("#btnLogin").click(function() {
        var username = $("#username").val();
        var password = $("#password").val();
        
        if (!username || !password) {
            $("#mensaje").html("Por favor, complete todos los campos.");
            return;
        }

        var data = {
            "username": username,
            "password": password,
            "grant_type": "password",
            "client_id": 3,
            "client_secret": "wUCCTUAGnKZbgmWeLpwQAAXQpoFVV7hod1bgETJH"
        };

        jQuery.ajax({  
            url: 'http://localhost:8000/oauth/token',  
            type: 'POST',
            headers: {
                "Accept": "application/json",
                "Content-Type": "application/json",
            },
            data: JSON.stringify(data),
            success: function(resultado) {  
                localStorage.setItem("accessToken", resultado.access_token);
                $(location).prop('href', '/backoffice');
            },
            error: function(resultado) {
                if (resultado.responseJSON && resultado.responseJSON.error) {
                    if (resultado.responseJSON.error === "invalid_grant") {
                        $("#mensaje").html(resultado.responseJSON.message);
                    } else if (resultado.responseJSON.error === "invalid_request") {
                        $("#mensaje").html(resultado.responseJSON.hint);
                    } else {
                        $("#mensaje").html("Error desconocido, inténtalo de nuevo.");
                    }
                } else {
                    $("#mensaje").html("Error en la conexión.");
                }
            } 
        });  
    });
});
