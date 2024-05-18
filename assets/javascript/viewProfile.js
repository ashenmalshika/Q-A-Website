// Get the modal
var modal = document.getElementById("editProfileModal");

// Get the button that opens the modal
var btn = document.getElementById("editProfileBtn");

// Get the <span> element that closes the modal
var cancelBtn = document.getElementById("cancelBtn");

// Get the form
var form = document.getElementById("editProfileForm");

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on cancel button, close the modal
cancelBtn.onclick = function() {
    modal.style.display = "none";
}



// When the user submits the form
form.onsubmit = function (event) {
    event.preventDefault();

    // Prepare data to be sent via AJAX
    var formData = new FormData(form);

    fetch('<?php echo base_url(', Dashboard/updateProfile, '); ?>', {
        method: 'POST',
        body: formData
    }).then(response => response.json())
        .then(data => {
            if (data.success) {
                // Reload the page
                location.reload();
            } else {
                alert('Failed to update profile');
            }
        }).catch(error => {
            console.error('Error:', error);
            alert('An error occurred');
        });
};
