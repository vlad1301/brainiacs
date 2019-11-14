
<!DOCTYPE html>
<html lang="en">
<head>
    <title>All projects</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Project</h2>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Project Name</th>
            <th>Project Url</th>
            <th>Keywords</th>
            <th>Search Engine</th>
            <th>Language</th>
            <th>Location</th>
            <th>Frequency</th>
            {{-- <th>task_id</th>--}}
            {{--  <th>search_engine_id</th>--}}
            {{--<th>location_id</th>
            <th>search_engine_id</th>--}}
        </tr>
        </thead>

        <tbody>



            <tr>
                <td>{{$project->projectName}}</td>
                <td>{{$project->projectUrl}}</td>
                <td>{{$project->keyword}}</td>
                <td>{{$project->search_engine_name}}</td>
                <td>{{$project->search_engine_language}}</td>
                <td>{{$project->location_name}}</td>
                <td>{{$project->frequency}}</td>
                <td><a href="{{ route('projects.index') }}" class="btn btn-info">Back to all projects</a></td>
                <td><a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary">Edit Project</a></td>

            </tr>




    </table>
    <div class="pull-right">
        <a href="#" class="btn btn-danger">Delete this project</a>
    </div>
    {{--<button type="submit"  class="btn btn-primary btn-lg" onclick="window.location='{{ route("set_keyword") }}'">ADD KEYWORD</button>--}}
</div>

</body>
</html>
