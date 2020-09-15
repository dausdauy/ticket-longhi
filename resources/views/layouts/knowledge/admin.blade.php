@extends('layouts.main')
@section('title', 'Data Knowledge Base')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

@endsection

@section('content')

@include('layouts.knowledge.modal')

@include('layouts.knowledge.alert')
<nav>
  <div class="nav nav-pills mb-2" role="tablist">
    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Material</a>
    <a class="nav-link" id="nav-profile-tab" href="{{ url('/knowledges/admin_category') }}" aria-controls="nav-profile" aria-selected="false">Category</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    @include('layouts.knowledge.admin.material')
  </div>
</div>
@endsection

@section('js')
@include('layouts.knowledge.admin.table_asset')
@endsection