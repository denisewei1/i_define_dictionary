<script>
	function updateMenu(){
		console.log(window.location.pathname);
		var pathArray = window.location.pathname.split("/");
		console.log(pathArray.length);
		for (var i = 0; i < pathArray.length; i++) {
			console.log(pathArray[i]);
		}
	
		var currentPage = pathArray[pathArray.length -1].split(".");
		console.log(currentPage[0]);
		var body = document.body;
		body.id = currentPage[0];
	}

</script>

<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> -->

<!-- <html xmlns="http://www.w3.org/1999/xhtml"> -->

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
<link type="text/css" href="css/idefine.css" rel="stylesheet" media="screen" />
<title>iDefine</title>
<link 
	rel="shortcut icon" 
	href="http://www.eslstation.net/ESL310L/dictionary.bk.gif" 
	type="image/x-icon" 
/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body onload="updateMenu();">
<body>
<div id="container">
        <div id="banner" >
                <h1> iDefine -- main header</h1>
        </div>


