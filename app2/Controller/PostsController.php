<?php

class PostsController extends AppController {

	 // public $helpers = array('Form', 'Html', 'Session');
  // public $components = array('Session');
    
  // public function index() {
  //     $this->set('posts', $this->Post->find('all'));
  // }

    public $helpers = array('Form');
    
    public function index() {
        $this->set('posts', $this->Post->find('all'));
    }


 public function view($id = null) {
        $post = $this->Post->findById($id);
        $this->set('post', $post);
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Post->create();
            $post_data = $this->request->data;
            if ($this->Post->save($post_data)) {
                $this->Session->setFlash(__('New post saved successfully to the database'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to save the post to the database.'));
        }
}

public function edit($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Post is not valid!'));
    }

    $post = $this->Post->findById($id);
    if (!$post) {
        throw new NotFoundException(__('Post is not valid!'));
    }

    if ($this->request->is('post') || $this->request->is('put')) {
        $this->Post->id = $id;
        $post_data = $this->request->data;
        if ($this->Post->save($post_data)) {
            $this->Session->setFlash(__('Your post has been updated.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your post.'));
    }

    if (!$this->request->data) {
        $this->request->data = $post;
    }
}



public function delete($id) {
   if ($this->request->is('post')) {
    if ($this->Post->delete($id)) {
      $this->Session->setFlash(__('The post number %s has been deleted.', h($id)));
      return $this->redirect(array('action' => 'index'));
    }
  }
}



}

    ?>