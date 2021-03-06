@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Coin Item
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($coinItem, ['route' => ['coinItems.update', $coinItem->id], 'method' => 'patch']) !!}

                        @include('coin_items.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection