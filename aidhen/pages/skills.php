<?php
    // Skills Page
    require("../includes/data.php");

    $page_title = "Skills";
    $back_url   = "../index.php";

    require("../includes/header.php");
?>

    <p class="page-section-label">Section 04</p>
    <h1 class="page-title">Technical <em>Skills</em></h1>

    <div class="skills-list">
        <?php
        foreach ($skills as $skill) {
            // bar width
            $pct = ($skill['years'] / $skill['max']) * 100;

            echo '<div class="skill-row">';
            echo   '<span class="skill-name">' . $skill['name'] . '</span>';
            echo   '<div class="skill-bar-track">';
            echo     '<div class="skill-bar-fill" style="width:' . $pct . '%"></div>';
            echo   '</div>';
            echo   '<span class="skill-years">' . $skill['years'] . ' ' . $skill['label'] . '</span>';
            echo '</div>';
        }
        ?>
    </div>

    <!-- Soft Skills -->
    <div style="margin-top: 56px;">
        <p class="page-section-label">Soft Skills</p>
        <div style="display:flex; flex-wrap:wrap; gap:10px; margin-top:16px;">
            <?php
            $soft = [
                "Public Speaking", "Leadership", "Team Coordination",
                "Business Writing", "Design Thinking", "Community Outreach",
                "Analytical Thinking", "Problem Solving",
            ];
            foreach ($soft as $s) {
                echo '<span style="border:1px solid var(--dark);padding:8px 18px;font-size:13px;letter-spacing:0.04em;">'
                     . $s . '</span>';
            }
            ?>
        </div>
    </div>

    <!-- Tools & Tech -->
    <div style="margin-top: 40px;">
        <p class="page-section-label">Tools & Technologies</p>
        <div style="display:flex; flex-wrap:wrap; gap:10px; margin-top:16px;">
            <?php
            $tools = [
                "VS Code", "Figma", "Jira", "Postman", "GitHub Actions",
                "Firebase", "MySQL Workbench", "Notion", "Trello",
            ];
            foreach ($tools as $t) {
                echo '<span style="background:rgba(0,0,0,0.05);padding:8px 18px;font-size:13px;letter-spacing:0.04em;">'
                     . $t . '</span>';
            }
            ?>
        </div>
    </div>

<?php
    include("../includes/footer.php");
?>
