<?php 
 if (isset($_GET["url"])) {
    $file_url = $_GET["url"];
    $file_name = "video".random_int(1,10000).".mp4";

    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$file_name");
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: binary");
    readfile($file_url);
}
?>