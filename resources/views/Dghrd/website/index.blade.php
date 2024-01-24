@extends('Dghrd.website.layouts.main')
@section('main-section')
<div class="d-flex justify-content-center">
  <div class="container-fluid px-0">
    <div class="row mx-auto">
      <div class="col-lg-8 col-md-8 col-sm-12 px-0 h-100">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($slider as $key => $image)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}" data-bs-interval="1000">
                        <div class="text-center">
                            <img src="{{asset('Admin/Images').'/'.$image->image ?? ''}}" alt="Slider Image">
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


      </div>

      <div class="col-lg-4 col-md-4 col-sm-12 bg-menu-open p-2">
        <div class="d-flex align-item-center">
            <div>
                <h5>Latest</h5>
            </div>
            <div class="ms-auto">
                <a href="{{ url('latest-news') }}" class="btn" style="background:#364694;color:white;">View All</a>
            </div>
        </div>


        <div class="divider border-bottom mt-1"></div>
        @php
        $counter = 0;
        $notificationsWithPdf = $notification->whereNotNull('pdf')->reverse();
        $notificationsWithoutPdf = $notification->whereNull('pdf')->reverse();
        $mergedNotifications = $notificationsWithPdf->merge($notificationsWithoutPdf);
    @endphp

    @foreach($mergedNotifications->take(4) as $news)
        @if($news->pdf)
            <div class="d-flex align-item-center mt-1">
                <div class="my-1">
                    <i class="fa fa-chevron-circle-right" aria-hidden="true" style="font-size:20px;"></i>
                </div>

                <div class="ms-3">
                    <p class="text-mute">
                        <a href="{{ asset('Admin/Pdf') }}/{{ $news->pdf }}" target="_blank" style="text-decoration: none; color: black;">{{ $news->heading }}</a>
                    </p>
                </div>
            </div>
        @else
            <div class="d-flex align-item-center mt-1">
                <div class="my-1">
                    <i class="fa fa-chevron-circle-right" aria-hidden="true" style="font-size:20px;"></i>
                </div>

                <div class="ms-3">
                    <p class="text-mute">
                        <span style="color: black;">{{ $news->heading }}</span>
                    </p>
                </div>
            </div>
        @endif
        @php $counter++; @endphp
    @endforeach


      </div>





      </div>

    </div>
  </div>
</div>


<!-- content-->

