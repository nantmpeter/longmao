@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User Wealth
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($userWealth, ['route' => ['userWealths.update', $userWealth->id], 'method' => 'patch']) !!}

                        @include('user_wealths.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection