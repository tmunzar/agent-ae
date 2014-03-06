<?php

/**
 * Cards model config
 */

return array(

        'title' => 'Morning Minutes',

        'single' => 'morning minute',

        'model' => 'MorningMinute',

        'columns' => array(
                'id',
                'title',
                'created_at'
        ),

        'edit_fields' => array(
		    'title' => array(
		        'title' => 'Name',
		        'type' => 'text'
		    ),
		    'image' => array(
			    'title' => 'Image',
			    'type' => 'image',
			    'location' => public_path() . '/uploads/morning_minutes/originals/',
			    'naming' => 'random',
			    'length' => 20,
			    'size_limit' => 2,
			    'sizes' => array(
			        array(65, 57, 'crop', public_path() . '/uploads/morning_minutes/thumbs/small/', 100),
			        array(400, 300, 'auto', public_path() . '/uploads/morning_minutes/thumbs/medium/', 100),
			    )
			)
		),
);
