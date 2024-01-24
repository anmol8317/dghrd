@extends('Dghrd.website.layouts.main')
@section('main-section')<!--SECTION FOR MENU NAV-->
    <section>
      <div class="container-fluid bg-menu-open">
         <div class="container">
             <div class="py-2"><h5>About us >> <span> <strong> Manuals</strong></span></h5></div>
         </div>
      </div>
    </section>
    <section>
     <div class="container-fluid my-3">
         <div class="row col-12 mx-auto">
            <div class="col-lg-9 col-md-9 col-sm-12 mb-3">
                <div class="container heading-clr px-0 py-2">
                     <div class="card rounded-0 " style="border:2px solid lightgrey; font-weight:500;">
                        <div class="card-header thm-clr text-white fw-bolder   rounded-0">
                           <h5>Manuals</h5>
                        </div>
                        <div class="card-body">
                            <ul style="list-style:none;" class="ms-0 ps-0 lh-lg">
                                <li class="d-flex">
                                    <div class="d-flex align-items-center">
                                        <img src="{{'public/website/human/icon/TriRight.png'}}" >
                                    </div>
                                    <div class="ms-2 ">
                                        <a href="{{ route('sparrow.content', ['tab' => 3]) }}" class="aa text-muted">Sparrow Help Manual</a>
                                    </div>
                                </li>
                                <li class="d-flex mt-2">
                                    <div class="d-flex align-items-center">
                                        <img src="{{'public/website/human/icon/TriRight.png'}}" >
                                    </div>
                                    <div class="ms-2 ">
                                        <a href="{{url('infra_manual')}}" class="aa text-muted">Infrastructure Manual</a>
                                    </div>
                                </li>
                                <li class="d-flex mt-2">
                                    <div class="d-flex align-items-center">
                                        <img src="{{'public/website/human/icon/TriRight.png'}}" >
                                    </div>
                                    <div class="ms-2 ">
                                        <a href="{{url('welfare_manual')}}" class="aa text-muted">Welfare Manual</a>
                                    </div>
                                </li>
                                <li class="d-flex mt-2">
                                    <div class="d-flex align-items-center">
                                        <img src="{{'public/website/human/icon/TriRight.png'}}" >
                                    </div>
                                    <div class="ms-2 ">
                                        <a href="{{url('emc_manual')}}" class="aa text-muted">EMC Manual</a>
                                    </div>
                                </li>
                                <li class="d-flex mt-2">
                                    <div class="d-flex align-items-center">
                                        <img src="{{'public/website/human/icon/TriRight.png'}}" >
                                    </div>
                                    <div class="ms-2 ">
                                        <a href="{{url('asset_register')}}" class="aa text-muted">Asset Register</a>
                                    </div>
                                </li>
                                <li class="d-flex mt-2">
                                    <div class="d-flex align-items-center">
                                        <img src="{{'public/website/human/icon/TriRight.png'}}" >
                                    </div>
                                    <div class="ms-2 ">
                                        <a href="###" class="aa text-muted">User Manual</a>
                                    </div>
                                </li>
                                <li class="d-flex lh-sm mt-2 text-justify">
                                    <div class="d-flex align-items-center">
                                        <img src="{{'public/website/human/icon/TriRight.png'}}" >
                                    </div>
                                    <div class="ms-2 ">
                                        <a href="###" class="aa text-muted">User Manual for e-Vacancy Module - DGHRD launches on-line utility e-Vacancy Module for reporting Direct Recruitment
                                            Vacancies of Group B and C posts CBIC by CCAs</a>
                                    </div>
                                </li>
                                <li class="d-flex mt-2">
                                    <div class="d-flex align-items-center">
                                        <img src="{{'public/website/human/icon/TriRight.png'}}" >
                                    </div>
                                    <div class="ms-2 ">
                                        <a href="###" class="aa text-muted">Manual E-Vacancy Module</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                     </div>
                </div>

            </div> <!--div close for col-lg-9-->
            @include('Dghrd.website.layouts.important_links')
        </div><!--div close for row-->
     </div><!--div close for container-fluid-->
</section>
@endsection
