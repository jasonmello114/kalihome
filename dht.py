#!/usr/bin/python3
# dht.py
# Ashish D'Souza
# February 13th, 2019

#import Adafruit_DHT
import requests


#humidity, temperature_c = Adafruit_DHT.read_retry(Adafruit_DHT.DHT22, 17)
#temperature_f = round(temperature_c * 9/5 + 32, 1)
# print(round(humidity, 1))
#print(round(temperature_f, 1))
temp_range = [x for x in requests.get("http://wttr.in/?0&T&Q").text.split("\n")[1].split(" ") if x][-2]
if "-" in temp_range:
	print(sum(list(map(int, temp_range.split("-")))) / 2)
else:
	print(temp_range)
