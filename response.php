<?php

if (isset($_GET['answer'])) {
    $answer = trim($_GET['answer']);
    $log = sprintf("A: %s | IP: %s | B: %s | R: %s | T: %s\n", $answer, $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT'], $_SERVER['HTTP_REFERER'], date('D, d M Y H:i:s'));
    file_put_contents('./response.text', $log, 8);

    echo 'ok';
}