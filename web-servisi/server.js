var express = require('express');
var app = express();

app.get("/podaci", function (request, response) {

    return response.send("ok");

});

// set port
app.listen(3000, function () {
    console.log('Node app is running on port 3000');
});
