<div class="modal fade" tabindex="-1" role="dialog" id="createJobModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(['route'=> ['job.store']]) !!}
                <div class="modal-body">
                    <div class="form-group">
                        {!! Form::label('onyen','Patron Onyen') !!}
                        {!! Form::text('onyen', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('name','Job Title') !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-default pull-right">Save & Continue</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
