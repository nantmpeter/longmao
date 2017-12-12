<table class="table table-responsive" id="userWealths-table">
    <thead>
        <tr>
            <th>Userid</th>
        <th>Coinid</th>
        <th>Amount</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($userWealths as $userWealth)
        <tr>
            <td>{!! $userWealth->userId !!}</td>
            <td>{!! $userWealth->coinId !!}</td>
            <td>{!! $userWealth->amount !!}</td>
            <td>
                {!! Form::open(['route' => ['userWealths.destroy', $userWealth->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('userWealths.show', [$userWealth->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('userWealths.edit', [$userWealth->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>