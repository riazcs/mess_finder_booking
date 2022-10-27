var inputField = document.querySelector('.input-pass');
var icon = document.querySelector('.icon');
icon.addEventListener('click', function(){
    if(inputField.type === 'password'){
        inputField.type = 'text';
        icon.classList.replace("fa-eye","fa-eye-slash");
    } else{
        inputField.type = 'password';
        icon.classList.replace("fa-eye-slash","fa-eye");
    }
});