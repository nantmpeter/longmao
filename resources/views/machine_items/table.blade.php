<table class="table table-responsive" id="machineItems-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Capacity</th>
        <th>Type</th>
        <th>Describe</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($machineItems as $machineItem)
        <tr>
            <td>{!! $machineItem->name !!}</td>
            <td>{!! $machineItem->capacity !!}</td>
            <td>{!! $machineItem->type !!}</td>
            <td>{!! $machineItem->describe !!}</td>
            <td>
                {!! Form::open(['route' => ['machineItems.destroy', $machineItem->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('machineItems.show', [$machineItem->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('machineItems.edit', [$machineItem->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>