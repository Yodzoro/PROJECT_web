<?php

require_once "header.php";
?>
    <div class="user-page">
        <strong><?php echo $trad['user_page']; ?></strong>
        <h1 style="margin-left: 30px; color: #e5cdcd">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <form action="logout.php" method="post">
            <a href="logout.php" class="btn btn-danger" style="text-decoration: none; color: #e8acb0">Log out</a>
        </form>
    </div>

<?php
require_once "footer.php";
?>