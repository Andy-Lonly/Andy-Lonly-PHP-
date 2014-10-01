<?php
/* 
$COLOER表格颜色
$NAME表格名称
$ROWS行（竖直）
$COLS 列（横向）
*/
function table($COLOER,$NAME,$ROWS,$COLS){
	echo "<table align='center' border='2'>";
	echo "<caption><h1> $NAME </h1></caption>";
	for ($A=0; $A<$ROWS; $A+1){
		echo "<tr bgcolor=".$COLOER.">";
		for ($B=0; $B<$COLS; $B+1){
			echo "<td>".($A*$COLS+$B)."</td>";
		}
	echo "</tr>";
	}
	echo "</table>";
}
?>
