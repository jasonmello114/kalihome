#!/usr/bin/python3
# dht.py
# computer-geek64
# December 15th, 2018

import Adafruit_DHT


humidity, temperature_c = Adafruit_DHT.read_retry(Adafruit_DHT.DHT22, 17)
temperature_f = round(temperature_c * 9/5 + 32, 1)
# print(round(humidity, 1))
print(round(temperature_f, 1))
