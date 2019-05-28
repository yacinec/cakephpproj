<?php

namespace App\Controller;

use App\Controller\AppController;

class ArticlesController extends AppController
{

	public function initialize()
	{
		parent::initialize();
		$this->loadComponent('Paginator');
		$this->loadComponent('Flash');
	}

	public function index()
	{
		$this->loadComponent('Paginator');
		$articles = $this->Paginator->paginate($this->Articles->find());
		$this->set(compact('articles'));
	}

	public function view($slug = null)
	{
		$article = $this->Articles->findBySlug($slug)->firstOrFail();
		$this->set(compact('article'));
	}

	public function add()
	{
		$article = $this->Articles->newEntity();
		if($this->request->is('post')) {
			$article = $this->Articles->patchEntity($article, $this->request->getData());

			$article->user_id = 1;

			if( $this->Articles->save($article)) {
				$this->Flash->success('Votre article a été sauvegardé.');
				return $this->redirect(['action' => 'index']);
			}

			$this->Flash->error('Impossible d\'ajouter votre article.');
		}

		$this->set('article', $article);
	}

	public function edit($slug)
	{
		$article = $this->Articles->findBySlug($slug)->firstOrFail();
		if ($this->request->is(['post', 'put'])) {
			$this->Articles->patchEntity($article, $this->request->getData());
			if($this->Articles->save($article)) {
				$this->Flash->success('Votre article a été mis à jour');
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error('Impossible de mettre à jour l\'article.');
		}

		$this->set('article', $article);
	}

	public function delete($slug)
	{
		$this->request->allowMethod(['post', 'delete']);

		$article = $this->Articles->findBySlug($slug)->firstOrFail();
		if($this->Articles->delete($article)) {
			$this->Flash->success(__('L\'article {0} a été supprimé.', $article->title));
			return $this->redirect(['action' => 'index']);
		}
	}
}