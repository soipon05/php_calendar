<?php

require 'Calendar.php';

function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

$cal = new \MyApp\Calendar();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendar</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th><a href="/?t=<?php echo h($cal->prev); ?>">&laquo;</a></th>
                <th colspan="5"><?php echo h($cal->yearMonth); ?></th>
                <th><a href="/?t=<?php echo h($cal->next); ?>">&raquo;</a></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sun</td>
                <td>Mon</td>
                <td>Tue</td>
                <td>Web</td>
                <td>Thu</td>
                <td>Fri</td>
                <td>Sat</td>
            </tr>
           <?php echo $cal->show(); ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="7"><a href="/">Today</a></th>
            </tr>
        </tfoot>
    </table>
</body>
</html>