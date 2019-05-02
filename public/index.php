<?php

$body = '';
$period = new DatePeriod(
    new DateTime('first day of this month'),
    new DateInterval('P1D'),
    new DateTime('first day of next month')    
);
foreach ($period as $day) {
    $body .= sprintf('<td>%d</td>', $day->format('d'));
}

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
                <th><a href="">&laquo;</a></th>
                <th colspan="5">August 2015</th>
                <th><a href="">&raquo;</a></th>
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
            <tr>
            <?php echo $body; ?>
                <!-- <td class="youbi_0">1</td>
                <td class="youbi_1">2</td>
                <td class="youbi_2">3</td>
                <td class="youbi_3">4</td>
                <td class="youbi_4 today">5</td>
                <td class="youbi_5">6</td>
                <td class="youbi_6">7</td>
            </tr>
            <tr>
                <td class="youbi_0">30</td>
                <td class="youbi_1">31</td>
                <td class="gray">1</td>
                <td class="gray">2</td>
                <td class="gray">3</td>
                <td class="gray">4</td>
                <td class="gray">5</td> -->
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="7"><a href="">Today</a></th>
            </tr>
        </tfoot>
    </table>
</body>
</html>