
@extends('Dghrd.website.layouts.main')
@section('main-section')
<!--SECTION FOR MENU NAV-->
<section>
      <div class="container-fluid bg-menu-open">
         <div class="container">
             <div class="py-2"><h5>HRM 1 >> Group B >><span> <strong>@if($subTabId == 1)
                RECRUITMENT RULES OF ADMINISTRATIVE OFFICER
                  @elseif($subTabId== 2)
                  RECRUITMENT RULES OF APPRAISER
                @elseif ($subTabId==3)
                RECRUITMENT RULES OF EXAMINER
                @elseif ($subTabId==4)
                RECRUITMENT RULES OF  EXECUTIVE ASSISTANT
                @elseif ($subTabId==5)
                RECRUITMENT RULES OF  INSPECTOR CEX
                @elseif ($subTabId==6)
                RECRUITMENT RULES OF  JUNIOR HINDI TRANSLATOR
                @elseif ($subTabId==7)
                RECRUITMENT RULES OF PREVENTIVE OFFICER
                @elseif ($subTabId==8)
                RECRUITMENT RULES OF PRIVATE SECRETARY
                @elseif ($subTabId==9)
                RECRUITMENT RULES OF SENIOR HINDI  TRANSLATOR
                @elseif ($subTabId==10)
                RECRUITMENT RULES OF SENIOR PRIVATE SECRETARY
                @elseif ($subTabId==11)
                RECRUITMENT RULES OF STENOGRAPHER GRADE-1
                @elseif ($subTabId==12)
                RECRUITMENT RULES OF SUPERINTENDENT CEX
                @else
                RECRUITMENT RULES OF SUPERINTENDENT PREVENTIVE
            </strong>
            @endif
        </span></h5></div>
         </div>
      </div>
</section>
<section>
    <div class="container-fluid my-3">
        <div class="row col-12 mx-auto">
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="container px-1">
                    <h4 class="heading-clr text-center fw-bold mb-4">Directorate General of Human Resource Development:</h4>
                    <div style="overflow-x:auto;">
                        <table class="table table-bordered" style="border:px solid lightgrey; width:100%;">
                            <thead>
                                <!-- Your table header -->
                                <tr>
                                    <th class="thm-clr text-white">Subject</th>
                                    <th class="thm-clr text-white">Date</th>
                                 </tr>

                            </thead>
                            <tbody class="text-muted">
                                @foreach($recruitmentRules->reverse() as $content)
                                    <tr>
                                        <td class="text-muted d-flex align-items-center text-justify">
                                            <img src="{{ asset('public/website/human/icon/TriRight.png') }}">
                                            <a href="{{ asset('Admin/Pdf') }}/{{ $content->pdf }}" class="aa text-muted">{{ $content->tittle }}</a>
                                        </td>
                                        <td class="text-muted">{{ $content->date }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @include('Dghrd.website.layouts.important_links')
        </div>
    </div>
</section>

@endsection
