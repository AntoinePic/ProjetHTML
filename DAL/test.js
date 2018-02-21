var mysql = require('mysql'); 

var con = mysql.createConnection( {
    host:"localhost", 
    user:"root", 
    password:"", 
    database:"tmts"
}); 

function AddUser(firstName, lastName, phone, email, monday, tuesday, wednesday, thursday, friday) {
    con.connect(function (err) {
        if (err)throw err; 
        console.log("Connected!"); 
        var sql = "INSERT INTO users (FirstName,LastName,Phone,Email,Monday,Tuesday,Wednesday,Thursday,Friday) VALUES (" + firstName + "," + lastName + "," + phone + "," + email + "," + monday + "," + tuesday + "," + wednesday + "," + thursday + "," + friday + ")"; 
        con.query(sql, function (err, result) {
            if (err)throw err; 
            console.log("1 record inserted");
        }); 
    }); 
}