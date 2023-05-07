<?php


// Отправляем браузеру правильную кодировку,
// файл index.php должен быть в кодировке UTF-8 без BOM.
header('Content-Type: text/html; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Массив для временного хранения сообщений пользователю.
    $messages = array();

    // В суперглобальном массиве $_COOKIE PHP хранит все имена и значения куки текущего запроса.
    // Выдаем сообщение об успешном сохранении.
    if (!empty($_COOKIE['save'])) {
        // Удаляем куку, указывая время устаревания в прошлом.
        setcookie('save', '', 100000);
        // Если есть параметр save, то выводим сообщение пользователю.
        $messages[] = 'Спасибо, результаты сохранены.';
    }

    // Складываем признак ошибок в массив.
    $errors = array();
    $errors['name'] = !empty($_COOKIE['name_error']);
    $errors['email'] = !empty($_COOKIE['email_error']);
    $errors['year'] = !empty($_COOKIE['year_error']);
    $errors['pol'] = !empty($_COOKIE['pol_error']);
    $errors['kolvo'] = !empty($_COOKIE['kolvo_error']);
    $errors['info'] = !empty($_COOKIE['info_error']);
    // Выдаем сообщения об ошибках.
    if ($errors['name']) {
        // Удаляем куку, указывая время устаревания в прошлом.
        setcookie('name_error', '', 100000);
        // Выводим сообщение.
        $messages[] = '<div class="error-message">Заполните имя</div>';
    }
    if ($errors['email']) {
        setcookie('email_error', '', 100000);
        $messages[] = '<div class="error-message">Заполните email</div>';
    }
    if ($errors['year']) {
        setcookie('year_error', '', 100000);
        $messages[] = '<div class="error-message">Заполните год</div>';
    }
    if ($errors['pol']) {
        setcookie('pol_error', '', 100000);
        $messages[] = '<div class="error-message">Заполните пол</div>';
    }
    if ($errors['kolvo']) {
        setcookie('kolvo_error', '', 100000);
        $messages[] = '<div class="error-message">Заполните количество конечностей.</div>';
    }
    if ($errors['info']) {
        setcookie('info_error', '', 100000);
        $messages[] = '<div class="error-message">Заполните чекбокс.</div>';
    }

    
    $values = array();
    $values['name'] = empty($_COOKIE['name_value']) ? '' : $_COOKIE['name_value'];
    $values['email'] = empty($_COOKIE['email_value']) ? '' : $_COOKIE['email_value'];
    $values['year'] = empty($_COOKIE['year_value']) ? '' : $_COOKIE['year_value'];
    $values['pol'] = !isset($_COOKIE['pol_value']) ? '' : $_COOKIE['pol_value']; 
    $values['kolvo'] = empty($_COOKIE['kolvo_value']) ? '' : $_COOKIE['kolvo_value'];
    $values['bio'] = empty($_COOKIE['bio_value']) ? '' : $_COOKIE['bio_value'];
    $values['info'] = !isset($_COOKIE['info_value']) ? '' : $_COOKIE['info_value'];
    $values['immortal'] = !isset($_COOKIE['immortal_value']) ? '' : $_COOKIE['immortal_value'];
    $values['throughwalls'] = !isset($_COOKIE['throughwalls_value']) ? '' : $_COOKIE['throughwalls_value'];
    $values['levitation'] = !isset($_COOKIE['levitation_value']) ? '' : $_COOKIE['levitation_value'];


    include('form.php');
} // Иначе, если запрос был методом POST, т.е. нужно проверить данные и сохранить их в XML-файл.
else {
    $user = 'u52810';
    $pass = '1211928';
    $db = new PDO('mysql:host=localhost;dbname=u52810', $user, $pass, [PDO::ATTR_PERSISTENT => true]);
    // Проверяем ошибки.
    $errors = FALSE;
    if (empty($_POST['name']) || !preg_match('/^[A-Z][a-z]+$/AD', $_POST['name'])) {
        setcookie('name_error', '1', time() + 24 * 60 * 60);
        $errors = TRUE;
    } else {
        setcookie('name_value', $_POST['name'], time() + 30 * 24 * 60 * 60);
    }
    if (empty($_POST['email']) || !preg_match("/^[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/", $_POST['email'])) {
        setcookie('email_error', '1', time() + 24 * 60 * 60);
        $errors = TRUE;
    } else {
        setcookie('email_value', $_POST['email'], time() + 30 * 24 * 60 * 60);
    }
    if (empty($_POST['year']) ) {
        setcookie('year_error', '1', time() + 24 * 60 * 60);
        $errors = TRUE;
    } else {
        setcookie('year_value', $_POST['year'], time() + 30 * 24 * 60 * 60);
    }
    if (!isset($_POST['pol']) || ($_POST['pol']!='m' && $_POST['pol']!='w')) {
        setcookie('pol_error', '1', time() + 24 * 60 * 60);
        $errors = TRUE;
    } else {
        setcookie('pol_value', $_POST['pol'], time() + 30 * 24 * 60 * 60);
    }
    if (!isset($_POST['kolvo'])) {
        setcookie('kolvo', '1', time() + 24 * 60 * 60);
        $errors = TRUE;
    } else {
        setcookie('kolvo_value', $_POST['kolvo'], time() + 30 * 24 * 60 * 60);
    }
    $stmt = $db->prepare("SELECT * FROM ability;");
    $stmtErr =  $stmt -> execute();
    $ab = $stmt->fetchAll();
    foreach ($ab as $ability) {
        setcookie($ability['a_name'].'_value', '', 100000);
    }
    if (isset($_POST['sposobn'])) {
        foreach ($_POST['sposobn'] as $item) {
            foreach ($ab as $ability) {
                if ($ability['a_name'] == $item) {
                    setcookie($item.'_value', '1', time() + 30 * 24 * 60 * 60);
                    break;
                }
            }
        }
    }
    setcookie('bio_value', $_POST['bio'], time() + 30 * 24 * 60 * 60);
    if ($_POST['info']!="on") {
        setcookie('info_error', '1', time() + 24 * 60 * 60);
        $errors = TRUE;
    } else {
        setcookie('info_value', '1', time() + 30 * 24 * 60 * 60);
    }

    if ($errors) {
        // При наличии ошибок перезагружаем страницу и завершаем работу скрипта.
        header('Location: index.php');
        exit();
    }
    // Удаляем Cookies с признаками ошибок.
    setcookie('name_error', '', 100000);
    setcookie('email_error', '', 100000);
    setcookie('year_error', '', 100000);
    setcookie('pol_error', '', 100000);
    setcookie('kolvo_error', '', 100000);


    // Сохранение в БД.

    try {
        $stmt = $db->prepare("INSERT INTO application (name, email, year, pol, kolvo, bio) VALUES (:name, :email, :year, :pol, :kolvo, :bio;");
        $stmtErr =  $stmt -> execute(['name' => $_POST['name'],'email' => $_POST['email'] , 'year' => $_POST['year'], 'pol' => $_POST['pol'], 'kolvo' => $_POST['kolvo'], 'bio' => $_POST['bio']]);
        if (!$stmtErr) {
            header("HTTP/1.1 500 Some server issue");
            exit();
        }
        $strId = $db->lastInsertId();
        if (isset($_POST['sposobn'])) {
            foreach ($_POST['sposobn'] as $item) {
                foreach ($ab as $ability) {
                    if ($ability['a_name'] == $item) {
                        $stmt = $db->prepare("INSERT INTO connection (id, a_id) VALUES (:id, :a_id);");
                        $stmtErr = $stmt->execute(['id' => intval($strId), 'a_id' => $ability['a_id']]);
                        break;
                    }
                }
                if (!$stmtErr) {
                    header("HTTP/1.1 500 Some server issue");
                    exit();
                }
            }
        }
    }
    catch(PDOException $e){
        header("HTTP/1.1 500 Some server issue");
        exit();
    }

    // Сохраняем куку с признаком успешного сохранения.
    setcookie('save', '1');

    // Делаем перенаправление.
    header('Location: index.php');
}
