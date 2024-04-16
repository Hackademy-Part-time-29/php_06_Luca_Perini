<?php

require_once('class.php');

class Post {
    private $title;
    private $category;
    private $tags;
    public function __construct($title, Category $category, $tags) {
        $this->title = $title;
        $this->category = $category;
        $this->tags = $tags;
    }

    public function displayPost() {
        echo "-------------------------------\n";
        echo "|Titolo: $this->title\n";
        echo "|Categoria: ";
        $this->category->getMyCategory();
        echo "|Tags: $this->tags\n";
        echo "_______________________________\n\n\n";
    }
}

$post1 = new Post("Elezioni presidenziali USA", new Actuality(), "#Trump");
$post2 = new Post("Juve - Milan", new Sport(), "#Calcio");
$post3 = new Post("Fedez si è lasciato", new Gossip(), "#Ferragni");
$post4 = new Post("Missili dall'Iran", new History(), "#MedioOriente");

$post1->displayPost();
$post2->displayPost();
$post3->displayPost();
$post4->displayPost();
