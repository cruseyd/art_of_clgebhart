const express = require('express');
const serverless = require('serverless-http');
const fs = require('fs');
const app = express();
const router = express.Router();

router.get('/', (req, res) => {
    const filenames = fs.readdirSync('/images');
    res.send(__dirname);
});

app.use('/.netlify/functions/api', router);

module.exports.handler = serverless(app);