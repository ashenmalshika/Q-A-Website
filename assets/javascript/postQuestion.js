document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
        var alertBox = document.getElementById('alertBox');
        if (alertBox) {
            alertBox.style.display = 'none'; 
        }
    }, 3000); 
});