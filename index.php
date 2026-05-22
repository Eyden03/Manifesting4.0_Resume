<?php
    // Group members data
    $members = [
        [
            "name"    => "Nicole Anne Ebron",
            "slug"    => "nicole",
            "role"    => "BSCSSE | Software Engineer",
            "photo"   => "assets/Nicole.jpeg",
        ],
        [
            "name"    => "Aidhen Angel Pocsidio",
            "slug"    => "aidhen",
            "role"    => "BSCSSE | Software Engineer",
            "photo"   => "assets/Aidhen.png",
        ],
        [
            "name"    => "Liam Brent Serrano",
            "slug"    => "liam",
            "role"    => "BSCSSE | Software Engineer",
            "photo"   => "assets/Liam.jpeg",
        ],
        [
            "name"    => "Joshua Danrei Ruiz",
            "slug"    => "joshua",
            "role"    => "BSCSSE | Software Engineer",
            "photo"   => "assets/joshua.jpg",
        ],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Portfolio — BSCSSE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600;700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/main.css">
</head>
<body>

    <header class="site-header">
        <div class="header-inner">
            <span class="header-tag">BSCSSE — Software Engineering</span>
            <h1 class="site-title">Group <em>Portfolio</em></h1>
            <p class="site-subtitle">FEU Institute of Technology · 2024–2028</p>
        </div>
        <div class="header-deco"></div>
    </header>

    <main class="members-grid">
        <?php foreach ($members as $index => $member): ?>
        <a href="<?php echo $member['slug']; ?>/index.php" class="member-card" style="--delay:<?php echo $index * 0.12; ?>s">
            <div class="card-photo-wrap">
                <img
                    src="<?php echo $member['photo']; ?>"
                    alt="<?php echo $member['name']; ?>"
                    class="card-photo"
                    onerror="this.src='assets/placeholder.png'"
                />
                <div class="card-photo-ring"></div>
            </div>
            <div class="card-info">
                <h2 class="card-name"><?php echo $member['name']; ?></h2>
                <p class="card-role"><?php echo $member['role']; ?></p>
                <span class="card-cta">View Portfolio →</span>
            </div>
        </a>
        <?php endforeach; ?>
    </main>

    <footer class="site-footer">
        <p>© 2026 BSCSSE Group Portfolio &nbsp;·&nbsp; FEU Tech</p>
    </footer>

</body>
</html>
