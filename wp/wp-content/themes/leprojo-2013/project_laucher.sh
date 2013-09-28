#!/bin/bash
cygstart.exe
clear
PROG=("wamp\wampmanager.exe")
for PROGRAM in ${PROG[*]}
do
    ps -eW | grep $PROGRAM >&2 > /dev/null ; RUN="$?"
    if [ $RUN -ne 0 ] ; then
        # PATH="/cygdrive/c/Program Files/$PROGRAM":$PATH
        # $PROGRAM &
        # progexe="/cygdrive/C/Program Files/$PROGRAM"
        start
        progexe= "C:\Program Files\wamp\wampmanager.exe"
        cd "$progexe"
        echo "$PROGRAM is being started"
    fi

done


DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )";
# function open_wamp(){
#     cd "C:\Program Files\wamp"
#     ls
# }
# open_wamp

function echo_grunt_task()
{
	echo "Launching grunt in" $opt "mode"
}

PS3='Please enter your choice: '
options=("Development" "Images" Distribution" "Default" "Quit")
select opt in "${options[@]}"
do
    case $opt in
        "Development")
            echo_grunt_task
            grunt dev
            ;;
        "Images")
			echo_grunt_task
            grunt img
            ;;
        "Distribution")
			echo_grunt_task
            grunt dist
            ;;
        "Default")
            echo_grunt_task
            grunt
            ;;
        "Quit")
            break
            ;;
        *) echo invalid option;;
    esac
done

# C:\Program Files\wamp\