<?php

  $posts = [
    [
      'id' => 1,
      'title' => 'Programando em PHP',
      'description' => 'Neste post você vai aprender tudo que precisa para ser um bom programador de PHP!',
      'tags' => ['programação', 'PHP', 'lógica de programação'],
      'img' => 'prog-5.jpg'
    ],
    [
      'id' => 2,
      'title' => 'Orientação a Objetos com Java',
      'description' => 'Aprenda o paradigma de orientação a objetos com Java, uma linguagem em alta no mercado.',
      'tags' => ['Java', 'OOP', 'Programação Avançada'],
      'img' => 'prog-2.jpg'
    ],
    [
      'id' => 3,
      'title' => 'A importância da lógica de programação',
      'description' => 'A lógica de programação é o ponto inicial de muitos estudantes de programação, será que é importante?',
      'tags' => ['lógica', 'programação', 'algoritmos'],
      'img' => 'prog-3.jpg',
    ],
    [
      'id' => 4,
      'title' => 'Programando em PHP',
      'description' => 'Neste post você vai aprender tudo que precisa para ser um bom programador de PHP!',
      'tags' => ['programação', 'PHP', 'lógica de programação'],
      'img' => 'prog-4.jpg'
    ],
  ];
  ?>
  <!-- <?php
    include_once("templates/header.php");
    
    if(isset($_GET['id'])) {
      
      $postId = $_GET['id'];
      $currentPost;

      foreach($posts as $post) {
        
        if($post['id'] == $postId) {
          $currentPost = $post;
        }
      }
    }
    
  ?>

  <main id="post-container">
    <div class="content-container">
      <h1 id="main-title"><?= $currentPost['title'] ?></h1>
      <p id="post-description"><?+ $currentPost['description'] ?></p>
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost ['title'] ?>">
    
    <p class="post-content"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum minima a dolores, deleniti alias provident esse, commodi enim doloribus ea in consequuntur consequatur molestiae fugit, quos atque reiciendis repellat ex! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque natus itaque velit voluptatibus nulla, culpa officia qui molestiae praesentium unde similique, fugit nemo enim aliquam omnis et, doloribus eaque sapiente! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis necessitatibus dolores dolore quaerat, vel earum nostrum, dicta magnam repudiandae enim quam sed. Excepturi sequi beatae possimus nobis! Totam, animi repudiandae!
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum minima a dolores, deleniti alias provident esse, commodi enim doloribus ea in consequuntur consequatur molestiae fugit, quos atque reiciendis repellat ex! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque natus itaque velit voluptatibus nulla, culpa officia qui molestiae praesentium unde similique, fugit nemo enim aliquam omnis et, doloribus eaque sapiente! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis necessitatibus dolores dolore quaerat, vel earum nostrum, dicta magnam repudiandae enim quam sed. Excepturi sequi beatae possimus nobis! Totam, animi repudiandae!</p>
    <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum minima a dolores, deleniti alias provident esse, commodi enim doloribus ea in consequuntur consequatur molestiae fugit, quos atque reiciendis repellat ex! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque natus itaque velit voluptatibus nulla, culpa officia qui molestiae praesentium unde similique, fugit nemo enim aliquam omnis et, doloribus eaque sapiente! Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
    </div>
    <div class="nav-container">
      <h3 id="tags-title">Tags</h3>
      <ul id="tag-list">
         <?php foreach($currentPost['tags'] as $tag): ?>
         <li><a href="#"><?= $tag ?></a></li>
         <?php endforeach; ?>
      </ul>
    
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
      <?php foreach($categories as $category): ?>
        <li><a href="#"><?= $categories ?></a></li>
        <?php endforeach; ?>
    </ul>
    </div>
  </main>
 
  <?php
  include_once("templates/footer.php");
  ?> -->