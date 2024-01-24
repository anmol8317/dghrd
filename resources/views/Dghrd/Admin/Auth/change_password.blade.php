
<x-layout>


    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <div class="content-body">

        <div class="container-fluid">
            <nav>
                <ol class="breadcrumb">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="close" data-dismiss="alert">X</button>
                        </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="close" data-dismiss="alert">X</button>
                        </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger alert-block">

                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach

                        <button type="button" class="close" data-dismiss="alert">X</button>
                    </div>
                @endif

                </ol>
            </nav>


            <h3 class="page-title">Change Password
            </h3>
            <!-- row -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4 class="card-title">Form step</h4>
                </div>
                <div class="card-body">
                    <!-- ... (previous HTML code) ... -->

<div class="row">
<div class="col-md-8"> <!-- Increased width to col-md-8 -->
    <form method="post" action="{{ route('change.password') }} " enctype="multipart/form-data">
@csrf
<div class="mb-3">
    <label class="text-label form-label">Current Password</label>
    <input type="password" class="form-control" name="current_password" placeholder="Enter Current Password" value="{{ $value->tittle ?? '' }}">
    @error('current_password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="mb-3">
    <label class="text-label form-label">New Password</label>
    <input type="password" class="form-control" name="new_password"  required>
    @error('new_password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="mb-3">
    <label class="text-label form-label">Confirm Password</label>
    <input type="password" class="form-control" name="confirm_password" required>
    @error('confirm_password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>


<div class="mt-3">
    <button type="submit" class="btn btn-primary">
        <i class="ti-save-alt"></i> Save
    </button>
</div>
</form>
</div>
</div>

<!-- ... (rest of your HTML code) ... -->

                </div>
            </div>
{{-- Table --}}
    </section>



</x-layout>
