<?php
$myfile = fopen($_GET['prodi']."_progress.json", "w");
fwrite($myfile, '{"message":null,"totalStages":1,"remaining":0,"error":false,"complete":false,"stage":{"name":"This AJAX process takes a long time","message":"But this will keep the user updated on it\'s actual progress!","stageNum":1,"totalItems":7091,"completeItems":37,"pcComplete":0.0052178818220279,"rate":1.6874211154805,"startTime":1452665089.6376,"curTime":1452665111.5646,"timeRemaining":4180.3435640851,"exceptions":[],"warnings":[]}})');
fclose($myfile);
?>