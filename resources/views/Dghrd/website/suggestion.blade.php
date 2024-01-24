@extends('Dghrd.website.layouts.main')
@section('main-section')<!--SECTION FOR MENU NAV-->
    <section>
      <div class="container-fluid bg-menu-open">
         <div class="container">
             <div class="py-2"><h5>About us >> <span> <strong> Suggestions</strong></span></h5></div>
         </div>
      </div>
    </section>
    <section class="">
     <div class="container-fluid my-3">
         <div class="row col-12 mx-auto">
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="container heading-clr px-0 py-3">
                     <h5 class="mb-4">Suggestions of departmental officers on organisational issues including HR & Infrastructure.</h5>
                    <form action="" class="container">
                    <div class="form-group mb-2">
                       <label for="Name" class="text-muted">Name*:</label>
                       <input type="text" class="form-control mt-2 border-dark" id="" aria-describedby="" >
                    </div>
                    <div class="form-group mb-2">
                       <label for="Name" class="text-muted">Mobile*:</label>
                       <input type="tel" class="form-control mt-2 border-dark" id="" aria-describedby="" >
                    </div>
                    <div class="form-group mb-2">
                       <label for="Name" class="text-muted">Email Address*:</label>
                       <input type="email" class="form-control mt-2 border-dark" id="" aria-describedby="" >
                    </div>
                    <div class="form-group mb-2">
                       <label for="Name" class="text-muted">Subject*:</label>
                       <input type="text" class="form-control mt-2 border-dark" id="" aria-describedby="" >
                    </div>
                    <div class="form-group mb-2">
                       <label for="Name" class="text-muted">Suggestions*:</label>
                       <input type="text" class="form-control mt-2 border-dark" id="" aria-describedby="" >
                    </div>
                    </form>
                </div>

            </div> <!--div close for col-lg-9-->
            @include('Dghrd.website.layouts.important_links')
        </div><!--div close for row-->
     </div><!--div close for container-fluid-->
</section>
@endsection
