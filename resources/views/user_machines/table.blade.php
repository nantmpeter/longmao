<table class="table table-responsive" id="userMachines-table">
    <thead>
        <tr>
            <th>Userid</th>
        <th>Machineid</th>
        <th>Amount</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($userMachines as $userMachine)
        <tr>
            <td>{!! $userMachine->userId !!}</td>
            <td>{!! $userMachine->machineId !!}</td>
            <td>{!! $userMachine->amount !!}</td>
            <td>
                {!! Form::open(['route' => ['userMachines.destroy', $userMachine->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('userMachines.show', [$userMachine->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('userMachines.edit', [$userMachine->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>