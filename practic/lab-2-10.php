<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2-10</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        td {
            padding: 10px;
        }

        .even {
            color: red;
        }

        .odd {
            color: black;
        }
    </style>
</head>
<body>
    <h1>Table 10x10 with Colors</h1>

    <table>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++) {
                $number = ($i - 1) * 10 + $j;
                $colorClass = ($number % 2 == 0) ? 'even' : 'odd';
                echo "<td class='$colorClass'>$number</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>
