@extends('user.layout.main')

@section('title') Sửa chi tiết @endsection

@section('icon') mdi-silverware-fork-knife @endsection


@section('content')

<section class="pull-up">
<div class="container">
<div class="row ">
<div class="col-lg-12 mx-auto  mt-0">
<div class="card py-3 m-b-30">
<div class="card-body">
{!! Form::model($data, ['url' => [$form_url],'files' => true,'method' => 'PATCH'],['class' => 'col s12']) !!}

@include('user.type.form')

</form>
</div>
</div>
</div>
</div>
</div>
</section>

@endsection