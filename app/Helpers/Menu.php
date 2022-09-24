
<?php
	class Menu{
		
	public static function navbarsideleft(){
		return [
		[
			'path' => 'home',
			'label' => __('dashboard'), 
			'icon' => '<i class="material-icons ">cast</i>'
		],
		
		[
			'path' => 'users',
			'label' => __('indoxes'), 
			'icon' => '<i class="material-icons ">comment</i>'
		],
		
		[
			'path' => 'admins',
			'label' => __('agents'), 
			'icon' => '<i class="material-icons ">people</i>'
		],
		
		[
			'path' => 'departments',
			'label' => __('departments'), 
			'icon' => '<i class="material-icons ">kitchen</i>'
		],
		
		[
			'path' => 'languages',
			'label' => __('languages'), 
			'icon' => '<i class="material-icons ">language</i>'
		],
		
		[
			'path' => 'messages',
			'label' => __('chats'), 
			'icon' => '<i class="material-icons ">insert_emoticon</i>'
		],
		
		[
			'path' => 'faq',
			'label' => __('manageFaq'), 
			'icon' => '<i class="material-icons ">help</i>'
		],
		
		[
			'path' => 'suggestions',
			'label' => __('suggestion'), 
			'icon' => '<i class="material-icons ">highlight</i>'
		],
		
		[
			'path' => 'auth/logout',
			'label' => __('logOut'), 
			'icon' => '<i class="material-icons ">rotate_90_degrees_ccw</i>'
		]
	] ;
	}
	
		
	public static function admin_type(){
		return [
		[
			'value' => '2', 
			'label' => __('agent'), 
		],
		[
			'value' => '1', 
			'label' => __('admin'), 
		],] ;
	}
	
	public static function status(){
		return [
		[
			'value' => '1', 
			'label' => __('publish'), 
		],
		[
			'value' => '0', 
			'label' => __('draft'), 
		],] ;
	}
	
	}
