<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo isset($page_title) ? $page_title : 'Północna Strona Koszykówki'; ?></title>

    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="favicon.png">    
    <meta name="description" content="Stowarzyszenie Północna Strona Koszykówki - turnieje, treningi, społeczność. Dołącz do nas!">
    
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    </head>
<body>

    <div id="preloader">
        <div class="loader-content">
            <img src="logo.png" alt="Ładowanie..." class="pulsing-logo">
            <div class="loading-bar"></div>
        </div>
    </div>

    <nav class="navbar">
        <div class="logo">
            <a href="index.php"><img src="logo.png" alt="PSK Logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Start</a></li>
            <li><a href="o-nas.php">O nas</a></li>
            <li><a href="wydarzenia.php">Wydarzenia</a></li>
            <li style="display: none;"><a href="sponsorzy.php">Sponsorzy</a></li>
            <li><a href="dolacz.php" class="btn btn-secondary">Dołącz</a></li>
            <li><a href="kontakt.php" class="btn btn-primary">Kontakt</a></li>
        </ul>
        <div class="hamburger">
            <i class="fas fa-bars"></i>
        </div>
    </nav>