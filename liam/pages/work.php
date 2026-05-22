<?php
    require("../includes/data.php");
    $page_title = "Work Experience";
    $back_url   = "../index.php";
    require("../includes/header.php");
?>
    <p class="page-section-label">Section 06</p>
    <h1 class="page-title">Work Experience &amp; <em>Projects</em></h1>

    <!-- Work Experience -->
    <div class="work-list">
        <?php for ($j = 0; $j < count($jobs); $j++):
            $job = $jobs[$j]; ?>
        <div class="work-item">
            <div class="work-header">
                <span class="work-title"><?php echo $job->getTitle(); ?></span>
                <span class="work-date"><?php echo $job->getDate(); ?></span>
            </div>
            <p class="work-project"><?php echo $job->getProject(); ?> &nbsp;|&nbsp; <?php echo $job->getCompany(); ?></p>
            <p class="work-desc"><?php echo $job->getDescription(); ?></p>
            <?php $bullets = $job->getBullets(); if (!empty($bullets)): ?>
            <ul class="work-bullets">
                <?php for ($k = 0; $k < count($bullets); $k++): ?>
                <li><?php echo $bullets[$k]; ?></li>
                <?php endfor; ?>
            </ul>
            <?php endif; ?>
            <p class="work-skills"><span>Skills: </span><?php echo $job->getSkills(); ?></p>
        </div>
        <?php endfor; ?>
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

<?php include("../includes/footer.php"); ?>
