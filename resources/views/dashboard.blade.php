<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Dashboard</title>
</head>
<body class="bg-white">
    <div class="min-h-screen flex flex-col">
        <header class="bg-white  p-4 flex justify-between items-center">
            <div class="text-xl font-bold text-gray-700">Dashboard</div>
            <div class="alert alert-succss">{{session('success')}}></div>
          </header>
          <aside class="w-64 bg-white shadow-md p-4">
            <div class="space-y-4">
              <h1 class="text-gray-600 hover:text-blue-500"><a href="#">Dashboard Overview</a></h1>
              <h1 class="text-gray-600 hover:text-blue-500"><a href="#">Analytics</a></h1>
              <h1 class="text-gray-600 hover:text-blue-500"><a href="#">Settings</a></h1>
              <h1 class="text-gray-600 hover:text-blue-500"><a href="#">Support</a></h1>
            </div>
          </aside>
          <main class="grid grid-cols-3 items-center p-6 gap-6  ">
                    <img src="imge/gb.jpg" alt="Icon" class="w-full h-full rounded-md bg-gray-200 max-h-64 object-cover">
                    <img src="imge/mb.jpg" alt="Icon" class="w-full h-full rounded-md bg-gray-200 max-h-64 object-cover">
                    <img src="imge/nb.jpg" alt="Icon" class="w-full h-full rounded-md bg-gray-200 max-h-64 object-cover">
                    <p class="text-gray-600">Building Faith, Sharing Love, Transforming Lives.</p>
                    <p class="text-gray-600">Building Faith, Sharing Love, Transforming Lives.</p>
                    <p class="text-gray-600">Building Faith, Sharing Love, Transforming Lives.</p>
          </main>
          <p class="text-lg mb-6">
            Discover is your first step to getting more involved at Evangel! This one-hour course will give you an opportunity to discover how God has uniquely created you and how you can use your gifts and talents to help make a difference in the church. You’ll also learn more about Evangel’s beliefs and values, Connect Groups, Dream Team, membership, and more.
          </p>
    </div>

    <section class="container mx-auto px-4 py-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="bg-white shadow-md rounded-lg p-6">
            <h3 class="text-xl font-semibold mb-2">Sunday Service</h3></h3>
            <p class="text-gray-700">Join us online every Sunday, Held at 6:30 AM at kwaprow </p>
            <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md">join</button>
          </div>
          <div class="bg-white shadow-md rounded-lg p-6">
            <h3 class="text-xl font-semibold mb-2">Tuesday Bible Studies</h3>
            <p class="text-gray-700">Held at 5:30 pm on Every Tuesday at Kwaprow</p>
            <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md">join</button>
          </div>
          <div class="bg-white shadow-md rounded-lg p-6">
            <h3 class="text-xl font-semibold mb-2">Song Practice</h3>
            <p class="text-gray-700">Join us online every Thursday at 5:30 pm.</p>
            <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md">join</button>
          </div>
        </di>
      </section>


</body>
</html>

