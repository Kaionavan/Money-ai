<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoneyAI - Your Personal Financial Assistant</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo htmlspecialchars($_SERVER['PROJECT_DESCRIPTION'] ?? 'Manage your personal finances and get AI-powered advice with MoneyAI.'); ?>">
    <meta name="keywords" content="finance, money, ai, assistant, budget, tracking, savings">
    <meta name="author" content="MoneyAI">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="MoneyAI - Your Personal Financial Assistant">
    <meta property="og:description" content="<?php echo htmlspecialchars($_SERVER['PROJECT_DESCRIPTION'] ?? 'Manage your personal finances and get AI-powered advice with MoneyAI.'); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($_SERVER['PROJECT_IMAGE_URL'] ?? 'assets/images/moneyai_og_image.jpg'); ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="MoneyAI - Your Personal Financial Assistant">
    <meta property="twitter:description" content="<?php echo htmlspecialchars($_SERVER['PROJECT_DESCRIPTION'] ?? 'Manage your personal finances and get AI-powered advice with MoneyAI.'); ?>">
    <meta property="twitter:image" content="<?php echo htmlspecialchars($_SERVER['PROJECT_IMAGE_URL'] ?? 'assets/images/moneyai_og_image.jpg'); ?>">

    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css?v=<?php echo time(); ?>">
</head>
<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">MoneyAI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="btn btn-primary ms-lg-3">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1>Your Personal Financial Assistant</h1>
                    <p>Take control of your money with smart tracking, insightful reports, and AI-powered advice. MoneyAI makes financial management simple and effective.</p>
                    <a href="#" class="btn btn-primary btn-lg">Get Started for Free</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Features Section -->
    <section id="features" class="section">
        <div class="container">
            <h2 class="section-title">Everything You Need to Succeed</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="feature-card">
                        <div class="icon"><i class="bi bi-wallet2"></i></div>
                        <h3>Track Expenses</h3>
                        <p>Easily log your income and expenses with customizable categories.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="feature-card">
                        <div class="icon"><i class="bi bi-pie-chart-fill"></i></div>
                        <h3>Visualize Stats</h3>
                        <p>Understand your spending habits with clear charts and reports.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="feature-card">
                        <div class="icon"><i class="bi bi-bullseye"></i></div>
                        <h3>Set Savings Goals</h3>
                        <p>Define your financial goals and track your progress effortlessly.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="feature-card">
                        <div class="icon"><i class="bi bi-robot"></i></div>
                        <h3>Get AI Advice</h3>
                        <p>Receive personalized tips from our AI assistant to save more money.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="section bg-white">
        <div class="container">
            <h2 class="section-title">Choose Your Plan</h2>
            <div class="row justify-content-center g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card">
                        <h3>Free</h3>
                        <p>For getting started</p>
                        <div class="price">$0<span>/month</span></div>
                        <ul class="text-start">
                            <li><i class="bi bi-check-circle-fill"></i> Track income & expenses</li>
                            <li><i class="bi bi-check-circle-fill"></i> Basic reports</li>
                            <li><i class="bi bi-check-circle-fill"></i> 1 savings goal</li>
                            <li><i class="bi bi-check-circle-fill"></i> 3 AI assistant requests</li>
                        </ul>
                        <a href="#" class="btn btn-secondary w-100">Start for Free</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card pro">
                        <h3>PRO</h3>
                        <p>For full control</p>
                        <div class="price">$9<span>/month</span></div>
                        <ul class="text-start">
                            <li><i class="bi bi-check-circle-fill"></i> Everything in Free</li>
                            <li><i class="bi bi-check-circle-fill"></i> Unlimited AI requests</li>
                            <li><i class="bi bi-check-circle-fill"></i> Unlimited categories & goals</li>
                            <li><i class="bi bi-check-circle-fill"></i> Detailed analytics</li>
                            <li><i class="bi bi-check-circle-fill"></i> Export to PDF/Excel</li>
                            <li><i class="bi bi-check-circle-fill"></i> Custom themes</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Go PRO</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="mb-0">&copy; <?php echo date("Y"); ?> MoneyAI. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/main.js?v=<?php echo time(); ?>"></script>
</body>
</html>