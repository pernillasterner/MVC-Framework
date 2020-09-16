<?php require APPROOT . '/views/inc/header.php'; ?>
<?php echo $data['title']; ?>
<ul>
  <?php foreach($data['posts'] as $post) : ?>
    <li><?php echo $post->title; ?></li>
  <?php endforeach; ?>
</ul>
<?php require APPROOT . '/views/inc/footer.php'; ?>