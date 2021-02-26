/**
 * Script for JS sign in authentication.
 */
const registerForm = document.getElementById('register-form');  
const registerButton = document.getElementById('register-btn');  
const registerErrorMsg = document.getElementById('register-error-msg');


registerButton.addEventListener('click', (e) => {
    // e.preventDefault();
    const username = registerForm.username.value;
    const password = registerForm.password.value;
    const email = registerForm.email.value;

    if (!checkPassword(password) || !checkUsername(username) || !isEmailValid(email)) {
        e.preventDefault();
        registerErrorMsg.style.opacity = 1;
    } else {
        registerErrorMsg.style.opacity = 0;
        alert('You have successfully registered. Now you can login.');
    }
});

// returns true if email is valid
function isEmailValid(email) {
    var regex = /[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/;
    if (email.match(regex)) return true; 

    // alert("Please enter a valid e-mail address.");
    document.getElementById('email-fld').focus();
    return false;
}

function checkPassword(p) {
    if (p.length >= 8) return true;
    else               return false;  
}

function checkUsername(u) {
    if (u.match(/[a-zA-Z]/)) return true;
    else                     return false;
}
