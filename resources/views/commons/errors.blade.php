@if (count($errors) > 0)
    <div class="alert alert-danger"></div>
    <strong>Whoops! Something went wrong</strong>
    <br>
    <br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
