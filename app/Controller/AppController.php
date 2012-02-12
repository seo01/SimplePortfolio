<?php
// app/Controller/AppController.php
class AppController extends Controller {
    //...

    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login')
        )
    );

    function beforeFilter() {
        $this->Auth->allow('view','display','sitemap');
    }
}
