var bodyParser = require('body-parser')
var express = require('express');
var morgan = require('morgan');
var app = express();

var temperature = 20;

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
        temperature: temperature
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
        data = JSON.parse(data);
        temperature = data.temperature;
    } catch (err) {
        console.log(err);
    }
});