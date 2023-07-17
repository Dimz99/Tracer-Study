@extends('layouts.index')

@section('content')
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="row align-items-end">
            <div class="col-sm mb-2 mb-sm-0">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Home</a></li>
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Alumni</li>
                </ol>
              </nav>

              <h1 class="page-header-title">Alumni</h1>
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <!-- Card -->
        <div class="card">
          <!-- Header -->
          <div class="card-header">
            <div class="row justify-content-between align-items-center flex-grow-1">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <form>
                  <!-- Search -->
                  <div class="input-group input-group-merge input-group-flush">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tio-search"></i>
                      </div>
                    </div>
                    <input id="datatableSearch" type="search" class="form-control" placeholder="Search users" aria-label="Search users">
                  </div>
                  <!-- End Search -->
                </form>
              </div>

              <div class="col-sm-6">
                <div class="d-sm-flex justify-content-sm-end align-items-sm-center">
                  <!-- Datatable Info -->
                  <div id="datatableCounterInfo" class="mr-2 mb-2 mb-sm-0" style="display: none;">
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-3">
                        <span id="datatableCounter">0</span>
                        Selected
                      </span>
                      <a class="btn btn-sm btn-outline-danger" href="javascript:;">
                        <i class="tio-delete-outlined"></i> Delete
                      </a>
                    </div>
                  </div>
                  <!-- End Datatable Info -->

                  <!-- Unfold -->
                  <div class="hs-unfold mr-2">
                    <a class="js-hs-unfold-invoker btn btn-sm btn-white dropdown-toggle" href="javascript:;"
                       data-hs-unfold-options='{
                         "target": "#usersExportDropdown",
                         "type": "css-animation"
                       }'>
                      <i class="tio-download-to mr-1"></i> Export
                    </a>

                    <div id="usersExportDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm-right">
                      <span class="dropdown-header">Options</span>
                      <a id="export-copy" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{asset('/assets/svg/illustrations/copy.svg')}}" alt="Image Description">
                        Copy
                      </a>
                      <a id="export-print" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{asset('/assets/svg/illustrations/print.svg')}}" alt="Image Description">
                        Print
                      </a>
                      <div class="dropdown-divider"></div>
                      <span class="dropdown-header">Download options</span>
                      <a id="export-excel" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{asset('/assets/svg/brands/excel.svg')}}" alt="Image Description">
                        Excel
                      </a>
                      <a id="export-csv" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{asset('/assets/svg/components/placeholder-csv-format.svg')}}" alt="Image Description">
                        .CSV
                      </a>
                      <a id="export-pdf" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{asset('/assets/svg/brands/pdf.svg')}}" alt="Image Description">
                        PDF
                      </a>
                    </div>
                  </div>
                  <!-- End Unfold -->

                  <!-- Unfold -->
                  <div class="hs-unfold">
                    <a class="js-hs-unfold-invoker btn btn-sm btn-white" href="javascript:;"
                       data-hs-unfold-options='{
                         "target": "#usersFilterDropdown",
                         "type": "css-animation",
                         "smartPositionOff": true
                       }'>
                      <i class="tio-filter-list mr-1"></i> Filter <span class="badge badge-soft-dark rounded-circle ml-1">2</span>
                    </a>

                    <div id="usersFilterDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm-right dropdown-card card-dropdown-filter-centered" style="min-width: 22rem;">
                      <!-- Card -->
                      <div class="card">
                        <div class="card-header">
                          <h5 class="card-header-title">Filter users</h5>

                          <!-- Toggle Button -->
                          <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-secondary ml-2" href="javascript:;"
                             data-hs-unfold-options='{
                              "target": "#usersFilterDropdown",
                              "type": "css-animation",
                              "smartPositionOff": true
                             }'>
                            <i class="tio-clear tio-lg"></i>
                          </a>
                          <!-- End Toggle Button -->
                        </div>

                        <div class="card-body">
                          <form>
                            <div class="form-row">
                              <div class="col-sm form-group">
                                <small class="text-cap mb-2">Position</small>

                                <!-- Select -->
                                <select class="js-select2-custom js-datatable-filter custom-select" size="1" style="opacity: 0;"
                                        data-target-column-index="2"
                                        data-hs-select2-options='{
                                          "minimumResultsForSearch": "Infinity"
                                        }'>
                                  <option value="">Any</option>
                                  <option value="Accountant">Accountant</option>
                                  <option value="Co-founder">Co-founder</option>
                                  <option value="Designer">Designer</option>
                                  <option value="Developer">Developer</option>
                                  <option value="Director">Director</option>
                                </select>
                                <!-- End Select -->
                              </div>

                              <div class="col-sm form-group">
                                <small class="text-cap mb-2">Status</small>

                                <!-- Select -->
                                <select class="js-select2-custom js-datatable-filter custom-select" size="1" style="opacity: 0;"
                                        data-target-column-index="4"
                                        data-hs-select2-options='{
                                          "minimumResultsForSearch": "Infinity"
                                        }'>
                                  <option value="">Any status</option>
                                  <option value="Active" data-option-template='<span class="legend-indicator bg-success"></span>Active'>Active</option>
                                  <option value="Pending" data-option-template='<span class="legend-indicator bg-warning"></span>Pending'>Pending</option>
                                  <option value="Suspended" data-option-template='<span class="legend-indicator bg-danger"></span>Suspended'>Suspended</option>
                                </select>
                                <!-- End Select -->
                              </div>
                            </div>
                            <!-- End Row -->

                            <a class="js-hs-unfold-invoker btn btn-block btn-primary" href="javascript:;"
                               data-hs-unfold-options='{
                                "target": "#usersFilterDropdown",
                                "type": "css-animation",
                                "smartPositionOff": true
                               }'>Apply</a>
                          </form>
                        </div>
                      </div>
                      <!-- End Card -->
                    </div>
                  </div>
                  <!-- End Unfold -->
                </div>
              </div>
            </div>
            <!-- End Row -->
          </div>
          <!-- End Header -->

          <!-- Table -->
          <div class="table-responsive datatable-custom">
            <table id="datatable" class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                   data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 5],
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 10,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
              <thead class="thead-light">
                <tr>
                  <th class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                      <label class="custom-control-label" for="datatableCheckAll"></label>
                    </div>
                  </th>
                  <th class="table-column-pl-0">Nama</th>
                  <th>NIM</th>
                  <th>Angkatan</th>
                  <th>Jurusan</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck1">
                      <label class="custom-control-label" for="usersDataCheck1"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="#">
                      <div class="avatar">
                        <img class="avatar-img" src="{{asset('/assets/img/160x160/img6.jpg')}}" alt="Image Description">
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Dimas Dwi <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Terverifikasi"></i></span>
                      </div>
                    </a>
                  </td>
                  <td>17104410041</td>
                  <td>2017</td>
                  <td>Teknik Informatika</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;">
                    <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck1">
                      <label class="custom-control-label" for="usersDataCheck1"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="#">
                      <div class="avatar">
                        <img class="avatar-img" src="{{asset('/assets/img/160x160/img6.jpg')}}" alt="Image Description">
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Dimas Dwi <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Terverifikasi"></i></span>
                      </div>
                    </a>
                  </td>
                  <td>17104410041</td>
                  <td>2017</td>
                  <td>Teknik Informatika</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;">
                    <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
          <!-- End Table -->

          <!-- Footer -->
          <div class="card-footer">
            <!-- Pagination -->
            <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
              <div class="col-sm mb-2 mb-sm-0">
                <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                  <span class="mr-2">Showing:</span>

                  <!-- Select -->
                  <select id="datatableEntries" class="js-select2-custom"
                          data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "custom-select custom-select-sm custom-select-borderless",
                            "dropdownAutoWidth": true,
                            "width": true
                          }'>
                    <option value="10" selected>10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                  </select>
                  <!-- End Select -->

                  <span class="text-secondary mr-2">of</span>

                  <!-- Pagination Quantity -->
                  <span id="datatableWithPaginationInfoTotalQty"></span>
                </div>
              </div>

              <div class="col-sm-auto">
                <div class="d-flex justify-content-center justify-content-sm-end">
                  <!-- Pagination -->
                  <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                </div>
              </div>
            </div>
            <!-- End Pagination -->
          </div>
          <!-- End Footer -->
        </div>
        <!-- End Card -->
      </div>
      <!-- End Content -->
