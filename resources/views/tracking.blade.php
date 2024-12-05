<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attendance Tracking</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">


  <header class="bg-green-600 text-white py-4">
    <div class="container mx-auto flex justify-between items-center px-6">
      <h1 class="text-2xl font-bold">Attendance Tracking</h1>
      <nav>
        <a href="#" class="text-sm hover:underline">Dashboard</a>
        <a href="#" class="text-sm ml-4 hover:underline">Home</a>
      </nav>
    </div>
  </header>


  <main class="container mx-auto my-8 px-6">

    <section class="bg-white shadow-md rounded-lg p-6 mb-6">
      <h2 class="text-xl font-bold mb-4">Manual Attendance
        @csrf
      </h2>
      <form class="space-y-4" action="" method="POST" >
        <div>
          <label for="name" class="block text-gray-700 font-medium">Name</label>
          <input type="text" id="name" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-green-300 focus:border-green-500" placeholder="Enter participant's name">
        </div>
        <div>
          <label for="event" class="block text-gray-700 font-medium">Event</label>
          <input type="text" id="event" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-green-300 focus:border-green-500" placeholder="Enter event name">
        </div>
        <div>
          <label for="status" class="block text-gray-700 font-medium">Attendance Status</label>
          <select id="status" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-green-300 focus:border-green-500">
            <option value="present">Present</option>
            <option value="absent">Absent</option>
          </select>
        </div>
        <button type="submit" class="bg-green-600 text-white font-medium px-4 py-2 rounded-lg hover:bg-green-700">Mark Attendance</button>
      </form>
    </section>


    <section class="bg-white shadow-md rounded-lg p-6">
      <h2 class="text-xl font-bold mb-4">Real-Time Attendance</h2>
      <p class="text-gray-700 mb-4">Track attendance in real-time to see how many people are currently present.</p>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        <div class="bg-gray-50 border rounded-lg p-4 shadow">
          <h3 class="font-bold text-lg mb-2">Sunday Service</h3>
          <p class="text-gray-600">Attendees Present: </p>
          <p class="text-gray-600">Total Capacity: </p>
          <div class="mt-4">
            <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View Details</button>
          </div>
        </div>

        <div class="bg-gray-50 border rounded-lg p-4 shadow">
          <h3 class="font-bold text-lg mb-2">Youth Bible Study</h3>
          <p class="text-gray-600">Attendees Present: </p>
          <p class="text-gray-600">Total Capacity: </p>
          <div class="mt-4">
            <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View Details</button>
          </div>
        </div>
      </div>
    </section>
  </main>


  <footer class="bg-gray-800 text-white py-4 mt-8">
    <div class="container mx-auto text-center">
      <p>&copy; 2024 Church Name. All Rights Reserved.</p>
    </div>
  </footer>

</body>
</html>
