@extends('admin.layouts-admin.admin')
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.4/pdfobject.min.js"></script>
    <div id="content" class="main-content">
        <div class="container-fluid">
            <div class="container-fluid">
                <!-- BREADCRUMB -->
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">COURSES</a></li>
                            <li class="breadcrumb-item active" aria-current="page">READING</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->

                <div class="row layout-top-spacing">
                    <div id="tabsSimple" class="col-xl-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Reading</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="vertical-pill">
                                    <div class="d-flex align-items-start">
                                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <button class="nav-link active text-nowrap" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home text-nowrap" aria-selected="true">READING</button>
                                            <button class="nav-link text-nowrap" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile text-nowrap" aria-selected="false">READING PRACTICES</button>
                                            <button class="nav-link text-nowrap" id="v-pills-contact-tab" data-bs-toggle="pill" data-bs-target="#v-pills-contact" type="button" role="tab" aria-controls="v-pills-contact text-nowrap" aria-selected="false">READING PRACTICES-2</button>
                                        </div>
                                        <div class="tab-content w-100" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                                                <div id="pdf-viewer" style="width: 100%; height: 600px;"></div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                                                <div id="pdf-viewer-3" style="width: 100%; height: 600px;"></div>
                                            </div>

                                            <div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab" tabindex="0">
                                                <div id="pdf-viewer-2" style="width: 100%; height: 600px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        PDFObject.embed("{{ asset('src/assets/pdf/TheIELTSReadingmodule.pdf') }}", "#pdf-viewer",{
            pdfOpenParams: {
                toolbar: 0,
                navpanes: 0,
                statusbar: 0,
                download: "closed"
            }
        });
        PDFObject.embed("{{ asset('src/assets/pdf/ieltsfever-general-reading-practice-test-4-pdf.pdf') }}", "#pdf-viewer-2",{
            pdfOpenParams: {
                toolbar: 0,
                navpanes: 0,
                statusbar: 0,
                download: "closed"
            }
        });
        PDFObject.embed("{{ asset('src/assets/pdf/ieltsfever-general-reading-practice-test-7-pdf.pdf') }}", "#pdf-viewer-3",{
            pdfOpenParams: {
                toolbar: 0,
                navpanes: 0,
                statusbar: 0,
                download: "closed"
            }
        });
    </script>
@endsection
@section('scripts')
    @parent

@endsection
