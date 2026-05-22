<?php
    // Personal Information Page
    require("../includes/data.php");

    $page_title = "Personal Information";
    $back_url   = "../index.php";

    // require() the shared header
    require("../includes/header.php");
?>

    <p class="page-section-label">Section 01</p>
    <h1 class="page-title">Personal <em>Information</em></h1>

    <div class="info-grid">

        <div class="info-row">
            <span class="info-key">Full Name</span>
            <span class="info-val"><?php echo $member['name']; ?></span>
        </div>

        <div class="info-row">
            <span class="info-key">Program</span>
            <span class="info-val">Bachelor of Science in Computer Science<br>
                <small style="color:var(--muted)">Specialization: Software Engineering</small>
            </span>
        </div>

        <div class="info-row">
            <span class="info-key">School</span>
            <span class="info-val">FEU Institute of Technology</span>
        </div>

        <div class="info-row">
            <span class="info-key">Year Level</span>
            <span class="info-val">2nd Year (2024–2028)</span>
        </div>

        <div class="info-row">
            <span class="info-key">Location</span>
            <span class="info-val"><?php echo $member['location']; ?></span>
        </div>

        <div class="info-row">
            <span class="info-key">Phone</span>
            <span class="info-val"><?php echo $member['phone']; ?></span>
        </div>

        <div class="info-row">
            <span class="info-key">Email</span>
            <span class="info-val">
                <a href="mailto:<?php echo $member['email']; ?>"><?php echo $member['email']; ?></a>
            </span>
        </div>

        <div class="info-row">
            <span class="info-key">LinkedIn</span>
            <span class="info-val">
                <a href="<?php echo $member['linkedin']; ?>" target="_blank"><?php echo $member['linkedin']; ?></a>
            </span>
        </div>

        <div class="info-row">
            <span class="info-key">GitHub</span>
            <span class="info-val">
                <a href="<?php echo $member['github']; ?>" target="_blank"><?php echo $member['github']; ?></a>
            </span>
        </div>

    </div><!-- end -->

<?php
    // include() 
    include("../includes/footer.php");
?>
