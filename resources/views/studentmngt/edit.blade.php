@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0">{{ __('Student Update') }}</h1>
        @if (session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
        @endif
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 m-auto">
                <div class="card card-secondary">

                    <div class="card-header">
                        <h3 class="card-title">Edit Student Information</h3>
                    </div>

                    <form action="{{route('studentmngt.edit', $students->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="row card-body col-12">
                                <div class="form-group col-4">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control g-2" id="fname" name="fname" placeholder="Enter your first name" value="{{$students->fname}}">
                                </div>
                                @error('fname') <span class="text-danger">{{$message}}</span> @enderror

                                <div class="form-group col-4">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control g-2" id="lname" name="lname" placeholder="Enter your last name" value="{{$students->lname}}">
                                </div>
                                @error('lname') <span class="text-danger">{{$message}}</span> @enderror

                                <div class="form-group col-12">
                                    <label for="midname">Middle Name</label>
                                    <input type="text" class="form-control g-2" id="midname" name="midname" placeholder="Enter your middle name" value="{{$students->midname}}">
                                </div>
                                @error('midname') <span class="text-danger">{{$message}}</span> @enderror

                                <div class="form-group col-12">
                                    <label for="age">Age</label>
                                    <input type="number" class="form-control g-2" id="age" name="age" placeholder="Enter your age" value="{{$students->age}}">
                                </div>
                                @error('age') <span class="text-danger">{{$message}}</span> @enderror

                                <div class="form-group col-12">
                                    <label for="zip">Zip Code</label>
                                    <input type="number" class="form-control g-2" id="zip" name="zip" placeholder="Enter your zip code" value="{{$students->zip}}">
                                </div>
                                @error('zip') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                        
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success col-12">Update</button>
                                </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /.content -->
@endsection