<h1>Edit Project</h1>

<form method="POST" action="{{ route('projects.update', $project->id) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $project->name }}">
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ $project->description }}</textarea>
    </div>
    <button type="submit">Update</button>
</form>