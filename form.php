<?php
session_start();

$pdo = new PDO('sqlite:' . dirname(__FILE__) . '/database.db');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->query('CREATE TABLE IF NOT EXISTS user_db(
    id INTEGER PRIMARY KEY AUTOINCREMENT ,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL                           
)');
$pdo->exec("PRAGMA busy_timeout = 2000;");
// LOGIN
if (isset($_POST['login_username']) && isset($_POST['login_password'])) {
    $login_username = htmlspecialchars($_POST['login_username']);
    $login_password = htmlspecialchars($_POST['login_password']);

    //Check username and password
    $statement = $pdo->prepare('SELECT * FROM user_db WHERE username = :username');
    $statement->bindValue('username', $login_username, PDO::PARAM_STR);
    $statement->execute();
    $user = $statement->fetch();
    if ($user) {
        // check password
        if ($user['password'] === $login_password) {
            //account successfully login
            $_SESSION['user_id'] = $user['id'];
            echo json_encode(['status' => 'success']);
        } else {
            //wrong password
            echo json_encode(['status' => 'error', 'message' => 'Invalid password']);
        }
    } else {
        //account doesn't found
        echo json_encode(['status' => 'error', 'message' => 'User not found']);
    }
    //id account successfully found, creat $_SESSION['username']
    $_SESSION['username'] = $login_username;
}


// Регистрация нового пользователя
if (isset($_POST['register_username']) && isset($_POST['register_password']) && isset($_POST['register_password_repeat'])) {
    $register_username = htmlspecialchars($_POST['register_username']);
    $register_password = htmlspecialchars($_POST['register_password']);
    $register_password_repeat = htmlspecialchars($_POST['register_password_repeat']);

    if ($register_username && $register_password && $register_password === $register_password_repeat) {
        // Check if the username already exists in the database
        $statement = $pdo->prepare('SELECT * FROM user_db WHERE username = :username');
        $statement->bindValue(':username', $register_username, PDO::PARAM_STR);
        $statement->execute();
        $user = $statement->fetch();

        if (!$user) {
            // Insert the new user into the database
            $statement = $pdo->prepare('INSERT INTO user_db (username, password) VALUES (:username, :password)');
            $statement->bindValue(':username', $register_username, PDO::PARAM_STR);
            $statement->bindValue(':password', $register_password, PDO::PARAM_STR);
            $statement->execute();

            // Set the session variable for the new user
            $_SESSION['username'] = $register_username;
            header('Location: user_page.php');
            exit();
        } else {
            // If the username already exists, show an error message
            echo "Error: Username already exists.";
        }
    } else {
        // If the passwords do not match or another error occurred, show an error message
        echo "Error: Passwords do not match or other error occurred.";
    }
}

