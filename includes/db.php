<? 
$password = password_hash ("123", PASSWORD_BCRYPT);
// var_dump(password_verify("123", '$2y$10$huUJ4W/6J/cz919yCfevMuVuSfDurmVli9b3y/kiyCBHLyGxsOQaq'));
function userAuth($login, $pass) {
    $user = [
        "user_login" => "admin",
        "user_pass" => '$2y$10$huUJ4W/6J/cz919yCfevMuVuSfDurmVli9b3y/kiyCBHLyGxsOQaq'
    ];

    if ($login == $user["user_login"] && password_verify($pass, $user["user_pass"])) {
        session_start();
        $_SESSION["login"] = $user["user_login"];
        return true;
    }
    return false;
}

userAuth("admin", "123");