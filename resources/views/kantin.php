<!DOCTYPE html>
<html>
<head>
	<title>Kantin City</title>
</head>
<body>
   <h1>HOT SALE<br></h1>
   <?php

Route::get('/kantin/{page}',function($a) {
	return '<i><u>Saya pesan bakso</u>';
});
Route::get('/bakso', function () {
	return '<i><u>Saya pesan bakso</u>';
    return view('bakso');
});

?>
</body>
</html>