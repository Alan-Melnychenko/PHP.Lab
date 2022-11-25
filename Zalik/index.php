<?php
//Зробіть на PHP сторінку яку можна ввести бали за залік,
//якщо від 60 до 100 - вивело "Зараховано",
//якщо від  0 до 59 - "Незараховано", інакше видало помилку
?>

    <form method="post">
        <input type="number" name="moduleGrade">
        <input type="submit" name="btn">
    </form>
<?php
if(isset($_POST['btn'])){
    if($_POST['moduleGrade'] >= 60 and $_POST['moduleGrade'] <= 100){
        echo 'Зараховано';
    }
    else if ($_POST['moduleGrade'] > 0 && $_POST['moduleGrade'] <= 60){
        echo 'Незараховано';
    }
    else{
        throw  new Exception('Wrong grade value');
    }
}