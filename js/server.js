var express = require('express');
var app = express();

var server = app.listen(8000,function () {
    app.get('/',function (req,res) {
        res.send('');
        
    })
})