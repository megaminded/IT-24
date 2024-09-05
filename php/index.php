<?php
$x1 = -3;
$x2 = 3;
include('views/partials/head.html');
include('functions/main.php');
?>

<body class="light-body" id="app">
    <div class="container">
        <div class="row py-5">
            <div class="col-sm-12 col-md-8 offset-md-2">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Arrays</h1>
                    <button onclick="switchMode()" id="switch_btn">
                        Dark mode
                    </button>
                </div>
                <table class="table table-bordered">
                    <tr>
                        <td>x</td>
                        <td>2x<sup>2</sup> </td>
                        <td>5x</td>
                        <td>3</td>
                        <td>y</td>
                    </tr>
                    <?php
                    for ($x = $x1; $x <= $x2; $x++) {
                        $y = (2 * ($x ** 2)) + (5 * $x) + 3;
                        echo "<tr>";
                        display_row($x);
                        $y = 2 * $x ** 2;
                        display_row($y);
                        display_row(5 * $x);
                        display_row(3);
                        display_row($y);
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <?php require('views/partials/scripts.html'); ?>

</body>

</html>