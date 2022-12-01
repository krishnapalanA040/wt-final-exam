<?php

    $my_file = fopen("newfile.txt", 'w') or die("Unable to open file");
    $txt = "Hi, I am Krishna, Roll no A040, from batch B2 & currently pursuing MCA from MPSTME";
    fwrite($my_file, $txt);
    fclose($my_file);
?>