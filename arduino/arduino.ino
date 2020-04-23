// https://randomnerdtutorials.com/decoding-and-encoding-json-with-arduino-or-esp8266/
#include <ArduinoJson.h>
#include <dht.h>

dht DHT;

#define DHT11_PIN 7

int getLum(){
    int val = analogRead(3);
    val = map(val, 6, 679, 0, 100);
    return val;
}
  
void sendData(){
    int dhtValues = DHT.read11(DHT11_PIN);
    StaticJsonBuffer<200> jsonBuffer;
    JsonObject& root = jsonBuffer.createObject();
    root["temperature"] = dhtValues.temperature;
    root["luminosity"] = getLum();
    root["humidity"] = dhtValues.humidity;
    root["time"] = 0
    root["id"] = 1;
    root.printTo(Serial);
    Serial.println(); 

void setup() {
    Serial.begin(9600);
}

void loop() {
    // Toutes les une heure, il envoie les données
    sendData();
    delay(3600000);
    
}
