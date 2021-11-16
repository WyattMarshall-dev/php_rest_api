<?php
function createBtn($data, $name){
    foreach ($data as $key => $value) {
        $checked = '';
        if (isset($_GET[$name]) && ($_GET[$name] == $value)) {
            $checked = 'checked';
        }
        if ($key == 'All') {
            $id = $key . $name;
            echo "<div class='input-group'>";
            echo "<input type='radio' name='{$name}' id='{$id}' value='' $checked >";
            echo "<label for='{$id}'>{$value}</label>";
            echo "</div>";
        } else {
        echo "<div class='input-group'>";
        echo "<input type='radio' name='{$name}' id='{$key}' value='{$value}' $checked>";
        echo "<label for='{$key}'>{$value}</label>";
        echo "</div>";
        }
    }
}


?>