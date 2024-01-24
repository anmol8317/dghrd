@extends('Dghrd.website.layouts.main')
@section('main-section')<!--SECTION FOR MENU NAV-->
    <section>
      <div class="container-fluid bg-menu-open">
         <div class="container">
             <div class="py-2"><h5>About us >> <span> <strong> CBIC</strong></span></h5></div>
         </div>
      </div>
    </section>
    <section>
     <div class="container-fluid my-3">
         <div class="row col-12 mx-auto">
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="container heading-clr px-1 py-2">
                     <h2 >Central Board of Indirect Taxes & Customs</h2>
                     <p class="text-justify text-muted">Central Board of Indirect Taxes & Customs (CBIC) is a part of the Department of Revenue under the Ministry of Finance, Government of India.
                        It deals with the tasks of formulation of policy concerning levy and collection of Customs duties, Central Excise duties and Service Tax, prevention of smuggling and administration
                        of matters relating to Customs, Central Excise and Narcotics to the extent under CBIC's purview. The Board is the administrative authority for its subordinate organizations, including
                        Custom Houses, Central Excise Commissionerates, Service Tax Commissionerates and the Central Revenues Control Laboratory.
                    </p>
                </div>
                <div class="container text-center my-4">
                    <img src="{{asset('public/website/human/orgn_cht_2 1.png')}}" style="width:80%;">
                </div>
            </div> <!--div close for col-lg-9-->
            @include('Dghrd.website.layouts.important_links')
        </div><!--div close for row-->
     </div><!--div close for container-fluid-->
</section>
@endsection
