const sideLinks = document.querySelectorAll(
    ".sidebar .side-menu li a:not(.logout)"
);
const menuBar = document.querySelector(".content nav .bx.bx-menu");
const sideBar = document.querySelector(".sidebar");
const searchBtn = document.querySelector(
    ".content nav form .form-input button"
);
const searchBtnIcon = document.querySelector(
    ".content nav form .form-input button .bx"
);
const searchForm = document.querySelector(".content nav form");
const toggler = document.getElementById("theme-toggle");

menuBar.addEventListener("click", () => {
    sideBar.classList.toggle("close");
});

searchBtn.addEventListener("click", function (e) {
    if (window.innerWidth < 576) {
        e.preventDefault;
        searchForm.classList.toggle("show");
        if (searchForm.classList.contains("show")) {
            searchBtnIcon.classList.replace("bx-search", "bx-x");
        } else {
            searchBtnIcon.classList.replace("bx-x", "bx-search");
        }
    }
});

window.addEventListener("resize", () => {
    if (window.innerWidth < 768) {
        sideBar.classList.add("close");
    } else {
        sideBar.classList.remove("close");
    }
    if (window.innerWidth > 576) {
        searchBtnIcon.classList.replace("bx-x", "bx-search");
        searchForm.classList.remove("show");
    }
});

const currentTheme = localStorage.getItem("theme");

if (currentTheme === "dark") {
    toggler.checked = true;
    document.body.classList.add("dark");
}

toggler.addEventListener("change", function () {
    if (this.checked) {
        localStorage.setItem("theme", "dark");
        document.body.classList.add("dark");
    } else {
        localStorage.setItem("theme", "light");
        document.body.classList.remove("dark");
    }
});
