<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['module']['Eventcalendar'] = array
(
	'module' => "Eventcalendar",
        'name' => "Calendar Module",
	'description' => "Your Event",
	'author' => "---",
	'version' => "0.09",

	// to activate multilang searching, module don't use its url, so, anything is good except 'search'.
	// Instead, module use a call to a page with id 'search' which can be translated to any language. It's mandatory !
	'uri' => 'Eventcalendar',
	'has_admin'=> TRUE,
	'has_frontend'=> TRUE,
    'module_eventcalendar_name'=> 'Event Calendar Module',
    'module_eventcalendar_folder'=>'Eventcalendar',
    'module_eventcalendar_addons_folder'=>'admin/eventcalendar_addons/',
    'module_eventcalendar_folder_lowercase'=>'eventcalendar',
    'module_eventcalendar_url'=>  admin_url().'module/eventcalendar/',
    'module_eventcalendar_assets_folder'=>  base_url().'modules/Eventcalendar/assets/',
    'module_eventcalendar_views_folder'=> base_url(). 'modules/Eventcalendar/views/'
);

return $config['module']['Eventcalendar'];