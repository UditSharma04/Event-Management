// script.js

const form = document.getElementById('ngo-signup-form');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;
    const description = document.getElementById('description').value;
    const address = document.getElementById('address').value;
    const phone = document.getElementById('phone').value;

    // Validate form fields
    if (name === '' || email === '' || password === '' || confirmPassword === '' || description === '' || address === '' || phone === '') {
        alert('Please fill in all fields.');
        return;
    }

    if (password !== confirmPassword) {
        alert('Passwords do not match.');
        return;
    }

    // Send data to server
    const userData = {
        name,
        email,
        password,
        description,
        address,
        phone
    };

    fetch('/signup', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(userData)
    })
    .then((res) => res.json())
    .then((data) => {
        if (data.success) {
            alert('Sign up successful!');
            // Redirect to login page or dashboard
        } else {
            alert('Error signing up.');
        }
    })
    .catch((err) => {
        console.error(err);
    });
});