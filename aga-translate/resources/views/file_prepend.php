    <?php
    $mehdi = function()
    {
    //File Direction
    $file = "../lang/en/auth.php";
    //Key inside the file
    $key = "salam";
    //Value inside the file
    $value = "aleykum salamsS";
    //Array inside the file
    $tmp_array = include $file;
    //change the value according to the key we wrote here
    $tmp_array[$key] = $value;
    //we make the array we can use
    $ad=var_export($tmp_array, true);
    //we get the information in the file
    $data = file_get_contents($file);
    //here we want to overwrite the file
    $replacedFile = fopen($file,"w");
    //var_export brings us the file sequential "()" array,
    //so here we convert the parentheses to associative "[]" brackets
    $replace = str_replace("array (","[",$ad);
    $replace2 = str_replace(")"," ",$replace);
    //and in the end we put our array to file here
    file_put_contents($file,"<?php\nreturn ".$replace2."];\n?>",FILE_APPEND);
    };

    $mehdi();

    ?>
