<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile & History</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Header -->
  <header class="bg-blue-600 text-white py-4">
    <div class="container mx-auto flex justify-between items-center px-6">
      <h1 class="text-2xl font-bold">User Profile & History</h1>
      <nav>
        <a href="#" class="text-sm hover:underline">Dashboard</a>
        <a href="#" class="text-sm ml-4 hover:underline">Home</a>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <main class="container mx-auto my-8 px-6">
    <!-- Section: Personal Profile -->
    <section class="bg-white shadow-md rounded-lg p-6 mb-6">
      <h2 class="text-xl font-bold mb-4">Personal Profile</h2>
      <div class="flex items-center space-x-6">
        <!-- Profile Picture -->
        <div class="w-24 h-24 rounded-full bg-gray-300 overflow-hidden">
          <img src="https://via.placeholder.com/150" alt="Profile Picture" class="w-full h-full object-cover">
        </div>
        <!-- User Details -->
        <div>
          <form class="space-y-4">
            <div>
              <label for="name" class="block text-gray-700 font-medium">Preferred Name</label>
              <input type="text" id="name" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:border-blue-500" placeholder="Enter your preferred name">
            </div>
            <div>
              <label for="email" class="block text-gray-700 font-medium">Email</label>
              <input type="email" id="email" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:border-blue-500" placeholder="Enter your email">
            </div>
            <button type="submit" class="bg-blue-600 text-white font-medium px-4 py-2 rounded-lg hover:bg-blue-700">Update Profile</button>
          </form>
        </div>
      </div>
    </section>

    <!-- Section: Attendance History -->
    <section class="bg-white shadow-md rounded-lg p-6">
      <h2 class="text-xl font-bold mb-4">Attendance History</h2>
      <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th class="text-left px-4 py-2 border-b text-gray-700 font-medium">Date</th>
              <th class="text-left px-4 py-2 border-b text-gray-700 font-medium">Event</th>
              <th class="text-left px-4 py-2 border-b text-gray-700 font-medium">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="px-4 py-2 border-b">2024-12-01</td>
              <td class="px-4 py-2 border-b">Sunday Service</td>
              <td class="px-4 py-2 border-b text-green-600 font-medium">Present</td>
            </tr>
            <tr>
              <td class="px-4 py-2 border-b">2024-11-25</td>
              <td class="px-4 py-2 border-b">Bible Study</td>
              <td class="px-4 py-2 border-b text-green-600 font-medium">Present</td>
            </tr>
            <tr>
              <td class="px-4 py-2 border-b">2024-11-20</td>
              <td class="px-4 py-2 border-b">Prayer Meeting</td>
              <td class="px-4 py-2 border-b text-red-600 font-medium">Absent</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-4 mt-8">
    <div class="container mx-auto text-center">
      <p>&copy; 2024 Church Name. All Rights Reserved.</p>
    </div>
  </footer>

</body>
</html>
