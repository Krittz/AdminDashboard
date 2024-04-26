const sideMenu = document.querySelector("aside");
const menuBtn = document.getElementById("menu-btn");
const closeBtn = document.getElementById("close-btn");
const darkMode = document.querySelector(".dark-mode");

menuBtn.addEventListener("click", () => {
    sideMenu.style.display = "block";
});

closeBtn.addEventListener("click", () => {
    sideMenu.style.display = "none";
});

darkMode.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode-variables");
    darkMode.querySelector("span:nth-child(1)").classList.toggle("active");
    darkMode.querySelector("span:nth-child(2)").classList.toggle("active");

    const theme = document.body.classList.contains("dark-mode-variables")
        ? "dark"
        : "light";
    localStorage.setItem("theme", theme);
});

window.addEventListener("load", () => {
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme) {
        document.body.classList.add(
            savedTheme === "dark" ? "dark-mode-variables" : ""
        );
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const currentUrl = window.location.href;
    const sidebarLinks = document.querySelectorAll(".sidebar a");

    sidebarLinks.forEach((link) => {
        const href = link.getAttribute("href");
        if (currentUrl === href) {
            link.classList.add("active");
        }
    });
});

