<html>
<head>
<title>Luas Layang Layang</title>
</head>

<body>
<table width="434" height="86" border="2" bordercolor="#FF0000">
<tr>
<td height="43" colspan="4" align="center">
<tr>
<td height="43" colspan="4" align="center" bgcolor="#D0E382">
    <div>
        <h2>Luas Layang Layang PHP</h2>
    </div>
</td>
</tr>
<pre>
<tr>
<td height="43" colspan="4" align="center">


<?php
$diagonal1 = $_POST['diagonal1'];
$diagonal2 = $_POST['diagonal2'];

function add($diagonal1, $diagonal2) {
$luas = ($diagonal1* $diagonal2)/2;
return $luas;
}

echo "<strong><U> Dengan Alas : $diagonal1, </u><br><br>";
echo "<strong><U> Dan Tinggi : $diagonal2, maka:</strong></u><br><br>";
echo "Luas Layang Layang : <br>";
$luas = add($diagonal1, $diagonal2);
Printf("luas : 1/2(%d * %d) = %d<br>",$diagonal1,$diagonal2, $luas);
?>


</td>
</tr>
</pre>
</table>
</form>
</body>
</html>