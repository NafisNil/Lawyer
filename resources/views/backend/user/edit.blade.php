@extends('backend.layout.master')
@section('title')
   Edit Profile
@endsection
@section('content')

  <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6 offset-3">
            <h1>Edit Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row offset-1">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Profile Form </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('user_update_info') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <input type="text" class="form-control "  id=""  name="name" placeholder="Enter name" value="{{ old('name', @$user->name) }}" required>

                </div>
                <br>
              
                <div class="form-group">
                  <input type="email" class="form-control emailreg"  id="exampleInputEmail1"  name="email" placeholder="Enter email" value="{{ old('email', @$user->email) }}" readonly>

                </div>
              

                <br>

              <div class="form-group">
                  <input type="text" class="form-control "  id=""  name="mobile" placeholder="Enter mobile number" value="{{ old('mobile', @$user->mobile) }}" readonly>

                </div>
                <br>
                <div class="form-group">
                  <input type="text" class="form-control "   name="fathers_name" placeholder="Enter fathers name"  value="{{ old('fathers_name',  @$user->fathers_name) }}" required>

                </div>
                <br>

              <div class="form-group">
                  <input type="text" class="form-control "  id=""  name="mothers_name" placeholder="Enter mothers name" {{ old('mothers_name') }} value="{{ old('mothers_name',  @$user->mothers_name) }}" required>

                </div>
                                 <br>
                <div class="form-group">
                  <input type="text" class="form-control "  id=""  name="nid" placeholder="Enter NID " value="{{ old('nid',  @$user->nid) }}" required>

                </div>
                <br>
                <div class="form-group">
                  <label for="dob">Date of Birth</label>
                  <input type="date" class="form-control "  id=""  name="dob" placeholder="Enter date of birth " value="{{ old('dob',  @$user->dob) }}" required>

                </div>
                <br>
                <div class="form-group ">
                  <label for="gender">Gender</label>
                  <div class="form-check offset-1" >
                    <input class="form-check-input" type="radio" name="gender" value="male" {{  @$user->gender == 'male' ? 'checked' : '' }}>
                    <label class="form-check-label">Male</label>
                  </div>
                  <div class="form-check offset-1">
                    <input class="form-check-input" type="radio" name="gender" value="female"   {{  @$user->gender == 'female' ? 'checked' : '' }}>
                    <label class="form-check-label">Female</label>
                  </div>
                  <div class="form-check offset-1">
                      <input class="form-check-input" type="radio" name="others" value="others"   {{  @$user->gender == 'others' ? 'checked' : '' }}>
                      <label class="form-check-label">Others</label>
                    </div>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1"> District  <span style="color:red" >*</span></label>
                 
                  {{ $user->district_id }}
                  <select class="form-control" id="dropdown" name="district_id" required>
                    
                    <option>Select district</option>
                  
                    @foreach ($district as $key => $value)
                      <option value="{{ $value->id }}" {{ ( $value->id == @$user->district_id) ? 'selected' : '' }}> 
                          {{ $value->name }} 
                      </option>
                    @endforeach    
                  </select>
                 
                </div>
                <br>
                <div class="form-group">
                  <input type="text" class="form-control "  id=""  name="thana" placeholder="Enter thana " value="{{ old('thana', @$user->thana) }}">

                </div>

                <br>
                <div class="form-group">
                  <div class="mb-3">
                      
                      <textarea class="form-control" name="full_address" id="" rows="3" required>{{ old('full_address', @$user->full_address) }}</textarea>
                  </div>
                  

                </div>

                <br>
                <div class="form-group">
                  <input type="password" class="form-control "  id=""  name="text" placeholder="Enter password " value="{{ old('password', @$user->password) }}" required>

                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-outline-success btn-sm">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

    

          </div>
          <!--/.col (left) -->
          <!-- right column -->
        
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
    
    CKEDITOR.replace( 'full_address' );
</script>
@endsection