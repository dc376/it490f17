#!/bin/bash

sshpass -p deploy scp /home/deploy/backups/frontend-v1/bet.php /home/deploy/backups/frontend-v1/depositingmoney.php /home/deploy/backups/frontend-v1/index.html /home/deploy/backups/frontend-v1/signup.html /home/deploy/backups/frontend-v1/database1.php /home/deploy/backups/frontend-v1/deposit.php /home/deploy/backups/frontend-v1/insertBets.php /home/deploy/backups/frontend-v1/signup.php /home/deploy/backups/frontend-v1/database.php /home/deploy/backups/frontend-v1/homepage.php /home/deploy/backups/frontend-v1/signup.php 192.168.1.118:/var/www/html/test
