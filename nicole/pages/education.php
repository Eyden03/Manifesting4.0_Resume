<?php
    require("../includes/data.php");
    $page_title = "Educational Attainment";
    $back_url   = "../index.php";
    require("../includes/header.php");
?>
    <p class="page-section-label">Section 03</p>
    <h1 class="page-title">Educational <em>Attainment</em></h1>
    <?php foreach ($education as $i => $edu): ?>
    <div class="edu-entry">
        <p class="edu-degree"><?php echo $edu['degree']; ?></p>
        <?php if (!empty($edu['specialization'])): ?>
        <p class="edu-school" style="font-style:italic;color:var(--muted);font-size:13px;"><?php echo $edu['specialization']; ?></p>
        <?php endif; ?>
        <p class="edu-school"><?php echo $edu['school']; ?></p>
        <p class="edu-year"><?php echo $edu['year']; ?> &nbsp;·&nbsp;
            <span style="color:var(--accent);font-size:12px;"><?php echo $edu['status']; ?></span>
        </p>
    </div>
    <?php if ($i < count($education)-1): ?><hr class="edu-divider"><?php endif; ?>
    <?php endforeach; ?>
    <div style="margin-top:48px;">
        <p class="page-section-label">Relevant Coursework</p>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:12px;margin-top:16px;">
            <?php
            $courses = ["Object-Oriented Programming","Data Structures & Algorithms","Web Systems & Technologies","Database Management Systems","Software Engineering Principles","Cybersecurity Fundamentals","Computer Networks","Systems Analysis & Design","Human-Computer Interaction","Programming Languages"];
            foreach ($courses as $c) {
                echo '<div style="padding:12px 16px;border-left:3px solid var(--gold);background:var(--white);font-size:13px;line-height:1.4;">' . $c . '</div>';
            }
            ?>
        </div>
    </div>
<?php include("../includes/footer.php"); ?>