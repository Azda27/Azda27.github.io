// Hide and show password
const eyeIcons = document.querySelectorAll(".show-hide");

eyeIcons.forEach((eyeIcon) => {
  eyeIcon.addEventListener("click", () => {
    const pInput = eyeIcon.parentElement.querySelector("input"); //getting parent element of eye icon and selecting the password input
    if (pInput.type === "password") {
      eyeIcon.classList.replace("bxs-hide", "bxs-show");
      return (pInput.type = "text");
    }
    eyeIcon.classList.replace("bxs-show", "bxs-hide");
    pInput.type = "password";
  });
});