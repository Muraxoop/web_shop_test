var express = require('express');
var app = express();
var bodyParser = require('body-parser');

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));

app.get("/podaci", function (request, response) {

    return response.send("ok");

})

app.get("/podaci/:id", function (request, response) {

    var id = request.params.id;
    return response.send({message: id + 2 +" da"});

})

app.post("/podaci", function (request, response) {

    var podaci = request.body.podatak;
    return response.send({message: podaci +" da"});

})

app.post("/korisnik", function (request, response) {

    var prezime =request.body.prezime;
    var ime =request.body.ime;
    return response.send({message: "CREATE" + ime + prezime});
    
})

app.put("/korisnik/:id", function (request, response) {

    var id = request.params.id;
    var adresa =request.body.adresa;
    return response.send({message: "UPDATE" + id + "nova adresa" + adresa});
    
})

app.delete("/korisnik/:id", function (request, response){
  
    var id = request.params.id;
    return response.send({message: "DELETE" + id});  

})

app.get("/korisnik/:id", function (request, response) {

    var id = request.params.id;
    return response.send({message: "READ korisnik "+id});

})

app.get("/korisnik", function (request, response) {

    return response.send({message: "READ korisnik (svi)"});

})


// set port
app.listen(3000, function () {
    console.log('Node app is running on port 3000');
});
