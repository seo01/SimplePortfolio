<?php
class PortfolioController extends AppController {
    public $name = 'Portfolio';
    public $helpers = array('Html', 'Form');
	public $uses = array('Portfolio','Link','Item');

	public function view($webTitle) {
		$portfolio = $this->Portfolio->findByWebtitle($webTitle);
		if($portfolio == null)
			//throw new NotFoundException(__('Invalid portfolio'));
			$this->redirect(array('controller' => 'pages', 'action' => 'display','404'));
		$this->set('title_for_layout', $portfolio['Portfolio']['title']);
        $this->set('portfolio', $portfolio);
		$this->set('links', $this->Link->find('all'));
    }

	public function sitemap() {
		$this->layout = 'blank';
		$this->set('portfolios',$this->Portfolio->find('all'));
		$this->set('items',$this->Item->find('all'));
		$this->header('Content-Type: text/xml'); 
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Portfolio->recursive = 0;
		$this->set('portfolios', $this->paginate());
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Portfolio->create();
			if ($this->Portfolio->save($this->request->data)) {
				$this->Session->setFlash(__('The portfolio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The portfolio could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Portfolio->id = $id;
		if (!$this->Portfolio->exists()) {
			throw new NotFoundException(__('Invalid portfolio'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Portfolio->save($this->request->data)) {
				$this->Session->setFlash(__('The portfolio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The portfolio could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Portfolio->read(null, $id);
		}
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
		$this->Portfolio->id = $id;
		if (!$this->Portfolio->exists()) {
			throw new NotFoundException(__('Invalid portfolio'));
		}
		if ($this->Portfolio->delete()) {
			$this->Session->setFlash(__('Portfolio deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Portfolio was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

}
