// Client-side validation logic
document.getElementById("userForm").addEventListener("submit", function (event) {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value;
    const age = document.getElementById("age").value;
  
    // Validation flags
    let isValid = true;
    let message = "";
  
    // Name validation
    if (name === "") {
      message += "Name is required.\n";
      isValid = false;
    }
  
    // Email validation
    if (!email.includes("@") || !email.includes(".")) {
      message += "Enter a valid email address.\n";
      isValid = false;
    }
  
    // Password validation
    if (password.length < 6) {
      message += "Password must be at least 6 characters long.\n";
      isValid = false;
    }
  
    // Age validation
    if (isNaN(age) || age <= 0) {
      message += "Enter a valid age.\n";
      isValid = false;
    }
  
    // If not valid, prevent form submission
    if (!isValid) {
      alert(message);
      event.preventDefault();
    }
  });
  