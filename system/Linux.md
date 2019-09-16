# Kali Linux

Objectif offensif : rooter en mettant un alias sur la commande sudo

---

* notes sur `/etc/shadow`
    * $1 : md5
    * $6 : sha512

## Compromission des accès à la machine Kali

* Non utilisation du recovery mode
* Sur Grub, press "e"
* Modifications : 
    * `rw  init=/bin/bash`
    * F10
* Puis, en shell:
    * `passwd root`
    * `exec /sbin/init`

	
## Environnement de bureau : i3

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

* `i3lock -c 000000`


## Fish

Autre shell : Friendly Interactive Shell (Fish)
* Exemple :
	* Bash : `for line in $(ls); do echo $line; sleep 1; done`
	* Fish : `for line in (ls); echo $line; sleep 1; end`

* `~/.config/fish/config.fish` : personnalisation des commandes

```
function mkcd
    mkdir $argv
    cd $argv
end
```


## Astuces - commandes Linux

* `cp --backup -b`
* `cp -i` : confirmation
* `ls -A`
* `tree`
* `ls -R`
* `grep -C 2 gnome /etc/password`
* Ctrl +
    * a, e : début/fin de ligne
    * u, k : effacer à gauche / à droite
    * w, y : couper / coller
    * flèches droite, gauche : déplacement

* Différence : sourcer / exécuter
    * `source script.sh` : inclure le script dans la session courante du shell

* `xclip` : copier dans un terminal
    * `ctrl shift v` : coller

* `pwd | xclip`
* `cat /etc/password | xargs echo`
* `echo "pouet" | xclip -selection clipboard`
* `netstat -laputenv`
* One-liner Shell :
```
cp /bin/bash /tmp/; chmod u+xs /tmp/bash
/tmp/bash -p
```
* `:!id` : exécute la commande id sous vi

```
cat pouet
okok1 okok2 okok3
okok1      okok2  okok3
cut -d ' ' -f 2
cat pouet | awk '{print $2}'
```
* sed, cut, grep

* `crunch 8 8`


## Outils :

* `ranger`
    * navigateur non graphique

* `watch -n2 ifconfig`
    * refresh sur une commande

* `byobu`
    * sur un serveur
    * gestionnaire de terminaux

* ex shell :
    * `for i in (seq 0 200); echo $i; sleep 1; end`

* Script `confnet.sh IP_Host`
```
    ifconfig eth0 down
    ifconfig eth0 192.168.1.$1/25
    ifconfig eth0 up
    route add default gw 192.168.1.1
    echo "nameserver 8.8.8.8" > /etc/resolv.conf
```

* Echapement :
    * `echo "\""`
    * `echo '\'`

* Les Bang :
    * `cat !$` : dernier argument de la précédente commande !$	
    * `sudo !!` : reprend toute la commande précédente

* `crackmapexec -p 'Pouet1!!'`

* `python -m SimpleHTTPServer 10080`

* Woof :
    * `woof -c1 fichier_a_partager.txt`
    * `woof -s` : partager le code python de Woof
    * `woof -j dossier` : partage et compresse le dossier
    * `woof -U` : propose un formulaire d'envoie de fichier

	
## Local port forwarding
Pertinent pour utiliser Metasploit
`RHOST : 127.0.0.1` (machine locale)

Sur serveur@distant.com :
```
nc -l 127.0.0.1 -vp 8888  (écoute HTTP juste en localhost)
+ écoute sur SSH port 22
```
Sur ma_machine :
```
ssh -L 127.0.0.1:4141:127.0.0.1:8888 -p 22 serveur@distant.com -N -v  (-N : pas de shell)
nc -v 127.0.0.1 4141
```

## Dynamic port forwarding

`ssh -D 127.0.0.1:4243 -p 22 server@distant.com -N -v`

```
vi /etc/proxychains.conf
	[ProxyList]
	socks4 127.0.0.1 4243
```

`proxychains wget http://192.168.0.254` : faire passer des commandes via la route de son choix


## Remote port forwarding

`ssh -R 80:localhost:3000 serveo.net`



## Man In The Middle

### SSLSTRIP
* v1
* v2
	* Contourne le HSTS en modifiant le nom HOST du site distant

### BEEF  C&C d'un botnet (JavaScript)


### Bind Shell / Reverse Shell
* firewall bloque en sortie
* reverse shell fait du bruit : keep alive / bind shell ne fait du bruit que lors des connexions

* si filtré, c'est mort; si c'est closed, ok possible


## Codes d'exploitation

* db-exploit.com
* Msfvenom : générateur Metasploit de shellcodes
* Compilation statique/dynamique
	* `gcc -static code.c -o binaire`
	* > shellcode (OPCodes)










