var server = require('http').Server();

var io = require('socket.io')(server);

var Redis = require('ioredis');

var redis = new Redis();


redis.subscribe('notification-chanel')

redis.on('message', function (chanel, message) {
    console.log(message)
})

server.listen(6379);
