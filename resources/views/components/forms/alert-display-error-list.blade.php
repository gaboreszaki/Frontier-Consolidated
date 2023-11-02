<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            Error with inputs:
            <ul>
                @foreach($errors->all() as $message)
                    <li>{{$message}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>