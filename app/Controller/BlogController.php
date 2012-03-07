<?php
class BlogController extends AppController {
  public $name = 'Blog';
  public $helpers = array('Html', 'Form');
  public $uses = array('GMMBlog', 'Question', 'User', 'Answer');

  public function index() {
    $this->set('entries', $this->GMMBlog->find('all'));
  }

  public function view($id = null) {
    $this->Question->id = $id;
    $q = $this->Question->read();
    $this->set('question', $q);
    $this->request->data['Answer']['question_id'] = $id;
    if($q == null) {
      $this->Session->setFlash('This question does not exist or has been deleted');
      $this->redirect('/');
    }

    foreach ($q['QuestionAnswer'] as $ans):
      $this->User->id = $ans['user_id'];
      $user = $this->User->read();
      $ans['username'] = $user['username'];
    endforeach;
  }

  public function answer() {
    print_r($this->request->data);
  }

  public function edit($id = null) {
    $this->Question->id = $id;
    if($this->Question->read() == null) {
      $this->Session->setFlash('This question does not exist or has been deleted');
      $this->redirect('/');
    }
    if($this->request->is('get')) {
      $this->request->data = $this->Question->read();
    } else {
      if($this->Question->save($this->request->data)) {
        $this->Session->setFlash('Your post has been updated');
        $this->redirect('/');
      } else {
        $this->Session->setFlash('Unable to update your post');
      }
    }
  }

  public function remove($id = null) {
    $this->Question->id = $id;
    $q = $this->Question->read();
    if($q) {
      if($q['User']['id'] != $this->Session->read('User.id')) {
        $this->Session->setFlash('This post does not belong to you');
        $this->redirect(array('action' => 'view', $id));
      } else {
        if($this->Question->delete($id)) {
          $this->Session->setFlash('Post deleted');
          $this->redirect('/');
        } else {
          $this->Session->setFlash('There was a problem deleting this post');
          $this->redirect(array('action' => 'view', $id));
        }
      }
    } else {
      $this->Session->setFlash('No such question exists');
        $this->redirect('/');
    }
  }

  public function add() {
    if(!(CakeSession::read('User.username'))) {
      $this->Session->setFlash("You must be logged in to post a question");
      $this->redirect('/login');
    } else {
      if($this->request->is('post')) {
        $this->request->data['Question']['user_id'] = $this->Session->read('User.id');
        if($this->Question->save($this->request->data)) {
          $this->Session->setFlash('Your question has been added');
          $this->redirect('/');
        } else {
          $this->Session->setFlash('Could not add your question');
        }
      }
    }
  }

}
?>
