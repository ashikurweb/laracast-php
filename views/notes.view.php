<!-- Head -->
<?php require('partials/head.php') ?>
<!-- Nav -->
<?php require('partials/nav.php') ?>
<!-- Banner -->
<?php require('partials/banner.php') ?>


  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <?php foreach ( $notes as $note ) :?>
        <li>
          <a href="/note?id=<?= $note['id'] ?>" class="text-sky-500 hover:underline">
          <?= $note['body'] ?>
          </a>
        </li>
      <?php endforeach; ?>
    </div>
  </main>


<!-- Footer -->
<?php require('partials/footer.php') ?>