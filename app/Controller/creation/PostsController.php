<?php

namespace app\Controller\creation;

use app\Help;
use core\Controller\Controller;
use core\HTML\Form;

class PostsController extends \app\Controller\AppController{

    private $HTMLpagination;
    private $right = '<svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M21.0011 7.42731L14.4901 0.91631C14.3303 0.754549 14.1144 0.660444 13.8872 0.653491C13.6599 0.646538 13.4387 0.727269 13.2694 0.87896C13.1 1.03065 12.9955 1.24168 12.9775 1.46832C12.9595 1.69496 13.0293 1.91985 13.1726 2.09639L13.2377 2.16793L18.2357 7.16664H13.2916C10.9867 7.16664 8.84325 7.67664 6.98458 8.65273L6.69417 8.81139C4.80323 9.86742 3.24265 11.4277 2.18633 13.3185C1.10683 15.2431 0.541584 17.4906 0.541584 19.9166C0.541584 20.1515 0.634867 20.3767 0.800915 20.5427C0.966963 20.7088 1.19217 20.8021 1.427 20.8021C1.66183 20.8021 1.88704 20.7088 2.05309 20.5427C2.21913 20.3767 2.31242 20.1515 2.31242 19.9166C2.31242 17.7881 2.80258 15.8402 3.73121 14.1848C4.6278 12.5782 5.95332 11.2525 7.55975 10.3556C9.12304 9.47935 10.9477 8.99273 12.9388 8.94173L13.2916 8.93748H18.2393L13.2377 13.9383C13.0834 14.0926 12.9914 14.2984 12.9795 14.5164C12.9676 14.7343 13.0366 14.9489 13.1733 15.1191L13.237 15.1906C13.3913 15.345 13.5972 15.437 13.8151 15.4489C14.033 15.4608 14.2477 15.3918 14.4178 15.2551L14.4901 15.1914L21.0011 8.67964C21.1553 8.52541 21.2471 8.31969 21.259 8.10193C21.2709 7.88416 21.202 7.66967 21.0655 7.49956L21.0011 7.42731L14.4901 0.91631L21.0011 7.42731ZM26.6677 7.42731L20.1567 0.91631C19.997 0.754549 19.7811 0.660444 19.5539 0.653491C19.3266 0.646538 19.1054 0.727269 18.936 0.87896C18.7667 1.03065 18.6622 1.24168 18.6442 1.46832C18.6261 1.69496 18.696 1.91985 18.8392 2.09639L18.9044 2.16793L24.7892 8.05348L18.9044 13.939C18.7457 14.0994 18.6542 14.3144 18.6487 14.54C18.6431 14.7656 18.7239 14.9848 18.8746 15.1529C19.0253 15.3209 19.2344 15.425 19.4593 15.444C19.6841 15.463 19.9078 15.3955 20.0845 15.2551L20.156 15.1914L26.6677 8.67964C26.8219 8.52541 26.9138 8.31969 26.9257 8.10193C26.9376 7.88416 26.8687 7.66967 26.7322 7.49956L26.6677 7.42731L20.1567 0.91631L26.6677 7.42731Z" "/>
    </svg>';
    private $left = '<svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M5.99892 7.42731L12.5099 0.91631C12.6697 0.754549 12.8856 0.660444 13.1128 0.653491C13.3401 0.646538 13.5613 0.727269 13.7306 0.87896C13.9 1.03065 14.0045 1.24168 14.0225 1.46832C14.0405 1.69496 13.9707 1.91985 13.8274 2.09639L13.7623 2.16793L8.76425 7.16664H13.7084C16.0133 7.16664 18.1568 7.67664 20.0154 8.65273L20.3058 8.81139C22.1968 9.86742 23.7573 11.4277 24.8137 13.3185C25.8932 15.2431 26.4584 17.4906 26.4584 19.9166C26.4584 20.1515 26.3651 20.3767 26.1991 20.5427C26.033 20.7088 25.8078 20.8021 25.573 20.8021C25.3382 20.8021 25.113 20.7088 24.9469 20.5427C24.7809 20.3767 24.6876 20.1515 24.6876 19.9166C24.6876 17.7881 24.1974 15.8402 23.2688 14.1848C22.3722 12.5782 21.0467 11.2525 19.4403 10.3556C17.877 9.47935 16.0523 8.99273 14.0612 8.94173L13.7084 8.93748H8.76071L13.7623 13.9383C13.9166 14.0926 14.0086 14.2984 14.0205 14.5164C14.0324 14.7343 13.9634 14.9489 13.8267 15.1191L13.763 15.1906C13.6087 15.345 13.4028 15.437 13.1849 15.4489C12.967 15.4608 12.7523 15.3918 12.5822 15.2551L12.5099 15.1914L5.99892 8.67964C5.84472 8.52541 5.75288 8.31969 5.74098 8.10193C5.72909 7.88416 5.79798 7.66967 5.93446 7.49956L5.99892 7.42731L12.5099 0.91631L5.99892 7.42731ZM0.332252 7.42731L6.84325 0.91631C7.00302 0.754549 7.21888 0.660444 7.44613 0.653491C7.67338 0.646538 7.8946 0.727269 8.06396 0.87896C8.23331 1.03065 8.33782 1.24168 8.35584 1.46832C8.37386 1.69496 8.30401 1.91985 8.16075 2.09639L8.09558 2.16793L2.21075 8.05348L8.09558 13.939C8.25431 14.0994 8.34579 14.3144 8.35133 14.54C8.35688 14.7656 8.27606 14.9848 8.1254 15.1529C7.97474 15.3209 7.76561 15.425 7.54074 15.444C7.31586 15.463 7.09222 15.3955 6.9155 15.2551L6.84396 15.1914L0.332252 8.67964C0.178058 8.52541 0.0862116 8.31969 0.0743168 8.10193C0.0624221 7.88416 0.131316 7.66967 0.267793 7.49956L0.332252 7.42731L6.84325 0.91631L0.332252 7.42731Z" "/>
    </svg>';

