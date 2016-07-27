function login(){
    var email = $("#email-l").val;
    var psw = $("#psw-l").val;
    $.ajax({
        method: "POST",
        url: "php/login.php",
        data: {
            "pass" : psw,
            "email" : email
        },
        success: function( response ){
            console.log(response);
        }
    });
}
