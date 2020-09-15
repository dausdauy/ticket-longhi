@extends('layouts.main')
@section('title', 'Category Knowledge Base')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')

@include('layouts.knowledge.modal')

@include('layouts.knowledge.alert')
<nav>
  <div class="nav nav-pills mb-2" role="tablist">
    <a class="nav-link" href="{{ url('/knowledges/admin') }}" aria-controls="nav-home" aria-selected="false">Material</a>
    <a class="nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="true">Category</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    @include('layouts.knowledge.admin.category')
  </div>
</div>
@endsection

@section('js')
@include('layouts.knowledge.admin.table_asset')
@endsection