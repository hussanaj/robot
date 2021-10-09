var mqtt = require('mqtt');

const express = require('express');
const { json } = require('body-parser');
const app = express();
app.use(express.json());
///////////////////////////////////////////////////////////
const MQTT_SERVER = "128.199.103.49";
const MQTT_PORT = "1883";
//if your server don't have username and password let blank.
const MQTT_USER = "mymqtt";
const MQTT_PASSWORD = "ken220641";

app.use(function (req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Methods", "*");
    res.header("Access-Control-Allow-Headers", "*");
    next();
});
//////////////////////////////////// Connect MQTT
var client = mqtt.connect({
    host: MQTT_SERVER,
    port: MQTT_PORT,
    username: MQTT_USER,
    password: MQTT_PASSWORD
});
/////////////////////////////////////// check 
client.on('connect', function () {
    // Subscribe any topic
    console.log("MQTT Connect");
    client.subscribe('robot/start', function (err) {
        if (err) {
            console.log(err);
        }
    });
});
var sw = "";
var dis = 0.0;
var tur = 0;
var tt = "";
var datasw = "" ;
var status ;
var id ;
// Receive Message and print on terminal
client.on('message', function (topic, message) {
    // message is Buffer
    var gg = (message.toString());
    datasw = JSON.parse(gg)
    console.log( datasw)

    console.log(datasw["Datasw"])
    sw = datasw["Datasw"];

    // if(sw == "stop" ){
    //     var dd = JSON.stringify({ stop: stop })
    //     client.publish("robot/start",dd);
    // };
    // var ans = sw.split(",");
    // var stop = ans[0];
    // console.log(stop)
    
     




    // ////////////sql
    //  var mysql = require('mysql');

    //  var con = mysql.createConnection({
    //      host: '128.199.103.49',
    //      user: 'kkken',
    //      password: 'ken220641',
    //      database: "projectfeed"
    //  });
    //  con.connect(function (err) {
    //      if (err) throw err;



    //      console.log('---Con mysql---');
        
         
         
    //      var sql = "INSERT INTO `sensor`(`temperature_w`, `turbidity_w`, `ultrasonic_main`) VALUES ("+tem+","+tur+","+dis+")";
    //      con.query(sql, function (err, result) {
    //          if (err) throw err;
    //          console.log("1 record inserted");

    //      });



    //  });


});

const port = process.env.PORT || 3000
app.get('/api/motorstart/:id/:status', function (req, res) {
    console.log(req.params.id);
    console.log(req.params.status);
    res.status(200).send()
   
     id = req.params.id;
     status = req.params.status;
   
    var tt = JSON.stringify({ id: id, status: status })
   
    
    client.publish("robot/start",tt);
    
    console.log(tt); 
    
     res.end()
     

});
app.get('/api/motorstops', function (req, res) {
    res.send(datasw);
    console.log(datasw);
    
    //res.send("hh");
    datasw = "";
    
});


const port1 = process.env.PORT || 2000
app.get('/api/motorstop/:stop', function (req, res) {
    console.log(req.params.stop);
    
    res.status(200).send()
   
    
    var stop = req.params.stop;
   
    var dd = JSON.stringify({ stop: stop })

   
   
    console.log(dd);
     client.publish("robot/start",dd);
     res.end()
     
});

app.listen(port, () => console.log(`Listening on port${port}...`));
app.listen(port1, () => console.log(`Listening on port${port1}...`));
