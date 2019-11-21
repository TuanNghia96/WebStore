<?php
include_once("Model/Model.php");

Class Controller
{
    protected $model;
    
    public function __construct()
    {
        $this->model = new Model();
    }
    
    public function index()
    {
        $result = $this->model->list_data();
        
        include 'View/products/index.php';
    }
    
    public function show(int $id)
    {
        $result = $this->model->show_data($id);
        $row = $result->fetch();
        include 'View/products/show.php';
    }
    
    public function create()
    {
        include 'View/products/create.php';
    }
    
    public function store()
    {
        $result = $this->model->store_data();
        header("Location: index.php");
        exit();
    }
    
    public function edit($id)
    {
        $result = $this->model->show_data($id);
        $row = $result->fetch();
        include 'View/products/edit.php';
    }
    public function update()
    {
        $result = $this->model->update_data();
        header("Location: index.php");
        exit();
    }
    
    public function delete($id)
    {
        if ($this->model->delete_data($id)){
            header("Location: index.php");
            exit();
        }
    }
}
?>