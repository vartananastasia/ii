<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="utf-8" />
</head>
<body>

<form name="<?=$_GET['form']?>" method="post" action="feedback_action.php?form=<?=$_GET['form']?>">
    <?
    include('Feedback\Form\Form.php');
    $form = new Feedback\Form($_GET['form']);
    $form->getHtml();
    ?>
    <input type="submit" value="Отправить">
</form>
</body>
</html>