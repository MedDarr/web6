<?php


header('Content-Type: text/html; charset=UTF-8');

// Начинаем сессию.
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['exit'])){
        session_destroy();
        foreach ($_COOKIE as $item => $value) {
            setcookie($item, '', 1);
        }
        header('Location: ./login.php');
    }

    if (!empty($_SESSION['login'])) {
        print ('<div>Вы авторизованы как '. $_SESSION['login'] . ', uid ' . $_SESSION['uid'] . '</div>')
        ?>
        <a href="./login.php?exit=1">Выйти</a>
        <a href="./">Главная страница</a>
        <?php
        exit();
    } else {
    ?>

    <form action="./login.php" method="post">
        <input name="login" required>
        <input name="pass" required>
        <input type="submit" value="Войти">
    </form>
        <a href="./">Главная страница</a>
    <?php
    }
}
// Иначе, если запрос был методом POST, т.е. нужно сделать авторизацию с записью логина в сессию.
else {

    $user = 'u52810';
    $pass = '1211928';
    $db = new PDO('mysql:host=localhost;dbname=u52810', $user, $pass, [PDO::ATTR_PERSISTENT => true]);
    $stmt = $db->prepare("SELECT * FROM Person WHERE p_login = :p_login && p_pass = :p_pass;");
    $stmtErr = $stmt->execute(['p_login' => $_POST['login'], 'p_pass' => hash("ppppp",$_POST['pass'])]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        print ("Такого пользователя нет");
        print ('<p><a href="./login.php">попробовать снова</a></p>');
        exit();
    }

    // Если все ок, то авторизуем пользователя.
    $_SESSION['login'] = $_POST['login'];
    // Записываем ID пользователя.
    $_SESSION['uid'] = $result['p_id'];

    setcookie('name_value', $result['p_name'], time() + 30 * 24 * 60 * 60);
    setcookie('email_value', $result['mail'], time() + 30 * 24 * 60 * 60);
    setcookie('year_value', $result['year'], time() + 30 * 24 * 60 * 60);
    setcookie('gender_value', $result['gender'], time() + 30 * 24 * 60 * 60);
    setcookie('limbs_value', $result['limbs_num'], time() + 30 * 24 * 60 * 60);
    setcookie('biography_value', $result['biography'], time() + 30 * 24 * 60 * 60);
    $stmt = $db->prepare("SELECT * FROM Person_Ability WHERE p_id = :p_id;");
    $stmtErr = $stmt->execute(['p_id' => $_SESSION['uid']]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = $db->prepare("SELECT * FROM Ability;");
    $stmtErr =  $stmt -> execute();
    $abilities = $stmt->fetchAll();
    foreach ($abilities as $ability) {
        setcookie($ability['a_name'].'_value', '', 100000);
    }
    if ($result) {
        foreach ($result as $item) {
            foreach ($abilities as $ability) {
                if ($ability['a_id'] == $item['a_id']) {
                    setcookie($ability['a_name'].'_value', '1', time() + 30 * 24 * 60 * 60);
                    break;
                }
            }
         
        }
    }


    // Делаем перенаправление.
    header('Location: ./login.php');
}