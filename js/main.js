document.addEventListener('DOMContentLoaded', function() {

    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');

    // Funkcionalnost za mobilnu navigaciju (hamburger menu)
    if (hamburger && navLinks) {
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            hamburger.classList.toggle('active');
        });
    }

    // Dodavanje 'active' klase trenutno aktivnom linku u navigaciji
    const currentLocation = window.location.href;
    const allNavLinks = document.querySelectorAll('.nav-links a');

    allNavLinks.forEach(link => {
        if (link.href === currentLocation) {
            link.classList.add('active');
        }
    });

});
