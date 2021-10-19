const express = require('express');
const app = express();

const http = require('http');
const fs = require('fs');

app.get('/', function (req, res) {
    res.sendFile('/mainpage.html', { root: __dirname });
});

app.get('/tap-mainpage', function (req, res) {
    res.sendFile('/tap-mainpage.html', { root: __dirname });
});

app.get('/qwxt-mainpage', function (req, res) {
    res.sendFile('/qwxt-mainpage.html', { root: __dirname });
});

app.get('/tap-app', function (req, res) {
    res.sendFile('/tapapp.html', { root: __dirname });
});

app.get('/tap-responses', function (req, res) {
    res.sendFile('/responses.json', { root: __dirname });
});






app.listen(process.env.PORT || 8888, function () {
    console.log('Listening on port 8888');
});