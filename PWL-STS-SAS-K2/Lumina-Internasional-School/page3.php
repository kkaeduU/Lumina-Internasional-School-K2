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
    <title>Lumina - Class Schedule</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        .schedule-container {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
        }
        .schedule-table {
            width: 100%;
            border-collapse: collapse;
            margin: 1rem 0;
        }
        .schedule-table th,
        .schedule-table td {
            padding: 1rem;
            text-align: center;
            border: 1px solid #e1e5e9;
        }
        .schedule-table th {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
            font-weight: 600;
        }
        .schedule-table td {
            background: #f8f9fa;
            transition: all 0.3s ease;
        }
        .schedule-table td:hover {
            background: #e3f2fd;
            transform: scale(1.02);
        }
        .class-math { background: #ffebee !important; }
        .class-english { background: #e8f5e8 !important; }
        .class-science { background: #fff3e0 !important; }
        .class-history { background: #f3e5f5 !important; }
        .time-slot {
            font-weight: bold;
            background: #e1f5fe !important;
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
                <h1 class="page-title">Jadwal Kelas</h1>
                
                <div class="schedule-container">
                    <table class="schedule-table">
                        <thead>
                            <tr>
                                <th>Waktu</th>
                                <th>Senin</th>
                                <th>Selasa</th>
                                <th>Rabu</th>
                                <th>Kamis</th>
                                <th>Jumat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="time-slot">08:00 - 09:30</td>
                                <td class="class-math">Matematika<br><small>Ruang A1</small></td>
                                <td class="class-english">Bahasa Inggris<br><small>Ruang B2</small></td>
                                <td class="class-science">Fisika<br><small>Lab 1</small></td>
                                <td class="class-math">Matematika<br><small>Ruang A1</small></td>
                                <td class="class-history">Sejarah<br><small>Ruang C3</small></td>
                            </tr>
                            <tr>
                                <td class="time-slot">09:45 - 11:15</td>
                                <td class="class-science">Kimia<br><small>Lab 2</small></td>
                                <td class="class-math">Matematika<br><small>Ruang A1</small></td>
                                <td class="class-english">Bahasa Inggris<br><small>Ruang B2</small></td>
                                <td class="class-science">Biologi<br><small>Lab 3</small></td>
                                <td class="class-english">English Lit<br><small>Ruang B1</small></td>
                            </tr>
                            <tr>
                                <td class="time-slot">11:30 - 13:00</td>
                                <td class="class-history">Sejarah<br><small>Ruang C3</small></td>
                                <td class="class-science">Fisika<br><small>Lab 1</small></td>
                                <td class="class-math">Kalkulus<br><small>Ruang A2</small></td>
                                <td class="class-english">Bahasa Inggris<br><small>Ruang B2</small></td>
                                <td>ISTIRAHAT</td>
                            </tr>
                            <tr>
                                <td class="time-slot">14:00 - 15:30</td>
                                <td class="class-english">Speaking<br><small>Language Lab</small></td>
                                <td class="class-history">Geografi<br><small>Ruang C2</small></td>
                                <td class="class-science">Kimia<br><small>Lab 2</small></td>
                                <td class="class-math">Statistik<br><small>Ruang A3</small></td>
                                <td>Ekstrakurikuler</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="navigation-links">
                    <a href="page1.php" class="nav-link">Academic</a>
                    <a href="page2.php" class="nav-link">Library</a>
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