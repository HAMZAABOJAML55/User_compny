<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label for="birthdate">Birthdate:</label>
            <input type="date" id="birthdate" name="birthdate" value="{{ old('birthdate') }}" required>
        </div>
        <div>
            <button type="submit">Create User</button>
        </div>
    </form>
</body>
</html>
