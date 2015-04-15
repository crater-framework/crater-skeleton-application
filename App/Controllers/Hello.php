<?php
/*
 * Hello controller
 *
 * @author Dragos Ionita
 * @version 1.1
 * @date 3/16/15
 */

namespace Controllers;
use Core\Controller,
    Core\Helpers\Session;


class Hello extends Controller{

    public function __construct(){
        parent::__construct();
        $this->language->load('hello',Session::get('language'));
    }

    public function consoleAction() {
        echo "Hello Console\r\n";
    }

	public function indexAction() {
		$viewVariables = array(
			'title' => $this->language->get('hello_title'),
            'message'  => $this->language->get('hello_message'),
            'first_button_caption' => $this->language->get('first_button_caption'),
            'current_language_code' => Session::get('language'),
		);

		$this->view->another_variable = 'This is another variable.';

		return $this->view->render('hello/index', $viewVariables);
	}

    public function secondPageAction() {
        $viewVariables = array(
            'title' => $this->language->get('second_title'),
            'message'  => $this->language->get('second_message'),
            'back_home' => $this->language->get('back_home'),
            'current_language_code' => Session::get('language'),
        );

        return $this->view->render('hello/second-page', $viewVariables);
    }

    public function formAction() {
        // Check if request method is post
        if ($this->isPost()) {
            // Set an info flash message
            $this->flashMessage->info('This is an info flash message!');

            $this->view->firstname = $this->getPost('firstname');
            $this->view->lastname = $this->getPost('lastname');

            $this->view->submit = $this->getPost('submit');
        }

        return $this->view->render('hello/form');
    }

    public function databaseAction() {
        $userTable = new \Models\Table\User();
        $users = $userTable->fetchAll();

        $this->view->users = $users;

        return $this->view->render('hello/database');
    }

    public function setLanguageAction() {
        $code = $this->getParam('code');

        Session::set('language', $code);
        $this->redirect('/');
    }
}
