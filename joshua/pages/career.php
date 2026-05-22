<?php
    require("../includes/data.php");
    $page_title = "Career Objective";
    $back_url   = "../index.php";
    require("../includes/header.php");
?>
    <p class="page-section-label">Section 02</p>
    <h1 class="page-title">Career <em>Objective</em></h1>
    <blockquote class="objective-text"><?php echo $career_objective; ?></blockquote>
    <div style="margin-top:40px;">
        <p class="page-section-label">Key Interests</p>
        <div style="display:flex;flex-wrap:wrap;gap:10px;margin-top:12px;">
            <?php
            $interests = ["Web Development","Business Applications","Software Automation","Rendering Systems","Project Management","Freelance Development"];
            foreach ($interests as $i) {
                echo '<span style="background:var(--dark);color:var(--white);padding:8px 18px;font-size:13px;letter-spacing:0.05em;">' . $i . '</span>';
            }
            ?>
        </div>
    </div>
<?php include("../includes/footer.php"); ?>
