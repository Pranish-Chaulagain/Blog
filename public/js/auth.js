const togglePasswordButtons = document.querySelectorAll(".toggle-password");

togglePasswordButtons.forEach(function (button) {
    const passwordInput = button.previousElementSibling;
    const eyeIcon = button.querySelector("i");

    passwordInput.addEventListener("keyup", function () {
        eyeIcon.style.display = this.value.trim() === "" ? "none" : "block";
    });

    button.addEventListener("click", function () {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.classList.remove("bi-eye-slash");
            eyeIcon.classList.add("bi-eye");
        } else {
            passwordInput.type = "password";
            eyeIcon.classList.remove("bi-eye");
            eyeIcon.classList.add("bi-eye-slash");
        }
    });
});
