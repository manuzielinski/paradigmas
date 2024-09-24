let carrito = [];

function addToCart(name, price) {
    const producto = { name, price };
    carrito.push(producto);
    alert(`${name} ha sido añadido al carrito.`);
    console.log(carrito); // verificacion
}

document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', () => {
        const name = button.getAttribute('data-name');
        const price = parseFloat(button.getAttribute('data-price'));
        addToCart(name, price);
    });
});
