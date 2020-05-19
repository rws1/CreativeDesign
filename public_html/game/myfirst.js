var mysql = require('mysql');

var con = mysql.createConnection({
  host: 'mysql-server-1',
  user: 'rws1',
  password: '7Fgah5MtVW',
  database: 'rws1'

});


con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  var sql = "UPDATE users SET score = 'score'+1  WHERE username = 'usrnm'";
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log("1 record UPDATED");
  });
});
