function toggleForm() {
    var loginForm = document.getElementById("loginForm");
    var registrationForm = document.getElementById("registrationForm");

    if (loginForm.style.display === "none") {
        loginForm.style.display = "block";
        registrationForm.style.display = "none";
    } else {
        loginForm.style.display = "none";
        registrationForm.style.display = "block";
    }
}