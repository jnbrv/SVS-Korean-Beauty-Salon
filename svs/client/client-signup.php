<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SVS Korean Beauty Salon - Client Sign Up</title>
    <link rel="icon" type="image/png" href="../images/svs-icon.png">
    <link rel="stylesheet" href="../assets/css/auth.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;1,400&family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet"><body>
    <div class="signup-container">
    <div class="split-screen-container">
        <div class="image-section">
            <a href="index.php" class="back-button" aria-label="Back to landing page">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 12H5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 19L5 12L12 5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <img src="../images/auth_client.jpg" alt="Luxury styling station" class="hero-image">
        </div>

        <div class="form-section">
            <div class="form-wrapper">
                <h1 class="serif-title">Sign Up Form</h1>
                <p class="subtitle">Create your account</p>

                <form action="#" method="POST">
                    <div class="input-group">
                        <input type="email" placeholder="Email Address" required>
                    </div>
                    <div class="input-group password-group">
                        <input type="password" placeholder="Password" required>
                        <span class="password-toggle">
                            <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 0.5C5.45455 0.5 1.57273 3.325 0 7.25C1.57273 11.175 5.45455 14 10 14C14.5455 14 18.4273 11.175 20 7.25C18.4273 3.325 14.5455 0.5 10 0.5ZM10 11.75C7.54545 11.75 5.54545 9.75 5.54545 7.25C5.54545 4.75 7.54545 2.75 10 2.75C12.4545 2.75 14.4545 4.75 14.4545 7.25C14.4545 9.75 12.4545 11.75 10 11.75ZM10 4.55C8.50909 4.55 7.27273 5.78636 7.27273 7.27273C7.27273 8.75909 8.50909 9.99545 10 9.99545C11.4909 9.99545 12.7273 8.75909 12.7273 7.27273C12.7273 5.78636 11.4909 4.55 10 4.55Z" fill="#1A1A1A" fill-opacity="0.6"/>
                            </svg>
                        </span>
                    </div>
                    <div class="input-group password-group">
                        <input type="password" placeholder="Confirm Password" required>
                        <span class="password-toggle">
                            <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 0.5C5.45455 0.5 1.57273 3.325 0 7.25C1.57273 11.175 5.45455 14 10 14C14.5455 14 18.4273 11.175 20 7.25C18.4273 3.325 14.5455 0.5 10 0.5ZM10 11.75C7.54545 11.75 5.54545 9.75 5.54545 7.25C5.54545 4.75 7.54545 2.75 10 2.75C12.4545 2.75 14.4545 4.75 14.4545 7.25C14.4545 9.75 12.4545 11.75 10 11.75ZM10 4.55C8.50909 4.55 7.27273 5.78636 7.27273 7.27273C7.27273 8.75909 8.50909 9.99545 10 9.99545C11.4909 9.99545 12.7273 8.75909 12.7273 7.27273C12.7273 5.78636 11.4909 4.55 10 4.55Z" fill="#1A1A1A" fill-opacity="0.6"/>
                            </svg>
                        </span>
                    </div>

                    <button type="submit" class="primary-btn">Submit</button>
                </form>

                <div class="separator-container">
                    <span class="separator-line"></span>
                    <span class="separator-text serif-title">or</span>
                    <span class="separator-line"></span>
                </div>

                <button class="google-btn">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="google-icon">
                        <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
                        <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                        <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
                        <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
                        <path fill="none" d="M0 0h48v48H0z"></path>
                    </svg>
                    Continue with Google
                </button>

                <div class="footer-links">
                    <p class="account-link">Already have An Account? <a href="client-login.php">Login Here.</a></p>
                    <p class="pro-link serif-title">Are you a Professional but don’t have an account? <a href="../professional/pro-login.php">Login Here.</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>