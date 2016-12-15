#Use shell cmd to test cli, get, post summit argument:
##cli: php exec_shell_cmd.php date
##get: w3m http://$_SERVER['SERVER_NAME']/path/exe_shell_cmd.php?c=ls%20-al
##post: curl 121.42.184.115/hello/exec_shell_cmd.php -d "c=git --help" | lynx -stdin
