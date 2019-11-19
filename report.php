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
				include "modules/report/query.php";
			break;
			case 'daily_r1':
				include "modules/report/daily_r1.php";
			break;
			case 'daily_r2':
				include "modules/report/daily_r2.php";
			break;
			case 'daily_r3':
				include "modules/report/daily_r3.php";
			break;
			case 'daily_r4':
				include "modules/report/daily_r4.php";
			break;
			case 'daily_r5':
				include "modules/report/daily_r5.php";
			break;
			case 'monthly_r1':
				include "modules/report/monthly_r1.php";
			break;
			case 'monthly_r2':
				include "modules/report/monthly_r2.php";
			break;
			case 'monthly_r3':
				include "modules/report/monthly_r3.php";
			break;
			case 'monthly_r4':
				include "modules/report/monthly_r4.php";
			break;
			case 'monthly_r5':
				include "modules/report/monthly_r5.php";
			break;
			case 'yearly_r1':
				include "modules/report/yearly_r1.php";
			break;
			case 'yearly_r2':
				include "modules/report/yearly_r2.php";
			break;
			case 'yearly_r3':
				include "modules/report/yearly_r3.php";
			break;
			case 'yearly_r4':
				include "modules/report/yearly_r4.php";
			break;
			case 'yearly_r5':
				include "modules/report/yearly_r5.php";
			break;
			case 'r1':
				include "modules/report/r1.php";
			break;
			case 'r2':
				include "modules/report/r2.php";
			break;
			case 'r3':
				include "modules/report/r3.php";
			break;
			case 'r4':
				include "modules/report/r4.php";
			break;
			case 'r5':
				include "modules/report/r5.php";
			break;
			default :
				include "modules/report/list.php";
 		    break;
	}
?>

</div><!--page-->
<? include '_script_foot.php'?>
</body>
</html>