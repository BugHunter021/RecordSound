<?php
  
    // gets entire POST body
    $data = file_get_contents('php://input');
    // write the data out to the file
    base64ToFile($data,'upload/fileuploaded.wave');



    function base64ToFile($base64_string, $output_file) {
     $file = fopen($output_file, "wb");
 
     $data = explode(',', $base64_string);
 
     fwrite($file, base64_decode($data[1]));
     fclose($file);
 
     return $output_file;
 }
?>
