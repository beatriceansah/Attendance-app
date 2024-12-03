<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Header -->
  <header class="bg-blue-600 text-white py-4">
    <div class="container mx-auto flex justify-between items-center px-6">
      <h1 class="text-2xl font-bold">Church Event Management</h1>
      <nav>
        <a href="#" class="text-sm hover:underline">Dashboard</a>
        <a href="#" class="text-sm ml-4 hover:underline">Home</a>
      </nav>
    </div>
  </header>

  <!-- Page Content -->
  <main class="container mx-auto my-8 px-6">
    <!-- Section: Create & Manage Events -->
    <section class="bg-white shadow-md rounded-lg p-6 mb-6">
      <h2 class="text-xl font-bold mb-4">Create & Manage Events</h2>
      <form class="space-y-4">
        <div>
          <label for="event-name" class="block text-gray-700 font-medium">Event Name</label>
          <input type="text" id="event-name" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:border-blue-500" placeholder="Enter event name">
        </div>
        <div>
          <label for="location" class="block text-gray-700 font-medium">Location</label>
          <input type="text" id="location" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:border-blue-500" placeholder="Enter location">
        </div>
        <div class="flex gap-4">
          <div class="w-1/2">
            <label for="start-time" class="block text-gray-700 font-medium">Start Time</label>
            <input type="datetime-local" id="start-time" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:border-blue-500">
          </div>
          <div class="w-1/2">
            <label for="end-time" class="block text-gray-700 font-medium">End Time</label>
            <input type="datetime-local" id="end-time" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:border-blue-500">
          </div>
        </div>
        <div>
          <label for="speaker" class="block text-gray-700 font-medium">Speaker/Minister</label>
          <input type="text" id="speaker" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:border-blue-500" placeholder="Enter speaker/minister name">
        </div>
        <div>
          <label for="description" class="block text-gray-700 font-medium">Event Description</label>
          <textarea id="description" rows="4" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:border-blue-500" placeholder="Enter a brief description"></textarea>
        </div>
        <button type="submit" class="bg-blue-600 text-white font-medium px-4 py-2 rounded-lg hover:bg-blue-700">Create Event</button>
      </form>
    </section>

    <!-- Section: Event Reminders -->
    <section class="bg-white shadow-md rounded-lg p-6 mb-6">
      <h2 class="text-xl font-bold mb-4">Event Reminders</h2>
      <p class="text-gray-700 mb-4">Send automatic reminders to participants through:</p>
      <ul class="list-disc list-inside space-y-2">
        <li>Push Notifications</li>
        <li>Email Reminders</li>
        <li>SMS Notifications</li>
      </ul>
      <button class="bg-green-600 text-white font-medium px-4 py-2 rounded-lg hover:bg-green-700 mt-4">Manage Reminders</button>
    </section>

    <!-- Section: Event List -->
    <section class="bg-white shadow-md rounded-lg p-6">
      <h2 class="text-xl font-bold mb-4">Upcoming Events</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Event Card -->
        <div class="bg-gray-50 border rounded-lg p-4 shadow">
          <h3 class="font-bold text-lg mb-2">Sunday Worship Service</h3>
          <p class="text-gray-600">Location: Main Hall</p>
          <p class="text-gray-600">Speaker: Pastor John Doe</p>
          <p class="text-gray-600">Time: 10:00 AM - 12:00 PM</p>
          <p class="text-gray-600">Description: Join us for a time of worship and the Word.</p>
          <button class="bg-blue-500 text-white font-medium px-3 py-1 mt-4 rounded hover:bg-blue-600">Edit</button>
        </div>
        <!-- Repeat event cards for more events -->
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
