#!/bin/bash
#enciende.sh

#Exportamos el PIN deseado
echo 17 > /sys/class/gpio/export

#Establecemos la direccion (salida o entrada)
echo out > /sys/class/gpio/gpio17/direction

#Activamos la salida del rele dandole un valor de 1 al bit
echo 1 > /sys/class/gpio/gpio17/value