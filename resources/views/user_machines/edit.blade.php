@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User Machine
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($userMachine, ['route' => ['userMachines.update', $userMachine->id], 'method' => 'patch']) !!}

                        @include('user_machines.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection