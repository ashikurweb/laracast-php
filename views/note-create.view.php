<!-- Head -->
<?php require('partials/head.php') ?>
<!-- Nav -->
<?php require('partials/nav.php') ?>
<!-- Banner -->
<?php require('partials/banner.php') ?>


<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    
  <form method="POST" class="bg-white p-8 rounded-2xl shadow-lg max-w-lg mx-auto">
      <div class="mb-6">
        <label for="body" class="block text-gray-800 font-bold text-lg mb-3">Body</label>
        <textarea 
          name="body" 
          id="body" 
          class="w-full h-40 p-4 border <?= !empty($errors['body']) ? 'border-red-500' : 'border-slate-300' ?> rounded-xl shadow-sm focus:outline-none focus:ring-4 focus:ring-indigo-300 focus:border-indigo-400 resize-none placeholder-gray-400 text-gray-700"
          placeholder="Start typing here..."
        ><?= $_POST['body'] ?? '' ?></textarea>

        <?php if (isset($errors['body'])) : ?>
          <p class="text-red-500 text-xs mt-1"><?= $errors['body'] ?></p>
        <?php endif; ?>
      </div>
      
      <div class="text-right">
        <button 
          type="submit" 
          class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 hover:from-pink-500 hover:to-indigo-500 text-white font-semibold py-3 px-6 rounded-xl shadow-md hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-indigo-300"
        >
          Create
        </button>
      </div>
  </form>

  </div>
</main>


<!-- Footer -->
<?php require('partials/footer.php') ?>