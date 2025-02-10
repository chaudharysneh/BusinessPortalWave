<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body { background-color: #1a1a2e; color: white; }
        .form-container { background-color: #16213e; padding: 40px; border-radius: 10px; }
        .carousel-item { position: relative; height: 100%; }
        .carousel-item img { height: 100%; object-fit: cover; }
        .password-toggle { cursor: pointer; position: absolute; right: 15px; top: 50%; transform: translateY(-50%); color: #aaa; }
        
        /* New styles for the text overlay */
        .slider-text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 100%;
            z-index: 2;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .slider-text-overlay h2 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            white-space: pre-line;
        }
        /* Darkening overlay for better text visibility */
        .carousel-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
            z-index: 1;
        }
    </style>
</head>
<body>
    <div class="container vh-100 d-flex align-items-center justify-content-center">
        <div class="row w-100 shadow-lg rounded">
            <div class="col-md-6 d-none d-md-block p-0">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://raghava.world/wp-content/uploads/slider/cache/a89a42f9452667d9559f0ad449b04eec/MicrosoftTeams-image-3.jpg" class="d-block w-100" alt="Slide 1">
                            <div class="slider-text-overlay">
                                <h2>Capturing Moments,
Creating Memories</h2>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.jkcement.com/wp-content/uploads/2023/12/residential-building-with-windows-balconies-1024x683-jpg.webp" class="d-block w-100" alt="Slide 2">
                            <div class="slider-text-overlay">
                                <h2>Share Your Stories,
Connect with the World</h2>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg" class="d-block w-100" alt="Slide 3">
                            <div class="slider-text-overlay">
                                <h2>Every Picture
Tells a Story</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 form-container">
                <h2 class="mb-3">Create an Account</h2>
                <p>Already have an account? <a href="#" class="text-primary">Log in</a></p>
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Last name">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="mb-3 position-relative">
                        <input type="password" class="form-control" id="password" placeholder="Enter your password">
                        <i class="fas fa-eye password-toggle" onclick="togglePassword()"></i>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="terms">
                        <label class="form-check-label" for="terms">I agree to the <a href="#" class="text-primary">Terms & Conditions</a></label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Create Account</button>
                </form>
            </div>
        </div>
    </div>
    
    <script>
        function togglePassword() {
            const password = document.getElementById('password');
            password.type = password.type === 'password' ? 'text' : 'password';
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>