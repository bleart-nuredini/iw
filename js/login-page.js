const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("form-submit");
const loginErrorMsg = document.getElementById("login-error-msg");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (username === "user" && password === "123") {
        alert("You have successfully logged in.");
        location.reload();
    } else if (username === "") {
        alert("The username cannot be empty.");
        loginFrom.username.focus();
    } else {
        loginErrorMsg.style.opacity = 1;
    }
});