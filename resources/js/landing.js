import { smoothScrollTo, smoothScrollToTop } from "./scroll";

document.querySelectorAll("[data-scroll]").forEach((el) => {
    el.addEventListener("click", function (e) {
        e.preventDefault();
        const targetId = this.getAttribute("data-scroll");
        smoothScrollTo(targetId);
    });
});

AOS.init({
    duration: 1000,
    offset: 50,
    once: true,
});

const backToTop = document.getElementById("backToTop");
if (backToTop) {
    window.addEventListener("scroll", () => {
        backToTop.classList.toggle("hidden", window.scrollY <= 300);
    });

    backToTop.addEventListener("click", () => {
        smoothScrollToTop();
    });
}
