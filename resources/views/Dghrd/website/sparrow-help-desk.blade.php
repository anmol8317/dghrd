@extends('Dghrd.website.layouts.main')
@section('main-section')<!--SECTION FOR MENU NAV-->
<section>
      <div class="container-fluid bg-menu-open">
         <div class="container">
             <div class="py-2"><h5>About us >> <span> <strong> SPARROW help desk</strong></span></h5></div>
         </div>
      </div>
</section>
<section>
<div class="container-fluid my-3">
         <div class="row col-12 mx-auto">
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="container  px-0 py-2 mt-2">
                     <h5 class="heading-clr text-center fw-bold mb-2">SPARROW IRS HELPDESK TEAM</h5>
                     <p class="heading-clr text-center mb-4">Shri Prateek Bhatia (Joint Director) 011-23741699</p>
                    <div style="overflow-x:auto;">
                    <table class="table table-bordered" style=" width:100%;">
                          <thead>
                              <tr>
                                 <th class="thm-clr text-white">SR. No.</th>
                                 <th class="thm-clr text-white">Name of officer</th>
                                <th class="thm-clr text-white">Designation</th>
                                <th class="thm-clr text-white">Email Id</th>
                             </tr>
                          </thead>
                          <tbody class="text-muted">
                              <tr>
                                  <td class="text-muted">01</td>
                                  <td class="text-muted">Jyoti</td>
                                  <td class="text-muted">Superintendent</td>
                                  <td class="text-muted"></td>
                               </tr>
                               <tr class="bg-menu-open">
                                  <td class="bg-menu-open text-muted">02</td>
                                  <td class="bg-menu-open text-muted">Arun Malik</td>
                                  <td class="bg-menu-open text-muted">T.A.</td>
                                  <td class="bg-menu-open text-muted">help[dot]sparrowirs[at]gov[dot]in</td>
                               </tr>
                               <tr>
                                  <td class="text-muted">03</td>
                                  <td class="text-muted">Siddharth Rishi</td>
                                  <td class="text-muted">T.A.</td>
                                  <td class="text-muted"></td>
                               </tr>
                          </tbody>
                     </table>
                    </div>
                </div><!--div close for container-->
                <!--2nd container-->
                <div class="px-0 py-2 mt-2">
                    <h5 class="heading-clr text-center fw-bold mb-2">SPARROW CBIC HELPDESK TEAM</h5>
                    <p class="heading-clr text-center mb-4">Shri Prateek Bhatia (Joint Director) 011-23741699</p>

                    <div style="overflow-x:auto;">
                      <table class="table table-bordered" style="width:100%;">
                            <thead>
                                <tr>
                                   <th class="thm-clr text-white">SR. No.</th>
                                   <th class="thm-clr text-white">Name of officer</th>
                                  <th class="thm-clr text-white">Designation</th>
                                  <th class="thm-clr text-white">Email Id</th>
                               </tr>
                            </thead>
                            <tbody class="text-muted">
                                <tr>
                                     <td class="text-muted">01</td>
                                     <td class="text-muted">Jyoti</td>
                                    <td class="text-muted">Superintendent</td>
                                    <td class="text-muted"></td>
                                 </tr>
                                 <tr>
                                     <td  class="bg-menu-open text-muted">02</td>
                                     <td  class="bg-menu-open text-muted">Mamta Kumari</td>
                                    <td  class="bg-menu-open text-muted">Inspector</td>
                                    <td  class="bg-menu-open text-muted">help[dot]sparrowcbic[at]gov[dot]in</td>
                                 </tr>
                                 <tr>
                                    <td class="text-muted">03</td>
                                    <td class="text-muted">Shalini Singh</td>
                                    <td class="text-muted">T.A.</td>
                                    <td class="text-muted"></td>
                                 </tr>
                                 <tr>
                                    <td  class="bg-menu-open text-muted">04</td>
                                    <td  class="bg-menu-open text-muted">Pardeep Mudgal</td>
                                    <td  class="bg-menu-open text-muted">T.A.</td>
                                    <td  class="bg-menu-open text-muted"></td>
                                 </tr>
                            </tbody>
                       </table>
                    </div>
                </div>
            </div><!--div close for col-lg-9-->
            <!-- div for side navigation -->
            @include('Dghrd.website.layouts.important_links')         </div><!--div close for row-->
</div><!--div close for container-fluid-->

</section>
@endsection
