<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engineering Supply - Your Modern Engineering Partner</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-blue: #2563eb;
            --deep-blue: #1e40af;
            --light-blue: #3b82f6;
            --sky-blue: #0ea5e9;
            --powder-blue: #e0f2fe;
            --ice-blue: #f0f9ff;
            --pure-white: #ffffff;
            --soft-gray: #f8fafc;
            --text-dark: #1e293b;
            --text-light: #64748b;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            overflow-x: hidden;
            background: var(--pure-white);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* Floating Shapes */
        .floating-shapes {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .shape {
            position: absolute;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .shape-1 {
            top: 10%;
            left: 10%;
            width: 100px;
            height: 100px;
            background: linear-gradient(45deg, var(--primary-blue), var(--sky-blue));
            border-radius: 50%;
            animation-delay: 0s;
        }

        .shape-2 {
            top: 20%;
            right: 10%;
            width: 80px;  
            height: 80px;
            background: linear-gradient(45deg, var(--light-blue), var(--primary-blue));
            border-radius: 20px;
            animation-delay: 2s;
        }

        .shape-3 {
            bottom: 20%;
            left: 15%;
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, var(--sky-blue), var(--light-blue));
            border-radius: 50%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            33% { transform: translateY(-20px) rotate(5deg); }
            66% { transform: translateY(10px) rotate(-5deg); }
        }

        /* Header */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(37, 99, 235, 0.1);
            transition: all 0.3s ease;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--primary-blue);
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary-blue), var(--sky-blue));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
            align-items: center;
            padding: 1rem 4rem; 
        }

        .nav-links a {
            color: var(--text-dark);
            text-decoration: none;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 20px;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary-blue), var(--sky-blue));
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-links a:hover::before {
            width: 100%;
        }

        .nav-links a:hover {
            color: var(--primary-blue);
            background: var(--ice-blue);
        }

        .nav-cta {
            background: linear-gradient(135deg, var(--primary-blue), var(--sky-blue));
            color: white !important;
            padding: 12px 24px !important;
            border-radius: 25px;
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
            transition: all 0.3s ease;
            display: inline-block;
            text-decoration: none;
        }

        .btn-login {
            background: white;
            color: var(--primary-blue) !important;
            padding: 12px 24px !important;
            border-radius: 25px;
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
            transition: all 0.3s ease;
            display: inline-block;
            text-decoration: none;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(37, 99, 235, 0.4);
        }

        .nav-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(37, 99, 235, 0.4);
            background: linear-gradient(135deg, var(--deep-blue), var(--primary-blue)) !important;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, var(--ice-blue) 0%, var(--powder-blue) 100%);
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            right: -50%;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1.5" fill="rgba(37,99,235,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>');
            animation: drift 20s linear infinite;
        }

        @keyframes drift {
            0% { transform: translateX(-100px); }
            100% { transform: translateX(100px); }
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            position: relative;
            z-index: 2;
            padding: 2rem 0;
        }

        .hero-text {
            animation: slideInUp 1s ease-out;
        }

        .hero-text h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 900;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, var(--primary-blue), var(--sky-blue));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: var(--text-light);
            margin-bottom: 2rem;
            font-weight: 400;
            line-height: 1.6;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            animation: slideInUp 1s ease-out 0.3s both;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 16px 32px;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-blue), var(--sky-blue));
            color: white;
            box-shadow: 0 8px 25px rgba(37, 99, 235, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(37, 99, 235, 0.4);
        }

        .btn-outline {
            background: transparent;
            color: var(--primary-blue);
            border: 2px solid var(--primary-blue);
        }

        .btn-outline:hover {
            background: var(--primary-blue);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(37, 99, 235, 0.3);
        }

        .hero-visual {
            position: relative;
            animation: slideInUp 1s ease-out 0.6s both;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        .hero-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 24px;
            padding: 2rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .hero-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-blue), var(--sky-blue));
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .hero-card:hover::before {
            transform: scaleX(1);
        }

        .hero-card:hover {
            transform: translateY(-8px);
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 20px 40px rgba(37, 99, 235, 0.1);
        }

        .hero-card-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-blue), var(--sky-blue));
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .hero-card h3 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .hero-card p {
            color: var(--text-light);
            font-size: 0.9rem;
            line-height: 1.5;
        }

        /* Stats Section */
        .stats {
            padding: 4rem 0;
            background: var(--pure-white);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .stat-item {
            text-align: center;
            padding: 2rem;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 900;
            background: linear-gradient(135deg, var(--primary-blue), var(--sky-blue));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: var(--text-light);
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
        }

        /* Features Section */
        .features {
            padding: 6rem 0;
            background: var(--soft-gray);
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .section-subtitle {
            font-size: 1.2rem;
            color: var(--text-light);
            max-width: 600px;
            margin: 0 auto;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: var(--pure-white);
            border-radius: 24px;
            padding: 2.5rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-blue), var(--sky-blue));
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .feature-card:hover::before {
            transform: scaleX(1);
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(37, 99, 235, 0.15);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--ice-blue), var(--powder-blue));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-blue);
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }

        .feature-card h3 {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .feature-card p {
            color: var(--text-light);
            line-height: 1.6;
        }

        /* Products Section */
        .products {
            padding: 6rem 0;
            background: var(--pure-white);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .product-card {
            background: var(--pure-white);
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(37, 99, 235, 0.15);
        }

        .product-image {
            height: 200px;
            background: linear-gradient(135deg, var(--ice-blue), var(--powder-blue));
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .product-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s;
        }

        .product-card:hover .product-image::before {
            left: 100%;
        }

        .product-image i {
            font-size: 3rem;
            color: var(--primary-blue);
        }

        .product-info {
            padding: 2rem;
        }

        .product-info h3 {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .product-info p {
            color: var(--text-light);
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .product-price {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .price {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--primary-blue);
        }

        .product-btn {
            background: linear-gradient(135deg, var(--primary-blue), var(--sky-blue));
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .product-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
        }

        /* CTA Section */
        .cta {
            padding: 6rem 0;
            background: linear-gradient(135deg, var(--primary-blue), var(--sky-blue)); 
            position: relative;
            overflow: hidden;
        }

        @keyframes wave {
            0% { transform: translateX(-100px); }
            100% { transform: translateX(100px); }
        }

        .cta-content {
            text-align: center;
            color: white;
            position: relative;
            z-index: 2;
        }

        .cta-content h2 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
        }

        .cta-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-white {
            background: white;
            color: var(--primary-blue);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .btn-white:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        .btn-outline-white {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-outline-white:hover {
            background: white;
            color: var(--primary-blue);
        }

        /* Footer */
        footer {
            background: var(--text-dark);
            color: white;
            padding: 4rem 0 2rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-section h3 {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: white;
        }

        .footer-section p, .footer-section a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            margin-bottom: 0.8rem;
            display: block;
            transition: color 0.3s ease;
        }

        .footer-section a:hover {
            color: var(--sky-blue);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.6);
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary-blue), var(--sky-blue));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.3);
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero-content {
                grid-template-columns: 1fr;
                gap: 2rem;
                text-align: center;
            }
            
            .hero-grid {
                grid-template-columns: 1fr;
            }
            
            .hero-buttons {
                justify-content: center;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .features-grid {
                grid-template-columns: 1fr;
            }
            
            .products-grid {
                grid-template-columns: 1fr;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
        }

        /* Scroll Animations */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <!-- Floating Shapes -->
    <div class="floating-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>

    <!-- Header -->
    <header>
        <nav class="container">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-cube"></i>
                </div>
                <span>E-Supply</span>
            </div>
            <ul class="nav-links">
                <li><a href="#home">Beranda</a></li>
                <li><a href="#features">Layanan</a></li>
                <li><a href="#products">Produk</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#login" class="btn-login">Login</a></li>
                <li><a href="#register" class="nav-cta">Register</a></li>

            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Temukan Spartpare Premium dengan Mudah, Cepat, dan Terpercaya</h1>
                    <p class="hero-subtitle">Kami menyediakan berbagai spartpare berkualitas tinggi untuk mendukung kebutuhan industri, otomotif, hingga teknologi masa depan.</p>
                    <div class="hero-buttons">
                        <a href="#products" class="btn btn-primary">
                            <i class="fas fa-rocket"></i>
                            Jelajahi Produk
                        </a>
                        <a href="#contact" class="btn btn-outline">
                            <i class="fas fa-comments"></i>
                            Hubungi Kami
                        </a>
                    </div>
                </div>
                <div class="hero-visual">
                    <div class="hero-grid">
                        <div class="hero-card">
                            <div class="hero-card-icon">
                                <i class="fas fa-microchip"></i>
                            </div>
                            <h3>Komponen Cerdas</h3>
                            <p>Spartpare elektronik modern untuk mendukung sistem presisi tinggi dan integrasi teknologi terbaru.</p>
                        </div>
                        <div class="hero-card">
                            <div class="hero-card-icon">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <h3>Sistem Kelistrikan</h3>
                            <p>Spartpare kelistrikan berkualitas untuk memastikan aliran daya yang stabil dan aman.</p>
                        </div>
                        <div class="hero-card">
                            <div class="hero-card-icon">
                                <i class="fas fa-cogs"></i>
                            </div>
                            <h3>Sistem Automatisasi</h3>
                            <p>Spartpare untuk otomasi yang menunjang efisiensi dan produktivitas industri.</p>
                        </div>
                        <div class="hero-card">
                            <div class="hero-card-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h3>Keamanan & Proteksi</h3>
                            <p>Peralatan spartpare untuk keselamatan kerja yang mendukung operasional lebih aman dan andal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <h2 class="section-title">Mengapa Memilih Kami?</h2>
                <p class="section-subtitle">Kami menghadirkan spartpare premium dengan proses yang mudah, pengiriman cepat, dan kualitas yang dapat diandalkan untuk mendukung setiap kebutuhan Anda.</p>
            </div>
            <div class="features-grid">
                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Kualitas Premium</h3>
                    <p>Kami menyediakan spartpare terbaik yang telah teruji ketahanannya, memastikan performa maksimal dan umur pakai yang lebih lama.</p>
                </div>
                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3>Pengiriman Cepat & Aman</h3>
                    <p>Didukung sistem logistik yang efisien, pesanan Anda dikirim dengan cepat dan dikemas aman untuk menjaga kualitas produk hingga ke tangan Anda.</p>
                </div>
                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Layanan Responsif</h3>
                    <p>Tim kami siap membantu Anda dengan konsultasi teknis, pemesanan mudah, dan dukungan pelanggan yang ramah serta cepat tanggap.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products" id="products">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <h2 class="section-title">Produk Kami</h2>
                <p class="section-subtitle">Jelajahi berbagai pilihan spartpare premium yang kami tawarkan, dirancang untuk memenuhi kebutuhan Anda.</p>
            </div>
            <div class="products-grid">
                <div class="product-card animate-on-scroll">
                    <div class="product-image">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <div class="product-info">
                        <h3>IoT Components</h3>
                        <p>Advanced IoT components for modern connectivity needs.</p>
                        <div class="product-price">
                            <div class="price">$299.99</div>
                            <button class="product-btn">Beli Sekarang</button>
                        </div>
                    </div>
                </div>

                <div class="product-card animate-on-scroll">
                    <div class="product-image">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div class="product-info">
                        <h3>Energy Systems</h3>
                        <p>High-performance systems for sustainable energy solutions.</p>
                        <div class="product-price">
                            <div class="price">$499.99</div>
                            <button class="product-btn">Beli Sekarang</button>
                        </div>
                    </div>
                </div>

                <div class="product-card animate-on-scroll">
                    <div class="product-image">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <div class="product-info">
                        <h3>Automation Kits</h3>
                        <p>Build your own automation systems with our easy-to-integrate kits.</p>
                        <div class="product-price">
                            <div class="price">$199.99</div>
                            <button class="product-btn">Beli Sekarang</button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Siap meningkatkan efisiensi dan kualitas proyek Anda?</h2>
                <p>Hubungi tim kami hari ini dan temukan berbagai solusi spartpare terbaik untuk kebutuhan industri masa depan Anda.</p>
                <div class="cta-buttons">
                    <a href="#contact" class="btn btn-white">Hubungi Kami</a>
                    <a href="#products" class="btn btn-outline-white">Jelajahi Produk</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section" id="about">
                    <h3>Tentang Kami</h3>
                    <p>E-supply adalah penyedia spartpare dan komponen industri yang menghadirkan solusi modern untuk kebutuhan sektor manufaktur, otomotif, dan industri lainnya. Kami berkomitmen untuk menyediakan produk berkualitas tinggi dalam satu platform yang praktis dan efisien.</p>
                </div>
                <div class="footer-section">
                    <h3>Link</h3>
                    <a href="#home">Beranda</a>
                    <a href="#products">Produk</a>
                    <a href="#features">Layanan</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 E-Supply. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Scroll Animations
        const elements = document.querySelectorAll('.animate-on-scroll');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, { threshold: 0.2 });

        elements.forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>
