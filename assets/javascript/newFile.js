// When the user submits the form
form.onsubmit = function (event) {
    event.preventDefault();

    // Prepare data to be sent via AJAX
    var formData = new FormData(form);

    fetch('<?php echo base_url(', Dashboard / updateProfile, '); ?>', {
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
