<?php

     $zip = new ZipArchive;
     $res = $zip->open('uk-cosmetics.zip');
     if ($res === TRUE) {
         $zip->extractTo('UnzipedFile');
         $zip->close();
         echo 'ok';
     } else {
         echo 'failed';
     }
?> 