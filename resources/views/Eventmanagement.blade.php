<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Management</title>
    
  <style>
    /* Custom CSS */
    .event-management {
      background-color: #f8f9fa;
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .event-management h2 {
      color: #007bff;
    }
    .event-management form .form-group label {
      font-weight: bold;
      color: #333;
    }
    .event-management .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .event-management .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
    .reminder-options label {
      margin-right: 15px;
    }
  </style>
</head>
<body>

<div class="container my-5">
  <div class="event-management">
    <h2>Create & Manage Events</h2>
    <p>Schedule church services, Bible studies, and more. Customize details and send reminders for upcoming events.</p>

    <form>
      <!-- Event Name -->
      <div class="form-group">
        <label for="eventName">Event Name</label>
        <input type="text" class="form-control" id="eventName" placeholder="Enter event name">
      </div>

      <!-- Event Location -->
      <div class="form-group">
        <label for="eventLocation">Location</label>
        <input type="text" class="form-control" id="eventLocation" placeholder="Enter event location">
      </div>

      <!-- Speaker/Minister -->
      <div class="form-group">
        <label for="eventSpeaker">Speaker/Minister</label>
        <input type="text" class="form-control" id="eventSpeaker" placeholder="Enter speaker/minister name">
      </div>

      <!-- Start and End Time -->
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="startTime">Start Time</label>
          <input type="datetime-local" class="form-control" id="startTime">
        </div>
        <div class="form-group col-md-6">
          <label for="endTime">End Time</label>
          <input type="datetime-local" class="form-control" id="endTime">
        </div>
      </div>

      <!-- Event Description -->
      <div class="form-group">
        <label for="eventDescription">Description</label>
        <textarea class="form-control" id="eventDescription" rows="3" placeholder="Enter event description"></textarea>
      </div>

      <!-- Event Reminder Options -->
      <div class="form-group">
        <label>Event Reminders</label>
        <div class="reminder-options">
          <label><input type="checkbox" name="reminder" value="email"> Email</label>
          <label><input type="checkbox" name="reminder" value="sms"> SMS</label>
          <label><input type="checkbox" name="reminder" value="push"> Push Notification</label>
        </div>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Create Event</button>
    </form>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
