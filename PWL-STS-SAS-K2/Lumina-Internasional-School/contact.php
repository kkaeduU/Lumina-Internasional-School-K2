<?php

if ($_POST) {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');
    
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Nama harus diisi";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email tidak valid";
    }
    
    if (empty($message)) {
        $errors[] = "Pesan harus diisi";
    }
    
    if (empty($errors)) {

        $to = "luminaschool@gmail.com";
        $subject = "Pesan dari Website - " . $name;
        $body = "Nama: " . $name . "\n";
        $body .= "Email: " . $email . "\n";
        $body .= "Telepon: " . $phone . "\n";
        $body .= "Pesan: " . $message . "\n";
        
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        
        $success = "Terima kasih! Pesan Anda telah dikirim. Kami akan segera menghubungi Anda.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - Lumina International School</title>
    <link rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <style>
        .contact-page {
            padding: 6rem 0 4rem;
            background: #f8f9fa;
            min-height: 100vh;
        }
        
        .contact-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        
        .contact-header {
            background: linear-gradient(135deg, #14b8a6, #06b6d4);
            color: white;
            padding: 3rem 2rem;
            text-align: center;
        }
        
        .contact-header h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .contact-form {
            padding: 3rem 2rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #333;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            border: 2px solid #e5e5e5;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        
        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #14b8a6;
        }
        
        .form-group textarea {
            height: 120px;
            resize: vertical;
        }
        
        .submit-btn {
            background: linear-gradient(135deg, #14b8a6, #06b6d4);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.3s ease;
            width: 100%;
        }
        
        .submit-btn:hover {
            transform: translateY(-2px);
        }
        
        .alert {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
        }
        
        .alert-success {
            background: #d1fae5;
            color: #065f46;
            border: 1px solid #10b981;
        }
        
        .alert-error {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #ef4444;
        }
        
        .contact-info {
            background: #f8f9fa;
            padding: 2rem;
            margin-top: 2rem;
            border-radius: 10px;
        }
        
        .contact-info h3 {
            margin-bottom: 1rem;
            color: #333;
        }
        
        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            gap: 1rem;
        }
        
        .info-item i {
            color: #14b8a6;
            font-size: 1.2rem;
            width: 20px;
        }
    </style>
</head>
<body>

    <header class="header">
        <nav class="navbar">
            <div class="nav-container">
                <div class="nav-logo">
                    <span class="logo-text">Lumina</span>
                    <div class="logo-icon">L</div>
                    <span class="logo-subtitle">INTERNATIONAL SCHOOL</span>
                </div>
                <ul class="nav-menu">
                    <li><a href="index.html">Beranda</a></li>
                    <li><a href="#sekolah">Sekolah</a></li>
                    <li><a href="#tentang">Tentang</a></li>
                    <li><a href="#program">Program Akademik</a></li>
                    <li><a href="#komunitas">Komunitas</a></li>
                    <li><a href="#galeri">Galeri</a></li>
                    <li><a href="#jurnal">Jurnal</a></li>
                    <li><a href="contact.php" class="contact-btn">Hubungi kami</a></li>
                </ul>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>

    <section class="contact-page">
        <div class="container">
            <div class="contact-container">
                <div class="contact-header">
                    <h1>Hubungi Kami</h1>
                    <p>Kami siap membantu Anda. Silakan kirim pesan kepada kami!</p>
                </div>
                
                <div class="contact-form">
                    <?php if (isset($success)): ?>
                        <div class="alert alert-success">
                            <i class="fas fa-check-circle"></i> <?php echo $success; ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($errors)): ?>
                        <div class="alert alert-error">
                            <i class="fas fa-exclamation-triangle"></i>
                            <ul style="margin: 0; padding-left: 1rem;">
                                <?php foreach ($errors as $error): ?>
                                    <li><?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="name">Nama Lengkap *</label>
                            <input type="text" id="name" name="name" value="<?php echo $name ?? ''; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" value="<?php echo $email ?? ''; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Nomor Telepon</label>
                            <input type="tel" id="phone" name="phone" value="<?php echo $phone ?? ''; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Pesan *</label>
                            <textarea id="message" name="message" placeholder="Tuliskan pesan Anda di sini..." required><?php echo $message ?? ''; ?></textarea>
                        </div>
                        
                        <button type="submit" class="submit-btn">
                            <i class="fas fa-paper-plane"></i> Kirim Pesan
                        </button>
                    </form>
                    
                    <div class="contact-info">
                        <h3>Informasi Kontak</h3>
                        <div class="info-item">
                            <i class="fas fa-envelope"></i>
                            <span>luminaschool@gmail.com</span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-phone"></i>
                            <span>+62 896 0409 5599</span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Alamat akan segera diumumkan</span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-clock"></i>
                            <span>Senin - Jumat: 08:00 - 16:00 WIB</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>