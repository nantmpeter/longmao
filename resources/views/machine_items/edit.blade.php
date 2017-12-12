@extends('layouts.app')

@section('content')
<div class="tpl-content-wrapper">
    <div class="row-content am-cf">


        <div class="row">

            <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                <div class="widget am-cf">
                    <div class="widget-head am-cf">
                        <div class="widget-title am-fl">编辑机器</div>
                        <div class="widget-function am-fr">
                            {{--<a href="javascript:;" class="am-icon-cog"></a>--}}
                        </div>
                    </div>
                    @if (count($errors) > 0)
                    <div class="widget-head am-cf">
                            <div class="am-alert am-alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                    </div>
                    @endif
                    <div class="widget-body am-fr">
                        {!! Form::open(['route' => ['machineItems.update', $machineItem->id], 'class'=>'am-form tpl-form-line-form']) !!}

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">机器名称</label>
                        <div class="am-u-sm-9">
                            {!! Form::text('name',$machineItem->name,['class'=>'tpl-form-input','placeholder'=>'name']) !!}
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">capacity</label>
                        <div class="am-u-sm-9">
                            {!! Form::text('capacity',$machineItem->capacity,['class'=>'tpl-form-input','placeholder'=>'capacity']) !!}
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">type</label>
                        <div class="am-u-sm-9">
                            {!! Form::text('type',$machineItem->type,['class'=>'tpl-form-input','placeholder'=>'type']) !!}
                        </div>
                    </div>
                    
                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">describe</label>
                        <div class="am-u-sm-9">
                            {!! Form::text('describe',$machineItem->describe,['class'=>'tpl-form-input','placeholder'=>'describe']) !!}
                        </div>
                    </div>
                   
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">保存</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection