// Sample user data in JSON format
const users = [
    { username: "khushi", password: "kg@2005" },
    { username: "akshit", password: "ak@2004" },
 
];

document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // Check user credentials
    const user = users.find(user => user.username === username && user.password === password);

    if (user) {
        alert("Login successful!");

        
    } else {
        document.getElementById("error-message").textContent = "Invalid username or password.";
    }
});