    public function __construct(){
        parent::__construct(); //-> appel le constructeur parent
        $this->loadModel('Post');
        $this->loadModel('Category');
        $this->loadModel('Comment_post');
    }

    public function index(){
        $categories = $this->Category->all();
        $form = new Form($categories);

        $pagination = $this->pagination(9);
        $posts = $this->HTMLpagination;

        $this->render('creation.posts.index', compact('posts', 'form', 'pagination'));
        //compact('posts', 'categories') -> crée un tableau [posts=>$posts, categories=>$categories]
    }

    public function category(){
        $category = $this->Category->find($_GET['id']);
        if($category === false){
            $this->notFound();
        }
        //$articles = $this->Post->lastByCategory($_GET['id']);
        $categories = $this->Category->all();
        $form = new Form($categories);

        $pagination = $this->pagination(9, $_GET['id']);
        $posts = $this->HTMLpagination;

        $this->render('creation.posts.category', compact('posts', 'form', 'category', 'pagination'));
    }

    public function show(){	
        if(!empty($_POST)){
            $result = $this->Comment_post->create([
                'post_id' => $_GET['id'],
                'comment' =>  substr(nl2br(htmlentities(json_encode($_POST['comment']))),6,-6),
                'name' => $_POST['name'],
                'mail' => $_POST['mail']
                //'date' => $_POST[$dateNow->format('Y-m-d H:i:s')]
            ]);
            header('Location: index.php?p=creation.posts.show&id=' . $_GET['id']);
        }
        $post = $this->Post->find($_GET['id']);
        $category = $this->Category->find($post->category_id);
        $cards = $this->Post->SeeAsWell($category->title);
        $this->render('creation.posts.show', compact('post', 'category', 'cards'));
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