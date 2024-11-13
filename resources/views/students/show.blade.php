<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-100 text-gray-900">

    <div class="container mx-auto mt-8 p-6 bg-white rounded-lg shadow-lg">
        <h1 class="text-3xl font-semibold text-pink-600 mb-4"><?= htmlspecialchars($student->name) ?></h1>

        <p class="text-lg mb-4"><strong>Email:</strong> <?= htmlspecialchars($student->email) ?></p>
        <p class="text-lg mb-4"><strong>Age:</strong> <?= htmlspecialchars($student->age) ?></p>

        <div class="flex space-x-4">
            <a href="{{ route('students.edit', $student->id) }}" class="py-2 px-4 bg-pink-500 text-white font-semibold rounded-lg hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-500">Edit</a>

            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="py-2 px-4 bg-pink-500 text-white font-semibold rounded-lg hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-500">Delete</button>
            </form>

            <a href="{{ route('students.index') }}" class="py-2 px-4 bg-pink-300 text-gray-800 font-semibold rounded-lg hover:bg-pink-400 focus:outline-none focus:ring-2 focus:ring-pink-300">Back to List</a>
        </div>
    </div>

</body>
</html>
