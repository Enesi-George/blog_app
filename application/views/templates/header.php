<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/prospects.css">
</head>
<body>
    <div class="container">
        <div class="sidebar-toggle" onclick="toggleSidebar()">
            <svg width="8" height="13" class="arrow-icon" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Your SVG code here -->
            </svg>
        </div>

        <div class="dropdown-overlay" id="dropdownOverlay"></div>

        <main class="main-content">
            <header class="navbar">
                <!-- Your navbar code here -->
            </header>

            <section class="content">
                <div class="wrapper">
                    <nav class="navbar2">
                        <ul class="nav-links2">
                            <li class="nav-item2 active2"><a href="<?php echo base_url('posts'); ?>" data-section="blogs">Blogs</a></li>
                            <li class="nav-item2"><a href="#" data-section="categories">Categories</a></li>
                            <li class="nav-item2"><a href="#" data-section="media">Media</a></li>
                        </ul>
                    </nav>