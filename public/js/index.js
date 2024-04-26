const menuBar = document.querySelector(".content nav .bx.bx-menu");
const sideBar = document.querySelector(".sidebar");
const menuIcon = document.querySelector(".bx.bx-menu");

menuBar.addEventListener("click", () => {
    sideBar.classList.toggle("close");
});

const searchBtn = document.querySelector(
    ".content nav form .form-input button"
);
const searchBtnIcon = document.querySelector(
    ".content nav form .form-input button .bx"
);
const searchForm = document.querySelector(".content nav form");
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
const toggler = document.getElementById("theme-toggle");
const isDarkMode = localStorage.getItem("darkMode");

if (isDarkMode === "true") {
    document.body.classList.add("dark");
    toggler.checked = true;
}
toggler.addEventListener("change", function () {
    if (this.checked) {
        document.body.classList.add("dark");
        localStorage.setItem("darkMode", "true");
    } else {
        document.body.classList.remove("dark");
        localStorage.setItem("darkMode", false);
    }
});





// Lógica para abrir e fechar o modal
document.addEventListener("DOMContentLoaded", function () {
    var modal = document.getElementById("myModal");
    var btn = document.querySelector(".report");
    var span = document.getElementsByClassName("close")[0];

    btn.addEventListener("click", function () {
        modal.style.display = "block";
    });

    span.addEventListener("click", function () {
        modal.style.display = "none";
    });

    window.addEventListener("click", function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });
});
