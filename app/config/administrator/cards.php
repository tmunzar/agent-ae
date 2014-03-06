<?php

/**
 * Cards model config
 */

return array(

        'title' => 'Cards',

        'single' => 'card',

        'model' => 'Card',

        'form_width' => 600,

        /**
         * The display columns
         */
        'columns' => array(
                'id',
                'title',
                'published' => array(
                    'title' => 'Published?',
                    'output' => function($value)
                    {
                        if ($value =="0")
                            return "No";
                        else
                            return "Yes";
                    },
                ),
                'created_at'
        ),

        'edit_fields' => array(
		    'title' => array(
		        'title' => 'Name',
		        'type' => 'text'
		    ),
		    'description' => array(
			    'type' => 'wysiwyg',
			    'title' => 'Entry',
			),
			'location' => array(
			    'type' => 'text', //optional, default is 'text'
			    'title' => 'Location',
			    'limit' => 255, //optional, defaults to no limit
			),
		    'transaction_type' => array (
		    	'title' => 'Type',
		    	'type' => 'enum',
		    	'options' => array(
			        'sale' => 'Sale',
			        'lease' => 'Lease',
			        'sale-and-lease' => 'Sale/Lease',
			    ),
		    ),
		    'property_type' => array (
		    	'title' => 'Type',
		    	'type' => 'enum',
		    	'options' => array(
			        'residential' => 'Residential',
			        'Commercial' => 'Commercial',
			    ),
		    ),
		    'price' => array(
			    'type' => 'number',
			    'title' => 'Price',
			    'symbol' => 'AED', //optional, defaults to ''
			    'decimals' => 2, //optional, defaults to 0
			    'thousands_separator' => ',', //optional, defaults to ','
			    'decimal_separator' => '.', //optional, defaults to '.'
			),
			'area' => array(
			    'type' => 'number',
			    'title' => 'Area',
			    'symbol' => 'Sq.feet', //optional, defaults to ''
			    'decimals' => 2, //optional, defaults to 0
			    'thousands_separator' => ',', //optional, defaults to ','
			    'decimal_separator' => '.', //optional, defaults to '.'
			),
			'image' => array(
			    'title' => 'Image',
			    'type' => 'image',
			    'location' => public_path() . '/uploads/cards/originals/',
			    'naming' => 'random',
			    'length' => 20,
			    'size_limit' => 2,
			    'sizes' => array(
			        array(65, 57, 'crop', public_path() . '/uploads/cards/thumbs/small/', 100),
			        array(280, 140, 'fit', public_path() . '/uploads/cards/thumbs/medium/', 100),
			        array(383, 276, 'fit', public_path() . '/uploads/cards/thumbs/full/', 100)
			    )
			)
		),

		'actions' => array (
            'publish_card' => array(
                'title' => function($model)
                {
                    return ($model->published==1 ? 'Unpublish' : 'Publish');
                },
                'messages' => array(
                    'active' => function($model)
                    {
                        return ($model->published==1 ? 'Unpublishing ' : 'Publish ') . $model->email . '...';
                    },
                    'success' => function($model)
                    {
                        return $model->email . ($model->published==1 ? ' unpublished!' : ' published!');
                    },
                    'error' => function($model)
                    {
                        return "There was an error while " . ($model->published==1 ? 'unpublishing ' : 'publishing ') . $model->email;
                    },
                ),
                'action' => function($model)
                {
                    if ($model->published==0)
                        $model->publish();
                    else
                        $model->unpublish();

                    return true;
                }
            ),
        )
);