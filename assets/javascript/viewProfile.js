// Define a Backbone View for the profile
var ProfileView = Backbone.View.extend({
    el: 'body', // Bind the view to the body element

    // Define event listeners
    events: {
        'click #editProfileBtn': 'toggleEditProfileForm',
        'click #cancelBtn': 'hideEditProfileForm'
    },

    // Initialize the view and cache elements
    initialize: function() {
        this.editProfileForm = this.$('#editProfileModal');
    },

    // Function to toggle the visibility of the edit profile form
    toggleEditProfileForm: function() {
        if (this.editProfileForm.css('display') === 'none' || this.editProfileForm.css('display') === '') {
            this.editProfileForm.css('display', 'block');
            this.editProfileForm[0].scrollIntoView({ behavior: 'smooth' });
        } else {
            this.editProfileForm.css('display', 'none');
        }
    },

    // Function to hide the edit profile form
    hideEditProfileForm: function() {
        this.editProfileForm.css('display', 'none');
    }
});

// Instantiate the view
var profileView = new ProfileView();