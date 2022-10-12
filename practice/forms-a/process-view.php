<!DOCTYPE html>
<html lang='en'>

<head>

    <title>Results</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>

</head>


<body>

    <h1>Results</h1>

    <?php if ($haveAnswer == false) { ?>
    Please enter an answer.
    <?php } else if ($correct) { ?>
    You got it correct!
    <?php } else { ?>
    Incorrect.
    <?php } ?>

    <a href='index.php'>Play again.</a>

</body>

</html>