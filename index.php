<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="utf-8" />
</head>
<body>

    <?
    include('Feedback\Form\ChooseForm.php');
    use Feedback\ChooseForm as FChoose;
    $form = FChoose::allForms();
    foreach ($form as $item){
        echo '<a href="form.php?form='.$item.'">'.$item.'</a><br>';
    }
    ?>
</body>
</html>