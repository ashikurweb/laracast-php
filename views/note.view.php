<!-- Head -->
<?php require('partials/head.php') ?>
<!-- Nav -->
<?php require('partials/nav.php') ?>
<!-- Banner -->
<?php require('partials/banner.php') ?>


  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <p class="mb-6">
        <a href="/notes" class="text-sky-600 underline">
          go back...
        </a>
        <p><?= $note['body'] ?></p>
      </p>
    </div>
  </main>


<!-- Footer -->
<?php require('partials/footer.php') ?>