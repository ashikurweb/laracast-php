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
        <label for="body" class="block text-gray-800 font-bold text-lg mb-3">Write Your Thoughts</label>
        <textarea 
          name="body" 
          id="body" 
          class="w-full h-40 p-4 border border-gray-200 rounded-xl shadow-sm focus:outline-none focus:ring-4 focus:ring-indigo-300 focus:border-indigo-400 resize-none placeholder-gray-400 text-gray-700"
          placeholder="Start typing here..."
        ></textarea>
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