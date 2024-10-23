const flavorButtons = document.querySelectorAll('.flavor-btn');
const selectedFlavor = document.getElementById('selectedFlavor');
const quantityInput = document.getElementById('quantity');
const purchaseStatus = document.getElementById('purchaseStatus');
const buyButton = document.getElementById('buyButton');

let flavorSeleccionado = '';
flavorButtons.forEach(button => {
    button.addEventListener('click', function () {
        flavorSeleccionado = this.getAttribute('data-flavor');
        selectedFlavor.textContent = `Has seleccionado: ${flavorSeleccionado}`;
        purchaseStatus.textContent = '';
    });
});
buyButton.addEventListener('click', function () {
    const cantidadComprar = parseInt(quantityInput.value);

    if (flavorSeleccionado === '') {
        purchaseStatus.textContent = 'Por favor, selecciona un sabor.';
        purchaseStatus.style.color = 'red';
    } else if (cantidadComprar <= 0) {
        purchaseStatus.textContent = 'La cantidad debe ser mayor que cero.';
        purchaseStatus.style.color = 'red';
    } else {
        purchaseStatus.textContent = `Redireccionando...`;
        purchaseStatus.style.color = 'green';

        setTimeout(function() {
            window.location.href = '../pages/comprar.html';
        }, 1000); // redireccion a comprar.html luego de 1 segundo.
    }
});
