<?php

function categoryTitle($name, $overall_category, $level, $level_1_value = '', $level_2_value = '', $level_3_value = '') {

    switch ($level) {
        case 1:
            $level_1_value = $name;
            break;
        case 2:
            $level_2_value = $name;
            break;
        case 3:
            $level_3_value = $name;
            break;
    }

    $level_1_value_underscore = strtolower(str_replace(' ', '_', $level_1_value));

    if ($level_2_value != "") {
        $level_1_value_underscore = $level_1_value_underscore . "_";
    };

    $level_2_value_underscore = strtolower(str_replace(' ', '_', $level_2_value));

    if ($level_3_value != "") {
        $level_2_value_underscore = $level_2_value_underscore . "_";
    };


    $level_3_value_underscore = strtolower(str_replace(' ', '_', $level_3_value));

    $level_name = $level_1_value_underscore . $level_2_value_underscore . $level_3_value_underscore;

    $name_underscore = strtolower(str_replace(' ', '_', $name));

    $category_lowercase_underscored = strtolower(str_replace(' ', '_', $overall_category));

    echo '<div class="selected level_', $level, '_cat ', $category_lowercase_underscored, '">
	<label class="checkbox">
	    <input type="checkbox" name="', $name_underscore, '" value="selected" checked>', $name, '
	  </label>
	  	<div class="more_button triangle_up">Detail</div>
              </div>
              <div class="level_', $level, '_container">';
}

function checkboxList($filename, $level, $level_1_value = '', $level_2_value = '', $level_3_value = '') {

    $level_1_value_underscore = strtolower(str_replace(' ', '_', $level_1_value));

    if ($level_2_value != "") {
        $level_1_value_underscore = $level_1_value_underscore . "_";
    };

    $level_2_value_underscore = strtolower(str_replace(' ', '_', $level_2_value));

    if ($level_3_value != "") {
        $level_2_value_underscore = $level_2_value_underscore . "_";
    };


    $level_3_value_underscore = strtolower(str_replace(' ', '_', $level_3_value));

    $checkbox_name = $level_1_value_underscore . $level_2_value_underscore . $level_3_value_underscore . "[]";

    $values = file_get_contents($filename);
    $values_array = explode("\r", $values);
    sort($values_array);

    foreach ($values_array as $value) {
        echo '<label class="checkbox">
   	    <input type="checkbox" name="', $checkbox_name, '" value="', $value, '" checked>', $value, '
   	  </label>';
    }
    echo '<div class="spacer"></div>';
}
