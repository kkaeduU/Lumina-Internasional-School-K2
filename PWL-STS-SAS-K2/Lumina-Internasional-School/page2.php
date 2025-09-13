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
    <title>Lumina - Digital Library</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        .library-search {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .search-input {
            width: 100%;
            padding: 1rem;
            border: 2px solid #e1e5e9;
            border-radius: 10px;
            font-size: 1rem;
        }
        .book-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
        }
        .book-card {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .book-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }
        .book-cover {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 10px;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
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
                <h1 class="page-title">Digital Library</h1>
                
                <div class="library-search">
                    <input type="text" class="search-input" placeholder="Cari buku, jurnal, atau artikel...">
                </div>
                
                <div class="book-grid">
                    <div class="book-card">
                        <div class="book-cover">📚</div>
                        <h4>Advanced Mathematics</h4>
                        <p>Calculus and Linear Algebra</p>
                        <small>Author: Dr. Smith</small>
                    </div>
                    
                    <div class="book-card">
                        <div class="book-cover">🔬</div>
                        <h4>Modern Physics</h4>
                        <p>Quantum Mechanics Basics</p>
                        <small>Author: Prof. Johnson</small>
                    </div>
                    
                    <div class="book-card">
                        <div class="book-cover">🌍</div>
                        <h4>World History</h4>
                        <p>20th Century Events</p>
                        <small>Author: Dr. Williams</small>
                    </div>
                    
                    <div class="book-card">
                        <div class="book-cover">💻</div>
                        <h4>Computer Science</h4>
                        <p>Programming Fundamentals</p>
                        <small>Author: Tech Academy</small>
                    </div>
                    
                    <div class="book-card">
                        <div class="book-cover">🎨</div>
                        <h4>Art & Design</h4>
                        <p>Creative Thinking Methods</p>
                        <small>Author: Creative Studio</small>
                    </div>
                    
                    <div class="book-card">
                        <div class="book-cover">📖</div>
                        <h4>Literature</h4>
                        <p>Classic Indonesian Works</p>
                        <small>Author: Various</small>
                    </div>
                </div>
                
                <div class="navigation-links">
                    <a href="page1.php" class="nav-link">Academic</a>
                    <a href="page3.php" class="nav-link">Schedule</a>
                    <a href="page4.php" class="nav-link">Events</a>
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