const express = require('express');
const app = express();

const http = require('http');
const fs = require('fs');

app.get('/', function (req, res) {
    res.sendFile('/mainpage.html', { root: __dirname });
});






app.listen(process.env.PORT || 8888, function () {
    console.log('Listening on port 8888');
});