<?php
/**
 * Shared page head + site header. Pages should set $page_title and
 * $page_description before requiring this file.
 */
require_once __DIR__ . '/config.php';

$activeSlug = current_page_slug();
$pageTitle = isset($page_title) ? $page_title . ' | ' . SITE_NAME : SITE_NAME;
$pageDescription = $page_description ?? SITE_TAGLINE;
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($pageTitle) ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="/assets/images/logo-icon.png">
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<a class="skip-link" href="#main-content">Skip to main content</a>

<header class="site-header">
    <div class="container header-inner">
        <a class="logo" href="/index.php">
            <img class="logo-img" src="/assets/images/logo1.png" alt="<?= htmlspecialchars(SITE_NAME) ?>">
        </a>

        <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-nav">
            <span class="nav-toggle-bar"></span>
            <span class="nav-toggle-bar"></span>
            <span class="nav-toggle-bar"></span>
            <span class="sr-only">Toggle menu</span>
        </button>

        <nav class="main-nav" id="primary-nav" aria-label="Primary">
            <ul>
                <?php foreach (NAV_LINKS as $slug => $label): ?>
                <li>
                    <a href="<?= htmlspecialchars(nav_href($slug)) ?>"<?= $activeSlug === $slug ? ' class="active" aria-current="page"' : '' ?>>
                        <?= htmlspecialchars($label) ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
            <a class="btn btn-portal" href="<?= htmlspecialchars(PORTAL_LOGIN_URL) ?>" target="_blank" rel="noopener">Portal</a>
        </nav>
    </div>
</header>

<main id="main-content">
