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

    // Funkcionalnost za filtriranje jelovnika
    const filterButtons = document.querySelectorAll('.filter-btn');
    const menuItems = document.querySelectorAll('.menu-item-filterable');

    if (filterButtons.length > 0 && menuItems.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Uklanjanje 'active' klase sa svih gumba i dodavanje na kliknuti
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                const filter = button.dataset.filter;

                menuItems.forEach(item => {
                    if (filter === 'all' || item.dataset.category === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    }

});
