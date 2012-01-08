<?php
class Item extends AppModel {
    public $name = 'Item';
	public $order = array('portfolio_id','sequence');
	public $belongsTo = 'Portfolio';
}
