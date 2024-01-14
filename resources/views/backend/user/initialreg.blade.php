<!doctype html>
<html lang="en">
    <head>
        <title>User Registration</title>
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
                      <h1>User Registration Form</h1>
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
                        <form method="POST" action="{{ route('user_initial_registration') }}">
                            @csrf
                           
                          <div class="card-body">
                            <div class="form-group">
                                <div class="form-check" >
                                  <input class="form-check-input" type="radio" name="start" value="e">
                                  <label class="form-check-label">Email</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="start" value="m" checked>
                                  <label class="form-check-label">Phone</label>
                                </div>
                       
                              </div>
                              <br>
                            <div class="form-group">
                             
                              <input type="email" class="form-control emailreg"  id="exampleInputEmail1"  name="info" placeholder="Enter email" style="display: none">
                              <input type="text" class="form-control phonereg" id="exampleInputEmail1" name="info" placeholder="Enter phone number" style="display: none">
                            </div>
  
                          </div>
                          <!-- /.card-body -->
            
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                      </div>
                      <!-- /.card -->
            
            
                      <!-- /.card -->
            
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
               
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


<script>
    const radioButtons = document.querySelectorAll('input[name="start"]');
const emailInput = document.querySelector('.emailreg');
const phoneInput = document.querySelector('.phonereg');

function toggleInputs() {
  emailInput.style.display = radioButtons[0].checked ? 'block' : 'none';
  phoneInput.style.display = radioButtons[1].checked ? 'block' : 'none';
}

radioButtons.forEach(button => button.addEventListener('change', toggleInputs));

// Initially show the selected input based on the default checked radio button
toggleInputs();

</script>




