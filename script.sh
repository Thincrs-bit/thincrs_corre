
#!/bin/bash

read -p 'Agrega la url del repositorio '  nombre_p
echo
git clone $nombre_p
ls 
read -p "Selecciona la carpeta que desas entrar " carpeta
cd /home/ubuntu/$carpeta
rm -rf .git
git init
read -p 'Nombre de proyecto de gitlab ' nombre_pg
git remote add origin https://gitlab:QsFj1vsRxD366WrVnike@gitlab.com/thincrs-bit/$nombre_pg.git
git add .
git commit -m "Initial commit"
git push origin master
