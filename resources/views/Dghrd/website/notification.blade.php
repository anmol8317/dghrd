@extends('Dghrd.website.layouts.main')
@section('main-section')<!--SECTION FOR MENU NAV-->
    <section>
      <div class="container-fluid bg-menu-open">
         <div class="container">
             <div class="py-2"><h5>Home >> <span> <strong> Latest</strong></span></h5></div>
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
                                <h5>Latest</h5>
                            </div>
                            <div class="card-body">
                                <ul style="list-style:none;" class="ms-0 ps-0 lh-lg">
                                    @foreach($notification->reverse() as $news)
                                    <li class="d-flex mt-2">
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('public/website/human/icon/TriRight.png')}}">
                                        </div>
                                        <div class="ms-2">
                                            <a href="{{ asset('Admin/Pdf') }}/{{ $news->pdf }}" class="aa text-muted">{{ $news->heading }}</a>
                                        </div>
                                    </li>
                                @endforeach
                                 </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--div close for col-lg-9-->
@include('Dghrd.website.layouts.important_links')
                <!--div close for col-lg-3-->
         </div><!--div close for row-->
     </div><!--div close for container-fluid-->
</section>
@endsection
