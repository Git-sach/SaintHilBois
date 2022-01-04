<?php

namespace app\Controller\creation\admin;


use core\HTML\Form;
use core\auth\DBAuth;
use \app;
use app\Help;

class PostsController extends AppController{

    private $alert;
    private $url = 'index.php?p=creation.admin.posts.index';

    private $HTMLpagination;
    private $right = '>';
    private $left = '<';

    public function __construct(){
        parent::__construct();
        $this->loadModel('Post');
    }

    public function index(){
        $posts = $this->Post->all();
        $alert = $this->alert;

        $pagination = $this->pagination(9);
        $posts = $this->HTMLpagination;

        $this->render('creation.admin.posts.index', compact('posts', 'alert', 'pagination'));
    }

    public function add(){
        if(!empty($_FILES)){
            if(!$_FILES['file']['error']){
                move_uploaded_file($_FILES['file']['tmp_name'], 'imgdata/' . $_FILES['file']['name']);
            }
        }
        if(!empty($_POST)){
            //$dateNow = new \DateTime('NOW', new \DateTimeZone('Europe/Paris'));
            //echo $dateNow->format('d-m-Y H:i:s');
            $result = $this->Post->create([
                'title' => $_POST['title'],
                'content' => substr(nl2br(htmlentities(json_encode($_POST['content']))),6,-6),
                'category_id' => $_POST['category_id'],
                'img' => $_FILES['file']['name']
                //'date' => $_POST[$dateNow->format('Y-m-d H:i:s')]
            ]);
            if($result){
                $this->alert = App::getInstance()->alert('alert_success', $this->url, 'Article bien ajouté!');
                //return $this->index();
                header('Location: \\' . $this->url);
            }
        }
        $this->loadModel('Category');
        $categories = $this->Category->list('id', 'title');
        $form = new Form($_POST);
        $this->render('creation.admin.posts.add', compact('categories', 'form'));
    }

    public function edit(){
        $post = $this->Post->find($_GET['id']);
        $newImg = $post->img;
        if(!empty($_FILES)){
            if(!$_FILES['file']['error']){
                if($post->img != null){
                    unlink("imgdata/$post->img");
                }
                move_uploaded_file($_FILES['file']['tmp_name'], 'imgdata/' . $_FILES['file']['name']);
                $newImg = $_FILES['file']['name'];
            }
        }
        if(!empty($_POST)){
            $result = $this->Post->update($_GET['id'], [
                'title' => $_POST['title'],
                'content' => substr(nl2br(htmlentities(json_encode($_POST['content']))),6,-6),
                'category_id' => $_POST['category_id'],
                'img' => $newImg
            ]);
            if($result){
                $this->alert = App::getInstance()->alert('alert_primary', $this->url, 'Article bien sauvegardé!');
                //return $this->index(); //redirexion vers index
                header('Location: \\' . $this->url);
            }
        }
        $this->loadModel('Category');
        $categories = $this->Category->list('id', 'title');
        $form = new Form($post);
        $this->loadModel('Comment_post');
        $comments = $this->Comment_post->findComments($_GET['id']);
        $nbrComments = $this->Comment_post->countComments($_GET['id']);
        $this->render('creation.admin.posts.edit', compact('categories', 'form', 'post', 'comments', 'nbrComments'));
    }

    public function delete(){
        if(!empty($_POST)){
            $post = $this->Post->find($_POST['id']);
            $result = $this->Post->delete($_POST['id']);
            if($post->img != null){
                unlink("imgdata/$post->img");
            }
            $this->alert = App::getInstance()->alert('alert_danger', $this->url, 'Article bien suprimé!');
            //return $this->index();
            header('Location: \\' . $this->url);
        }
    }

    public function pagination($nbrPerPage, $perCategory = false){    

        //refaire le $_GET sans le param 'page'
        $param = "?";
        foreach($_GET as $key=>$value){
            if($key === 'p'){
                $param .= $key . "=" . $value;
            }else{
                if($key !== 'page'){
                    $param .= "&" . $key . "=" . $value;
                }
            }
        }

        $href = "/index.php" . $param . "&page=";

        if($perCategory !== false){
            $nbrPosts = $this->Post->nbrPosts($perCategory);
        }else{
            $nbrPosts = $this->Post->nbrPosts();
        }
        $nbrPages = ceil($nbrPosts->nbr / $nbrPerPage);     
        
        if(isset($_GET['page'])) {
            $page = $_GET['page'];
            $plus = $page+1;
            $moins = $page-1;
            if($page<$nbrPages){
                $pagePlus = "<a href='" . $href . $plus . "'> $this->right </a>";
                $plus1 = "<a href='" . $href . $plus . "'>" . $plus . "</a>";
            }
            else{
                $pagePlus = '';
                $plus1 = '';
            }
            if($page>1){
                $pageMoins = "<a href='" . $href. $moins . "'> $this->left </a>";
                $moins1 = "<a href='" . $href. $moins . "'>" . $moins . "</a>";
            }
            else{
                $pageMoins = '';
                $moins1 = '';
            }
        }
        else {
            if($nbrPages>1){
                $pagePlus = "<a href='" . $href . "2'> $this->right </a>";
                $plus1 = "<a href='" . $href . "2'> 2 </a>";
            }
            else{
                $pagePlus = '';
                $plus1 = '';
            }
            $pageMoins = '';
            $moins1 = '';
            $page = 1;
        }

        if($nbrPages>1){
            $courant = "<p>" . $page . "</p>";
        }
        else{
            $courant = '';
        }

        if($perCategory === false){
            $this->HTMLpagination = $this->Post->postsLimitCat($nbrPerPage, $nbrPerPage*($page-1));
        }else{
            $this->HTMLpagination = $this->Post->postsLimitCat($nbrPerPage, $nbrPerPage*($page-1), $perCategory);
        }

        return $pageMoins . $moins1 . $courant . $plus1 . $pagePlus;
    }

}