<!doctype html>
<html lang='en'>

<head>
    <title>Project 1</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
</head>

<body>
    <h1>Project 1</h1>

    <h2>Mechanics</h2>

    <ul>
        <li>Player 1 and Player 2 randomly “draw” either Rock, Paper or Scissor.</li>
        <li>A tie is declared if both players draw the same move.</li>
        <li>Otherwise: Rock beats Scissors, Scissor beats Paper, Paper beats Rock.</li>
    </ul>

    <h2>Results</h2>

    <?php foreach($results as $result) { ?>
    <ul>
        <li>Player 1 drew <?php echo $player1draw ?></li>
        <li>Player 2 drew <?php echo $player2draw ?></li>
        <li>Winner: <?php echo $winner ?></li>
    </ul>
    <?php } ?>

</body>