<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Ez az index.php
         <?php
            include("fuggveny.php");
            $sorsolt=sorsolas();
            var_dump($sorsolt);

        $szamokszama=90;
        $oszlop=15;
        echo '<table border="1">';
	for ($i=1; $i<=$szamokszama; $i++)
	{
		if ($i%$oszlop==1)
		{
			echo "<tr>\n";
		}
		if (isset($sorsolt[$i]))
		{	
			$hatterszin="#FF0000";
		}
		else
		{	
			$hatterszin="yellow";
		}
		echo "<td bgcolor=\"$hatterszin\">";
			echo $i;
		echo "</td>";	
		if ($i%$oszlop==0)
		{
			echo "</tr>";
		}
	}
	echo "</table>";
           
        ?>
    </body>
</html>
