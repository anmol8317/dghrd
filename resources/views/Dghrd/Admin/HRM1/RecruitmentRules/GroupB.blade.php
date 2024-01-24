
<x-layout>


    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <div class="content-body">

        <div class="container-fluid">
            <nav>
                <ol class="breadcrumb">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="close" data-dismiss="alert">X</button>
                        </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="close" data-dismiss="alert">X</button>
                        </div>
                    @endif
                </ol>
            </nav>


            <h3 class="page-title">Group B
            </h3>
            <!-- row -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4 class="card-title">Form step</h4>
                </div>
                <div class="card-body">
                    <!-- ... (previous HTML code) ... -->

<div class="row">
<div class="col-md-8"> <!-- Increased width to col-md-8 -->
    @if ($value)
    <form method="post"
        action="{{ url('add-group-b') . '/' . $value->id ?? '' }}"
        enctype="multipart/form-data">
    @else
        <form method="post" action="{{ url('add-group-b') }}"
            enctype="multipart/form-data">
@endif
@csrf
<div class="mb-3">

    <div class="form-group">
        <label class="form-label">Heading</label>
        <select class="form-select" name="subtab" required>
            <option value="">Choose Heading...</option>
            <option value="1"
                @if ($value && $value->sub_tab == '1') selected @endif>
                RECRUITMENT RULES OF ADMINISTRATIVE OFFICER</option>
            <option value="2"
                @if ($value && $value->sub_tab == '2') selected @endif>
                RECRUITMENT RULES OF APPRAISER</option>
            <option value="3"
                @if ($value && $value->sub_tab == '3') selected @endif>
                RECRUITMENT RULES OF EXAMINER</option>
            <option value="4"
                @if ($value && $value->sub_tab == '4') selected @endif>
                RECRUITMENT RULES OF EXECUTIVE ASSISTANT</option>
            <option value="5"
                @if ($value && $value->sub_tab == '5') selected @endif>
                RECRUITMENT RULES OF INSPECTOR CEX</option>
            <option value="6"
                @if ($value && $value->sub_tab == '6') selected @endif>
                RECRUITMENT RULES OF JUNIOR HINDI TRANSLATOR</option>
            <option value="7"
                @if ($value && $value->sub_tab == '7') selected @endif>
                RECRUITMENT RULES OF PREVENTIVE OFFICER</option>
            <option value="8"
                @if ($value && $value->sub_tab == '8') selected @endif>
                RECRUITMENT RULES OF PRIVATE SECRETARY</option>
            <option value="9"
                @if ($value && $value->sub_tab == '9') selected @endif>
                RECRUITMENT RULES OF SENIOR HINDI TRANSLATOR</option>
            <option value="10"
                @if ($value && $value->sub_tab == '10') selected @endif>
                RECRUITMENT RULES OF SENIOR PRIVATE SECRETARY</option>
            <option value="11"
                @if ($value && $value->sub_tab == '11') selected @endif>
                RECRUITMENT RULES OF STENOGRAPHER GRADE-I</option>
            <option value="12"
                @if ($value && $value->sub_tab == '12') selected @endif>
                RECRUITMENT RULES OF SUPERINTENDENT CEX</option>
            <option value="13"
                @if ($value && $value->sub_tab == '13') selected @endif>
                RECRUITMENT RULES OF SUPERINTENDENT PREVENTIVE</option>
        </select>
    </div>
    @error('subtab')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="mb-3">
    <label class="text-label form-label">Title</label>
    <input type="text" class="form-control" name="tittle" placeholder="Write Title for PDF" value="{{ $value->tittle ?? '' }}">
    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="mb-3">
    <label class="text-label form-label">Date</label>
    <input type="date" class="form-control" name="date" value="{{ $value->date ?? '' }}" required>
    @error('date')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="mb-3">
    <label class="text-label form-label">PDF</label>
    <input type="file" name="pdf" class="form-control" accept="application/pdf">
    @error('pdf')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

@if ($value->pdf ?? '')
    <a href="{{ asset('Admin/Pdf') . '/' . $value->pdf ?? '' }}">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7379 2.76181H8.08493C6.00493 2.75381 4.29993 4.41181 4.25093 6.49081V17.2038C4.20493 19.3168 5.87993 21.0678 7.99293 21.1148C8.02393 21.1148 8.05393 21.1158 8.08493 21.1148H16.0739C18.1679 21.0298 19.8179 19.2998 19.8029 17.2038V8.03781L14.7379 2.76181Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M14.4751 2.75V5.659C14.4751 7.079 15.6231 8.23 17.0431 8.234H19.7981" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M14.2882 15.3585H8.88818" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12.2432 11.606H8.88721" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
    </a>
