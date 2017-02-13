<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="utf-8" />
</head>
<body>

<form name="feedback" method="post" action="feedback_acttion.php">
    <?
    include('Feedback\FormCreate.php');
    use Feedback\FormCreate as FCreate;
    $form = new FCreate();
    echo $form->html;
    ?>
    <input type="submit" value="Отправить">
</form>
</body>
</html>