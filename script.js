const wrapper = document.querySelector(".wrapper");
const loginLink = document.querySelector(".login-link");
const registerLink = document.querySelector(".register-link");
const homeCard = document.querySelector(".home-card");

if (registerLink) {
    registerLink.addEventListener("click", function(e) {
        e.preventDefault();
        wrapper.classList.add("slide-up");
        setTimeout(() => {
            window.location.href = registerLink.href;
        }, 200);
    });
}

if (loginLink) {
    loginLink.addEventListener("click", function(e) {
        e.preventDefault();
        wrapper.classList.add("slide-down");
        setTimeout(() => {
            window.location.href = loginLink.href;
        }, 200);
    });
}


if (homeCard) {
    setTimeout(() => {
        homeCard.classList.add("show");
    }, 100);
}
