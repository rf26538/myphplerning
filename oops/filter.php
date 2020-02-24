<table>
  <tr>
		<td>filter name</td>
		<td>filter ID<td>
		<td>filter values</td>
  </tr>
	<?php
	foreach ($filter_list as $id => $filter) {
		echo "<tr><td>".$filter."</td><td>".$filter_id($filter).'</td><td>'.$filter_values."</td></tr>";
	}
	?>
</table>