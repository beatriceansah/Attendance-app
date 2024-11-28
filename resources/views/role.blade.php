<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role-Based Access Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
<style>
    /* Global Styles */
body {
    background-color: #f0f4f8;
    font-family: 'Helvetica Neue', Arial, sans-serif;
}

.container {
    max-width: 700px;
    margin: auto;
    padding-top: 50px;
}

/* Card Styling */
.card {
    border: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    border-radius: 8px;
    overflow: hidden;
}

/* Card Headers for Different Roles */
#adminDashboard .card-header {
    background-color: #7ec4e9; /* Deep Blue for Admin */
    color: #fff;
    font-weight: 500;
}

#attendeeDashboard .card-header {
    background-color: #495057; /* Dark Gray for Attendee */
    color: #fff;
    font-weight: 500;
}

#volunteerDashboard .card-header {
    background-color: #fcbf49; /* Bright Yellow for Volunteer */
    color: #333;
    font-weight: 500;
}

/* Card Body */
.card-body {
    padding: 20px;
    background-color: #fff;
    color: #444;
    border-top: 2px solid #dee2e6;
}

/* Card Title */
.card-title {
    font-size: 1.25em;
    margin-bottom: 20px;
    color: #333;
}

/* Button Styling */
.btn {
    border-radius: 20px;
    font-weight: 600;
    transition: transform 0.2s ease;
}

.btn:hover {
    transform: scale(1.05);
}

.btn-primary {
    background-color: #0077b6;
    color: #fff;
    border: none;
}

.btn-secondary {
    background-color: #495057;
    color: #fff;
    border: none;
}

.btn-danger {
    background-color: #e63946;
    color: #fff;
    border: none;
}

.btn-success {
    background-color: #38b000;
    color: #fff;
    border: none;
}

.btn-info {
    background-color: #00a8cc;
    color: #fff;
    border: none;
}

/* Role Selector Styling */
#roleSelect {
    max-width: 300px;
    margin-bottom: 20px;
    padding: 10px;
    border-radius: 10px;
    border: 1px solid #ced4da;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    font-size: 1em;
}

/* Responsive Design */
@media (max-width: 576px) {
    .container {
        padding: 20px;
    }

    .card-body {
        padding: 15px;
    }
}

</style>

</head>
<body>
<div class="container mt-5">
    <!-- Role Selector (for demonstration purposes) -->
    <div class="mb-3">
        <label for="roleSelect" class="form-label">Select Role:</label>
        <select id="roleSelect" class="form-select">
            <option value="admin">Admin</option>
            <option value="attendee">Attendee</option>
            <option value="volunteer">Volunteer</option>
        </select>
    </div>

    <!-- Admin Dashboard Section -->
    <div id="adminDashboard" class="card d-none">
        <div class="card-header bg-primary text-white">Admin Dashboard</div>
        <div class="card-body">
            <h5 class="card-title">Event Management</h5>
            <button class="btn btn-primary mb-2">Create Event</button>
            <button class="btn btn-secondary mb-2">Edit Events</button>
            <button class="btn btn-danger mb-2">Delete Event</button>
            <h5 class="card-title mt-4">Reporting</h5>
            <button class="btn btn-success mb-2">Generate Attendance Report</button>
            <button class="btn btn-info mb-2">View Analytics</button>
        </div>
    </div>

    <!-- Attendee Dashboard Section -->
    <div id="attendeeDashboard" class="card d-none">
        <div class="card-header bg-secondary text-white">Attendee Dashboard</div>
        <div class="card-body">
            <h5 class="card-title">Event Participation</h5>
            <button class="btn btn-primary mb-2">View Upcoming Events</button>
            <button class="btn btn-success mb-2">RSVP for Event</button>
        </div>
    </div>

    <!-- Volunteer Dashboard Section -->
    <div id="volunteerDashboard" class="card d-none">
        <div class="card-header bg-warning text-white">Volunteer Dashboard</div>
        <div class="card-body">
            <h5 class="card-title">Volunteer Management</h5>
            <button class="btn btn-primary mb-2">View Assigned Events</button>
            <button class="btn btn-success mb-2">Sign Up for Event</button>
        </div>
    </div>
</div>

<script>
    document.getElementById("roleSelect").addEventListener("change", function() {
        var selectedRole = this.value;

        // Hide all dashboards initially
        document.getElementById("adminDashboard").classList.add("d-none");
        document.getElementById("attendeeDashboard").classList.add("d-none");
        document.getElementById("volunteerDashboard").classList.add("d-none");

        // Display the dashboard based on the selected role
        if (selectedRole === "admin") {
            document.getElementById("adminDashboard").classList.remove("d-none");
        } else if (selectedRole === "attendee") {
            document.getElementById("attendeeDashboard").classList.remove("d-none");
        } else if (selectedRole === "volunteer") {
            document.getElementById("volunteerDashboard").classList.remove("d-none");
        }
    });
</script>
</body>
</html>
