<h1>Edit Student</h1>

<form method="POST" action="{{ route('students.update', $student->id) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $student->name }}">
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $student->email }}">
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="{{ $student->password }}">
    </div>
    <button type="submit">Update</button>
</form>