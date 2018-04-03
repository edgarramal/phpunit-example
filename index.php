<?php
foreach(scandir('src/') as $file) {
    if(is_file("src/".$file)){
        require_once("src/".$file);
    }
}
