<?php
class ItemController extends AppController {
    public $name = 'Item';
    public $helpers = array('Html', 'Form');
	public $uses = array('Item','Portfolio','Link');

	public function view($webTitle) {
		$item = $this->Item->findByWebtitle($webTitle);
		if($item == null)
			//throw new NotFoundException(__('Invalid item'));
			$this->redirect(array('controller' => 'pages', 'action' => 'display','404'));
        $this->set('item', $item);
		if(isset($this->request->query['xml']))
		{
			$this->layout = 'blank';
		}
		else
		{
			$portfolio = $this->Portfolio->findById($item['Portfolio']['id']);
			$this->set('title_for_layout', $portfolio['Portfolio']['title']);
        	$this->set('portfolio', $portfolio);
			$this->set('links', $this->Link->find('all'));
			$this->render('/Portfolio/view');
		}
    }

/*
Auto generated
*/
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Item->recursive = 0;
		$this->set('items', $this->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Item->create();
			if ($this->Item->save($this->request->data)) {
				$this->Session->setFlash(__('The item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item could not be saved. Please, try again.'));
			}
		}
		$portfolios = $this->Item->Portfolio->find('list');
		$this->set(compact('portfolios'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Item->id = $id;
		if (!$this->Item->exists()) {
			throw new NotFoundException(__('Invalid item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Item->save($this->request->data)) {
				$this->Session->setFlash(__('The item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Item->read(null, $id);
		}
		$portfolios = $this->Item->Portfolio->find('list');
		$this->set(compact('portfolios'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Item->id = $id;
		if (!$this->Item->exists()) {
			throw new NotFoundException(__('Invalid item'));
		}
		if ($this->Item->delete()) {
			$this->Session->setFlash(__('Item deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
