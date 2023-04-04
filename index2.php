<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Questo testo ("<?php echo $_GET['text']?> ") , ha <?php echo str_word_count($_GET['text'])?> parole</p>
    <p>Lo stesso testo censurato ("<?php  echo str_ireplace($_GET['censor'], '****' , $_GET['text']) ?> ") ha <?php echo str_word_count(str_ireplace($_GET['censor'], '****' , $_GET['text']))?> parole</p>
</body>
</html>