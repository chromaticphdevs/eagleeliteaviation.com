<?php
require_once __DIR__ . '/config.php';
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Eagle Elite Aviation - Premier Aviation Training School. Become a certified pilot with world-class instructors.">
    <title><?= isset($page_title) ? htmlspecialchars($page_title) . ' | Eagle Elite Aviation' : 'Eagle Elite Aviation — Premier Flight School' ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASE ?>/assets/css/style.css">
</head>
<body>

<header class="site-header" id="site-header">
    <div class="container header-inner">
        <a href="<?= BASE ?>/" class="logo">
            <div class="logo-icon">
                <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 22L20 8L32 22" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M14 22L20 14L26 22" stroke="#60a5fa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4 26H36" stroke="white" stroke-width="2" stroke-linecap="round"/>
                    <path d="M16 26V32M24 26V32" stroke="white" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="logo-text">
                <span class="logo-name">Eagle Elite</span>
                <span class="logo-sub">Aviation</span>
            </div>
        </a>

        <nav class="main-nav" id="main-nav">
            <ul>
                <li><a href="<?= BASE ?>/" class="<?= $current_page === 'index' ? 'active' : '' ?>">Home</a></li>
                <li><a href="<?= BASE ?>/about" class="<?= $current_page === 'about' ? 'active' : '' ?>">About</a></li>
                <li><a href="<?= BASE ?>/courses" class="<?= $current_page === 'courses' ? 'active' : '' ?>">Programs</a></li>
                <li><a href="<?= BASE ?>/contact" class="<?= $current_page === 'contact' ? 'active' : '' ?>">Contact</a></li>
            </ul>
        </nav>

        <a href="<?= BASE ?>/contact" class="btn btn-primary nav-cta">Enroll Now</a>

        <button class="hamburger" id="hamburger" aria-label="Toggle menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>
