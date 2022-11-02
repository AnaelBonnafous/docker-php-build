<?php

$items = [
  [
    'label' => 'Accueil',
    'url' => '/',
  ],
  [
    'label' => 'Blog',
    'url' => '/blog.php',
  ],
]

?>

<nav>
  <ul>
    <?php
    foreach ($items as $item) { ?>
      <a href="<?php echo $item["url"]; ?>"><?php echo $item["label"]; ?></a>
    <?php
    }
    ?>
  </ul>
</nav>