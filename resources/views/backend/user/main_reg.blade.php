<!doctype html>
<html lang="en">
    <head>
        <title>User Registration - Second page</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main class="justify-content-center" style="transform: translate(25%, 25%)">
            <section class="content-header">
                <div class="container-fluid">
                  <div class="row mb-2">
                    <div class="col-sm-6">
                      <h1>User Registration Form - Next Stage</h1>
                    </div>
                    <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                       
                      </ol>
                    </div>
                  </div>
                </div><!-- /.container-fluid -->
              </section>
            
              <!-- Main content -->
              <section class="content">
                <div class="container-fluid">
                  <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                      <!-- general form elements -->
                      <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Registration</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @include('backend.sessionMsg')
                        <form action="{{ route('user_main_registration_form') }}" method="post" class="p-1">
                            @csrf
<br>
                            <div class="form-group">
                                <input type="text" class="form-control "  id=""  name="name" placeholder="Enter name" value="{{ old('name') }}" required>

                              </div>
                              <br>
                            <div class="form-group">
                                <input type="email" class="form-control emailreg"  id="exampleInputEmail1"  name="email" placeholder="Enter email" value="{{ old('email', @$user->email) }}" {{ $user->email != ""? 'readonly':'' }}>

                              </div>
                              <br>

                            <div class="form-group">
                                <input type="text" class="form-control "  id=""  name="mobile" placeholder="Enter mobile number" value="{{ old('mobile', @$user->mobile) }}" {{ $user->mobile != ""? 'readonly':'' }}>

                              </div>
                              <br>
                              <div class="form-group">
                                <input type="text" class="form-control "   name="fathers_name" placeholder="Enter fathers name"  value="{{ old('fathers_name') }}" required>

                              </div>
                              <br>

                            <div class="form-group">
                                <input type="text" class="form-control "  id=""  name="mothers_name" placeholder="Enter mothers name" {{ old('mothers_name') }} value="{{ old('mothers_name') }}" required>

                              </div>
<br>
                              <div class="form-group">
                                <input type="text" class="form-control "  id=""  name="nid" placeholder="Enter NID " value="{{ old('nid') }}" required>

                              </div>
                              <br>
                              <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control "  id=""  name="dob" placeholder="Enter date of birth " value="{{ old('dob') }}" required>

                              </div>
                              <br>
                              <div class="form-group ">
                                <label for="gender">Gender</label>
                                <div class="form-check offset-1" >
                                  <input class="form-check-input" type="radio" name="gender" value="male" checked>
                                  <label class="form-check-label">Male</label>
                                </div>
                                <div class="form-check offset-1">
                                  <input class="form-check-input" type="radio" name="gender" value="female" >
                                  <label class="form-check-label">Female</label>
                                </div>
                                <div class="form-check offset-1">
                                    <input class="form-check-input" type="radio" name="others" value="others" >
                                    <label class="form-check-label">Others</label>
                                  </div>
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1"> District  <span style="color:red" >*</span></label>
                               
              
                                <select class="form-control" id="dropdown" name="district_id" required>
                                  
                                  <option>Select district</option>
                                    
                                  @foreach ($district as $key => $value)
                                    <option value="{{ $value->id }}" {{ ( $value->id == @$edit->district_id) ? 'selected' : '' }}> 
                                        {{ $value->name }} 
                                    </option>
                                  @endforeach    
                                </select>
                               
                              </div>
                              <br>
                              <div class="form-group">
                                <input type="text" class="form-control "  id=""  name="thana" placeholder="Enter thana " value="{{ old('thana') }}">

                              </div>

                              <br>
                              <div class="form-group">
                                <div class="mb-3">
                                    
                                    <textarea class="form-control" name="address" id="" rows="3" required>{{ old('address') }}</textarea>
                                </div>
                                

                              </div>

                              <br>
                              <div class="form-group">
                                <input type="password" class="form-control "  id=""  name="password" placeholder="Enter password " required>

                              </div>

                              <div class="card-footer">
                                <button type="submit" class="btn btn-outline-success btn-sm">Submit</button>
                              </div>
                        </form>


                      </div>

                    </div>
                    <!--/.col (left) -->

                    <!--/.col (right) -->
                  </div>
                  <!-- /.row -->
                </div><!-- /.container-fluid -->
              </section>
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
    
    CKEDITOR.replace( 'address' );
</script>






