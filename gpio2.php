<?php
	require "login.php";
         shell_exec("/usr/local/bin/gpio -g mode 3 out");
         if(isset($_GET['off']))
         {
                shell_exec("/usr/local/bin/gpio -g write 3 0");
         }
        else if(isset($_GET['on']))
        {
                shell_exec("/usr/local/bin/gpio -g write 3 1");
        }
        else if(isset($_GET['blink']))
        {
                for($x = 0;$x<=4;$x++)
                {
                        shell_exec("/usr/local/bin/gpio -g write 3 1");
                        sleep(1);
                        shell_exec("/usr/local/bin/gpio -g write 3 0");
                        sleep(1);
                }
        }
		header('Location: dash.html'); 
        ?>
