<?php require base_path('views/partials/head.php') ?>
<!-- Nav -->
<?php require base_path('views/partials/nav.php') ?>
<!-- Banner -->
<?php require base_path('views/partials/banner.php') ?>


  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <p class="mb-6">
        <a href="/notes" class="text-sky-600 underline">
          go back...
        </a>
      </p>
        <p><?= htmlspecialchars($note['body']) ?></p>
        <form class="mt-2" method="post">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="id" value="<?= $note['id'] ?>">
          <button class="bg-red-500 text-white py-2 px-4 rounded-md font-bold shadow-md hover:bg-red-600 hover:shadow-lg transform hover:translate-y-1 mt-4 transition-all duration-300">Delete</button>
        </form>
    </div>
  </main>


<!-- Footer -->
<?php require base_path('views/partials/footer.php') ?>