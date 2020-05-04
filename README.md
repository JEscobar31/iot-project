# iot-project

Pour la partie Arduino : 

Installer les libraries suivante depuis le logiciel :
1. ArduinoUniqueID
2. DHT
Puis installer la library suivante avec le zip fournie :
1. BMP180_Breakout_Arduino_Library-master.zip


Pour la partie raspberry :
```
npm i
```

```
npm run start
```

Pour la partie laravel : 
```
composer install
```
```
npm i
```
```
cp .env.example .env
```
Configurer les informations de la base de données
```
php artisan key:generate
```
```
php artisan migrate
```
