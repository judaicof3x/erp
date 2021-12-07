@if ($message = Session::get('success'))
    <div class="alert alert-success mt-1 pb-0">
        <p> {{ $message }} </p>
    </div>
@endif


@if ($message = Session::get('error'))
    <div class="alert alert-danger mt-1 pb-0">
        <p> {{ $message }} </p>
    </div>
@endif


@if ($message = Session::get('warning'))
    <div class="alert alert-warning mt-1 pb-0">
        <p> {{ $message }} </p>
    </div>
@endif


@if ($message = Session::get('info'))
    <div class="alert alert-info mt-1 pb-0">
        <p> {{ $message }} </p>
    </div>
@endif


@if ($errors->any())
    <div class="alert alert-warning mt-1 pb-0">
        @foreach($errors->all() as $error)
            <p> {{ $error }} </p>
        @endforeach
    </div>
@endif
