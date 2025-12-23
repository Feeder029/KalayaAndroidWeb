document.addEventListener("DOMContentLoaded", () => {
const navItems = document.querySelectorAll(".nav-link");
const sections = document.querySelectorAll("section");

/* CLICK ACTIVE */
navItems.forEach(item => {
    item.addEventListener("click", () => {
        navItems.forEach(i => i.classList.remove("active"));
        item.classList.add("active");
    });
});

/* SCROLL SPY */
window.addEventListener("scroll", () => {
    let current = "";

    sections.forEach(section => {
        const rect = section.getBoundingClientRect();

        if (rect.top <= 150 && rect.bottom > 150) {
        current = section.id;
        }
    });

    navItems.forEach(item => {
        const link = item.querySelector("a");
        item.classList.remove("active");

        if (link.getAttribute("href") === `#${current}`) {
        item.classList.add("active");
        }
    });
});

});
