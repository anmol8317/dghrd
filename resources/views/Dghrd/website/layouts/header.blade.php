<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DGHRD</title>
    <link rel="stylesheet" href="{{asset('public/website/css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('public/website/css/bootstrap.min.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl Carousel JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>
<body>

<div class="d-flex justify-content-center">
  <div class="container-fluid " style="border-bottom:2px solid lightgrey;">
    <div class="row mx-auto mt-2">
      <div class="col-lg-6 col-md-6 col-sm-5 col-7">
        <div class="d-flex align-item-center">
          <div>
            <img src="{{asset('public/website/human/flag.png')}}">
            <!--<a class="navbar-brand " href="#" style="font-size:19px;"><img src="human/flag.png"> Government of India</a>-->
          </div>
          <div class="ms-2 mt-1">
            <h6>Government of India</h6>
          </div>
          <div class="">
            <a href="#" class="ms-5 aa text-dark d-none d-md-block">FAQ |</a>
          </div>
          <div>
            <a href="#" class="ms-2 aa text-dark d-none d-md-block">Feedback |</a>
          </div>
          <div>
            <a href="#" class="ms-2 aa text-dark d-none d-md-block">Site Map |</a>
          </div>
          <div>
            <a href="#" class="ms-2 aa text-dark d-none d-block" >Contact Us |</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4 col-1 mx-auto" id="phone">
        <div class="d-flex align-item-center ">
          <div>
            <p class="text-mute d-none d-lg-block">Skip to Main Content </p>
          </div>
          <div class="ms-2 d-none d-md-block">
            <p>|</p>
          </div>
          <div class="ms-2">
            <p class="text-mute d-none d-lg-block">Screen Reader Access</p>
          </div>
        </div>
      </div>

      <div class="col-lg-2 col-md-2 col-sm-3 col-5">
        <div class="d-flex" >
          <div>
            <p class="text-mute">English</p>
          </div>
          <div class="ms-3">
            <p class="text-mute">हिन्दी</p>
          </div>
          <div class="ms-3">
            <i class="fa fa-search" aria-hidden="true" style="color:#f9690e;"></i>
          </div>
        </div>
      </div>
    </div>
            <!-- <div class="divider border-bottom" style="background:#364694;"></div> -->

  </div>
</div>

  <section class="mt-2">
    <div class="d-flex justify-content-center">
      <div class="container-fluid ">
        <div class="row mx-auto">
          <div class="col-lg-2 col-md-2 col-sm-5 col-5">
            <div class="text-center mt-2">
              <img src="{{asset('public/website/human/cbe.png')}}" style="width:100%;">
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-2 col-2">
            <div class="text-center headings mt-2">
            <h2 class="d-none d-md-block"> Directorate General of Human Resource Development</h2>
            <h5 class="d-none d-lg-block">Central Board of Indirect Taxes & Customs</h5>
            <h5 class="d-none d-lg-block">Department of Revenue</h5>
            <h5 class="d-none d-md-block">Government of India </h5>
           </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-5 col-5">
            <div class="text-center mt-2">
              <img src="{{asset('public/website/human/amritnew.png')}}" style="width:100%;">
             </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<section class="nav mt-2 ">
