@if(@$success)
    <div class="row alert alert-success">
        You have added product correctly
    </div>
@endif
@if(@$error)
    <div class="row alert alert-danger">
        You have the following errors
        <ul>
            @foreach($error as $value)
                <li>{{$value}}</li>
            @endforeach
        </ul>
    </div>
@endif