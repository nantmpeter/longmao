<table class="table table-responsive" id="transactionLogs-table">
    <thead>
        <tr>
            <th>Coinid</th>
        <th>Userid</th>
        <th>Deswallet</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($transactionLogs as $transactionLog)
        <tr>
            <td>{!! $transactionLog->coinId !!}</td>
            <td>{!! $transactionLog->userId !!}</td>
            <td>{!! $transactionLog->desWallet !!}</td>
            <td>
                {!! Form::open(['route' => ['transactionLogs.destroy', $transactionLog->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('transactionLogs.show', [$transactionLog->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('transactionLogs.edit', [$transactionLog->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>