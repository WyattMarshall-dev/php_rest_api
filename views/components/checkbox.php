<?php

function createCheckbox($data, $name, $class = ''){
    foreach ($data as $key => $value) {
        $checked = '';
        if (isset($_GET['year']) && in_array($key, $_GET['year'])) {
            $checked = 'checked';
        }
        echo "<div class='input-group'>";
        echo "<input type='checkbox' name='{$name}' id='{$key}' value='{$value}' $checked>";
        echo "<label for='{$key}' class='{$class}'> {$value}</label>";
        echo "</div>";
    }
}




?>