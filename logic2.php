<?php
$row_length = 10;
$column_length = 10;

for ($row = 1; $row <= $row_length; $row++) {
    for ($column = 1; $column <= $column_length; $column++) {
        if ($row == 1 || $row == $row_length || $column == $row) {
            echo "*&nbsp;";
        } else if ($column == 1 || $column == $column_length || $column == ($column_length-$row)+1) {
            echo "*&nbsp;";
        } else {
            echo "&nbsp;&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
?>