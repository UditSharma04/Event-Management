// rescue.js

const form = document.getElementById('rescue-form');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    const name = document.getElementById('name').value;
    const phone = document.getElementById('phone').value;
    const animalType = document.getElementById('animal-type').value;
    const customAnimal = document.getElementById('custom').value;
    const animalDescription = document.getElementById('animal-description').value;
    const location = document.getElementById('location').value;

    // Show confirmation message
    const confirmationMessage = `
        <h2>Thank you for submitting the form!</h2>
        <p>We have received the following information:</p>
        <ul>
            <li>Name: ${name}</li>
            <li>Phone: ${phone}</li>
            <li>Animal Type: ${animalType}</li>
            <li>Custom Animal: ${customAnimal}</li>
            <li>Animal Description: ${animalDescription}</li>
            <li>Location: ${location}</li>
        </ul>
        <p>We will be reaching soon......</p>

    `;

    const confirmationDialog = document.createElement('div');
    confirmationDialog.innerHTML = confirmationMessage;
    confirmationDialog.style.position = 'fixed';
    confirmationDialog.style.top = '50%';
    confirmationDialog.style.left = '50%';
    confirmationDialog.style.transform = 'translate(-50%, -50%)';
    confirmationDialog.style.background = '#fff';
    confirmationDialog.style.padding = '20px';
    confirmationDialog.style.border = '1px solid #ccc';
    confirmationDialog.style.borderRadius = '10px';
    confirmationDialog.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.1)';

    document.body.appendChild(confirmationDialog);

    // Hide confirmation dialog after 5 seconds
    setTimeout(() => {
        confirmationDialog.remove();
    }, 7000);
});