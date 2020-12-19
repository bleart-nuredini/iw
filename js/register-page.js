const registerForm = document.getElementById('register-form');  
const registerButton = document.getElementById('submit-form');  
const registerErrorMsg = document.getElementById('register-error-msg');

if (isEmailValid('test@mail.com')) alert('it works');
else alert('nope');

registerButton.addEventListener('click', (e) => {
    e.preventDefault();
    const username = registerForm.username.value;
    const password = registerForm.password.value;
    const email = registerForm.email.value;

    if ((username === '' || password === '' || email === '') || isEmailValid(email)) {
        registerErrorMsg.style.opacity = 1;
    } else {
        alert('You have successfully registered.');
    }
});

alert('wtf');

// return true if email is valid
function isEmailValid(email) {
    var regex = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
    if (email.value.match(regex)) return true; 

    alert("Please enter a valid e-mail address.");
    document.form.email.focus();
    return false;
}
