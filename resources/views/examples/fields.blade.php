<!-- Campo1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('campo1', 'Campo1:') !!}
    {!! Form::text('campo1', null, ['class' => 'form-control']) !!}
</div>

<!-- Campo2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('campo2', 'Campo2:') !!}
    {!! Form::text('campo2', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('examples.index') !!}" class="btn btn-default">Cancel</a>
</div>
