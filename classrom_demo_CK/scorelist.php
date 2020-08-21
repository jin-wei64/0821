<?php
    $scoreList = [100, 50, 90, 95];
    $viewModal = [];
    foreach($scoreList as $score){
        $student = (object) ["score" => $score , "style" => "pass"]; //強轉(object);
        if($score < 60) {
            $student->style = "fail";
        }
        $viewModal[] = $student;
    }
    // $obj = (object) [ "firstName" => "Ryu","lastName" => "loin" ];
    // echo $obj->firstName." ".$obj->lastName;
    // exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .fail{
            color : red  ;
        }
    </style>
</head>
<body>
    <ul>
    <?php foreach($viewModal as $student) { ?>
        <li class = "<?= $student->style ?>"><?= $student->score; ?></li>
    <?php } ?>
    </ul>
</body>
</html>