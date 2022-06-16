    <?php
    $file = "../lang/en/auth.php";
    $title = "failed";
    $text = "asfdafadg";
    $tmp_array = include $file;
    $tmp_array[$title] = $text;
    $ad=var_export($tmp_array, true);
    $data = file_get_contents($file);
    $replacedFile = fopen($file,"w");
    $r = ["array (",");"];
    $d = ["[","]"];
    $replace = str_replace($r,$d,$data);
    file_put_contents($file,"<?php\nreturn ".$ad.";\n?>",FILE_APPEND);
    file_put_contents($file,str_replace($r,$d,$data),FILE_APPEND);

    // $replacedFile = fopen($file,"w");

    // $replace2 = str_replace(");","];",$data);
    // $replacedFile1 = fopen($file,"w");

    // file_put_contents($file,$replace2,FILE_APPEND);

    ?>