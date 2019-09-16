Hack kali machine
-----------------

* notes sur /etc/shadow
* * $1 : md5
* * $6 : sha512

# Compromission des accès à la machine Kali
* Non utilisation du recovery mode
* Sur Grub, press "e"
* Modifications : 
* * rw  init=/bin/bash
* * F10
* Puis, en shell:
* * passwd root
* * exec /sbin/init


============================

# Environnement de bureau : i3

* [Windows] 1, 2, 3 	: changer de workspace
* [Windows]+Entrée 	: poper un shell (fenêtre)
* [W] + V
* [W] + Shift + V
* [W] + Q

* [W] + Shift + 3 	: mettre dans le Workspace 3

* [W] + F 		: fullscreen

* [W] + K			: redimensionnement des fenêtres
* [W] + Flèches
* [W] + Entrée

* i3lock -c 000000

* Autre shell :
* * Friendly Interactive Shell (Fish)

* Bash :
* * for line in $(ls); do echo $line; sleep 1; done

* Fish :
* * for line in (ls); echo $line; sleep 1; end



=============================

# Astuces : commandes Linux

* cp --backup -b

* cp -i  : confirmation

* ls -A

* tree
* ls -R

* grep -C 2 gnome /etc/password


* ctrl
* * a, e : début/fin de ligne
* * u, k : effacer à gauche / à droite
* * w, y : couper / coller
* * flèches droite, gauche : déplacement


* Différence : sourcer / exécuter
* * source script.sh  : inclure dans la session courante du shell le script


* xclip : copier dans un terminal
* * coller : ctrl shift v

* pwd | xclip

* cat /etc/password | xargs echo

* echo "pouet" | xclip -selection clipboard

* netstat -laputenv


==================================

# Fish - personnalisation des commandes
* ~/.config/fish/config.fish

* function mkcd
* * mkdir $argv
* * cd $argv
* end

==================================
