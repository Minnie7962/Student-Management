<h1>Show Project</h1>

<p>Name: {{ $project->name }}</p>
<p>Description: {{ $project->description }}</p>

<a href="{{ route('projects.index') }}">Back to Projects</a>