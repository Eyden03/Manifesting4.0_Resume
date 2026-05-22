<?php
    // Aidhen's Portfolio Index Page
    require("includes/data.php");

    // Nav sections for this portfolio
    $sections = [
        ["num" => "01", "title" => "Personal Information", "url" => "pages/personal.php"],
        ["num" => "02", "title" => "Career Objective",     "url" => "pages/career.php"],
        ["num" => "03", "title" => "Educational Attainment","url" => "pages/education.php"],
        ["num" => "04", "title" => "Skills",               "url" => "pages/skills.php"],
        ["num" => "05", "title" => "Affiliations",         "url" => "pages/affiliations.php"],
        ["num" => "06", "title" => "Work Experience",      "url" => "pages/work.php"],
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

    <!-- Photo + Name  -->
    <div class="portfolio-hero">
        <img
            src="<?php echo $member['photo']; ?>"
            alt="<?php echo $member['name']; ?>"
            onerror="this.src='../assets/placeholder.php'"
        />
        <div class="portfolio-hero-text">
            <a href="../index.php" class="portfolio-back">← Group Portfolio</a>
            <h1>
                <?php echo $member['first']; ?><br>
                <em><?php echo $member['last']; ?></em>
            </h1>
            <p class="hero-role"><?php echo $member['role']; ?></p>
        </div>
    </div>

    <!-- NAVIGATION -->
    <nav class="portfolio-nav">
        <?php
        foreach ($sections as $i => $section) {
            echo '<a href="' . $section['url'] . '" class="portfolio-nav-item" style="animation-delay:' . ($i * 0.08) . 's">';
            echo   '<div class="nav-label">';
            echo     '<span class="nav-num">' . $section['num'] . '</span>';
            echo     '<span class="nav-title">' . $section['title'] . '</span>';
            echo   '</div>';
            echo   '<span class="nav-arrow">→</span>';
            echo '</a>';
        }
        ?>
    </nav>

</div>

</body>
</html>
