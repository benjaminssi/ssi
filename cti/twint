#!/usr/bin/python3
# -*- coding: utf-8 -*-

# Benjamin Berthelot - 06/06/2020
# Ubuntu 20.04, Python 3.8
# https://github.com/twintproject/twint

import twint, json
from datetime import date, timedelta


f_comptes = "comptes.txt"
p_limite = 10


def colComptes():
	comptes = []
	with open(f_comptes, 'r') as f:
		comptes = f.read().split('\n')
		comptes.remove('')
	return comptes

def colTweets(compte):
	date_actuelle = date.today()
	date_anterieure = date_actuelle - timedelta(days=7)
	print(str(date_actuelle))
	print(str(date_anterieure))
	
	c = twint.Config()
	c.Username = compte
	#c.Members_list = str(compte) #"jeffman78/Berthelot_SSI" #'/'.join(compte)
	#c.Search = "security"
	c.Limit = p_limite
	c.Since = "2020-01-01" #str(date_anterieure)
	c.Until = "2020-06-06" #str(date_actuelle)
	c.Custom["tweet"] = ["id", "username", "created_at", "hashtags", "urls", "tweet"]
	c.Output = compte+"_tweets.json"
	c.Store_json = True
	twint.run.Search(c)

def colLikes(compte):
	c = twint.Config()
	c.Username = "Berthelot_SSI"
	c.User_full = True
	#c.Format = "ID {id} | Username {username}"
	#c.Custom["user"] = ["id", "username"]
	#c.Output = "likes.json"
	#c.Store_json = True
	twint.run.Lookup(c)



def main():
	comptes = colComptes()
	colLikes(True)
	'''
	for compte in comptes:
		colTweets(compte)
	'''



if __name__ == '__main__':
	main()
	print("Fin du programme")
