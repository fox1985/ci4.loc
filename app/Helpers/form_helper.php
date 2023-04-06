<?php 
 
 function add_error_class($errors_data, $field)
 {
    return isset($errors_data[$field]) ? ' is-invalid' : '';
    
 }


 function display_error($errors_data, $field)
 {
     $out = '';
     if (isset($errors_data[$field])) 
     {
         $out .= '<div class="invalid-feedback">';
         $out .= $errors_data[$field];
         $out .= '</div>';
     }
     return $out;
 }
 
?>