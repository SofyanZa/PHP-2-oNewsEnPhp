<article class="single-post right">
    <h1 class="right__title"><?= $data['titre'] ?></h1>

    <a class="post__category post__category--color-news" href="#"><?= $data['catégorie'] ?></a>
    <div class="post__meta">
        <img class="post__author-icon" src="../images/<?= $data['image auteur'] ?>" alt="">
        <strong class="post__author"><?= $data['auteur'] ?></strong>
        <time datetime="2018-03-27"><?= $data['date de publication'] ?></time>
        <p><?= $data['texte']?></p>
        <a href="index.php" class="post__link">Back to home</a>
    </div>
</article>