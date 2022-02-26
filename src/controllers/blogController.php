<?php
namespace Controllers;
require('../src/models/blogModels.php');
use Models\BlogModel;

class BlogController
{

    public function view()
    {
        $data = (new BlogModel())->data();
        include "../src/views/blog.php";
    }
    public function viewD()
    {
        include "../src/views/detail.php";
    }
}