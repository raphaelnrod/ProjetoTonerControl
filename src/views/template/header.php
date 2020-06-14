<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/template.css">
    <title>Toner Control</title>
</head>
<body>
    <header class="header">
        <div class="logo">
            <i class="icofont-print mr-2 mt-2"></i>
            <span class="font-weight-light">Toner</span>
            <span class="font-weight-light mx-2">Control</span>
        </div>
        <div class="menu-toggle mx-3">
            <i class="icofont-navigation-menu"></i>
        </div>
        <div class="spacer"></div>
        <div class="dropdown">
            <div class="dropdown-button mx-3">
                <span class="ml-3">
                    <?= $_SESSION['user']->name ?>
                </span>
                <i class="icofont-simple-down ml-2"></i>
            </div>
                    <div class="dropdown-content">
                        <ul class="nav-list">
                            <li class="nav-item">
                                <a href="logout.php">
                                    <i class="icofont-logout mr-2"> 
                                        <span>Sair</span>
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
        </div>
    </header>