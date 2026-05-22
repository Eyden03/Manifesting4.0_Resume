<?php
    require("includes/data.php");
    $sections = [
        ["num" => "01", "title" => "Personal Information",  "url" => "pages/personal.php"],
        ["num" => "02", "title" => "Career Objective",      "url" => "pages/career.php"],
        ["num" => "03", "title" => "Educational Attainment","url" => "pages/education.php"],
        ["num" => "04", "title" => "Skills",                "url" => "pages/skills.php"],
        ["num" => "05", "title" => "Affiliations",          "url" => "pages/affiliations.php"],
        ["num" => "06", "title" => "Work Experience",       "url" => "pages/work.php"],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $member['name']; ?> — Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600;700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/main.css">
</head>
<body>
<div class="portfolio-wrapper">
    <div class="portfolio-hero">
        <img src="<?php echo $member['photo']; ?>" alt="<?php echo $member['name']; ?>"
             onerror="this.src='../assets/placeholder.php'"/>
        <div class="portfolio-hero-text">
            <a href="../index.php" class="portfolio-back">← Group Portfolio</a>
            <h1><?php echo $member['first']; ?><br><em><?php echo $member['last']; ?></em></h1>
            <p class="hero-role"><?php echo $member['role']; ?></p>
        </div>
    </div>
    <nav class="portfolio-nav">
        <?php foreach ($sections as $i => $section): ?>
        <a href="<?php echo $section['url']; ?>" class="portfolio-nav-item"
           style="animation-delay:<?php echo $i * 0.08; ?>s">
            <div class="nav-label">
                <span class="nav-num"><?php echo $section['num']; ?></span>
                <span class="nav-title"><?php echo $section['title']; ?></span>
            </div>
            <span class="nav-arrow">→</span>
        </a>
        <?php endforeach; ?>
    </nav>
</div>
</body>
</html>
