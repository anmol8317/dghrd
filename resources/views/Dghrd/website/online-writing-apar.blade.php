@extends('Dghrd.website.layouts.main')
@section('main-section')
<!--SECTION FOR MENU NAV-->
<section>
      <div class="container-fluid bg-menu-open">
         <div class="container">
             <div class="py-2"><h5>About us >> <span> <strong> Online writing of APARs</strong></span></h5></div>
         </div>
      </div>
</section>
<section>
<div class="container-fluid my-3">
         <div class="row col-12 mx-auto">
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="container  px-1 ">
                     <h4 class="heading-clr text-center fw-bold mb-4">Directorate General of Human Resource Development:</h4>
                     <div style="overflow-x:auto;">
                     <table class="table table-bordered" style="border:px solid lightgrey; width:100%;">
                          <thead>
                             <tr>
                                <th class="thm-clr text-white">Subject</th>
                                <th class="thm-clr text-white">Date</th>
                             </tr>
                          </thead>
                          <tbody class="text-muted">
                               <tr>
                                  <td class="text-muted d-flex align-items-center text-justify"><img src="{{asset('public/website/human/icon/TriRight.png')}}"><a href="###" class="aa text-muted"> Guidelines for issuance of NRC NO REPORT CERTIFICATE in SPARROW- IRS -reg.</a></td>
                                  <td class="text-muted">11/08/2023</td>
                               </tr>
                               <tr class="">
                                  <td class="bg-menu-open text-muted d-flex align-items-center text-justify"><img src="{{asset('public/website/human/icon/TriRight.png')}}"><a href="###" class="aa text-muted "> List Of Custodian, Alternate Custodian and PAR Manager of SPARROW-IRS as on 20.03.2023.</a></td>
                                  <td class="bg-menu-open text-muted">20/03/2023</td>
                               </tr>
                               <tr>
                                  <td class="text-muted d-flex align-items-center text-justify"><img src="{{asset('public/website/human/icon/TriRight.png')}}"><a href="###" class="aa text-muted">Online writing of APAR in SPARROW-IRS for IRS C&IT Officers for the year 2022-23.</a></td>
                                  <td class="text-muted">20/03/2023</td>
                               </tr>
                               <tr >
                                  <td class="bg-menu-open text-muted  d-flex align-items-center text-justify"><img src="{{asset('public/website/human/icon/TriRight.png')}}"> List Of Custodian, Alternate Custodian and PAR Manager of SPARROW-IRS as on 20.03.2023.</td>
                                  <td class="bg-menu-open text-muted">20/03/2023</td>
                               </tr>
                               <tr>
                                  <td class="text-muted d-flex align-items-center text-justify"><img src="{{asset('public/website/human/icon/TriRight.png')}}"> Guidelines for issuance of NRC NO REPORT CERTIFICATE in SPARROW- IRS -reg.</td>
                                  <td class="text-muted">11/08/2023</td>
                               </tr>
                               <tr>
                                  <td class="bg-menu-open text-muted  d-flex align-items-center text-justify"><img src="{{asset('public/website/human/icon/TriRight.png')}}"> List Of Custodian, Alternate Custodian and PAR Manager of SPARROW-IRS as on 20.03.2023.</td>
                                  <td class="bg-menu-open text-muted">20/03/2023</td>
                               </tr>
                               <tr>
                                  <td class="text-muted d-flex align-items-center text-justify"><img src="{{asset('public/website/human/icon/TriRight.png')}}"> Guidelines for issuance of NRC NO REPORT CERTIFICATE in SPARROW- IRS -reg.</td>
                                  <td class="text-muted">11/08/2023</td>
                               </tr>
                          </tbody>
                     </table>
                     </div>
                </div><!--div close for container-->
            </div><!--div close for col-lg-9-->
            @include('Dghrd.website.layouts.important_links')
            <!--div close for col-lg-3-->
         </div><!--div close for row-->
</div><!--div close for container-fluid-->

</section>

@endsection
