document.getElementById('priceFilter').addEventListener('change', function() {
    let filterValue = this.value;
    let container = document.querySelector('.container');
    let products = Array.from(document.querySelectorAll('.card'));

    products.sort((a, b) => {
        let priceA = parseInt(a.getAttribute('data-price'));
        let priceB = parseInt(b.getAttribute('data-price'));

        if (filterValue === 'lowToHigh') {
            return priceA - priceB;
        } else {
            return priceB - priceA;
        }
    });

    container.innerHTML = '';

    products.forEach(product => container.appendChild(product));
});