<div class="d-flex justify-content-center">
    <div class="container-fluid  mt-4 content">
      <div class="row mx-auto">
        <div class="col-lg-8 col-md-8 col-sm-12">
           <div class="container px-1">
                <h2 class="ff"><span style="color:#364694;"><u style="text-underline-offset:8px;">About</u></span> Directorate General of Human Resource Development</h2>
                <div  class="mt-4">
                  <p style="text-align:justify;">With a view to providing a more focused approach to employee development and infrastructure expansion in order to harness the Human Resource functions as a strategic partner in business success and growth, the Directorate of Human Resource Development (HRD) was set up in Nov.,2008 by merging the erstwhile Directorate of Organization & Personnel Management and Directorate of Housing & Welfare and became operational w.e.f. 1st December,2008. The organizational goal of the CBIC is to optimize revenue collection through broadening the tax base, rationalizing tax structure, simplifying procedures, improving voluntary compliance and providing an efficient and responsive tax administration. In order to meet this goal, the DG (HRD) strives to develop a skilful, productive, healthy, efficient and diverse work force with highly effective supervisors, managers and leaders.</p>
                </div>
           </div>
          <div class="row mx-auto">
            <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
              <div class="card border-0 ">
                <div>
                  <img src="{{asset('public/website/human/bgcard.png')}}" class="img-fluid" style="width:100%;height:100%">
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
              <div class="card border-0 ">
                <div>
                  <img src="{{asset('public/website/human/bgcard.png')}}"  class="img-fluid" style="width:100%;height:100%">
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
             <div class="card border-0 ">
                <div>
                  <img src="{{asset('public/website/human/bgcard.png')}}" class="img-fluid" style="width:100%;height:100%">
                </div>
              </div>
            </div>
          </div>

        </div>
              <!-- col-lg-8 end -->

      <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
        <div class="card" style="width:100%;height:100%;">
          <div class="card-header" style="background:#364694">
            <h5 class="text-center text-white">Important Link</h5>
          </div>
          <div class="card-body">
          <ul style="list-style:none;" class="ms-0 ps-0 lh-lg">
                            <li class="d-flex">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >
                                </div>
                                <div class="ms-2 ">
                                    <a href="https://dghrdcbic.gov.in/aparcbec/rvAparLogin.aspx" class="aa txt-clr">APAR Module</a>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >
                                </div>
                                <div class="ms-2 ">
                                   <a href="https://dghrdcbic.gov.in/dpc/" class="aa  txt-clr">DPC Module</a>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >
                                </div>
                                <div class="ms-2">
                                <a href="https://dghrdcbic.gov.in/infra/" class="aa  txt-clr">SMART-Infra CBIC</a>
                                </div>
                            </li>
                            <li class="d-flex ">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >
                                </div>
                                <div class="ms-2">
                                <a href="https://dghrdcbic.gov.in/dghrdreports/index.asp" class="aa  txt-clr">Upload Reports</a>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >
                                </div>
                                <div class="ms-2">
                                <a href="https://dghrdcbic.gov.in/swachh/" class="aa  txt-clr">SWACHHTA@CBIC</a>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >
                                </div>
                                <div class="ms-2">
                                 <a href="https://dghrdcbic.gov.in/bhugtaan/" class="aa txt-clr">E-BHUGTAAN Module</a>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >
                                </div>
                                <div class="ms-2">
                                <a href="https://parichay.nic.in/pnv1/assets/login.html?v=8&service=passive&active=true&rm_5=false&continue=https%3A%2F%2Fjan_com%2Fmail%2F&pp=1&scc=1&lmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin&sid=SPARROWIRS&lang=en" class="aa  txt-clr"> SPARROW-IRS</a>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >
                                </div>
                                <div class="ms-2">
                                <a href="{{url('/')}}" class="aa  txt-clr"> RTI</a>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >
                                </div>
                                <div class="ms-2">
                                <a href="https://edgevpn.rcil.gov.in/my.policy" class="aa txt-clr">SPARROW-CBIC</a>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >
                                </div>
                                <div class="ms-2 ">
                                <a href="https://dghrdcbic.gov.in/communication/" class="aa  txt-clr"> Cadre Restructuring</a>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('public/website/human/icon/caretRight.svg')}}" >
                                </div>
                                <div class="ms-2 ">
                                <a href="###" class="aa txt-clr">Tenders</a>
                                </div>
                            </li>
                        </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Plus 1 -->

<section class="plus p-3 mt-3" style="background: #F4F8FB;">
<div class="d-flex justify-content-center">
  <div class="container-fluid">
    <div class="row mx-auto">
      <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
        <div class="card p-3 border-0" style="background: #008AFF;width:100%;height:100%;">
          <div class="d-flex align-items-center">
            <div>
            <a href="{{url('manuals')}}"><i class="fa fa-plus text-white my-1" aria-hidden="true" style="font-size:22px;"></i></a>
            </div>
            <div class="ms-3 d-flex align-items-center">
              <h6 class="text-white"><a href="{{url('manuals')}}" class="aa text-white">Manuals</a></h6>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
        <div class="card p-3 border-0" style="background: #008AFF;width:100%;height:100%;">
          <div class="d-flex align-items-center">
            <div class="">
                <a href="{{url('posting_transfers')}}"> <i class="fa fa-plus text-white my-1" aria-hidden="true" style="font-size:22px;"></i></a>
            </div>
            <div class="ms-3">
              <h6 class="text-white"><a href="{{url('posting_transfers')}}" class="aa text-white">Transfer & Posting</a></h6>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
        <div class="card p-3 border-0" style="background: #008AFF;width:100%;height:100%;">
          <div class="d-flex align-items-center">
            <div>
            <a href="{{url('schemes')}}"><i class="fa fa-plus text-white my-1" aria-hidden="true" style="font-size:22px;"></i></a>
            </div>
            <div class="ms-3">
              <h6 class="text-white"><a href="{{url('schemes')}}" class="aa text-white">Welfare Scheme</a></h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Plus 1 end -->


<!-- Plus 2 -->

