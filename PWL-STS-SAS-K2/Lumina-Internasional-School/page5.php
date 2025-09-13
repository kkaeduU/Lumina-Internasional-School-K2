<?php
session_start();
$is_logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'];
$user_email = $is_logged_in ? $_SESSION['user_email'] : null;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://public-frontend-cos.metadl.com/mgx/img/favicon.png" type="image/png">
    <title>Lumina - Photo Gallery</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }
        .gallery-item {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            aspect-ratio: 1;
        }
        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }
        .gallery-image {
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: white;
        }
        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            color: white;
            padding: 2rem 1rem 1rem;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }
        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }
        .gallery-title {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        .gallery-description {
            font-size: 0.9rem;
            opacity: 0.9;
        }
        .filter-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }
        .filter-btn {
            padding: 0.5rem 1.5rem;
            border: 2px solid #4facfe;
            background: transparent;
            color: #4facfe;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .filter-btn:hover,
        .filter-btn.active {
            background: #4facfe;
            color: white;
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
                <h1 class="page-title">Photo Gallery</h1>
                
                <div class="filter-buttons">
                    <button class="filter-btn active">All</button>
                    <button class="filter-btn">Events</button>
                    <button class="filter-btn">Academic</button>
                    <button class="filter-btn">Sports</button>
                    <button class="filter-btn">Arts</button>
                </div>
                
                <div class="gallery-grid">
                    <div class="gallery-item">
                        <div class="gallery-image">🎓</div>
                        <div class="gallery-overlay">
                            <div class="gallery-title">Graduation Ceremony</div>
                            <div class="gallery-description">Wisuda siswa kelas 12 tahun 2024</div>
                        </div>
                    </div>
                    
                    <div class="gallery-item">
                        <div class="gallery-image">🔬</div>
                        <div class="gallery-overlay">
                            <div class="gallery-title">Science Laboratory</div>
                            <div class="gallery-description">Praktikum kimia kelas 11</div>
                        </div>
                    </div>
                    
                    <div class="gallery-item">
                        <div class="gallery-image">🏆</div>
                        <div class="gallery-overlay">
                            <div class="gallery-title">Sports Victory</div>
                            <div class="gallery-description">Juara 1 Kompetisi Basket Regional</div>
                        </div>
                    </div>
                    
                    <div class="gallery-item">
                        <div class="gallery-image">🎨</div>
                        <div class="gallery-overlay">
                            <div class="gallery-title">Art Workshop</div>
                            <div class="gallery-description">Workshop melukis dengan seniman lokal</div>
                        </div>
                    </div>
                    
                    <div class="gallery-item">
                        <div class="gallery-image">🌍</div>
                        <div class="gallery-overlay">
                            <div class="gallery-title">Cultural Festival</div>
                            <div class="gallery-description">Perayaan keberagaman budaya</div>
                        </div>
                    </div>
                    
                    <div class="gallery-item">
                        <div class="gallery-image">📚</div>
                        <div class="gallery-overlay">
                            <div class="gallery-title">Reading Corner</div>
                            <div class="gallery-description">Sudut baca perpustakaan baru</div>
                        </div>
                    </div>
                    
                    <div class="gallery-item">
                        <div class="gallery-image">🎭</div>
                        <div class="gallery-overlay">
                            <div class="gallery-title">Drama Performance</div>
                            <div class="gallery-description">Pertunjukan teater siswa</div>
                        </div>
                    </div>
                    
                    <div class="gallery-item">
                        <div class="gallery-image">💻</div>
                        <div class="gallery-overlay">
                            <div class="gallery-title">Computer Lab</div>
                            <div class="gallery-description">Kelas programming dan coding</div>
                        </div>
                    </div>
                </div>
                
                <div class="navigation-links">
                    <a href="page3.php" class="nav-link">Schedule</a>
                    <a href="page4.php" class="nav-link">Events</a>
                    <a href="page6.php" class="nav-link">Contact</a>
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