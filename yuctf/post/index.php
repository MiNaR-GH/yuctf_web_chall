<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     echo "yuctf{try_with_a_new_method}";
}
else{
    echo include("index.html");
}
?>
