var express = require('express');
var app = express();
var bodyParser = require('body-parser');

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));

app.get("/podaci", function (request, response) {

    return response.send("ok");

});

app.get("/podaci/:id", function (request, response) {

    var id = request.params.id;
    return response.send({message: id + 2 +" da"});

});

app.post("/podaci", function (request, response) {

    var podaci = request.body.podatak;
    return response.send({message: podaci +" da"});

});

// set port
app.listen(3000, function () {
    console.log('Node app is running on port 3000');
});
