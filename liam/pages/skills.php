<?php
    require("../includes/data.php");
    $page_title = "Skills";
    $back_url   = "../index.php";
    require("../includes/header.php");
?>
    <p class="page-section-label">Section 04</p>
    <h1 class="page-title">Technical <em>Skills</em></h1>

    <!-- Skill bars for primary languages -->
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

    <!-- Tag-based skill groups -->
    <div style="margin-top:48px;display:flex;flex-direction:column;gap:24px;">
        <?php foreach ($skill_groups as $group => $tags): ?>
        <div>
            <p class="page-section-label"><?php echo $group; ?></p>
            <div style="display:flex;flex-wrap:wrap;gap:8px;margin-top:10px;">
                <?php foreach ($tags as $tag): ?>
                <span style="background:rgba(0,0,0,0.06);padding:7px 16px;font-size:13px;letter-spacing:0.04em;"><?php echo $tag; ?></span>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
<?php include("../includes/footer.php"); ?>
