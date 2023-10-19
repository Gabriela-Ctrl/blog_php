<?php
    include_once("templates/header.php");
?>

<!-- <h1>Olá Mundo! ! Bem-vindo ao PHP! !</h1> -->
<?php
// var_dump($posts);
// print_r($posts);
// echo"<br><br>";
?>

<main>
    <div id="title-container">
        <h1>Code Blog</h1>
        <p>O seu blog de programação</p>
    </div>
    <div id="posts-container">
    <?php foreach($posts as $post); ?>
        <div class="post-box">
        
       
        <img src="<?BASE_URL?>/img/<?=$post['img']?>"
        alt="<?$post['title']?>">
        <h2 class-"post-title"><a href="|"<?=BASE_URL?>">post.php? id=<?=$post[id]?>"></a></h2>
        </div>
    </div>
</main>

<?php
    include_once("templates/footer.php");
?>

