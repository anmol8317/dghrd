@extends('Dghrd.website.layouts.main')
@section('main-section')
<section>
    <div class="container-fluid bg-menu-open">
       <div class="container">
           <div class="py-2"><h5>About us >> <span> <strong> Who we are</strong></span></h5></div>
       </div>
    </div>
</section>
<section>
     <div class="container-fluid my-3">
         <div class="row col-12 mx-auto">
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="container heading-clr px-1 py-2">
                     <h2>Directorate General of Human Resource Development</h2>
                     <p class="text-justify text-muted">With a view to providing a more focused approach to employee development and infrastructure expansion in order to harness the Human Resource functions as a strategic partner in business success and growth,
                        the Directorate of Human Resource Development (HRD) was set up in Nov.,2008 by merging the erstwhile Directorate of Organization & Personnel Management and Directorate of Housing & Welfare and became operational w.e.f.
                        1st December,2008. The organizational goal of the CBIC is to optimize revenue collection through broadening the tax base, rationalizing tax structure, simplifying procedures, improving voluntary compliance and providing
                        an efficient and responsive tax administration. In order to meet this goal, the DG (HRD) strives to develop a skilful, productive, healthy, efficient and diverse work force with highly effective supervisors, managers and leaders.
                    </p>
                </div>
            </div><!--div close for col-lg-9-->
            @include('Dghrd.website.layouts.important_links')
        </div><!--div close for row-->
     </div><!--div close for container-fluid-->
</section>
@endsection
