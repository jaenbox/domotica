#!/bin/bash
#apaga.sh

#Apagamos la salida del rele
echo 0 > /sys/class/gpio/gpio17/value

#Liberamos el PIN asociado
echo 17 > /sys/class/gpio/unexport