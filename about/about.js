document.addEventListener('DOMContentLoaded', () => {
    const awardsCarousel = document.querySelector('.awards-carousel');
    const cardWidth = document.querySelector('.awards-card').offsetWidth + 20; // Assuming 20px is the total horizontal margin

    document.getElementById('right').addEventListener('click', () => {
        awardsCarousel.scrollBy({ left: cardWidth, top: 0, behavior: 'smooth' });
    });

    document.getElementById('left').addEventListener('click', () => {
        awardsCarousel.scrollBy({ left: -cardWidth, top: 0, behavior: 'smooth' });
    });
});

