<?php

$users_db = [
    "alice" => password_hash("password123", PASSWORD_DEFAULT),
    "bob" => password_hash("secure456", PASSWORD_DEFAULT),
    "charlie" => password_hash("qwerty789", PASSWORD_DEFAULT)
];


function get_user_input() {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    return [$username, $password];
}

function validate_credentials($username, $password, $users_db) {
    if (array_key_exists($username, $users_db)) {
        // Verify password using password_verify for hashed passwords
        if (password_verify($password, $users_db[$username])) {
            return true;
        }
    }
    return false;
}


function login($users_db) {
    list($username, $password) = get_user_input();

    if (empty($username) || empty($password)) {
        echo "Please enter both username and password.<br>";
        return false;
    }

    if (validate_credentials($username, $password, $users_db)) {
        echo "Login successful! Welcome, " . htmlspecialchars($username) . ".<br>";
        return true;
    } else {
        echo "Invalid username or password. Please try again.<br>";
        return false;
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    login($users_db);
}
?>

<!DOCTYPE html>
<html lang="en">
<head><title>Login Form</title></head>
<body>
    <h2>User Login</h2>
    <form method="POST" action="">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

