#!/bin/bash
if [ -f "application/logs/log_spotifyAPI_get.php" ];then 
	`touch application/logs/log_spotifyAPI_get.php`
fi

if [ -f "application/logs/log_spotifyAPI_get_dl.php" ];then 
	`touch application/logs/log_spotifyAPI_get_dl.php`
fi
current_date=`date +%Y-%m-%d_%H:%M:%S`
echo "$current_date $1 token_access=$2" >>application/logs/log_spotifyAPI_get.php
echo "current_date" >>application/logs/log_spotifyAPI_get_dl.php
curl -X GET "$1" -H "Authorization: Bearer $2" 2>>application/logs/log_spotifyAPI_get_dl.php