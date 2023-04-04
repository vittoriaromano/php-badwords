<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bakwards</title>
</head>
<body>
    <h1>PROVA PHP</h1>
    <form action="index2.php" method='GET'>
        <!-- input testo dall'utente -->
        <label for="text"> SCRIVI TESTO</label>
        <input type="text" name='text' id='text'> 
        <!-- input parrola da censurare dall'utente -->
        <label for="censura"> COSA VUOI CENSURARE?</label>
        <input type="text" name='censor' id='censor'>

        <button type="submit">submit</button>
    </form>
</body>
</html>