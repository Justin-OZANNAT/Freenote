<?php


class Note extends AbstractController
{

    public function index()
    {
        $this->loadModel('ModelNote');

        $notes = $this->ModelNote->getAll();

        $this->render('index', compact('notes'), 'chat');
    }

    public function read($slug = NULL)
    {
        if ($slug == NULL) {
            App::redirect(WEBSITE_URL . 'note');
            exit();
        }
        $this->loadModel('ModelNote');
        $notes = $this->ModelNote->getAll();
        $note = $this->ModelNote->findBySlug($slug);
        $messages = $this->ModelNote->findMessages($note->id);
        $date = $this->ModelNote->getDate($note->creation_date);
        $this->render('read', compact('notes', 'note', 'messages', 'date'), 'chat');
    }

}