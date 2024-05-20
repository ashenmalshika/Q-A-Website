// Defining a Backbone View 
var ProfileView = Backbone.View.extend({
    el: 'body', 

    // Define event listeners
    events: {
        'click #editProfileBtn': 'toggleEditProfileForm',
        'click #cancelBtn': 'hideEditProfileForm'
    },

    // Initialize the view 
    initialize: function() {
        this.editProfileForm = this.$('#editProfileModal');
    },

    //toggle the visibility of the edit profile form
    toggleEditProfileForm: function() {
        if (this.editProfileForm.css('display') === 'none' || this.editProfileForm.css('display') === '') {
            this.editProfileForm.css('display', 'block');
            this.editProfileForm[0].scrollIntoView({ behavior: 'smooth' });
        } else {
            this.editProfileForm.css('display', 'none');
        }
    },

    // hide the edit profile form
    hideEditProfileForm: function() {
        this.editProfileForm.css('display', 'none');
    }
});

// Instantiate the view
var profileView = new ProfileView();