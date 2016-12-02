<div class="modal fade" tabindex="-1" role="dialog" id="createJobModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                {!! Form::open(array('route'=> array('job.store')) !!}

                <div class="form-group">
                    {!! Form::label('onyen','Patron Onyen') !!}
                    {!! Form::text('onyen',null,array('class'=>'form-control')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('name','Job Title') !!}
                    {!! Form::text('name',null,array('class'=>'form-control')) !!}
                </div>


                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-default pull-right">Save & Add Items</button>
            </div>
        </div>
    </div>
</div>
