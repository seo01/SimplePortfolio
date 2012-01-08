<?php
class Portfolio extends AppModel {
    public $name = 'Portfolio';
	public $hasMany = array(
        'Item' => array(
            'className'  => 'Item',
            'order'      => 'sequence'
        )
    );


}
