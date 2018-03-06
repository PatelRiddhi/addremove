<?php

if($_POST['hobby'])
{
	$array=$_POST['hobby'];
	foreach($array as $hobby)
		{
		if(strlen($hobby)>0)
			{
			echo '<h3>'.$hobby.'<h3/>';
			//$sql=mysql_query("insert into hobbies(hobby)values('$hobby')")
			}
		}
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Jquery Duplicate Fields Submit Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="reCopy.js"></script>
<script type="text/javascript">
	$(function()
	{
	  var removeLink = ' <a class="remove" href="#" onclick="$(this).parent().slideUp(function(){ $(this).remove() }); return false">remove</a>';
	$('a.add').relCopy({ append: removeLink});	
	});
</script>
<style type="text/css">
body{ 
	font-family:Arial, Helvetica, 
	sans-serif; 
	font-size:13px; 
	}
.remove {
	color:#cc0000
	}
.input{ 
	border: solid 1px #006699; 
	padding:3px
	}

</style>
</head>

<body>
   <form method="post" action="">
	   <p class="clone">
	   		<input type="text" name="hobby[]" class='input'/>
	   </p>
	   <p>
	   		<a href="#" class="add" rel=".clone">Add More</a>
	   </p>
	   <input type="submit" value=" Submit " />
   </form>
</body>
</html>
