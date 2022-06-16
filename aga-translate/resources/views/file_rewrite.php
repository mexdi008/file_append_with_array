    <?php
    $file = "../lang/en/auth.php";
    $title = "salam";
    $text = "eleyke salam";
    $old = '];';
    $openFile = file_get_contents($file);
    $new = "'".$title."' => '".$text."',\n];";
    $replace = str_replace($old, $new, $openFile);
    $replacedFile = fopen($file,"w");
    $readFile = file_put_contents($file,$replace,FILE_APPEND);
    echo $replace;
    ?>