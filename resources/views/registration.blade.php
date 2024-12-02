

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
        <form action="{{route('registration.post')}}" method="POST" class="ms-auto me-auto mt-auto" style="width: 500px">
            @csrf
        <div class="bg-white shadow-lg rounded-lg w-full max-w-md p-8">
            <h2 class="text-2xl font-bold text-gray-800 text-center">Create Your Account</h2>
            <p class="text-gray-500 text-center mb-6">Fill in the form to join us</p>
    
            <form action="#" method="POST" class="space-y-5">
                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" id="name" name="name" 
                        class="mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
    
                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="text" id="email" name="email" 
                        class="mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
    
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" 
                        class="mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
    
                <!-- Confirm Password Field -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" 
                        class="mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
    
                <!-- Submit Button -->
                <div>
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Register
                    </button>
                </div>
            </form>
    
            <!-- Login Redirect -->
            <p class="text-sm text-gray-500 text-center mt-6">
                Already have an account?
                <a href="/login" class="text-blue-500 hover:underline">Login here</a>
            </p>
        </div>
 
</body>
</html>