@else
    <span>No PDF</span>
@endif

<div class="mt-3">
    <button type="submit" class="btn btn-primary">
        <i class="ti-save-alt"></i> Save
    </button>
</div>
</form>
</div>
</div>

<!-- ... (rest of your HTML code) ... -->

                </div>
            </div>
{{-- Table --}}

            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Group B
                            Table</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example3" class="display table" style="min-width: 845px">
                                 <thead>
                                    <tr class="text-dark">
                                        <th>Sr. No.</th>
                                        <th>Pdf</th>
                                            <th>Heading</th>
                                            <th>Tittle</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $serial = 1 @endphp <!-- Initialize a counter -->

                                    @foreach ($data as $key => $data)
                                        <tr>
                                            <td>{{ $serial }}</td> <!-- Display the serial number -->

                                            <td class="text-dark">
                                                @if ($data->pdf)
                                                    <a href="{{ asset('Admin/Pdf') }}/{{ $data->pdf ?? '' }}"
                                                        target="_blank"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7379 2.76181H8.08493C6.00493 2.75381 4.29993 4.41181 4.25093 6.49081V17.2038C4.20493 19.3168 5.87993 21.0678 7.99293 21.1148C8.02393 21.1148 8.05393 21.1158 8.08493 21.1148H16.0739C18.1679 21.0298 19.8179 19.2998 19.8029 17.2038V8.03781L14.7379 2.76181Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M14.4751 2.75V5.659C14.4751 7.079 15.6231 8.23 17.0431 8.234H19.7981" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M14.2882 15.3585H8.88818" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M12.2432 11.606H8.88721" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>

                                                    @else
                                                        <i class="fa fa-exclamation-triangle"
                                                            aria-hidden="true"></i><span>No Pdf</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($data->sub_tab == '1' ?? '')
                                                    RECRUITMENT RULES OF ADMINISTRATIVE OFFICER
                                                @elseif($data->sub_tab == '2' ?? '')
                                                    RECRUITMENT RULES OF APPRAISER
                                                @elseif($data->sub_tab == '3' ?? '')
                                                    RECRUITMENT RULES OF EXAMINER
                                                @elseif($data->sub_tab == '4' ?? '')
                                                    RECRUITMENT RULES OF EXECUTIVE ASSISTANT
                                                    @elseif($data->sub_tab == '5' ?? '')
                                                    RECRUITMENT RULES OF INSPECTOR CEX
                                                    @elseif($data->sub_tab == '6' ?? '')
                                                    RECRUITMENT RULES OF JUNIOR HINDI TRANSLATOR
                                                    @elseif($data->sub_tab == '7' ?? '')
                                                    RECRUITMENT RULES OF PREVENTIVE OFFICER
                                                    @elseif($data->sub_tab == '8' ?? '')
                                                    RECRUITMENT RULES OF PRIVATE SECRETARY
                                                    @elseif($data->sub_tab == '9' ?? '')
                                                    RECRUITMENT RULES OF SENIOR HINDI TRANSLATOR
                                                    @elseif($data->sub_tab == '10' ?? '')
                                                    RECRUITMENT RULES OF SENIOR PRIVATE SECRETARY
                                                    @elseif($data->sub_tab == '11' ?? '')
                                                    RECRUITMENT RULES OF STENOGRAPHER GRADE-I
                                                    @elseif($data->sub_tab == '12' ?? '')
                                                    RECRUITMENT RULES OF SUPERINTENDENT CEX
                                                    @elseif($data->sub_tab == '13' ?? '')
                                                    RECRUITMENT RULES OF SUPERINTENDENT PREVENTIVE
                                                @endif
                                            </td>

                                            <td>{{ ucwords($data->tittle) ?? '' }}</td>
                                            <td>{{ $data->date ?? '' }}</td>
                                            <td>
                                                <a href="{{ url('group-b-delete') . '/' . $data->id ?? '' }}"><button
                                                        type="button" class="btn btn-danger">
                                                        <i class="ti-trash" style="font-size: 18px;"></i>
                                                    </button></a>
                                                <a href="{{ url('add-group-b') . '/' . $data->id ?? '' }}"><button
                                                        type="button" class="btn btn-primary " >
                                                        <i class="ti-pencil" style="font-size: 18px;"></i>
                                                    </button></a>
                                            </td>
                                        </tr>
                                        @php $serial++ @endphp <!-- Increment the counter -->

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



</x-layout>
