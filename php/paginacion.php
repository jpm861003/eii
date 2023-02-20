
<?php 
add_filter( 'the_content', 'dcms_list_data' );

function dcms_list_data( $content ) {
	$slug_page = 'espacioInfo'; //slug page where show data
	$table_name = 'tablaEII'; // custom table name
	$items_per_page = 10; // quantity per page

	if ( is_page($slug_page) ){
	    global $wpdb;

		$search_condition = '';
		$search = $_REQUEST['search']??'';
		if ( $search ) $search_condition = "WHERE `nombre` like '%$search%'";

		$start_number = $_REQUEST['start']??0;
		if ( $start_number < 0 || ! is_numeric( $start_number ) ) $start_number = 0;

		// Count items
		$sql = "SELECT COUNT(*) FROM `$table_name` $search_condition";
		$count = $wpdb->get_var($sql);

		// Items
		$sql = "SELECT * FROM `$table_name` $search_condition LIMIT $start_number, $items_per_page";
	    $items = $wpdb->get_results($sql);

		$content .= dcms_print_search($search);
		$content .= dcms_print_table($items);
		$content .= dcms_print_pagination($start_number, $items_per_page, $count, $search);
	}

	return $content;
}

function dcms_print_search($search){
	return '<form method="get">
				<input type="search" minlength="2" placeholder="Ingresa el empleado" name="search" value="'.$search.'">
				<input type="submit" value="Buscar">
			</form>';
}

function dcms_print_table($items){
	$result = '';

	// field names
	foreach ($items as $item) {
		$result .= '<tr>
			<td>'.$item->nombre.'</td>
			<td>'.$item->tipo.'</td>
			<td>'.$item->fecha.'</td>
			<td>'.$item->ver.'</td>
		</tr>';
	}

	$template = '<table class="table-data">
				  <tr>
					<th>Nombre</th>
					<th>Tipo</th>
					<th>Fecha</th>
					<th>Ver</th>
				  </tr>
				  {data}
				</table>';

	return str_replace('{data}', $result, $template);
}


function dcms_print_pagination($start_number, $items_per_page, $count, $search){
	$navbar = '';

	if ( $count > $items_per_page ){
		$nav_count = 0;
		$page_count = 1;
		$str_search = '';
		$current_page = $start_number/$items_per_page + 1;

		if ( $search ) $str_search = "&search=$search";

		while ( $nav_count < $count ) {
			if ( $page_count === $current_page ){
				$navbar .= "<span>{$page_count}</span> ";
			} else {
				$navbar .= "<a href='?start={$nav_count}{$str_search}'>{$page_count}</a> ";
			}
			$nav_count += $items_per_page;
			$page_count++;
		}

		$navbar = "<section>$navbar</section>";
	}

	return $navbar;
}