@endsection

@push('css')
    <link rel="stylesheet" href="/assets/vendor/select2/dist/css/select2.min.css">
@endpush

@push('js')
    <script src="{{ asset('/assets/vendor/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/hs-counter/dist/hs-counter.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/appear/dist/appear.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/datatables.net.extensions/select/select.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

    <script>
      $(document).on('ready', function () {
        // =======================================================
        // INITIALIZATION OF SELECT2
        // =======================================================
        $('.js-select2-custom').each(function () {
          var select2 = $.HSCore.components.HSSelect2.init($(this));
        });


        // INITIALIZATION OF COUNTERS
        // =======================================================
        $('.js-counter').each(function() {
          var counter = new HSCounter($(this)).init();
        });


        // INITIALIZATION OF DATATABLES
        // =======================================================
        var datatable = $.HSCore.components.HSDatatables.init($('#datatable'), {
          dom: 'Bfrtip',
          buttons: [
            {
              extend: 'copy',
              className: 'd-none'
            },
            {
              extend: 'excel',
              className: 'd-none'
            },
            {
              extend: 'csv',
              className: 'd-none'
            },
            {
              extend: 'pdf',
              className: 'd-none'
            },
            {
              extend: 'print',
              className: 'd-none'
            },
          ],
          select: {
            style: 'multi',
            selector: 'td:first-child input[type="checkbox"]',
            classMap: {
              checkAll: '#datatableCheckAll',
              counter: '#datatableCounter',
              counterInfo: '#datatableCounterInfo'
            }
          },
          language: {
            zeroRecords: '<div class="text-center p-4">' +
                '<img class="mb-3" src="{{asset('/assets/svg/illustrations/sorry.svg')}}" alt="Image Description" style="width: 7rem;">' +
                '<p class="mb-0">No data to show</p>' +
                '</div>'
          }
        });

        $('#export-copy').click(function() {
          datatable.button('.buttons-copy').trigger()
        });

        $('#export-excel').click(function() {
          datatable.button('.buttons-excel').trigger()
        });

        $('#export-csv').click(function() {
          datatable.button('.buttons-csv').trigger()
        });

        $('#export-pdf').click(function() {
          datatable.button('.buttons-pdf').trigger()
        });

        $('#export-print').click(function() {
          datatable.button('.buttons-print').trigger()
        });

        $('.js-datatable-filter').on('change', function() {
          var $this = $(this),
            elVal = $this.val(),
            targetColumnIndex = $this.data('target-column-index');

          datatable.column(targetColumnIndex).search(elVal).draw();
        });

        $('#datatableSearch').on('mouseup', function (e) {
          var $input = $(this),
            oldValue = $input.val();

          if (oldValue == "") return;

          setTimeout(function(){
            var newValue = $input.val();

            if (newValue == ""){
              // Gotcha
              datatable.search('').draw();
            }
          }, 1);
        });
      });
    </script>
@endpush
