<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- Link to external CSS -->
    <title>Event Management</title>
    <style>
        body {
    background-color: #f8f9fa; /* Light background color */
}

h1 {
    color: #343a40; /* Darker text color */
}

.card {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Card shadow */
}

.btn-primary {
    background-color: #007bff; /* Primary button color */
    border: none; /* Remove border */
}

.btn-primary:hover {
    background-color: #0056b3; /* Darker button color on hover */
}

    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Event Management</h1>
        <div class="card">
            <div class="card-header">
                <h5>Create & Manage Events</h5>
            </div>
            <div class="card-body">
                <form id="eventForm">
                    <div class="form-group">
                        <label for="eventName">Event Name</label>
                        <input type="text" class="form-control" id="eventName" required>
                    </div>
                    <div class="form-group">
                        <label for="eventDate">Date</label>
                        <input type="date" class="form-control" id="eventDate" required>
                    </div>
                    <div class="form-group">
                        <label for="eventStartTime">Start Time</label>
                        <input type="time" class="form-control" id="eventStartTime" required>
                    </div>
                    <div class="form-group">
                        <label for="eventEndTime">End Time</label>
                        <input type="time" class="form-control" id="eventEndTime" required>
                    </div>
                    <div class="form-group">
                        <label for="eventLocation">Location</label>
                        <input type="text" class="form-control" id="eventLocation" required>
                    </div>
                    <div class="form-group">
                        <label for="eventSpeaker">Speaker/Minister</label>
                        <input type="text" class="form-control" id="eventSpeaker" required>
                    </div>
                    <div class="form-group">
                        <label for="eventDescription">Description</label>
                        <textarea class="form-control" id="eventDescription" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="reminderType">Send Reminder</label>
                        <select class="form-control" id="reminderType" required>
                            <option value="">Select Reminder Method...</option>
                            <option value="push">Push Notification</option>
                            <option value="email">Email</option>
                            <option value="sms">SMS</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Event</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
