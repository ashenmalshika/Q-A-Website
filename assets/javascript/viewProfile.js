// Get the elements
var editProfileBtn = document.getElementById('editProfileBtn');
var editProfileForm = document.getElementById('editProfileModal'); // Corrected ID
var cancelBtn = document.getElementById('cancelBtn');

// When the user clicks the button, toggle the visibility of the form and scroll to it
editProfileBtn.onclick = function() {
    if (editProfileForm.style.display === 'none' || editProfileForm.style.display === '') {
        editProfileForm.style.display = 'block';
        editProfileForm.scrollIntoView({ behavior: 'smooth' });
    } else {
        editProfileForm.style.display = 'none';
    }
}

// When the user clicks on the cancel button, hide the form
cancelBtn.onclick = function() {
    editProfileForm.style.display = 'none';
}

