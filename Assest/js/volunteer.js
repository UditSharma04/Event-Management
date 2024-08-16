// document.getElementById('volunteerForm').addEventListener('submit', function(event) {
//     event.preventDefault(); // Prevent form submission

//     // Gather form data
//     const name = document.getElementById('name').value.trim();
//     const email = document.getElementById('email').value.trim();
//     const phone = document.getElementById('phone').value.trim();
//     const availability = document.getElementById('availability').value;
    
//     // Simple validation
//     if (name === '' || email === '' || phone === '' || availability === '') {
//         alert('Please fill out all required fields.');
//         return;
//     }

//     // Simulate form submission success
//     document.getElementById('responseMessage').innerText = 'Thank you for signing up to volunteer!';
    
//     // Optionally reset the form
//     document.getElementById('volunteerForm').reset();
// });




// script.js

document.getElementById('volunteer-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    // Gather form data
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const availability = document.getElementById('availability').value;
    const skills = [];
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach((checkbox) => {
        if (checkbox.checked) {
            skills.push(checkbox.value);
        }
    });
    const preferredActivity = document.querySelector('input[type="radio"]:checked').value;
    const additionalInfo = document.getElementById('additional-info').value.trim();

    // Simple validation
    if (name === '' || email === '' || phone === '' || availability === '' || skills.length === 0 || preferredActivity === '' || additionalInfo === '') {
        alert('Please fill out all required fields.');
        return;
    }

    // Simulate form submission success
    document.getElementById('responseMessage').innerText = 'Thank you for signing up to volunteer!';
    
    // Optionally reset the form
    document.getElementById('volunteer-form').reset();
});