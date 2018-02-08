var mysql = require('mysql');

var con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "tmts"
});

con.connect(function (err) {
    if (err) throw err;
    console.log("Connected!");
    var sql = "INSERT INTO users (Name,Surname,Mail,Phone,Monday,Tuesday,Wednesday,Thursday,Friday) VALUES ('Antoine','Picard','a@gmail.com','0620626906','9h','9h','9h','9h','9h')";
    con.query(sql, function (err, result) {
        if (err) throw err;
        console.log("1 record inserted");
    });
});