<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="utf-8" />
</head>
<body>

    <?
    include('Feedback\Form\ChooseForm.php');
    use Feedback\ChooseForm as FChoose;
    FChoose::allForms();
    ?>
</body>
</html>