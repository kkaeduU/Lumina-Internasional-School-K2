<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_name = $_SESSION['user_name'] ?? 'User';
$user_email = $_SESSION['user_email'] ?? '';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Lumina International School</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .dashboard-header {
            background: linear-gradient(135deg, #3b82f6, #06b6d4);
            color: white;
            padding: 2rem 0;
            margin-top: 80px;
        }
        
        .dashboard-content {
            padding: 3rem 0;
            background: #f8f9fa;
            min-height: calc(100vh - 200px);
        }
        
        .welcome-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }
        
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .dashboard-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s ease;
            cursor: pointer;
        }
        
        .dashboard-card:hover {
            transform: translateY(-5px);
        }
        
        .dashboard-card i {
            font-size: 3rem;
            color: #14b8a6;
            margin-bottom: 1rem;
        }
        
        .dashboard-card h3 {
            margin-bottom: 1rem;
            color: #333;
        }
        
        .dashboard-card p {
            color: #666;
            font-size: 0.9rem;
        }
        
        .logout-btn {
            background: #ef4444;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.3s ease;
        }
        
        .logout-btn:hover {
            background: #dc2626;
            color: white;
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
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="#profile">Profil</a></li>
                    <li><a href="#settings">Pengaturan</a></li>
                    <li><a href="logout.php" class="logout-btn">Logout</a></li>
                </ul>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>

    <section class="dashboard-header">
        <div class="container">
            <h1>Selamat Datang, <?php echo htmlspecialchars($user_name); ?>!</h1>
            <p>Dashboard Siswa Lumina International School</p>
        </div>
    </section>

    <section class="dashboard-content">
        <div class="container">
            <div class="welcome-card">
                <h2>Portal Siswa</h2>
                <p>Akses semua informasi akademik dan kegiatan sekolah Anda di sini.</p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($user_email); ?></p>
            </div>
            
            <div class="dashboard-grid">
                <div class="dashboard-card">
                    <i class="fas fa-book"></i>
                    <h3>Jadwal Pelajaran</h3>
                    <p>Lihat jadwal pelajaran harian dan mingguan Anda</p>
                </div>
                
                <div class="dashboard-card">
                    <i class="fas fa-chart-line"></i>
                    <h3>Nilai & Rapor</h3>
                    <p>Pantau perkembangan akademik dan nilai ujian</p>
                </div>
                
                <div class="dashboard-card">
                    <i class="fas fa-calendar-alt"></i>
                    <h3>Agenda Sekolah</h3>
                    <p>Informasi kegiatan dan acara sekolah terbaru</p>
                </div>
                
                <div class="dashboard-card">
                    <i class="fas fa-users"></i>
                    <h3>Komunitas</h3>
                    <p>Bergabung dengan diskusi dan forum siswa</p>
                </div>
                
                <div class="dashboard-card">
                    <i class="fas fa-file-alt"></i>
                    <h3>Tugas & PR</h3>
                    <p>Kelola dan submit tugas sekolah Anda</p>
                </div>
                
                <div class="dashboard-card">
                    <i class="fas fa-envelope"></i>
                    <h3>Pesan</h3>
                    <p>Komunikasi dengan guru dan staf sekolah</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-grid">
                <div class="footer-info">
                    <p class="footer-description">
                        Sekolah Pendidikan Internasional,<br>
                        akademik, dan karakter umum
                    </p>
                    
                    <div class="contact-info">
                        <h3>Yayasan Lumina School</h3>
                        <div class="contact-details">
                            <p>Alamat : --</p>
                            <p>E-Mail : luminaschool@gmail.com</p>
                            <p>Kontak : +62 896 0409 5599</p>
                        </div>
                    </div>
                </div>
                
                <div class="footer-menu-section">
                    <div class="footer-menu">
                        <h4>Menu Utama</h4>
                        <ul>
                            <li><a href="index.html">Beranda</a></li>
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="#profile">Profil</a></li>
                            <li><a href="#settings">Pengaturan</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-logo">
                        <div class="logo-section">
                            <span class="logo-text">Lumina</span>
                            <div class="logo-icon">L</div>
                        </div>
                        <p class="logo-subtitle">INTERNATIONAL SCHOOL</p>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="copyright">
                    ©2025 International School
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>