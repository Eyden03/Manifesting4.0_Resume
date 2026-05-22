<?php
    // Work Experience Page
    require("../includes/data.php");

    $page_title = "Work Experience";
    $back_url   = "../index.php";

    require("../includes/header.php");
?>

    <p class="page-section-label">Section 06</p>
    <h1 class="page-title">Work <em>Experience</em></h1>

    <div class="work-list">
        <?php
        // Loop through all jobs from data.php
        for ($j = 0; $j < count($jobs); $j++) {
            $job = $jobs[$j];

            echo '<div class="work-item">';

            echo   '<div class="work-header">';
            echo     '<span class="work-title">' . $job->getTitle() . '</span>';
            echo     '<span class="work-date">'  . $job->getDate()  . '</span>';
            echo   '</div>';

            echo   '<p class="work-project">' . $job->getProject() . ' &nbsp;|&nbsp; ' . $job->getCompany() . '</p>';

            echo   '<p class="work-desc">' . $job->getDescription() . '</p>';

            $bullets = $job->getBullets();
            if (!empty($bullets)) {
                echo '<ul class="work-bullets">';
                for ($k = 0; $k < count($bullets); $k++) {
                    echo '<li>' . $bullets[$k] . '</li>';
                }
                echo '</ul>';
            }

            echo '<p class="work-skills"><span>Skills: </span>' . $job->getSkills() . '</p>';

            echo '</div>';
        }
        ?>
    </div>


     <!-- Personal Projects -->
    <div style="margin-top:48px;">
        <h2 class="page-section-label">Personal Projects</h2>
        <?php foreach ($projects as $proj): ?>
        <div class="work-item">
            <div class="work-header">
                <span class="work-title"><?php echo $proj['title']; ?></span>
            </div>
            <p class="work-project"><?php echo $proj['stack']; ?></p>
            <ul class="work-bullets">
                <?php foreach ($proj['bullets'] as $b): ?>
                <li><?php echo $b; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endforeach; ?>
    </div>

<?php
    include("../includes/footer.php");
?>
