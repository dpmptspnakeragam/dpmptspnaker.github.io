document.addEventListener("DOMContentLoaded", function () {
    const starsContainers = document.querySelectorAll('.stars');

    starsContainers.forEach(container => {
        const stars = container.querySelectorAll('.fa-star');

        stars.forEach(star => {
            star.addEventListener('click', function () {
                const value = parseInt(this.getAttribute('data-value'));
                const ratingContainer = container.getAttribute('data-rating');
                const hiddenInput = document.querySelector(`input[name="${ratingContainer}"]`);

                if (hiddenInput) {
                    hiddenInput.value = value;
                    resetStars(stars);
                    highlightStars(stars, value);
                }
            });
        });

        // Set initial value based on set_value
        const hiddenInput = document.querySelector(`input[name="${container.getAttribute('data-rating')}"]`);
        if (hiddenInput && hiddenInput.value) {
            highlightStars(stars, parseInt(hiddenInput.value));
        }
    });

    function resetStars(stars) {
        stars.forEach(star => {
            star.classList.remove('selected');
            star.classList.replace('fas', 'far'); // Mengganti kelas ikon dari fas fa-star menjadi far fa-star
        });
    }

    function highlightStars(stars, value) {
        for (let i = 0; i < value; i++) {
            stars[i].classList.add('selected');
            stars[i].classList.replace('far', 'fas'); // Mengganti kelas ikon dari far fa-star menjadi fas fa-star
        }
    }

});