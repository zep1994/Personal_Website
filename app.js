let express = require('express');
const path = require('path')
let app = express();

app.use(express.static(__dirname + '/public'));


app.get('/about', function (req, res) {
    res.sendfile(__dirname + '/public/about.html');
    });

app.get('/', function (req, res) {
    res.sendFile('index.html')
})

app.listen(5500, function() {
    console.log("Server Started")
})