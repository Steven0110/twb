function login(){
    var email = $("#email-l").val();
    var psw = $("#psw-l").val();
    $.ajax({
        method: "POST",
        url: "php/login.php",
        data: {
            "pass" : psw,
            "email" : email
        },
        success: function( response ){
            console.log(response);
            if( response == "0" ){
                //No account
                swal({
                    title: "E-mail sin registrar",
                    text: "Puede registrar una nueva cuenta con el e-mail ingresado",
                    type: "warning"
                });
            }else if( typeof response.name !== "undefined" ){
                //Match
                swal({
                    title: "Datos correctos",
                    text: "Bienvenido " + response.name,
                    type: "success"
                },
                function(){
                    $.cookie("username", response.name );
                    location.href = "index.html";
                });

            }else if( response == "-1"){
                //Mismatch
                swal({
                    title: "Error :(",
                    text: "Datos incorrectos. Asegúrese de ingresar la información correcta",
                    type: "error"
                });
            }else{
                swal({
                    title: "Error desconocido",
                    text: "Favor de contactar a <strong>cabello.acosta.gerardo@gmail.com</strong>.<p>Error: " + response + "</p>",
                    type: "error",
                    html: true
                });
            }
        }
    });
}
function registerAccount(){
    var psw = $("#psw").val();
    var psw_r = $("#psw-r").val();
    if( psw_r != psw ){
        swal({
            title : "Contraseñas diferentes",
            text : "Ambas contraseñas deben ser idénticas. Favor de revisarlas",
            type : "error"
        });
    }else{
        var email = $("#e-mail").val();
        var name = $("#name").val();
        var apPat = $("#apPat").val();
        var apMat = $("#apMat").val();
        $.ajax({
            url : "php/register.php",
            method : "POST",
            data: {
                "email" : email,
                "psw" : psw,
                "name" : name,
                "apPat" : apPat,
                "apMat" : apMat
            },
            success : function( response ){
                if( response == "1"){
                    //OK
                    swal({
                        type : "success",
                        title : "OK",
                        text : "Cuenta registrada correctamente :)"
                    }, function(){
                        location.reload();
                    });
                }else if( response == "-1"){
                    //E-mail is registered
                    swal({
                        type : "warning",
                        title : "Error",
                        text : "Ya hay una cuenta registrada con ese e-mail"
                    });
                }else{
                    //Unexpected error
                    swal({
                        type : "error",
                        title : "Error desconocido",
                        text: "Favor de contactar a <strong>cabello.acosta.gerardo@gmail.com</strong>.<p>Error: " + response + "</p>"
                    });
                }
            }
        });
    }
}



