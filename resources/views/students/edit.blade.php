<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-100 text-gray-900">

    <div class="container mx-auto mt-8 p-6 bg-white rounded-lg shadow-lg">
        <h1 class="text-2xl font-semibold mb-6 text-pink-600">Edit Student</h1>

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="mb-4">
                <label for="name" class="block text-lg font-medium text-pink-700">Name</label>
                <input type="text" name="name" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500" value="{{ $student->name }}" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-lg font-medium text-pink-700">Email</label>
                <input type="email" name="email" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500" value="{{ $student->email }}" required>
            </div>
            <div class="mb-4">
                <label for="age" class="block text-lg font-medium text-pink-700">Age</label>
                <input type="number" name="age" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500" value="{{ $student->age }}" required min="1">
            </div>

            <button type="submit" class="w-full py-2 bg-pink-500 text-white font-semibold rounded-lg hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-500">Update Student</button>

            <a href="{{ route('students.index') }}" class="w-full mt-4 block py-2 text-center bg-gray-300 text-gray-800 font-semibold rounded-lg hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500">Cancel</a>
        </form>
    </div>

</body>
</html>
