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


        <input type='radio' name='draw' value='rock' id='rock' checked>
        <label for='rock'>Rock</label>

        <input type='radio' name='draw' value='paper' id='paper'>
        <label for='paper'>Paper</label>

        <input type='radio' name='draw' value='scissor' id='scissor'>
        <label for='scissor'>Scissor</label>


        <button type='submit'>Play</button>
    </form>

    <?php if(isset($results)) { ?>
    <h2>Results</h2>

    <!-- You drew <?php echo $userDraw; ?>
    and the computer drew <?php echo $computerDraw; ?> -->

    <ul>
        <li>You drew <?php echo $userDraw; ?>.</li>
        <li>The computer drew <?php echo $computerDraw; ?>.</li>
        <li><?php echo $winner ?> this round!</li>
    </ul>

    <!-- <?php ($winner = $userDraw) ? '- you won this round!' : '- you lost this round, please try again!' ?> -->

    <!-- <?php $winner == $userDraw = '- you won this round!'; ?> -->

    <!-- <?php if ($userDraw == $computerDraw) { ?>
    - it was a tie!
    <?php } elseif ($winner = $userDraw) { ?>
    - you won this round!
    <?php } elseif ($winner = $computerDraw) { ?>
    - you lost this round, please try again!
    <?php } ?> -->

    <?php } ?>


</body>