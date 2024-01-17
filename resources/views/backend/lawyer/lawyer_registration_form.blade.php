<!doctype html>
<html lang="en">
    <head>
        <title>Lawyer Registration </title>
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
                      <h1>Lawyer Registation</h1>
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
                          <h3 class="card-title">Lawyer Registration</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @include('backend.sessionMsg')
                        <form action="{{ route('lawyer.registration.store') }}" method="post" class="p-1">
                            @csrf
                             <br>
                            <div class="form-group">
                                <input type="text" class="form-control "  id=""  name="name" placeholder="Enter name" value="{{ old('name') }}" required>

                              </div>
                              <br>
                              <div class="form-group">
                                <input type="email" class="form-control emailreg"  id="exampleInputEmail1"  name="email" placeholder="Enter email" value="{{ old('email') }}" >

                              </div>

                              <br>

                            <div class="form-group">
                                <input type="text" class="form-control "  id=""  name="mobile" placeholder="Enter mobile number" value="{{ old('mobile') }}" >

                              </div>
                              <br>
           
                              <div class="form-group">
                                <input type="text" class="form-control "  id=""  name="nid" placeholder="Enter NID " value="{{ old('nid') }}" required>

                              </div>
                              <br>
                              <div class="form-group">
                                <label for="dob">Court </label>
                                <input type="text" class="form-control "  id=""  name="court" placeholder="Enter court " value="{{ old('court') }}" required>

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


                              <br>
              
                              <div class="form-group">
                                <div class="mb-3">
                                    <label for="dob">Experience </label>
                                    <textarea class="form-control" name="experience" id="" rows="3" required>{{ old('experience') }}</textarea>
                                </div>
                                

                              </div>

                              <br>

                              <div class="form-group">
                                <div class="mb-3">
                                    <label for="dob">Type </label>
                                    <select class="form-control" id="dropdown" multiple name="type_id[]" required>
                                  
                                        <option>Select type</option>
                                          
                                        @foreach ($type as $key => $value)
                                          <option value="{{ $value->id }}" {{ ( $value->id == @$edit->type_id) ? 'selected' : '' }}> 
                                              {{ $value->name }} 
                                          </option>
                                        @endforeach    
                                      </select>
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






