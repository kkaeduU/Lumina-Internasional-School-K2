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
    <title>Lumina - School Events</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        .events-timeline {
            position: relative;
            margin: 2rem 0;
        }
        .timeline-line {
            position: absolute;
            left: 30px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }
        .event-item {
            position: relative;
            margin-bottom: 2rem;
            padding-left: 80px;
        }
        .event-date {
            position: absolute;
            left: 0;
            top: 0;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 0.9rem;
        }
        .event-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .event-card:hover {
            transform: translateX(10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }
        .event-title {
            color: #333;
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        .event-description {
            color: #666;
            line-height: 1.6;
        }
        .event-status {
            display: inline-block;
            padding: 0.3rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            margin-top: 1rem;
        }
        .status-upcoming { background: #e3f2fd; color: #1976d2; }
        .status-ongoing { background: #e8f5e8; color: #388e3c; }
        .status-completed { background: #fce4ec; color: #c2185b; }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1 class="logo">Lumina</h1>
        </header>
        <main class="main-content">
            <div class="page-content">
                <h1 class="page-title">School Events</h1>
                
                <div class="events-timeline">
                    <div class="timeline-line"></div>
                    
                    <div class="event-item">
                        <div class="event-date">15<br>Sep</div>
                        <div class="event-card">
                            <h3 class="event-title">Science Fair 2024</h3>
                            <p class="event-description">Pameran karya ilmiah siswa dengan tema "Teknologi untuk Masa Depan". Kompetisi antar kelas dan presentasi project terbaik.</p>
                            <span class="event-status status-upcoming">Upcoming</span>
                        </div>
                    </div>
                    
                    <div class="event-item">
                        <div class="event-date">22<br>Sep</div>
                        <div class="event-card">
                            <h3 class="event-title">International Day</h3>
                            <p class="event-description">Perayaan keberagaman budaya dengan pertunjukan dari berbagai negara, pameran makanan tradisional, dan workshop budaya.</p>
                            <span class="event-status status-upcoming">Upcoming</span>
                        </div>
                    </div>
                    
                    <div class="event-item">
                        <div class="event-date">05<br>Oct</div>
                        <div class="event-card">
                            <h3 class="event-title">Sports Championship</h3>
                            <p class="event-description">Kompetisi olahraga antar sekolah meliputi basket, futsal, badminton, dan atletik. Dukung tim Lumina!</p>
                            <span class="event-status status-upcoming">Upcoming</span>
                        </div>
                    </div>
                    
                    <div class="event-item">
                        <div class="event-date">12<br>Oct</div>
                        <div class="event-card">
                            <h3 class="event-title">Art Exhibition</h3>
                            <p class="event-description">Pameran karya seni siswa termasuk lukisan, patung, fotografi, dan karya digital. Open untuk umum.</p>
                            <span class="event-status status-ongoing">Ongoing</span>
                        </div>
                    </div>
                    
                    <div class="event-item">
                        <div class="event-date">01<br>Sep</div>
                        <div class="event-card">
                            <h3 class="event-title">Back to School</h3>
                            <p class="event-description">Pembukaan tahun ajaran baru dengan orientasi siswa, perkenalan guru, dan kegiatan ice breaking.</p>
                            <span class="event-status status-completed">Completed</span>
                        </div>
                    </div>
                </div>
                
                <div class="navigation-links">
                    <a href="page2.php" class="nav-link">Library</a>
                    <a href="page3.php" class="nav-link">Schedule</a>
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