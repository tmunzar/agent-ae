<?php

/**
 * Users model config
 */

return array(

        'title' => 'Users',

        'single' => 'user',

        'model' => 'User',

         /**
         * The display columns
         */
        'columns' => array(
                'id',
                'email',
                'first_name' => array(
                    'title' => 'First Name',
                    'relationship' => 'profile',
                    'select' => '(:table).first_name',
                ),
                'last_name' => array(
                    'title' => 'Last Name',
                    'relationship' => 'profile',
                    'select' => '(:table).last_name',
                ),
                'activated' => array(
                    'title' => 'Activated?',
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
    		'email' => array(
		        'title' => 'Email',
		        'type' => 'text'
		    ),

        ),
        'actions' => array (
            'ban_user' => array(
                'title' => function($model)
                {
                    return ($model->activated==0 ? 'Unban ' : 'Ban ');
                },
                'messages' => array(
                    'active' => function($model)
                    {
                        return ($model->activated==0 ? 'Unbanning ' : 'Banning ') . $model->email . '...';
                    },
                    'success' => function($model)
                    {
                        return $model->email . ($model->activated ? ' unbanned!' : ' banned!');
                    },
                    'error' => function($model)
                    {
                        return "There was an error while " . ($model->activated ? 'unbanning ' : 'banning ') . $model->email;
                    },
                ),
                'action' => function($model)
                {
                    if ($model->activated==0)
                        $model->activate();
                    else
                        $model->deactivate();

                    return true;
                }
            ),
        )
);