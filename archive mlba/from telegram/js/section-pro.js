// Dots Navigation
document.querySelectorAll('.scroll-dots-nav a').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const offset = parseInt(this.getAttribute('data-offset'), 10) || 0;
        const target = document.getElementById(targetId);

        const top = target.getBoundingClientRect().top + window.scrollY - offset;
        smoothScrollTo(top, 1200);
    });
});

const sections = document.querySelectorAll('section');
const navDots = document.querySelectorAll('.scroll-dots-nav a');

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        const id = entry.target.getAttribute('id');
        const dot = document.querySelector(`.scroll-dots-nav a[data-target="${id}"]`);
        if (entry.isIntersecting) {
            navDots.forEach(link => link.classList.remove('active'));
            if (dot) {
                dot.classList.add('active');
            }
        }
    });
}, {
    threshold: 0.6
});