<?php
$NAME=$_REQUEST['Name'];
$AGE=$_REQUEST['Age'];
$HOME=$_REQUEST['Town'];
echo <<<TEXT
<p>Hello, my name is <b>$NAME</b>, I am <b>$AGE</b> years old and live in <b>$HOME</b> and I am learning how to use PHP to create typing shortcuts by passing information from one place to another place within my web pages.</p>
TEXT;
?>