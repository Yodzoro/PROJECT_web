<?php
$current_page = basename($_SERVER['PHP_SELF']);
if (isset($_SESSION['username']) && $current_page !== 'user_page.php') {
    header('Location: user_page.php');
    exit();
}
//language
$lang_param = isset($_GET['lang']) ? $_GET['lang'] : 'en';
if ($lang_param === 'en') {
include 'en.php';
} elseif ($lang_param === 'fr') {
include 'fr.php';
} else {
include 'en.php';
}
$lang = '';
if (isset($_GET['lang'])) {
$lang = '?lang=' . $_GET['lang'];
}
include 'form.php';
?>

<!doctype html>
<html lang=<?= $lang_param ?>>
<head>
    <meta name="auteur" content="Zhurina Iuliia">
    <meta charset="UTF-8">
    <title>PROJECT</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="style_main.css" />
    <link rel="stylesheet" type="text/css" href="style_group.css" />
    <link rel="stylesheet" type="text/css" href="style_profiles.css" />
    <link rel="stylesheet" type="text/css" href="style_discografie.css" />
    <link rel="stylesheet" type="text/css" href="style-registration.css"/>
    <link rel="stylesheet" type="text/css" href="style-userpage.css"/>

</head>
<body>
<!--BODY-->
<div id="generalB" class>
    <!--HEADER-->
    <div id="header">
        <div class="header_menu">
            <div class="lang_menu">
                <select onchange="changeLanguage(this.value)">
                    <option value="en" <?= $lang_param === 'en' ? 'selected' : '' ?>>EN</option>
                    <option value="fr" <?= $lang_param === 'fr' ? 'selected' : '' ?>>FR</option>
                </select>
            </div>

            <?php if (isset($_SESSION['username'])): ?>
                <a href="user_page.php" class="log_in">
                    <img src ="icon.png"  alt="User Page">
                </a>
            <?php else: ?>
                <button class="log_in" onclick="openLogIn()">
                    <img src ="icon.png"  alt="Log in">
                </button>
            <?php endif; ?>
        <div id="myWindow" type="button" class="window">
            <div class="window-header">
                <span class="window-title"><?php echo $trad['registration']; ?></span>
                <button class="close-button" onclick="closeLogIn()">&times;</button>
            </div>


            <div class="window-content">
               <form id="login_form" action="form.php" method="post">
                    <label for="uname" style="color: #f2f2f2"><b>Username</b></label>
                    <input type="text" name="login_username" placeholder="Username" id="usr_name">
                    <label for="psw"style="color: #f2f2f2"><b>Password</b></label>
                    <br><input type="password" name="login_password" placeholder="Password" id="usr_psw"><br>
                   <p id="error_login" style="color: #ea5555; display: none;"></p>
                   <button type="button" class="btn btn-success" id="btn_login">LOGIN</button>
                    <p style="color: #f2f2f2; text-align: center; font-size: 10px">OR</p>
                    <div class="signin">
                        <a href="registration.php"><?php echo $trad['signin']?></a>
                    </div>
                </form>
            </div>
        </div>

        <button class = "open_menu" type="buttom" onclick="openMenu()" >
            <img src="https://www.clipartmax.com/png/full/36-365828_navbar-toggle-icon-menu-hamburger-png-white.png" alt="menu">
        </button>
        </div>
    </div>

    <nav id="myNavigation" class="navigation" style="height: 0px;">
        <button class="close_menu" type="buttom" onclick="closeMenu()">
            <img src="https://www.clipartmax.com/png/full/36-365828_navbar-toggle-icon-menu-hamburger-png-white.png"  alt="menu">
        </button>
        <ul class="menu_list">
            <li>
                <a href="groups.php<?php echo $lang ?>"><?php echo $trad['groups']; ?></a>
            </li>
            <li>
                <a href="profiles.php<?php echo $lang ?>"><?php echo $trad['profiles']; ?></a>
            </li>
            <li>
                <a href="discografie.php<?php echo $lang ?>"><?php echo $trad['discography']; ?></a>
            </li>
            <li>
                <a href="index.php<?php echo $lang ?>"><?php echo $trad['main']; ?></a>
            </li>

        </ul>
    </nav>

