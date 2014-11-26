<?php
require('../../php/config.php');

$query ="SELECT id, descripcion FROM tipo_grupos";

$result = mysql_query($query)or die(mysql_error());
$num_row = mysql_num_rows($result);
if( $num_row >=1 ) { ?>
<?php	while ($row = mysql_fetch_array($result)){	
            echo "<option value='{$row['id']}'>".utf8_encode($row['descripcion'])."</option>";
        }
} ?>