<header class="container-fluid px-0">
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <div class="ms-auto">
    <button class="navbar-toggler shadow-none text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation" style="background: white;">
      <span class="navbar-toggler-icon"><i class="fa fa-navicon fa-lg" style="font-size:26px;"></i></span>
    </button>
   </div>


    <div class="collapse navbar-collapse" id="navbarScroll">

 <ul class="navbar-nav mx-auto">
    <li class="nav-item dropdown border-0 shadow-none">
          <a class="nav-link " href="{{ url('/') }}">Home</a>
        </li>

        <li class="nav-item dropdown border-0 shadow-none">
          <a class="nav-link " href="#">
            About us <i class="fa fa-angle-down"></i>
          </a>
          <ul class="dropdown-menu border-0 shadow-none " aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{url('who-we-are')}}">Who We are</a></li>
            <li><a class="dropdown-item" href="{{ url('cbic') }}">CBIC</a></li>
            <li><a class="dropdown-item" href="{{url('contact-us')}}">Contact us</a></li>
            <li><a class="dropdown-item" href="{{url('citizen')}}">Citizen Charter</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown border-0 shadow-none ">
          <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            HRM1 <i class="fa fa-angle-down" style="font-size:14px;"></i>
          </a>
          <ul class="dropdown-menu border-0 shadow-none" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">SPARROW <i class="fa fa-angle-double-right fa-lg ms-2"></i></a>
                        <!--2nd level  Sub Menu-->
              <ul class="dropdown-menu dropdown-submenu">
              <li>
                <a class="dropdown-item" href="{{ route('sparrow.content', ['tab' => 1]) }}">Online writing of APARs</a>
                {{-- <a href="{{ route('sparrow.content', ['tab' => 1]) }}">Tab 1 Content</a> --}}

              </li>
              <li>
                <a class="dropdown-item" href="{{ route('sparrow.content', ['tab' => 2]) }}">Online writing of IPRs</a>
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('sparrow.content', ['tab' => 3]) }}">SPARROW help manual</a>
              </li>
              <li><a class="dropdown-item" href="{{url('sparrow-help_desk')}}">SPARROW help desk</a></li>
            </ul>
                              <!-- Sub Menu-->

            </li>
            <li><a class="dropdown-item" href="#">APAR <i class="fa fa-angle-double-right fa-lg ms-2"></i></a>
                  <!--2nd level dropdown -->
                 <ul class="dropdown-menu dropdown-submenu">
                   <li>
                     <a class="dropdown-item" href="{{url('apar')}}">Missing APARs</a>
                   </li>
                 </ul>
            </li>
            <li><a class="dropdown-item" href="#">IPR</a>
                 <ul class="dropdown-menu dropdown-submenu">
                   <li>
                     <a class="dropdown-item" href="online-writing-apar.php">Letters</a>
                     <a class="dropdown-item" href="online-writing-apar.php">IPR Status</a>
                   </li>
                 </ul>
            </li>
            <li><a class="dropdown-item" href="#">Recruitment Rules <i class="fa fa-angle-double-right fa-lg ms-2"></i></a>
            <!--2nd level dropdown -->
                 <ul class="dropdown-menu dropdown-submenu" >
                   <li><a class="dropdown-item" href="online-writing-apar.php">Group A <i class="fa fa-angle-double-right fa-lg ms-2"></i></a>
                     <!-- 3RD LEVEL MENU -->
                      <ul class="dropdown-menu dropdown-submenu">
                        <li>
                          <a class="dropdown-item" href="{{ route('group_a', ['subTabId' => 1]) }}">RECRUITMENT RULES OF <br>ASSISTANT DIRECTOR(OL)</a>
                          <a class="dropdown-item" href="{{ route('group_a', ['subTabId' => 2]) }}">RECRUITMENT RULES OF<br> CAO</a>
                          <a class="dropdown-item" href="{{ route('group_a', ['subTabId' => 3]) }}">RECRUITMENT RULES OF<br> DEPUTY DIRECTOR (OL)</a>
                          <a class="dropdown-item" href="{{ route('group_a', ['subTabId' => 4]) }}">RECRUITMENT RULES OF IRS</a>
                        </li>
                      </ul>
                   </li>
                   <li><a class="dropdown-item" href="">Group B <i class="fa fa-angle-double-right fa-lg ms-2"></i></a>
                  <!-- 3RD LEVEL MENU -->
                      <ul class="dropdown-menu dropdown-submenu">
                        <li>
                          <a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 1]) }}">RECRUITMENT RULES OF <br>ADMINISTRATIVE <br>OFFICER</a>
                          <a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 2]) }}">RECRUITMENT RULES OF<br>APPRAISER</a>
                          <a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 3]) }}">RECRUITMENT RULES OF<br>EXAMINER</a>
                          <a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 4]) }}">RECRUITMENT RULES OF <br>EXECUTIVE ASSISTANT</a>
                          <a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 5]) }}">RECRUITMENT RULES OF <br>INSPECTOR CEX</a>
                          <a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 6]) }}">RECRUITMENT RULES OF <br>JUNIOR HINDI <bR>TRANSLATOR</a>
                          <a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 7]) }}">RECRUITMENT RULES OF <br>PREVENTIVE OFFICER</a>
                          <a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 8]) }}">RECRUITMENT RULES OF <br>PRIVATE SECRETARY</a>
                          <a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 9]) }}">RECRUITMENT RULES OF <br>SENIOR HINDI <br> TRANSLATOR</a>
                          <a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 10]) }}">RECRUITMENT RULES OF <br>SENIOR PRIVATE <br>SECRETARY</a>
                          <a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 11]) }}">RECRUITMENT RULES OF <br>STENOGRAPHER GRADE-1</a>
                          <a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 12]) }}">RECRUITMENT RULES OF <br>SUPERINTENDENT CEX</a>
                          <a class="dropdown-item" href="{{ route('group_b', ['subTabId' => 13]) }}">RECRUITMENT RULES OF <br>SUPERINTENDENT PREVENTIVE</a>

                        </li>
                      </ul>
                   </li>
                   <li><a class="dropdown-item" href="">Group C <i class="fa fa-angle-double-right fa-lg ms-2"></i></a>
                   <!-- 3RD LEVEL MENU -->
                   <ul class="dropdown-menu dropdown-submenu">
                        <li>
                          <a class="dropdown-item" href="{{ route('group_c', ['subTabId' => 1]) }}">RECRUITMENT RULES OF <br>ASSISTANT SUB <br>INSPECTOR WEAPONS</a>
                          <a class="dropdown-item" href="{{ route('group_c', ['subTabId' => 2]) }}">RECRUITMENT RULES OF <br>DOS</a>
                          <a class="dropdown-item" href="{{ route('group_c', ['subTabId' => 3]) }}">RECRUITMENT RULES OF <br>DRAFTSMAN</a>
                          <a class="dropdown-item" href="{{ route('group_c', ['subTabId' => 4]) }}">RECRUITMENT RULES OF <br>DRIVERS</a>
                          <a class="dropdown-item" href="{{ route('group_c', ['subTabId' => 5]) }}">RECRUITMENT RULES OF <br>HAVALDAR & HEAD <br> HAVALDAR</a>
                          <a class="dropdown-item" href="{{ route('group_c', ['subTabId' => 6]) }}">RECRUITMENT RULES OF <br>LDC</a>
                          <a class="dropdown-item" href="{{ route('group_c', ['subTabId' => 7]) }}">RECRUITMENT RULES OF <br>MTS</a>
                          <a class="dropdown-item" href="{{ route('group_c', ['subTabId' => 8]) }}">RECRUITMENT RULES OF <br>RECORD KEEPER</a>
                          <a class="dropdown-item" href="{{ route('group_c', ['subTabId' => 9]) }}">RECRUITMENT RULES OF <br>SENIOR TAX ASSISTANT</a>
                          <a class="dropdown-item" href="{{ route('group_c', ['subTabId' => 10]) }}">RECRUITMENT RULES OF <br>STENOGRAPHERGR-II</a>
                          <a class="dropdown-item" href="{{ route('group_c', ['subTabId' => 11]) }}">RECRUITMENT RULES OF <br>TAX ASSISTANT</a>
                        </li>
                      </ul>
                   </li>
                   <li><a class="dropdown-item" href="">CANTEEN STAFF <i class="fa fa-angle-double-right fa-lg ms-2"></i></a>
                    <!-- 3RD LEVEL MENU -->
                      <ul class="dropdown-menu dropdown-submenu">
                        <li>
                          <a class="dropdown-item" href="{{ route('canteen', ['subTabId' => 1]) }}">GROUP-C POSTS</a>
                          <a class="dropdown-item" href="{{ route('canteen', ['subTabId' => 2]) }}">MANAGER GRADE-II &<br>MANAGER CUM ACCOUNTANT</a>
                        </li>
                      </ul>
                   </li>
                   <li><a class="dropdown-item" href="">CENTRAL BUREAU OF <br>NARCOTICS(CBN) <i class="fa fa-angle-double-right fa-lg ms-2"></i></a>
                    <!-- 3RD LEVEL MENU -->
                      <ul class="dropdown-menu dropdown-submenu">
                        <li>
                          <a class="dropdown-item" href="{{ route('cbn', ['subTabId' => 1]) }}">DRIVER SPECIAL GRADE</a>
                          <a class="dropdown-item" href="{{ route('cbn', ['subTabId' => 2]) }}">GR-C DRIVER</a>
                          <a class="dropdown-item" href="{{ route('cbn', ['subTabId' => 3]) }}">GROUP-B POSTS</a>
                          <a class="dropdown-item" href="{{ route('cbn', ['subTabId' => 4]) }}">GROUP-C CBN</a>
                          <a class="dropdown-item" href="{{ route('cbn', ['subTabId' => 5]) }}">MTS CBN</a>
                        </li>
                      </ul>
                   </li>
                   <li><a class="dropdown-item" href="">CRCL  <i class="fa fa-angle-double-right fa-lg ms-2"></i></a>
                    <!-- 3RD LEVEL MENU -->
                      <ul class="dropdown-menu dropdown-submenu">
                        <li>
                          <a class="dropdown-item" href="{{ route('crcl', ['subTabId' => 1]) }}">CHEMICAL ASSISTANT</a>
                          <a class="dropdown-item" href="{{ route('crcl', ['subTabId' => 2]) }}">CRCL GR-A & B</a>
                          <a class="dropdown-item" href="{{ route('crcl', ['subTabId' => 3]) }}">CRCL GR-C</a>
                        </li>
                      </ul>
                   </li>
                   <li><a class="dropdown-item" href="">DGPM  <i class="fa fa-angle-double-right fa-lg ms-2"></i></a>
                     <!-- 3RD LEVEL MENU -->
                      <ul class="dropdown-menu dropdown-submenu">
                        <li>
                          <a class="dropdown-item" href="{{ route('dgpm', ['subTabId' => 1]) }}">GR C & D</a>
                        </li>
                      </ul>
                   </li>
                   <li><a class="dropdown-item" href="">DIRECTORATE OF LOGISTICS  <i class="fa fa-angle-double-right fa-lg ms-2"></i></a>
                    <!-- 3RD LEVEL MENU -->
                      <ul class="dropdown-menu dropdown-submenu">
                        <li>
                          <a class="dropdown-item" href="{{ route('dol', ['subTabId' => 1]) }}">GROUP-A</a>
                          <a class="dropdown-item" href="{{ route('dol', ['subTabId' => 2]) }}">GROUP-B</a>
                          <a class="dropdown-item" href="{{ route('dol', ['subTabId' => 3]) }}">GROUP-C & D</a>
                        </li>
                      </ul>
                   </li>
                   <li><a class="dropdown-item" href="">DPPR  <i class="fa fa-angle-double-right fa-lg ms-2"></i></a>
                     <!-- 3RD LEVEL MENU -->
                      <ul class="dropdown-menu dropdown-submenu">
                        <li>
                          <a class="dropdown-item" href="{{ route('dppr', ['subTabId' => 1]) }}">GR C and D posts</a>
                          <a class="dropdown-item" href="{{ route('dppr', ['subTabId' => 2]) }}">MANAGER PRESS</a>
                        </li>
                      </ul>
                   </li>
                   <li><a class="dropdown-item" href="">DRI  <i class="fa fa-angle-double-right fa-lg ms-2"></i></a>
                     <!-- 3RD LEVEL MENU -->
                      <ul class="dropdown-menu dropdown-submenu">
                        <li>
                          <a class="dropdown-item" href="{{ route('dri', ['subTabId' => 1]) }}">GR C AND D</a>
                          <a class="dropdown-item" href="{{ route('dri', ['subTabId' => 2]) }}">INTELLIGENCE OFFICER</a>
                          <a class="dropdown-item" href="{{ route('dri', ['subTabId' => 3]) }}">SIO</a>
                        </li>
                      </ul>
                   </li>
                   <li><a class="dropdown-item" href="">RRs of DIRECTORATES  <i class="fa fa-angle-double-right fa-lg ms-2"></i></a>
                    <!-- 3RD LEVEL MENU -->
                      <ul class="dropdown-menu dropdown-submenu">
                        <li>
                          <a class="dropdown-item" href="{{ route('rrod', ['subTabId' => 1]) }}">GROUP-C POSTS</a>
                          <a class="dropdown-item" href="{{ route('rrod', ['subTabId' => 2]) }}">RECRUITMENT RULES OF <br> ADDITIONAL ASSISTANT <br> DIRECTOR</a>
                          <a class="dropdown-item" href="{{ route('rrod', ['subTabId' => 3]) }}">RECRUITMENT RULES OF <br>STENOGRAPHER GR-I</a>
                          <a class="dropdown-item" href="{{ route('rrod', ['subTabId' => 4]) }}">TAX ASSISTANT</a>
                          <a class="dropdown-item" href="{{ route('rrod', ['subTabId' => 5]) }}">EXECUTIVE ASSISTANT</a>
                          <a class="dropdown-item" href="{{ route('rrod', ['subTabId' => 6]) }}">STAFF CAR DRIVER<br>(SPECIAL GRADE)</a>
                        </li>
                      </ul>
                   </li>
                   <li><a class="dropdown-item" href="{{ route('telecommunication', ['tab' => 'systum_data_management' ]) }}">SYSTEMS & DATA MANAGEMENT</a></li>
                   <li><a class="dropdown-item" href="{{ route('telecommunication', ['tab' => 'telecommunication_wing']) }}">TELECOMMUNICATION WING, <br>DIRECTORATE OF LOGISTICS</a></li>
                 </ul>
            </li>
            <li><a class="dropdown-item" href="#">Seniority List <i class="fa fa-angle-double-right fa-lg ms-2"></i></a>
                <!-- 2ND LEVEL MENU -->
                <ul class="dropdown-menu dropdown-submenu">
                  <li>
                    <a class="dropdown-item" href="{{url('seniorty_list')}}">GROUP B</a>
                  </li>
                </ul>
            </li>
            <li><a class="dropdown-item" href="">DPC <i class="fa fa-angle-double-right fa-lg ms-2"></i></a>
              <!-- 2ND LEVEL MENU -->
                <ul class="dropdown-menu dropdown-submenu">
                  <li>
                    <a class="dropdown-item" href="{{ route('dpc', ['tab' => 1]) }}">GROUP A</a>
                    <a class="dropdown-item" href="{{ route('dpc', ['tab' => 2]) }}">GROUP B to A</a>
                  </li>
                </ul>
            </li>
            <li><a class="dropdown-item" href="{{url('empanelment_deputation')}}">Empanelment & Deputation</a></li>
            <li><a class="dropdown-item" href="{{url('cadre_restructuring')}}">Cadre Restructuring 2018</a></li>
            <li><a class="dropdown-item" href="{{url('sparrow_cbic')}}">SPARROW-CBIC <i class="fa fa-angle-double-right fa-lg ms-2"></i></a>
              <!-- 2ND LEVEL MENU -->
                <ul class="dropdown-menu dropdown-submenu">
                  <li>
                    <a class="dropdown-item" href="{{url('sparrow_cbic')}}">HELP MANUAL FOR <br> SPARROW-CBIC</a>
                  </li>
                </ul>
            </li>
            <li><a class="dropdown-item" href="{{url('officer_detailes')}}">Officer Details</a></li>
            <li><a class="dropdown-item" href="{{url('various_communication')}}">Various Communication with <br> Field Formations</a></li>


          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            HRM2 <i class="fa fa-angle-down"></i>
          </a>
          <ul class="dropdown-menu border-0 shadow-none" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{url('posting_transfers')}}">Postings & Transfers</a></li>
            <li><a class="dropdown-item" href="{{url('e_diposition')}}">e-Disposition List of Group<br> A IRS (C&IT) Officers</a></li>
            <li><a class="dropdown-item" href="{{url('sanctioned-working')}}">Sanctioned and Working <br> Strength of Group A IRS<br>(C&IT) Officers</a></li>
            <li><a class="dropdown-item" href="{{url('hop')}}">HOP</a></li>
            <li><a class="dropdown-item" href="{{url('empolyee_code')}}">Employee Code</a></li>
            <li><a class="dropdown-item" href="#">Swachhta Action Plan <i class="fa fa-angle-double-right fa-lg ms-2"></i></a>
               <!-- 3rd LEVEL MENU -->
               <ul class="dropdown-menu dropdown-submenu">
                  <li>
                    <a class="dropdown-item" href="{{ route('swachhta', ['tab' => 1]) }}">Letters</a>
                    <a class="dropdown-item" href="{{ route('swachhta', ['tab' => 2]) }}">Awards</a>
                    <a class="dropdown-item" href="{{ route('swachhta', ['tab' => 3]) }}">Booklets</a>
                    <a class="dropdown-item" href="{{ route('swachhta', ['tab' => 4]) }}">Expenditure</a>
                  </li>
                </ul>
            </li>
            <li><a class="dropdown-item" href="{{url('v_communication')}}">Various Communication <br> with Field Formations</a></li>
            <li><a class="dropdown-item" href="{{url('tender_notice')}}">Tender Notice</a></li>
            <li><a class="dropdown-item" href="#">Verified Data <i class="fa fa-angle-double-right fa-lg ms-2"></i></a>
               <!-- 3rd LEVEL MENU -->
               <ul class="dropdown-menu dropdown-submenu">
                  <li>
                    <a class="dropdown-item" href="{{ route('verified', ['tab' => 1]) }}">List of Officers whose <br>Verified data Awaited</a>
                    <a class="dropdown-item" href="{{ route('verified', ['tab' => 2]) }}">Performa</a>
                  </li>
                </ul>
            </li>
            <li><a class="dropdown-item" href="{{url('module_updates')}}">Group B & C Module <br>updates</a></li>
            <li><a class="dropdown-item" href="{{url('irs_officers')}}">Group A IRS (C& IT)<br>Officers on Deputation</a></li>
            <li><a class="dropdown-item" href="{{url('e_vacency')}}">e-Vacancy Module Updates</a></li>
            <li><a class="dropdown-item" href="{{url('dpc_module')}}">DPC Module Updates</a></li>
            <li><a class="dropdown-item" href="#">Policy <i class="fa fa-angle-double-right fa-lg ms-2"></i></a>
              <!-- 3rd LEVEL MENU -->
               <ul class="dropdown-menu dropdown-submenu">
                  <li>
                    <a class="dropdown-item" href="{{ route('policy', ['tab' => 1]) }}">Allocation Module Updates</a>
                    <a class="dropdown-item" href="{{ route('policy', ['tab' => 2]) }}">Others</a>
                  </li>

                </ul>
                <li><a class="dropdown-item" href="{{url('civil_list')}}">Civil List</a></li>

            </li>

          </ul>
        </li>
        <li class="nav-item dropdown text-white">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Infrastructure <i class="fa fa-angle-down"></i>
          </a>
          <ul class="dropdown-menu border-0 shadow-none" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{url('infra_officer_detailes')}}">Officers Details</a></li>
            <li><a class="dropdown-item" href="{{url('instructions_details')}}">Instructions</a></li>
            <li><a class="dropdown-item" href="{{url('fast_track')}}">Fast Track Proposals</a></li>
            <li><a class="dropdown-item" href="{{url('infra_ppt')}}">Infrastructure Ppt</a></li>
            <li><a class="dropdown-item" href="{{url('infra_manual')}}">Infrastructure Manual</a></li>
            <li><a class="dropdown-item" href="{{url('asset_register')}}">Asset Register</a></li>
            <li><a class="dropdown-item" href="{{url('land_assets')}}">Land Assets</a></li>
            <li><a class="dropdown-item" href="{{url('construction')}}">Construction Projects</a></li>
            <li><a class="dropdown-item" href="{{url('repair_maintainence')}}">Repair & Maintenance</a></li>
            <li><a class="dropdown-item" href="{{url('ready_built')}}">Ready Built <br> Accommodation</a></li>
            <li><a class="dropdown-item" href="{{url('hired_office')}}">Hired Office Buildings</a></li>
            <li><a class="dropdown-item" href="{{url('infra_various_communication')}}">Various Communication <br>with Field Formations</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown text-white ">
          <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Welfare <i class="fa fa-angle-down"></i>
          </a>
          <ul class="dropdown-menu border-0 shadow-none" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{url('welfare_officer')}}">Officers Details</a></li>
            <li><a class="dropdown-item" href="{{url('compendium')}}">Compendium of Welfare <br>Schemes</a></li>
            <li><a class="dropdown-item" href="{{url('welfare_schems')}}">Posters of Welfare <br> Schemes</a></li>
            <li><a class="dropdown-item" href="{{url('action_plan')}}">Action Plan</a></li>
            <li><a class="dropdown-item" href="{{url('schemes')}}">Schemes</a></li>
            <li><a class="dropdown-item" href="{{url('welfare_ppt')}}">Welfare Ppt</a></li>
            <li><a class="dropdown-item" href="{{url('welfare_manual')}}">Welfare Manual</a></li>
            <li><a class="dropdown-item" href="{{url('comman_facilities')}}">Common Facilities</a></li>
            <li><a class="dropdown-item" href="{{url('hotel_tie_up')}}">List of Hotel Tie-Ups</a></li>
            <li><a class="dropdown-item" href="{{url('draft_hotels')}}">Draft List of Hotels</a></li>
            <li><a class="dropdown-item" href="{{url('guest_house')}}">Departmental Guest <br>House</a></li>
            <li><a class="dropdown-item" href="{{url('covid')}}">COVID-19</a></li>
            <li><a class="dropdown-item" href="{{url('welfare_praposals')}}">Status of Welfare <br>Proposals</a></li>
            <li><a class="dropdown-item" href="{{url('welfare_communication')}}">Various Communication <br>with field Formations</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown text-white ">
        <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              EMC <i class="fa fa-angle-down"></i>
          </a>

          <ul class="dropdown-menu border-0 shadow-none" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="https://beams.dghrdcbic.gov.in/#/auth/login">BEAMS</a></li>
            <li><a class="dropdown-item" href="{{url('emc_officer')}}">Officers Details</a></li>
            <li><a class="dropdown-item" href="{{url('fund_allocation')}}">Fund Allocation & <br> Utilisation</a></li>
            <li><a class="dropdown-item" href="{{url('emc_ppt')}}">EMC Ppt</a></li>
            <li><a class="dropdown-item" href="{{url('emc_manual')}}">EMC Manual</a></li>
            <li><a class="dropdown-item" href="{{url('budgetary_authority')}}">Budgetary Authorites, <br>HODs, PAOs, DDOs</a></li>
            <li><a class="dropdown-item" href="{{url('gem_eprocurements')}}">GeM/E Procurement</a></li>
            <li><a class="dropdown-item" href="{{url('vehicle_policy')}}">Vehical Policy</a></li>
            <li><a class="dropdown-item" href="{{url('crb')}}">CRB</a></li>
            <li><a class="dropdown-item" href="{{url('emc_communication')}}">Various Communication <br>with Field Formations</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown text-white ">
          <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          CBIC' COVID Response <i class="fa fa-angle-down"></i>
          </a>
          <ul class="dropdown-menu border-0 shadow-none" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="https://dghrdcbic.gov.in/health_covid/index.asp?cov=1">COVID RELATED REPORT <br>MODULE </a></li>
            <li><a class="dropdown-item" href="{{url('shrdhanjali')}}">Shraddhanjali</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown text-white ">
          <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          e-Modules of DGHRD <i class="fa fa-angle-down"></i>
          </a>
          <ul class="dropdown-menu border-0 shadow-none" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="https://dghrdcbic.gov.in/groupB_C/">Group B And C Officers<br> Data Base</a></li>
            <li><a class="dropdown-item" href="https://dghrdcbic.gov.in/e-vacancy/">e-Vacancy Module</a></li>
            <li><a class="dropdown-item" href="https://dghrdcbic.gov.in/deputation/login">e-Pratiniyukti (online <br> Deputation Module)</a></li>
            <li><a class="dropdown-item" href="https://dghrdcbic.gov.in/dashboard/">आधारशिला</a></li>
            <li><a class="dropdown-item" href="https://dghrdcbic.gov.in/sparrow_seva/">Sparrow Seva</a></li>
            <li><a class="dropdown-item" href="https://dghrdcbic.gov.in/health_covid/">Annual Medical Health <br>Checkup for Group 'B' &<br> 'C' Officers/staff</a></li>
          </ul>
        </li>



      </ul>

    </div>
  </div>
</nav>
</header>
</section>










