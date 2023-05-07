<html>
<head>
    <title>My website</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width initial-scale=1">
</head>
<body>

<?php
if (!empty($messages)) {
    print('<div id="messages">');
    // Выводим все сообщения.
    foreach ($messages as $message) {
        print($message);
    }
    print('</div>');
}

// Далее выводим форму отмечая элементы с ошибками классом error
// и задавая начальные значения элементов ранее сохраненными.
?>

<form action="" method="POST">
    <label>
        Имя:<br>
        <input name="name"
               placeholder="Имя" required <?php print('value="' . $values['name'] . '"'); if ($errors['name']) print(' class="error"'); ?>>
    </label><br>

    <label>
        Email:<br>
        <input name="email"
               type="email"
               placeholder="email" required <?php print('value="' . $values['email'] . '"'); if ($errors['email']) print(' class="error"'); ?>>
    </label><br>

    <label>
        Год рождения:<br>
        <select name="year" <?php  if ($errors['year']) print('class="error"'); ?>>
            <?php
            for ($i = 1923; $i <= 2023; $i++) {
                printf('<option value="%d"'. (intval($values['year'])==$i ? 'selected' : '') .'>%d год</option>', $i, $i);
            }
            ?>
        </select>
    </label><br>

    Пол: <br>
    <label><input type="radio"
                  name="pol" value="m" required <?php if(intval($values['pol'])==m) print ("checked");  if ($errors['pol']) print(' class="error"');?>>
        Мужской</label>
    <label><input type="radio"
                  name="pol" value="w" required <?php if(intval($values['pol'])==w) print ("checked"); if ($errors['pol']) print(' class="error"');?>>
        Женский</label><br>

    Количество: <br>
    <label><input type="radio"
                  name="kolvo" value="1" required <?php if(!$values['kolvo']=='' && intval($values['kolvo'])==1) print ("checked"); if ($errors['kolvo']) print(' class="error"');?>>
        1</label>
    <label><input type="radio"
    name="kolvo" value="2" required <?php if(!$values['kolvo']=='' && intval($values['kolvo'])==2) print ("checked"); if ($errors['kolvo']) print(' class="error"');?>>
        2</label>
    <label><input type="radio"
    name="kolvo" value="3" required <?php if(!$values['kolvo']=='' && intval($values['kolvo'])==3) print ("checked"); if ($errors['kolvo']) print(' class="error"');?>>
        3</label>
    <label><input type="radio"
    name="kolvo" value="4" required <?php if(!$values['kolvo']=='' && intval($values['kolvo'])==4) print ("checked"); if ($errors['kolvo']) print(' class="error"');?>>
        4</label><br>

    <label>
        Суперсилы:
        <br>
        <select name="sposobn[]" multiple="multiple">
            <option value="immortal" <?php if(intval($values['immortal'])==1) print ("selected") ?>>бессмертие</option>
            <option value="throughwalls" <?php if(intval($values['throughwalls'])==1) print ("selected") ?>>прохождение сквозь стены</option>
            <option value="levitation" <?php if(intval($values['levitation'])==1) print ("selected") ?>>Левитация</option>
        </select>
    </label><br>

    <label>
        Биография:<br>
        <textarea name="bio" placeholder="Расскажите о себе"><?php print($values['bio']); ?></textarea>
    </label><br>

    Согласие c лицензионным соглашением:<br>
    <label><input type="checkbox"
                  name="info" required <?php if(intval($values['info'])==1) print ("checked"); if ($errors['info']) print(' class="error"'); ?>>
                  C контрактом ознакомлен(а)</label><br>

    <input type="submit" value="Отправить">
</form>
</body>
</html>
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
