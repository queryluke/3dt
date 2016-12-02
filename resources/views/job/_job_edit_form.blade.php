
{!! Form::model($job, array('route'=> array('job.update',$job->id), 'method'=>'PUT')) !!}

@elseif(Route::currentRouteName() == 'job.create')

    {!! Form::model($job, array('route'=> array('job.store'))) !!}



@endif



<div class="form-group">
    {!! Form::label('description','Description') !!}
    {!! Form::textarea('description',null,array('class'=>'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('requirements','Requirements') !!}
    {!! Form::textarea('requirements',null,array('class'=>'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('needed_by','Needed By') !!}
    {!! Form::text('needed_by',null,array('class'=>'form-control')) !!}
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
</div>

<div class="row">
    @if(Route::currentRouteName() == 'job.edit')

        <button type="submit" class="btn btn-success">Update</button>

        @include('item._item_list')

    @elseif(Route::currentRouteName() == 'job.create')

        <button type="submit" class="btn btn-success">Save & Add Print Items</button>

    @endif
</div>


{!! Form::close() !!}