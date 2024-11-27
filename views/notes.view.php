<!-- Head -->
<?php require('partials/head.php') ?>
<!-- Nav -->
<?php require('partials/nav.php') ?>
<!-- Banner -->
<?php require('partials/banner.php') ?>


  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <ul>
        <?php foreach ( $notes as $note ) : ?>
          <p>
            <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
              <?= htmlspecialchars($note['body']) ?>
            </a>
          </p>
        <?php endforeach; ?>
      </ul>

      <p class="mt-5">
        <a href="/notes/create" class="bg-sky-500 px-2 py-2 text-white font-bold rounded-md hover:opacity-70">Create Note</a>
      </p>
    </div>
  </main>


<!-- Footer -->
<?php require('partials/footer.php') ?>