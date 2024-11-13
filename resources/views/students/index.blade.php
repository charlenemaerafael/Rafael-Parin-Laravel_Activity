<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-100 text-gray-900">

    <div class="container mx-auto mt-8 p-4 bg-white rounded-lg shadow-lg">
        <h1 class="text-2xl font-semibold mb-4 text-pink-600">Students</h1>
        <a href="{{ route('students.create') }}" class="btn btn-primary mb-10 text-white bg-pink-500 hover:bg-pink-700 py-2 px-4 rounded mt-4">Add New Student</a>

        <?php if (session('success')): ?>
            <div class="alert alert-success mb-4 p-3 bg-pink-100 text-pink-800 rounded mt-5">
                <?= htmlspecialchars(session('success')) ?>
            </div>
        <?php endif; ?>

        <table class="min-w-full table-auto border-collapse mt-4">
            <thead>
                <tr class="bg-pink-200 text-left">
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Age</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($students) > 0): ?>
                    <?php foreach ($students as $student): ?>
                        <tr class="border-t hover:bg-pink-50">
                            <td class="px-4 py-2"><?= htmlspecialchars($student->name) ?></td>
                            <td class="px-4 py-2"><?= htmlspecialchars($student->email) ?></td>
                            <td class="px-4 py-2"><?= htmlspecialchars($student->age) ?></td>
                            <td class="px-4 py-2 space-x-2">
                                <a href="{{ route('students.show', $student->id) }}" class="btn btn-info text-pink-600 hover:text-pink-800">View</a>
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning text-pink-600 hover:text-pink-800">Edit</a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="text-pink-600 hover:text-pink-800">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center px-4 py-2 text-gray-500">No students found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</body>
</html>
