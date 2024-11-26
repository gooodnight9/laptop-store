<!DOCTYPE html>
<html lang = "vi">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width = device-width initial-scale = 1.0" />
        <title>tính ngày kế tiếp</title>
    </head>

    <body>
        <form  method="post" name = "DateForm">
            <div>

                    <label>Month</label>
                    <input type="number" name = "MonthInput" min = 1 max = 12>

                    <label>Year</label>
                    <input type="text" name = "YearInput" >

                    <label>Day</label>
                    <input type="number" name = "DayInput" min = 1 max = 30>
            </div>

            <div>
                <button>Next</button>
            </div>

            <div>
                <label for="DateForm" name ="NextDate"></label>
            </div>
        </form>
    </body>
</html>


<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $month = $_POST['MonthInput'];
        $year = $_POST['YearInput'];
        $day = $_POST['DayInput'];

        $dateString = "$year-$month-$day";
        $netDay = date('d-m-y',strtotime($dateString. '+1 day'));

        echo "<div><p>Next day is: <strong>$netDay</strong></p></div>";

    }
?>