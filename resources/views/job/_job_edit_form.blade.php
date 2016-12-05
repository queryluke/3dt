{!! Form::model($job, ['route'=> ['job.update', $job->id], 'method'=>'PUT']) !!}

<div class="form-group">
    {!! Form::label('name','Name') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description','Description') !!}
    {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('requirements','Requirements') !!}
    {!! Form::textarea('requirements', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('needed_by','Needed By') !!}
    {!! Form::text('needed_by', null, ['class'=>'form-control']) !!}
</div>

<div class="row">
    <!-- Retired -->
    <div class="form-group col-xs-12 col-sm-4">
        <div class="checkbox">
            <label>
                {!! Form::checkbox('agree_terms') !!} Agreed to terms?
            </label>
        </div>
    </div>
    <!-- Display on web -->
    <div class="form-group col-xs-12 col-sm-4">
        <div class="checkbox">
            <label>
                {!! Form::checkbox('can_share') !!} Can be shared?
            </label>
        </div>
    </div>
    <!-- Admin -->
    <div class="form-group col-xs-12 col-sm-4">
        <div class="checkbox">
            <label>
                {!! Form::checkbox('cdr_deposit') !!} CDR Deposit?
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</div>

{!! Form::close() !!}