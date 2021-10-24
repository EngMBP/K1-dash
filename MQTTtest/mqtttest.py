
import paho.mqtt.client as mqtt 
from random import randrange, uniform
import time
import json

def on_connect(client, userdata, flags, rc):
    print("Connected with result code", rc)
    client.subscribe("test")

def on_message(client, userdata, msg):
    print(msg.topic, msg.payload)

client = mqtt.Client(client_id="", clean_session=True, userdata=None, protocol=mqtt.MQTTv311, transport="tcp")
client.on_connect = on_connect
client.on_message = on_message
client.tls_set()  # <--- even without arguments

client.username_pw_set(username="vft", password="VectorFT756")
print("Connecting...")
client.connect("iotvectorft.ddns.net", 8883, 60)
topic="datatest/temp"



##mqttBroker ="mqtt://iotvectorft.ddns.net" 

##client = mqtt.Client("Temperature_Inside")
##client.connect(mqttBroker) 
##client.connect(mqttBroker, port=8883, keepalive=60, bind_address="")

while True:
    x = {
  "timestamp": time.asctime(),
  "temp1": uniform(0, 30),
  "temp2": uniform(-20.0, 21.0),
  "temp3": uniform(0, 21.0),
  "temp4": uniform(10, 21.0),
  "bat": uniform(0, 100)
    }
    y = json.dumps(x)
    ##randNumber = uniform(20.0, 21.0)
    client.publish(topic, y)
    print("Just published " + y + " to "+ topic)
    time.sleep(1)