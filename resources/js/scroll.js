// scroll.js

// Fungsi scroll ke section dengan animasi halus
export function smoothScrollTo(targetId, duration = 1200) {
    const target = document.getElementById(targetId);
    if (!target) return;

    const targetPosition = target.getBoundingClientRect().top + window.scrollY;
    const startPosition = window.scrollY;
    const distance = targetPosition - startPosition;
    let start = null;

    window.requestAnimationFrame(function step(timestamp) {
        if (!start) start = timestamp;
        const progress = timestamp - start;
        const percent = Math.min(progress / duration, 1);
        window.scrollTo(0, startPosition + distance * percent);
        if (progress < duration) {
            window.requestAnimationFrame(step);
        }
    });
}

// Fungsi scroll ke atas dengan animasi halus
export function smoothScrollToTop(duration = 600) {
    const scrollStep = -window.scrollY / (duration / 15);
    const scrollInterval = setInterval(() => {
        if (window.scrollY !== 0) {
            window.scrollBy(0, scrollStep);
        } else {
            clearInterval(scrollInterval);
        }
    }, 15);
}
