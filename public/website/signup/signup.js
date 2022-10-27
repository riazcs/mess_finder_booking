var inputField1 = document.querySelector('.input-pass1');
var inputField2 = document.querySelector('.input-pass2');
var icon1 = document.getElementById('icon1');
var icon2 = document.getElementById('icon2');

icon1.addEventListener('click', function(){
    if(inputField1.type === 'password'){
        inputField1.type = 'text';
        icon1.classList.replace("fa-eye","fa-eye-slash");
    } else{
        inputField1.type = 'password';
        icon1.classList.replace("fa-eye-slash","fa-eye");
    }
});
icon2.addEventListener('click', function(){
    if(inputField2.type === 'password'){
        inputField2.type = 'text';
        icon2.classList.replace("fa-eye","fa-eye-slash");
    } else{
        inputField2.type = 'password';
        icon2.classList.replace("fa-eye-slash","fa-eye");
    }
});

