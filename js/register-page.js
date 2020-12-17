const registerForm = document.getElementById("register-form");  
const registerButton = document.getElementById("submit-form");  
const registerErrorMsg = document.getElementById("register-error-msg");

registerButton.addEventListener("click", (e) => {
    e.preventDefault();
    var username = registerForm.username.value;
    var password = registerForm.password.value;
    var email = registerForm.email.value;

    if (username === '' || password === '' || email === '') {
        registerErrorMsg.style.opacity = 1;
    }
});
