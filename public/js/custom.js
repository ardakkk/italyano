
$(document).ready(function(){
    var btnLogin = document.getElementById('signinBtn');
    var signinEmail = document.getElementById('signinEmail');
    var signinPwd = document.getElementById('signinPassword');

    btnLogin.addEventListener('click',function(){
        $.ajax({
           type: 'POST',
           url: '/user/signin',
           dataType: 'JSON',
           data: {email: signinEmail.value, password: signinPwd.value, _token: token},
           success: function(res){
               console.log(res);
           }
        });
    });
});