

@extends('layouts.app')

@section('content')
    <div class="tpl-content-wrapper">
        <div class="row-content am-cf">
            <div class="row">
                <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                    <div class="widget am-cf">
                        <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                            <div class="am-form-group">
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs">
                                        <a href="machineItems/create" type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                          <thead>
                          <tr>
                              <th>名称</th>
                              <th>创建时间</th>
                              <th>更新时间</th>
                              <th>操作</th>
                          </tr>
                          </thead>
                          @foreach($machineItems as $item)
                          <tr>
                              <td>{{$item->name}}</td>
                              <td>{{$item->created_at}}</td>
                              <td>{{$item->updated_at}}</td>
                              <td>
                                  <div class="tpl-table-black-operation">
                                      <a href="{!! route('machineItems.edit', [$item->id]) !!}">
                                          <i class="am-icon-pencil"></i> 编辑
                                      </a>
                                  </div>
                              </td>

                          </tr>
                          @endforeach
                      </table>
                </div>
          </div>
      </div>
    </div>
</div>
    
@endsection
