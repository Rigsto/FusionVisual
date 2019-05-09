<!-- The Modal -->
<div class="modal fade" id="replyModal-{{$inbox->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Reply to {{$inbox->name}}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                {!! Form::open(['method'=>'POST']) !!}
                {{ csrf_field() }}
                {!! Form::label('name', 'Full Name') !!}
                {!! Form::Subject('name', null, ['class'=>'form-control', 'required', 'placeholder'=>'Subject' ])!!}
                {!! Form::label('name', 'Full Name') !!}
                {!! Form::textarea('name', null, ['class'=>'form-control', 'required', 'placeholder'=>'Subject' ])!!}
                {!! Form::submit('Reply', ['class'=>'btn btn-success']) !!}
                {!! Form::close() !!}
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>