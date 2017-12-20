#!/bin/bash

sshpass -p dean scp /home/dean/git/rabbitmq/*.txt 192.168.1.123:/home/deploy/backups/logs
