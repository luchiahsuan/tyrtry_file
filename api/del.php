<?php
include_once "base.php";


$file=find("upload",$_GET['id']);

unlink("../upload/".$file['file_name']);

del("upload",$id);

to("../upload.php");