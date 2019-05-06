@if (session('Success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('Success') }}
        @if(session('email'))
            <a href="{{route('resend')}}" class="alert-link"> Resend verification email.</a>
        @endif
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif