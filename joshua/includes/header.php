<?php
// includes/header.php
// require() 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title . " — " . $member['name']; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600;700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/main.css">
</head>
<body>
<div class="page-wrapper">
    <div class="page-topbar">
        <a href="<?php echo $back_url; ?>">← Back</a>
        <span class="topbar-name"><?php echo $member['name']; ?></span>
        <a href="../../index.php">Home</a>
    </div>
    <div class="page-content">
