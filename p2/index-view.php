<!doctype html>
<html lang='en'>

<head>
    <title>Project 2</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
</head>

<body>
    <h1>Project 2</h1>

    <form method='POST' action='process.php'>


        <input type='radio' name='draw' id='rock' value='rock'
            <?php echo (!isset($userDraw) or $userDraw == 'rock') ? 'checked' : '' ?>>
        <label for='rock'>Rock</label>

        <input type='radio' name='draw' id='paper' value='paper'
            <?php echo (isset($userDraw) and $userDraw == 'paper') ? 'checked' : '' ?>>
        <label for='paper'>Paper</label>

        <input type='radio' name='draw' id='scissor' value='scissor'
            <?php echo (isset($userDraw) and $userDraw == 'scissor') ? 'checked' : '' ?>>
        <label for='scissor'>Scissor</label>


        <button type='submit'>Play</button>
    </form>


    <?php if(isset($results)) { ?>
    <h2>Results</h2>

    <ul>
        <li>You drew <?php echo $userDraw; ?>.</li>
        <li>The computer drew <?php echo $computerDraw; ?>.</li>
        <li><?php echo $winner ?> this round!</li>
    </ul>


    <?php } ?>

</body>