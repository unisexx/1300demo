<? include "include/config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
<? include '_meta.php'?>
<? include '_script.php'?>
</head>

<body>
<? include '_header.php'?>
<div id="page">


<? switch(@$_GET['act'])
	{
			case 'query':
				include "modules/knowledge/query.php";
			break;
			case 'form':
				include "modules/knowledge/form.php";
			break;
			default :
				include "modules/knowledge/list.php";
 		    break;
	}
?>

</div><!--page-->
<? include '_script_foot.php'?>
</body>
</html>