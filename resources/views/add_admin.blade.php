<x-layout>
    <div class="content-body">
        <div class="container-fluid">
            
            <!-- row -->
            <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add User Credencials</h4>
            </div>
            <div class="card-body">
               
               
                @if (Session::has('error'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                  <strong>Error!</strong> <strong>{{ Session::get('error') }}</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </button>
              </div>
              
             
                    @elseif (Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>	
                  <strong>Success!</strong> {{ Session::get('success') }}</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </button>
            
              </div>
              @endif
                <div class="basic-form">
                    <form class="form-valide-with-icon needs-validation" novalidate method="POST" action="{{ route('adminlogin') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="text-label form-label" for="validationCustomUsername">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                <input type="email" class="form-control" name="email" id="validationCustomUsername" placeholder="Enter a email.." required>
                                <div class="invalid-feedback">
                                    Please Enter email.
                                  </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="text-label form-label" for="dz-password">Password *</label>
                            <div class="input-group transparent-append">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                <input type="password" class="form-control" name="password" id="dz-password" placeholder="Choose a safe one.." required>
                                <span class="input-group-text show-pass"> 
                                    <i class="fa fa-eye-slash"></i>
                                    <i class="fa fa-eye"></i>
                                </span>
                                <div class="invalid-feedback">
                                    Please Enter password.
                                </div>
                            </div>
                        </div>
                        <!--<div class="mb-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                              <label class="form-check-label" for="invalidCheck2">
                                Check Me out
                              </label>
                            </div>
                        </div>-->
                        <button type="submit" class="btn me-2 btn-primary">Submit</button>
                        <!--<button type="submit" class="btn btn-danger light">Cancel</button>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
      <div class="card dz-card" id="accordion-one">
        <div class="card-header flex-wrap">
          <div>
            <h4 class="card-title">Login details</h4>
           
          </div>
          <ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link  " id="home-tab" data-bs-toggle="tab" data-bs-target="#Preview" type="button" role="tab"  aria-selected="true">Preview</button>
            </li>
            <!--<li class="nav-item" role="presentation">
              <button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#html" type="button" role="tab" aria-controls="html" aria-selected="false">HTML</button>
            </li>-->
          </ul>
        </div>
        <!--tab-content-->
        
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="Preview" role="tabpanel" aria-labelledby="home-tab">
           <div class="card-body pt-0">
            <div class="table-responsive">
              <table id="example" class="display table" style="min-width: 845px">
                <thead>
                  <tr>
                    <th>S.NO</th>
                    <th>Email</th>
                    <!--<th>User Type</th>-->
                    <!--<th>Added by</th>-->
                    <th>status</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @if ($data->isEmpty())
                  <tr>
                    <td colspan="5">No data available.</td>
                  </tr>
                @else
                  @foreach ($data as $d)
                 
                  <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $d->email}}</td>
                    <!--<td>{{ $d->user_type}}</td>-->
                    <!--<td>{{ $d->added_by}}</td>-->
                    @if($d->status=='0')
                    <td><a href="{{ route('approvelogin', ['id' => $d->id]) }}"><span class="badge light badge-warning">Deactivate</span></a></td>
                    @else
                    <td><a href="{{ route('dis_approvelogin', ['id' => $d->id]) }}"><span class="badge light badge-success">Activate</span></a></td>
                   @endif
                    
                    <td>
                    <a href="{{ route('delete_login', ['id' => $d->id]) }}" class="delete-confirm">
                      <i class="fa fa-trash text-danger fa-2x"></i>
                    </a>
                    </td>
                  </tr>
                  @endforeach
                  @endif
                </tbody>
                <tfoot>
                 
                </tfoot>
              </table>
            </div>
          </div>
            <!-- /Default accordion -->	
          </div>
         
         
      </div>
    </div>



    <div class="modal fade" id="basicModal">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                 
                  <button type="button" class="btn-close" data-bs-dismiss="modal">
                  </button>
              </div>
              <div class="modal-body "><h6 class="text-center">Request has been already  approved</h6></div>
             
          </div>
      </div>
  </div>

    
</div>
</div>
</div>

    <script>
		(function () {
		  'use strict'

		  // Fetch all the forms we want to apply custom Bootstrap validation styles to
		  var forms = document.querySelectorAll('.needs-validation')

		  // Loop over them and prevent submission
		  Array.prototype.slice.call(forms)
			.forEach(function (form) {
			  form.addEventListener('submit', function (event) {
				if (!form.checkValidity()) {
				  event.preventDefault()
				  event.stopPropagation()
				}

				form.classList.add('was-validated')
			  }, false)
			})
		})()
	</script>
  
</x-layout>