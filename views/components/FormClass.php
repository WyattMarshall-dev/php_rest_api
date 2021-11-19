<?php

class FormClass {

    public static function FormOpen($submit, $classes){
        echo "<form action={$submit} method='post' class='{$classes}'>";
    }

    public static function FormLabel($id, $label, $classes){
        echo "<label for='{$id}' class='{$classes}'>" . $label . "</label>";
    }

    public static function FormText($id, $name, $type, $classes = ''){
        $value = isset($_SESSION['post'][$name]) ? $_SESSION['post'][$name] : "";
        echo "<input type='{$type}' id='{$id}' name='{$name}' value='$value' class='{$classes}' placeholder='$name'>";
    }

    public static function FormSubmitBtn($classes = ''){
        echo "<input type='submit' class={$classes} value='Submit'>";
    }

    public static function FormClose(){
        echo "</form>";
        unset($_SESSION['errors']);
        unset($_SESSION['success']);
        unset($_SESSION['post']);
    }

    public static function error($name, $msg){
        if (isset($_SESSION['errors'][$name])) {
            echo "<small class='validate-error'>" . $msg . "</small>";
        }
    }

}

?>
