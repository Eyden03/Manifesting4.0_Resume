<?php
    require("../includes/data.php");
    $page_title = "Affiliations";
    $back_url   = "../index.php";
    require("../includes/header.php");
?>
    <p class="page-section-label">Section 05</p>
    <h1 class="page-title">Affiliations &amp; <em>Involvement</em></h1>
    <div class="affil-list">
        <?php foreach ($affiliations as $affil): ?>
        <div class="affil-item">
            <span class="affil-year"><?php echo $affil['year']; ?></span>
            <div class="affil-details">
                <p class="affil-role"><?php echo $affil['role']; ?></p>
                <p class="affil-org"><?php echo $affil['org']; ?></p>
                <?php if (!empty($affil['desc'])): ?>
                <p style="font-size:13px;color:var(--charcoal);margin-top:6px;line-height:1.6;"><?php echo $affil['desc']; ?></p>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    
     <!-- Awards -->
    <div style="margin-top:56px;">
        <p class="page-section-label">Awards & Recognition</p>
        <div style="display:flex;flex-direction:column;gap:0;">
            <?php
            $awards = [
                ["award" => "2nd Place — Design Thinking Summit", "event" => "EzRoute Project, FEU Tech", "year" => "2025"],
            ];
            foreach ($awards as $a) {
                echo '<div style="display:flex;gap:24px;padding:18px 0;border-bottom:1px solid rgba(0,0,0,0.07);">';
                echo   '<span style="min-width:80px;font-size:12px;color:var(--muted);">' . $a['year'] . '</span>';
                echo   '<div>';
                echo     '<p style="font-weight:600;font-size:15px;color:var(--accent);">' . $a['award'] . '</p>';
                echo     '<p style="font-size:13px;color:var(--muted);">' . $a['event'] . '</p>';
                echo   '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
<?php include("../includes/footer.php"); ?>
