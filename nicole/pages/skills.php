<?php
    require("../includes/data.php");
    $page_title = "Skills";
    $back_url   = "../index.php";
    require("../includes/header.php");
?>
    <p class="page-section-label">Section 04</p>
    <h1 class="page-title">Technical <em>Skills</em></h1>
    <div class="skills-list">
        <?php foreach ($skills as $skill):
            $pct = ($skill['years'] / $skill['max']) * 100; ?>
        <div class="skill-row">
            <span class="skill-name"><?php echo $skill['name']; ?></span>
            <div class="skill-bar-track"><div class="skill-bar-fill" style="width:<?php echo $pct; ?>%"></div></div>
            <span class="skill-years"><?php echo $skill['years'] . ' ' . $skill['label']; ?></span>
        </div>
        <?php endforeach; ?>
    </div>
    <div style="margin-top:40px;">
        <p class="page-section-label">Tools & Technologies</p>
        <div style="display:flex;flex-wrap:wrap;gap:10px;margin-top:16px;">
            <?php
            $tools = ["VS Code","Git / GitHub","XAMPP","MySQL Workbench","Figma","IntelliJ IDEA","Postman","Linux CLI"];
            foreach ($tools as $t) {
                echo '<span style="background:rgba(0,0,0,0.05);padding:8px 18px;font-size:13px;letter-spacing:0.04em;">' . $t . '</span>';
            }
            ?>
        </div>
    </div>
    <div style="margin-top:32px;">
        <p class="page-section-label">Soft Skills</p>
        <div style="display:flex;flex-wrap:wrap;gap:10px;margin-top:16px;">
            <?php
            $soft = ["Problem Solving","Analytical Thinking","Team Collaboration","Self-Management","Attention to Detail","Project Lifecycle Management"];
            foreach ($soft as $s) {
                echo '<span style="border:1px solid var(--dark);padding:8px 18px;font-size:13px;letter-spacing:0.04em;">' . $s . '</span>';
            }
            ?>
        </div>
    </div>
<?php include("../includes/footer.php"); ?>