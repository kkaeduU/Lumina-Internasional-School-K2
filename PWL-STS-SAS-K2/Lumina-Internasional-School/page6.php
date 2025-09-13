<?php
session_start();
$is_logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'];
$user_email = $is_logged_in ? $_SESSION['user_email'] : null;

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $msg = htmlspecialchars($_POST['message']);
    
    if (!empty($name) && !empty($email) && !empty($subject) && !empty($msg)) {
        $message = 'Terima kasih! Pesan Anda telah terkirim. Kami akan segera menghubungi Anda.';
    } else {
        $message = 'Mohon isi semua field yang diperlukan.';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://public-frontend-cos.metadl.com/mgx/img/favicon.png" type="image/png">
    <title>Lumina - Contact Us</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin: 2rem 0;
        }
        .contact-info {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        .contact-form {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 12px;
        }
        .info-icon {
            font-size: 2rem;
            margin-right: 1rem;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
            font-weight: 500;
        }
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            border: 2px solid #e1e5e9;
            border-radius: 10px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #4facfe;
        }
        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }
        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1 class="logo">Lumina</h1>
        </header>
        <main class="main-content">
            <div class="page-content">
                <h1 class="page-title">Contact Us</h1>
                
                <?php if ($message): ?>
                    <div class="alert alert-success"><?php echo $message; ?></div>
                <?php endif; ?>
                
                <div class="contact-grid">
                    <div class="contact-info">
                        <h3 style="margin-bottom: 2rem; color: #333;">Get in Touch</h3>
                        
                        <div class="info-item">
                            <div class="info-icon">📍</div>
                            <div>
                                <h4>Address</h4>
                                <p>Jl. Pendidikan No. 123<br>Jakarta Selatan 12345</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">📞</div>
                            <div>
                                <h4>Phone</h4>
                                <p>+62 21 1234 5678<br>+62 812 3456 7890</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">✉️</div>
                            <div>
                                <h4>Email</h4>
                                <p>info@lumina.school<br>admissions@lumina.school</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">🕒</div>
                            <div>
                                <h4>Office Hours</h4>
                                <p>Monday - Friday: 8:00 - 16:00<br>Saturday: 8:00 - 12:00</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-form">
                        <h3 style="margin-bottom: 2rem; color: #333;">Send Message</h3>
                        
                        <form method="POST">
                            <div class="form-group">
                                <label for="name">Full Name *</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="subject">Subject *</label>
                                <input type="text" id="subject" name="subject" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" name="message" required placeholder="Write your message here..."></textarea>
                            </div>
                            
                            <button type="submit" class="btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
                
                <div class="navigation-links">
                    <a href="index.php" class="nav-link">Home</a>
                    <a href="page4.php" class="nav-link">Events</a>
                    <a href="page5.php" class="nav-link">Gallery</a>
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="footer-logo">
                <h3>Lumina</h3>
                <p>INTERNATIONAL SCHOOL</p>
            </div>
        </footer>
    </div>
</body>
</html>