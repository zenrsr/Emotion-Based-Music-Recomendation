// Get references to the password input and the checkbox
const passwordInput = document.querySelector('input[type="password"]');
const showPasswordCheckbox = document.querySelector('input[type="checkbox"]');
const emailInput = document.querySelector('input[type="email"]');
const form = document.querySelector('form');
// Add an event listener to the checkbox
showPasswordCheckbox.addEventListener('change', function () {
    if (this.checked) {
        // If the checkbox is checked, show the password
        passwordInput.type = "text";
    } else {
        // If the checkbox is unchecked, hide the password
        passwordInput.type = "password";
    }
});
// Get references to the email and password input fields, and the form

// Function to check if a field is empty
// Get references to the form and form elements
const signInButton = document.getElementsByClassName('sign-btn');
const signUpButton = document.getElementsByClassName('signup-btn');

// Function to check if a field is empty
function isFieldEmpty(field) {
    return field.value.trim() === '';
}

// Event listener for Sign In button
signInButton.addEventListener('click', function (e) {
    if (isFieldEmpty(emailInput) || isFieldEmpty(passwordInput)) {
        e.preventDefault(); // Prevent form submission
        alert('Please fill in all fields.'); // Display an error message
    }
});

// Event listener for Sign Up button
signUpButton.addEventListener('click', function (e) {
    if (isFieldEmpty(emailInput) || isFieldEmpty(passwordInput)) {
        e.preventDefault(); // Prevent form submission
        alert('Please fill in all fields.'); // Display an error message
    }
});
