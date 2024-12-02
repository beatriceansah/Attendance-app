    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Navbar Example</title>
      <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100">
      <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 lg:px-8">
          <div class="flex justify-between items-center py-4">
            <a href="#" class="text-2xl font-bold text-blue-600">Church of Christ Campus Ministry-cccm</a>

            <div class="hidden md:flex space-x-6">
              <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
              <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">About</a>
              <a href="{{ route('Eventmanagement') }}" class="text-gray-700 hover:text-blue-600 font-medium">Eventmanagement</a>
              <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Contact</a>
            </div>
            <button id="menu-toggle" class="md:hidden flex items-center text-gray-700 focus:outline-none">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
          <div id="mobile-menu" class="hidden md:hidden">
            <a href="{{ route('home') }}"  class="block py-2 px-4 text-gray-700 hover:bg-blue-50">Home</a>
            <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-blue-50">About</a>
            <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-blue-50">Services</a>
            <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-blue-50">Contact</a>
          </div>
        </div>
      </nav>
      <main class="grid grid-cols-3 items-center p-6 gap-6  ">
        <img src="imge/gb.jpg" alt="Icon" class="w-full h-full rounded-md bg-gray-200 max-h-64 object-cover">
        <img src="imge/mb.jpg" alt="Icon" class="w-full h-full rounded-md bg-gray-200 max-h-64 object-cover">
        <img src="imge/nb.jpg" alt="Icon" class="w-full h-full rounded-md bg-gray-200 max-h-64 object-cover">
        <p class="text-gray-600">Building Faith, Sharing Love, Transforming Lives.</p>
        <p class="text-gray-600">Building Faith, Sharing Love, Transforming Lives.</p>
        <p class="text-gray-600">Building Faith, Sharing Love, Transforming Lives.</p>

      </main>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10   ">
        <div class="bg-white shadow-md rounded-lg p-6">
          <h3 class="text-xl font-semibold mb-2">Sunday Service</h3></h3>
          <p class="text-gray-700 h-[60px] line-clamp-2">Join us online every Sunday, Held at 6:30 AM at kwaprow </p>
          <a href="{{'https://m.facebook.com/ChurchofChristCampusMinistryUCC'}}" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md">join</a>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6">
          <h3 class="text-xl font-semibold mb-2">Tuesday Bible Studies</h3>
          <p class="text-gray-700 h-[60px] line-clamp-2">Held at 5:30 pm on Every Tuesday at Kwaprow</p>
          <a href="{{'https://m.facebook.com/ChurchofChristCampusMinistryUCC'}}" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md">join</a>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6">
          <h3 class="text-xl font-semibold mb-2">Song Practice</h3>
          <p class="text-gray-700 h-[60px] line-clamp-2">Join us online every Thursday at 5:30 pm.</p>
          <a href="{{'https://m.facebook.com/ChurchofChristCampusMinistryUCC'}}" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md">join</a>
        </div>
      </di>
      <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
          mobileMenu.classList.toggle('hidden');
        });
      </script>
    </body>
    </html>






