var bodyParser = require('body-parser')
var express = require('express');
var morgan = require('morgan');
var app = express();
const request = require('request');

//CREATION VARIABLE + ATTRIBUTION DONNES
var temperature = 20;
var brightness = 250;
var pressure = 3;
var humidity = 45;

app.use(function (req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
    next();
});

app.use(morgan('dev')); // log every request to the console
app.use(bodyParser.urlencoded({ extended: 'true' })); // parse application/x-www-form-urlencoded
app.use(bodyParser.json()); // parse application/json
app.use(bodyParser.json({ type: 'application/vnd.api+json' })); // parse application/vnd.api+json as json

app.get('/', (req, res) => {
    res.send({
        temperature: temperature,
        brightness: brightness,
        pressure: pressure,
        humidity: humidity
    });
});

app.listen(3000);

const SerialPort = require('serialport');
const Readline = require('@serialport/parser-readline');
const port = new SerialPort('/dev/ttyACM0', { baudRate: 9600 });
const parser = port.pipe(new Readline({ delimiter: '\n' }));
port.on("open", () => {
    console.log('serial port open');
});
parser.on('data', data => {
    try {
        request.post('http://laravel.test/',
            JSON.parse(data),
            (error, res, body) => {
                if (error) {
                    console.error(error)
                    return
                }
                console.log(`statusCode: ${res.statusCode}`)
                console.log(body)
            });
        temperature = data.temperature;
        brightness = data.brightness;
        pressure = data.pressure;
        humidity = data.humidity;
    } catch (err) {
        console.log(err);
    }
});