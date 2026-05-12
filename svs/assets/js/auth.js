function togglePassword(element) {
    // Find the input field relative to the clicked toggle
    const passwordInput = element.parentElement.querySelector('input');
    
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        element.innerHTML = "🔓"; // Change this to your 'Open Eye' icon/SVG
    } else {
        passwordInput.type = "password";
        element.innerHTML = "👁️"; // Change this to your 'Closed Eye' icon/SVG
    }
}