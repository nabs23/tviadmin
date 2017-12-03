@extends('layouts.lte')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="box box-default color-palette-box">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-tag"></i> Create School</h3>
  </div>  
  <div class="box-body">
    <form action="{{ route('school.create') }}" method="POST" class="form-">
      {{ csrf_field() }}
      
    
    <table class="table">
      <tr>
        <td>Name</td>
        <td>
          <input type="text" name="name" class="form-control" required="" value="{{ old('name') }}">
        </td>
      </tr>
      <tr>
        <td>Short Name</td>
        <td>
          <input type="text" name="short_name" class="form-control" required="" value="{{ old('short_name') }}">
        </td>
      </tr>
      <tr>
        <td>Type</td>
        <td>
          <select name="type_id" id="" class="form-control" required="">
            @foreach($data['types'] as $type)
              <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
          </select>
        </td>
      </tr>
      <tr>

        <td>Classification</td>
        <td>
          <select name="classification_id" id="" class="form-control" required="">
            @foreach($data['classifications'] as $classification)
              <option value="{{ $classification->id }}">{{ $classification->name }}</option>
            @endforeach
          </select>
        </td>
      </tr>
      <tr>
        <td>Province</td>
        <td>
          <select name="province_id" id="" class="form-control" required>
            <option value=""></option>
            @foreach($data['provinces'] as $province)
              <option value="{{ $province->id }}">{{ $province->name }}</option>
            @endforeach
          </select>
        </td>
      </tr>
    </table>
    <button class="btn btn-primary"><i class='fa fa-save'></i> Save</button>
    </form>
  </div>
  <div class="box-footer">          
  </div>
</div>
@endsection