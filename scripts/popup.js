function showPopup() {
    document.getElementById('reviewPopup').style.display = 'block';
}

document.getElementById('closePopup').onclick = function() {
    document.getElementById('reviewPopup').style.display = 'none';
}

window.onclick = function(event) {
    const popup = document.getElementById('reviewPopup');
    if (event.target === popup) {
        popup.style.display = 'none';
    }
}

window.onload = function() {
    setTimeout(showPopup, 2100);
}
