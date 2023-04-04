<?php


namespace App\Controllers;

use App\Models\BlogModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Blog extends BaseController
{
    public $blogModel;

    public function __construct()
    {
        $this->blogModel = new BlogModel();
    }


    public function index()
    {
        
        $post= $this->blogModel->findAll();

        $data = [
            'title' => 'Блог',
            'posts' => $post,
        ];



        return view('blog/index', $data);
       
    }

    
    public function view($id)
    {
       
        $post= $this->blogModel->find($id);

        
        if (! $post) {
            throw PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => $post['title'],
            'post' => $post,
        ];

        return view('blog/view', $data);
    }


    public function create()
    {
        $data = [
            'title' => 'Добавление статьи',
        ];
        return view('blog/create', $data);
    }

    public function store()
    {
        $data = $this->request->getPost();
        $this->blogModel->insert($data);
        
        return redirect('blog_create');
     
    }

    public function edit($id)
    {
        $post = $this->blogModel->find($id);
        if(!$post){
            throw PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => "Редактирование записи: {$post['title']}",
            'post' => $post,
        ];

        return view('blog/edit', $data);

    }

    public function update($id)
    // Обновляет запись поста 
    {
        $post = $this->blogModel->find($id);

        if(!$post){
            throw PageNotFoundException::forPageNotFound();
        }

        $data = $this->request->getPost();
        $this->blogModel->update($id, $data);
        return redirect()->route('blog_edit', [$id]);

    }

}