#! /bin/bash
if [ -e /var/run/asterisk.ctl ]
then
        echo "Stopping Asterisk..."
     (   /sbin/asterisk -rx 'stop now' ) &>/dev/null
else
        echo "Asterisk is not running!"
fi
#
(
/sbin/killall safe_asterisk
/bin/sleep 1
/sbin/killall asterisk
/bin/rm -f /var/run/asterisk.ctl /var/run/asterisk.pid
) &>/dev/null

