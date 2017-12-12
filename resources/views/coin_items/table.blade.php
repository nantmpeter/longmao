<table class="table table-responsive" id="coinItems-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Enable</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($coinItems as $coinItem)
        <tr>
            <td>{!! $coinItem->name !!}</td>
            <td>{!! $coinItem->enable !!}</td>
            <td>
                {!! Form::open(['route' => ['coinItems.destroy', $coinItem->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('coinItems.show', [$coinItem->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('coinItems.edit', [$coinItem->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>