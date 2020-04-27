// https://randomnerdtutorials.com/decoding-and-encoding-json-with-arduino-or-esp8266/
#include <ArduinoJson.h>
// DHT sensor library by Adafruit.
#include <DHT.h>
#include <DHT_U.h>
#include <SFE_BMP180.h>


#define DHTPIN 2
#define DHTTYPE DHT22
DHT dht(DHTPIN, DHTTYPE);

SFE_BMP180 pressure;

int getBrightness() {
  int val = analogRead(3);
  val = map(val, 6, 679, 0, 100);
  return val;
}

double getPressure()
{
  char status;
  double temperature;
  double returnPressure;

  // You must first get a temperature measurement to perform a pressure reading.

  // Start a temperature measurement:
  // If request is successful, the number of ms to wait is returned.
  // If request is unsuccessful, 0 is returned.

  status = pressure.startTemperature();
  if (status != 0)
  {
    // Wait for the measurement to complete:

    delay(status);

    // Retrieve the completed temperature measurement:
    // Note that the measurement is stored in the variable T.
    // Use '&T' to provide the address of T to the function.
    // Function returns 1 if successful, 0 if failure.

    status = pressure.getTemperature(temperature);
    if (status != 0)
    {
      // Start a pressure measurement:
      // The parameter is the oversampling setting, from 0 to 3 (highest res, longest wait).
      // If request is successful, the number of ms to wait is returned.
      // If request is unsuccessful, 0 is returned.

      status = pressure.startPressure(3);
      if (status != 0)
      {
        // Wait for the measurement to complete:
        delay(status);

        // Retrieve the completed pressure measurement:
        // Note that the measurement is stored in the variable P.
        // Use '&P' to provide the address of P.
        // Note also that the function requires the previous temperature measurement (temperature).
        // (If temperature is stable, you can do one temperature measurement for a number of pressure measurements.)
        // Function returns 1 if successful, 0 if failure.

        status = pressure.getPressure(returnPressure, temperature);
        if (status != 0)
        {
          return (returnPressure);
        }
        else Serial.println("error retrieving pressure measurement\n");
      }
      else Serial.println("error starting pressure measurement\n");
    }
    else Serial.println("error retrieving temperature measurement\n");
  }
  else Serial.println("error starting temperature measurement\n");
}

void sendData() {
  StaticJsonDocument<256> doc;
  JsonObject root = doc.to<JsonObject>();
  //root["temperature"] = dht.readTemperature();
  //root["brightness"] = getBrightness();
  //root["humidity"] = dht.readHumidity();
  //root["pressure"] = getPressure();
  root["temperature"] = random(15, 30);
  root["brightness"] = random(0, 100);
  root["humidity"] = random(0, 100);
  root["pressure"] = random(500, 1500);
  root["arduino_id"] = 1;
  serializeJson(root, Serial);
  Serial.println();
}

void setup() {
  Serial.begin(9600);
  dht.begin();
}

void loop() {
  // Toutes les une heure, il envoie les données
  sendData();
  delay(3600000);
}
