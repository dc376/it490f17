#!/bin/bash

sshpass -p deploy scp /home/deploy/backups/backend-v1/store.php 192.168.1.117:/etc/cron.daily

sshpass -p deploy scp /home/deploy/backups/backend-v1/tester.php 192.168.1.117:/etc/cron.daily



