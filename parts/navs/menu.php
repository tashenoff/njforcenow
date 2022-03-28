
	<?php
	wp_nav_menu(
		array(
			'container_id'    => 'primary-menu',
			'container_class' => 'hidden ml-10 bg-gray-100  lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
			'menu_class'      => 'lg:flex lg:-mx-4',
			'li_class'        => 'lg:mx-4',
			'fallback_cb'     => false,
		)
	);
	?>