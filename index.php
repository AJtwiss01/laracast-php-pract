<?php
$files = scandir('./');
sort($files); // this does the sorting
foreach ($files as $file) {

    if ($file != ".git" && $file != ".gitignore" && $file != "README.md" && $file != "." && $file != ".." && $file != "index.php") {
        echo "<br><a href=$file>" . $file . "</a>";
    }
}
