<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To Do List 58</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h3>Todo List App</h3>
            </div>
            <form action="{{ route('activities.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="">Activity <span class="text-danger">*</span></label>
                        <input type="text" placeholder="Enter Activity" class="form-control" required maxlength="50">
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">When</label>
                        <input type="date" class="form-control">
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-grip gap-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
                <h3>List Activity</h3>
            </div>
            <div class="card-body">
                @foreach ($activities as $activity)
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="badge text-bg-{{ $activity->status == 'completed' ? 'success' : 'warning' }} mb-2">{{ $activity->status }}</div>
                                    <h5>{{ $activity->name }}</h5>
                                    <p>{{ $activity->description }}</p>
                                    <p>{{ $activity->when }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-warning">Edit</button>

                                    @if ($activity->status == 'pending')
                                        <a href="{{ route('activities.toggleCheck', $activity->id) }}" class="btn btn-success">Check</a>
                                    @else
                                        <a href="{{ route('activities.toggleCheck', $activity->id) }}" class="btn btn-secondary">Un-Check</a>
                                    @endif

                                </div>
                                <div class="col d-flex justify-content-end align-items-center">
                                    <button class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