<div class="d-flex justify-content-center">
  <div class="container-fluid mt-3">
    <div class="row mx-auto">
      <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
        <div class="card p-3 border-0" style="background: #008AFF;width:100%;height:100%;">
          <div class="d-flex align-items-center">
            <div>
            <a href="{{url('suggestion')}}"><i class="fa fa-plus text-white my-1" aria-hidden="true" style="font-size:22px;"></i></a>
            </div>
            <div class="ms-3">
              <h6 class="text-white"><a href="{{url('suggestion')}}" class="aa text-white">Suggestions</a></h6>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
        <div class="card p-3 border-0" style="background: #008AFF;width:100%;height:100%;">
          <div class="d-flex align-items-center">
            <div>
            <a href="{{url('civil_list')}}"><i class="fa fa-plus text-white my-1" aria-hidden="true" style="font-size:22px;"></i></a>
            </div>
            <div class="ms-3">
              <h6 class="text-white"><a href="{{url('civil_list')}}" class="aa text-white">Civil List</a></h6>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
        <div class="card p-3 border-0" style="background: #008AFF;width:100%;height:100%;">
          <div class="d-flex align-items-center">
            <div>
            <a href="{{url('infrastructure_projects')}}"><i class="fa fa-plus text-white my-1" aria-hidden="true" style="font-size:22px;"></i></a>
            </div>
            <div class="ms-3">
              <h6 class="text-white"><a href="{{url('infrastructure_projects')}}" class="aa text-white">Ongoing/Upcoming Infrastructure project</a></h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Plus 2 end -->



<!-- Plus 3 -->

<div class="d-flex justify-content-center">
  <div class="container-fluid mt-3">
    <div class="row mx-auto">
      <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
        <div class="card p-3 border-0" style="background: #008AFF;width:100%;height:100%;">
          <div class="d-flex align-items-center">
            <div>
            <a href="{{url('apar')}}"><i class="fa fa-plus text-white my-1" aria-hidden="true" style="font-size:22px;"></i></a>
            </div>
            <div class="ms-3">
              <h6 class="text-white"><a href="{{url('apar')}}" class="aa text-white">Missing APAR/IPR</a></h6>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
        <div class="card p-3 border-0" style="background: #008AFF;width:100%;height:100%;">
          <div class="d-flex align-items-center">
            <div>
            <a href="{{url('half_yearly_brochure')}}"><i class="fa fa-plus text-white my-1" aria-hidden="true" style="font-size:22px;"></i></a>
            </div>
            <div class="ms-3">
              <h6 class="text-white"><a href="{{url('half_yearly_brochure')}}" class="aa text-white">Half Yearly brochure</a></h6>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
        <div class="card p-3 border-0" style="background: #008AFF;width:100%;height:100%;">
          <div class="d-flex align-items-center">
            <div>
            <a href="http://43.224.136.155/Account/Login.aspx"><i class="fa fa-plus text-white my-1" aria-hidden="true" style="font-size:22px;"></i></a>
            </div>
            <div class="ms-3">
              <h6 class="text-white"><a href="http://43.224.136.155/Account/Login.aspx" class="aa text-white">Annual Vehicle Reports</a></h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<!-- Plus 3 end -->


<!-- PHOTO GALLERY -->

<div class="d-flex align-items-center my-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <p class="text-mute">Photo Gallery</p>
                <h2 style="color: #001B39;">Explore Our Photo Gallery</h2>
                <div class="mt-4">
                    <a href="{{ url('photo-gallery') }}" class="aa">
                        <button type="button" class="btn" style="background:#364694;color:white;">View All</button>
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="row">
                    @foreach($gallery->reverse()->take(4) as $item)
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card shadow-lg">
                            <div class="card-body p-1">
                                <img src="{{ asset('Admin/Images').'/'.$item->image ?? '' }}" style="width: 100%;height: 100%;">
                            </div>
                            <div class="card-footer">
                                <div>
                                    <p class="mb-0 pb-0">{{ $item->tittle }}</p>
                                    {{-- <p class="text-center">{{ $item->description }}</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- PHOTO GALLERY END-->





<section class="mt-5" style="background: #F4F8FB;">
    <div class="container-fluid">
        <div class="owl-carousel owl-theme">
            @foreach($mini as $image)
                <div class="item mt-3">
                    <img src="{{asset('Admin/Images').'/'.$image->image ?? ''}}">
                </div>
            @endforeach
        </div>
    </div>
</section>







<script type="text/javascript">
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    autoplay:true,
    autoplayTimeout:1000,
    dots:true,
    stagePadding:40,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});
</script>






@endsection





