// ================================
// Sikandar Theme - Main JavaScript
// ================================

document.addEventListener('DOMContentLoaded', function() {

    // ============================
    // 1. NAVBAR SCROLL EFFECT
    // ============================
    const header = document.getElementById('site-header');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });


    // ============================
    // 2. SMOOTH SCROLL for nav links
    // ============================
    const navLinks = document.querySelectorAll('.nav-menu a[href^="#"]');

    navLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                const headerHeight = header.offsetHeight;
                const targetPosition = targetElement.offsetTop - headerHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });


    // ============================
    // 3. ACTIVE NAV LINK on scroll
    // ============================
    const sections = document.querySelectorAll('section[id]');

    window.addEventListener('scroll', function() {
        let currentSection = '';
        const scrollPosition = window.scrollY + header.offsetHeight + 50;

        sections.forEach(function(section) {
            if (scrollPosition >= section.offsetTop) {
                currentSection = '#' + section.getAttribute('id');
            }
        });

        navLinks.forEach(function(link) {
            link.classList.remove('active');
            if (link.getAttribute('href') === currentSection) {
                link.classList.add('active');
            }
        });
    });


    // ============================
    // 4. SKILL CARDS - Entrance Animation
    // ============================
    const skillCards = document.querySelectorAll('.skill-card');

    // IntersectionObserver - jab element screen par aaye
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry, index) {
            if (entry.isIntersecting) {
                setTimeout(function() {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100);
            }
        });
    }, { threshold: 0.1 });

    skillCards.forEach(function(card) {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        observer.observe(card);
    });


    // ============================
    // 5. PROJECT CARDS - Animation
    // ============================
    const projectCards = document.querySelectorAll('.project-card');

    const projectObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry, index) {
            if (entry.isIntersecting) {
                setTimeout(function() {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 150);
            }
        });
    }, { threshold: 0.1 });

    projectCards.forEach(function(card) {
        card.style.opacity = '0';
        card.style.transform = 'translateY(40px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        projectObserver.observe(card);
    });

});
