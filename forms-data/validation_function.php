<?php
//*presence
function has_presence($values){
   return isset($values) && $values !== "";
}
//string length
//max length
function has_max_length($values, $max){
    return strlen($values) <= $max;
}
//inclusion in a set
function has_inclusion_in($value, $set){
    return in_array($value, $set);
}

function validate_max_lenght($field_max_length){
    global $errors;
    foreach ($field_max_length as $field => $max){
        $value = trim($_POST[$field]);
        if (!has_max_length($value, $max)){
            $errors[$field] = ucfirst($field) . " is too long";
        }
    }

}

function form_errors($errors = array()) {
    $output = "";
    if (!empty($errors)){
        $output .= "<div class=\"error\">";
        $output .= "Please fix the following errors:";
        $output .= "<ul>";
        foreach ($errors as $key => $error){
            $output .= "<li>{$error}</li>";
        }
        $output .= "</ul>";
        $output .= "</div>";
    }
    return $output;
}

?>