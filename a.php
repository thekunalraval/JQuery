<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script type="text/javascript" language="javascript">
var count=0;
var temp = new Array();
function addcontrol()
{
	var divID = document.getElementById("mydiv");
	var txt = '<input type = "textbox" class="myinput" id=textbox'+count+' /><br>';
	divID.innerHTML = divID.innerHTML+txt;
	count = count + 1;
}

function sortcontrol()
{
	/*for(count=0;count<=count;count++)
	{
		temp=document.getElementById('textbox'+count+'').value;
		alert(temp);
	}*/
	/*var sorted = $(".myinput").sort(function(a,b)
		{
			return parseInt($(a).val()) - parseInt($(b).val());
		}*/
		function compare(a,b) {
  if (a.value - b.value)
     return -1;
  if (b.value - a.value)
    return 1;
  return 0;
		}
		objs.sort(compare);
}
</script>
</head>

<body>
<form>
  <input type="button" name="submit" value="submit" onclick= "addcontrol()"/>
  <input type="button" name="sort" value="sort" onclick= "sortcontrol()"/>
  <br>
  <div id="mydiv"> </div>
</form>
</body>
</html>