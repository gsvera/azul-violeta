var menu = document.getElementById("menu-header");
var btnMenu = document.getElementById("btn-menu");
var btnCloseMenu = document.getElementById("btn-close-menu");
var btnContact = document.getElementById("btn-contact");
var subMenuMobile = document.getElementById("submenu-mobile");
const menuOffset = menu.offsetTop;
const regexEmail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

window.addEventListener("scroll", () => {
    if (window.scrollY > menuOffset) {
        menu.classList.add("fixed");
    } else {
        menu.classList.remove("fixed");
    }
});

btnMenu.addEventListener("click", () => {
    subMenuMobile.classList.toggle("active");
});

btnCloseMenu.addEventListener("click", () => {
    subMenuMobile.classList.toggle("active");
});
btnContact.addEventListener("click", () => {
    subMenuMobile.classList.toggle("active");
});

function showText(id) {
    var element = document.getElementById("text-step-" + id);
    var button = document.getElementById("button-step-" + id);

    element.classList.toggle("text-expand");
    button.textContent = element.classList.contains("text-expand")
        ? "LEER MENOS"
        : "LEER MÁS";
}

// let index = 0;

// document.getElementById("next").addEventListener("click", () => {});

function changeSlide(slide, index) {
    const track = document.querySelector(".track-" + slide);
    index = index === 0 ? 1 : 0;
    track.style.transform = `translateX(-${index * 100}%)`;
}

function chageSlideMultiple(trackSlide) {
    const track = document.querySelector(trackSlide);
    // index = index === 0 ? 1 : 0;
    track.style.transform = `translateX(-${track.getAttribute("data-value") * 100}%)`;
}
function nextSlide(slide, elemts) {
    var elementSlide = document.querySelector(slide);
    var value = parseInt(elementSlide.getAttribute("data-value"));
    var items = document.querySelectorAll(elemts);

    if (items.length > value + 1) {
        elementSlide.setAttribute("data-value", value + 1);
        chageSlideMultiple(slide);
    }
}
function prevSlide(slide, elemts) {
    var elementSlide = document.querySelector(slide);
    var value = parseInt(elementSlide.getAttribute("data-value"));
    if (value > 0) {
        elementSlide.setAttribute("data-value", value - 1);

        chageSlideMultiple(slide);
    }
}

function showFaq(n, element) {
    var answer = document.getElementById("answer-" + n);
    answer.classList.toggle("active");
    element.classList.toggle("fa-plus");
    element.classList.toggle("fa-window-minimize");
}

const images = document.querySelectorAll(".img-gallery");

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            const img = entry.target;
            img.src = img.dataset.src;
            observer.unobserve(img);
        }
    });
});

function recaptchaOK() {
    var btnSubmit = document.getElementById("btn-submit");
    btnSubmit.disabled = false;
    btnSubmit.classList.remove("disabled-btn");
    btnSubmit.classList.add("btn-contact-box");
}

function recaptchaExpired() {
    var btnSubmit = document.getElementById("btn-submit");
    btnSubmit.disabled = true;
    btnSubmit.classList.add("disabled-btn");
    btnSubmit.classList.remove("btn-contact-box");
}

var form = document.getElementById("form-contact");

form.addEventListener("submit", function (e) {
    e.preventDefault();
    var textError = document.getElementById("error-text");
    var textEmail = document.getElementById("error-email");
    var fullName = document.getElementById("full-name").value.trim();
    var phoneNumber = document.getElementById("phone-number").value.trim();
    var email = document.getElementById("email").value;

    textError.classList.add("d-none");
    textEmail.classList.add("d-none");

    if (!fullName || !phoneNumber) {
        textError.classList.remove("d-none");
        return;
    }
    if (!regexEmail.test(email)) {
        textEmail.classList.remove("d-none");
        return;
    }

    form.submit();
});
