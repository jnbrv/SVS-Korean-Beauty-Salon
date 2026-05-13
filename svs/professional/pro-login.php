<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon - Client Log In</title>
    <link rel="icon" type="image/png" href="../images/svs-icon.png">
    <link rel="stylesheet" href="../assets/css/auth.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;1,400&family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet"><body>
    <div class="split-screen-container">
        <div class="image-section">
            <a href="index.php" class="back-button" aria-label="Back to landing page">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 12H5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 19L5 12L12 5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <img src="../images/auth-pro.jpg" alt="Luxury hair treatment" class="hero-image">
        </div>

        <div class="form-section">
            <div class="form-wrapper">
                <h1 class="serif-title">Log In For Professional</h1>
                <p class="subtitle">Log in to your account</p>

                <form action="process-login.php" method="POST">
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

                    <div class="input-helper">
                        <a href="forgot-password.html" class="forgot-link">Forgot Password?</a>
                    </div>

                    <button type="submit" class="primary-btn">Submit</button>
                </form>

                <div class="footer-links">
                    <p class="account-link">Don’t have An Account? <a href="pro-signup.php">Sign Up Here.</a></p>
                    <p class="pro-link serif-title">Are you a Client? <a href="../client/client-signup.php">Sign Up Here.</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
