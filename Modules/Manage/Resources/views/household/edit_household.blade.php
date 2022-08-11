{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
    <div class="row">
        <div class="col-lg-6 col-xxl-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">แบบสรุปข้อมูลรายครัวเรือน</h3>
                    <div class="card-toolbar">
                        <div class="example-tools justify-content-center">
                            <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        </div>
                    </div>
                </div>
                <form action="{{ route('manage.insert.household') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <!--begin::Form-->
                    <div class="card-body">
                        
                        <div class="container">
                            <div class="wizard my-5">
                                <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                                    <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip" data-bs-placement="top" title="Step 1">
                                        <a class="nav-link active rounded-circle mx-auto d-flex align-items-center justify-content-center" href="#step1" id="step1-tab" data-bs-toggle="tab" role="tab" aria-controls="step1" aria-selected="true">
                                            <i class="fa fa-home"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip" data-bs-placement="top" title="Step 2">
                                        <a class="nav-link rounded-circle mx-auto d-flex align-items-center justify-content-center" href="#step2" id="step2-tab" data-bs-toggle="tab" role="tab" aria-controls="step2" aria-selected="false" title="Step 2">
                                            <i class="fas fa-users"></i>
                                            <!-- <i class="fa-solid fa-users"></i> -->
                                        </a>
                                    </li>
                                    <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip" data-bs-placement="top" title="Step 3">
                                        <a class="nav-link rounded-circle mx-auto d-flex align-items-center justify-content-center" href="#step3" id="step3-tab" data-bs-toggle="tab" role="tab" aria-controls="step3" aria-selected="false" title="Step 3">
                                            <i class="fa fa-user-times"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip" data-bs-placement="top" title="Step 4">
                                        <a class="nav-link rounded-circle mx-auto d-flex align-items-center justify-content-center" href="#step4" id="step4-tab" data-bs-toggle="tab" role="tab" aria-controls="step4" aria-selected="false" title="Step 4">
                                            <i class="fas fa-clipboard"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip" data-bs-placement="top" title="Step 5">
                                        <a class="nav-link rounded-circle mx-auto d-flex align-items-center justify-content-center" href="#step5" id="step5-tab" data-bs-toggle="tab" role="tab" aria-controls="step5" aria-selected="false" title="Step 5">

                                            <i class="fa fa-handshake-o "></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">

                                    @include('manage::household.step1')

                                    @include('manage::household.step2')

                                    @include('manage::household.step3')

                                    @include('manage::household.step4')
                                    
                                    @include('manage::household.step5')
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--end::Card-->      
        </div>
    </div>
    
@endsection

{{-- Scripts Section --}}
@section('scripts')

    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('plugins/global/plugins.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/custom/prismjs/prismjs.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/scripts.bundle.js') }}" type="text/javascript"></script>
    <!--end::Global Theme Bundle-->

    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('js/pages/crud/datatables/data-sources/html.js') }}" type="text/javascript"></script>
    <!--end::Page Scripts-->
    {{-- <script src="{{ asset('js/pages/crud/forms/widgets/select.js') }}" type="text/javascript"></script> --}}
    
    <!-- upload file -->
    <script src="{{ asset('js/upload_file/upload_file.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/upload_file/upload_file_multiples.js') }}" type="text/javascript"></script>
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script src='https://use.fontawesome.com/releases/v5.0.0/js/all.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js'></script>
<script id="rendered-js">
    $(document).ready(function() {
        //Enable Tooltips
        var tooltipTriggerList = [].slice.call(
            document.querySelectorAll('[data-bs-toggle="tooltip"]'));

        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });

        //Advance Tabs
        $(".next").click(function() {
            const nextTabLinkEl = $(".nav-tabs .active").
            closest("li").
            next("li").
            find("a")[0];
            const nextTab = new bootstrap.Tab(nextTabLinkEl);
            nextTab.show();
        });

        $(".previous").click(function() {
            const prevTabLinkEl = $(".nav-tabs .active").
            closest("li").
            prev("li").
            find("a")[0];
            const prevTab = new bootstrap.Tab(prevTabLinkEl);
            prevTab.show();
        });
    });
    //# sourceURL=pen.js
</script>
    
@endsection
