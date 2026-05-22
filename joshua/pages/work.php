<?php
    require("../includes/data.php");
    $page_title = "Work Experience";
    $back_url   = "../index.php";
    require("../includes/header.php");
?>
    <p class="page-section-label">Section 06</p>
    <h1 class="page-title">Work <em>Experience</em></h1>
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
<?php include("../includes/footer.php"); ?>
