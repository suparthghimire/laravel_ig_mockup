eye = document.getElementById("eye");
password = document.getElementById("password");
toggleLine = document.getElementById("toggle-line");
eye.addEventListener("click", function () {
    console.log(1);
    toggleLine.classList.toggle("toggle-line-active");

    if (password.type === "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }
});
