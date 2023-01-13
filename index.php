<?php 
    // Start MySQL Connection
    include('connect.php'); 


?>

<html>
<head>
    <title>Raspberry Pi Weather Log</title>
    <style type="text/css">
        .table_titles, .table_cells_odd, .table_cells_even {
                padding-right: 20px;
                padding-left: 20px;
                color: #00;
        }
        .table_titles {
            color: #FFF;
            background-color: #666;
        }
        .table_cells_odd {
            background-color: #CCC;
        }
        .table_cells_even {
            background-color: #FAFAFA;
        }
        table {
            border: 2px solid #333;
        }
        body { font-family: "Trebuchet MS", Arial; }
    </style>
</head>

    <body>
        <h1>Podaci sa modula:</h1>


    <table border="0" cellspacing="0" cellpadding="4">
      <tr>
            <td class="table_titles">ID</td>
            <td class="table_titles">Date and Time</td>
            <td class="table_titles">Temperature</td>
            <td class="table_titles">Humidity</td>
            <td class="table_titles">CO2</td>
			<td class="table_titles">TVOC</td>
			<td class="table_titles">PM1</td>
			<td class="table_titles">PM2_5</td>
			<td class="table_titles">PM10</td>
			<td class="table_titles">AQI</td>
          </tr>
<?php


    // Retrieve all records and display them
    $result = mysql_query("SELECT * FROM modul ORDER BY id DESC");

    // Used for row color toggle
    $oddrow = true;

    // process every record
    while( $row = mysql_fetch_array($result) )
    {
        if ($oddrow) 
        { 
            $css_class=' class="table_cells_odd"'; 
        }
        else
        { 
            $css_class=' class="table_cells_even"'; 
        }

        $oddrow = !$oddrow;

        echo '<tr>';
        echo '   <td'.$css_class.'>'.$row["num"].'</td>';
        echo '   <td'.$css_class.'>'.$row["recorded"].'</td>';
        echo '   <td'.$css_class.'>'.$row["TEMPERATURA"].'</td>';
        echo '   <td'.$css_class.'>'.$row["VLAGA"].'</td>';
        echo '   <td'.$css_class.'>'.$row["CO2"].'</td>';
		echo '   <td'.$css_class.'>'.$row["TVOC"].'</td>';
		echo '   <td'.$css_class.'>'.$row["TLAK"].'</td>';
		echo '   <td'.$css_class.'>'.$row["PM1"].'</td>';
		echo '   <td'.$css_class.'>'.$row["PM2_5"].'</td>';
		echo '   <td'.$css_class.'>'.$row["PM10"].'</td>';
		echo '   <td'.$css_class.'>'.$row["AQI"].'</td>';
        echo '</tr>';
    }
?>
    </table>
    </body>
</html>