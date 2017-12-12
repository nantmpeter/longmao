<!-- Coinid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coinId', 'Coinid:') !!}
    {!! Form::text('coinId', null, ['class' => 'form-control']) !!}
</div>

<!-- Userid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('userId', 'Userid:') !!}
    {!! Form::text('userId', null, ['class' => 'form-control']) !!}
</div>

<!-- Deswallet Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desWallet', 'Deswallet:') !!}
    {!! Form::text('desWallet', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('transactionLogs.index') !!}" class="btn btn-default">Cancel</a>
</div>
