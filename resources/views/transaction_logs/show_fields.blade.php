<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $transactionLog->id !!}</p>
</div>

<!-- Coinid Field -->
<div class="form-group">
    {!! Form::label('coinId', 'Coinid:') !!}
    <p>{!! $transactionLog->coinId !!}</p>
</div>

<!-- Userid Field -->
<div class="form-group">
    {!! Form::label('userId', 'Userid:') !!}
    <p>{!! $transactionLog->userId !!}</p>
</div>

<!-- Deswallet Field -->
<div class="form-group">
    {!! Form::label('desWallet', 'Deswallet:') !!}
    <p>{!! $transactionLog->desWallet !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $transactionLog->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $transactionLog->updated_at !!}</p>
</div>

