<?php 

class PrintArray {
	function print_array($data) {
		$columns = array();
		$number_of_columns = 0;
		
		if (!is_array($data)) {		
			return 'Error: Array not provided';
		} else {
			$j = 0;
			foreach ($data as $row) {
				if (!is_array($row)) {
					return 'Error: Wrong array type provided';
				} else {
					foreach ($row as $key => $val) {		
						$columns[] = $key;
						$number_of_columns++;
					}
				}
				$j++;
				if ($j==1) break;
			}
			$j = 1;
			foreach ($data as $row) {
				if ($j <> 1) {
					if (!is_array($row)) {
						return 'Error: Wrong array type provided';
					} else {
						$row_columns = 0;
						foreach ($row as $key => $val) {		
							if (!in_array($key, $columns)) {
								return 'Error: Arrays contains different column names';
							}
							$row_columns++;
						}
						if ($row_columns <> $number_of_columns) {
							return 'Error: Arrays contains different number of columns';					
						}
					}
				}	
				$j++;
			}
		}
		$colors = array ('#FF0000', '#00FF00', '#FCFC2D', '#0000FF');
		
		$html = '<table border="1" cellpadding="5" cellspacing="0"><tr>';
		
		$i = 0;
		foreach ($columns as $row) {
			if (isset($colors[$i])) {
				$color = $colors[$i];
			} else {
				$color = '#FFFFFF';
			}
			$html .= '<td style="background:'.$color.'">'.$row.'</td>';
			$i++;
		}
		$html .= '</tr>';
		
		foreach ($data as $row) {
			$html .= '<tr>';
			$i = 0;
			foreach ($row as $val) {		
				if (isset($colors[$i])) {
					$color = $colors[$i];
				} else {
					$color = '#FFFFFF';
				}
				$html .= '<td style="background:'.$color.'">'.$val.'</td>';
				$i++;
			}
			$html .= '</tr>';		
		}
			
		$html .= '</table>';

		return $html;	
	}
}
?>