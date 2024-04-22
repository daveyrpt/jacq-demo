@extends('layouts.app')

@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">

                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card sales-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#" id="filter-permanent-today">Today</a></li>
                                        <li><a class="dropdown-item" href="#" id="filter-permanent-month">This Month</a></li>
                                        <li><a class="dropdown-item" href="#" id="filter-permanent-year">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Ahli Tetap <span>| <span id="filter-permanent-type"></span></span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6 id="filter-permanent-value"></h6>
                                            <span id="filter-permanent-value-percentage" class="text-success small pt-1 fw-bold">%</span> <span
                                                class="text-muted small pt-2 ps-1">increase</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card revenue-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#" id="filter-alliance-today">Today</a></li>
                                        <li><a class="dropdown-item" href="#" id="filter-alliance-month">This Month</a></li>
                                        <li><a class="dropdown-item" href="#" id="filter-alliance-year">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Ahli Bersekutu <span>| <span id="filter-alliance-type"></span></span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6 id="filter-alliance-value"></h6>
                                            <span id="filter-alliance-value-percentage" class="text-success small pt-1 fw-bold">%</span> <span
                                                class="text-muted small pt-2 ps-1">increase</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-4">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Pelawat <span>| This Year</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>1244</h6>
                                            <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                                class="text-muted small pt-2 ps-1">decrease</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="card-title mb-0">Membership Record</h5>
                        <a href="{{ route('profile.create') }}" class="btn btn-success">Tambah Ahli</a>
                    </div>
                    <table id="membership-table" class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Occupation</th>
                                <th scope="col" class="text-center">Member Type</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userProfile as $index => $member)
                                <tr>
                                    <th scope="row" class="text-center">{{ $index + 1 }}</th>
                                    <td><a href="{{ route('profile.index', $member->user_id) }}"
                                            class="text-primary">{{ $member->fullname ?? '-' }}</a></td>
                                    <td>{{ $member->state ?? '-' }}</td>
                                    <td>{{ $member->occupation ?? '-' }}</td>
                                    <td class="text-center text-capitalize text-white"><span
                                            class="badge {{ $member->member_type == 'tetap' ? 'bg-primary ' : 'bg-warning' }}">{{ $member->member_type ?? '-' }}</span>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href='{{ route('profile.edit', ['userId' => $member->user_id]) }}'
                                                type="button" class="btn btn-secondary btn-sm me-1"><i
                                                    class="bi bi-pencil-fill"></i></a>
                             {{--                <a href="{{ route('profile.destroy', $member->user_id) }}"
                                                class="btn btn-danger btn-sm" ><i
                                                    class="bi bi-trash"></i></a> --}}

                     <form method="POST" action="{{ route('profile.destroy', $member->user_id) }}">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                        </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </main>
    <script>
        $(document).ready(function(){
            // for permament member 
            $("#filter-permanent-today").on("click", function(){
                updateFilterPermanentValue('Today', {{$totalUsersTodayForPermanentMember}}, {{$percentagePermanentIncreaseDay}});
            });

            $("#filter-permanent-month").on("click", function(){
                updateFilterPermanentValue('This Month', {{$totalUsersThisMonthForPermanentMember}}, {{$percentagePermanentIncreaseMonth}});
            });

            $("#filter-permanent-year").on("click", function(){
                updateFilterPermanentValue('This Year', {{$totalUsersThisYearForPermanentMember}}, {{$percentagePermanentIncreaseYear}});
            });

            $("#filter-permanent-today").click();

            function updateFilterPermanentValue(type, value, percentange) {
                $("#filter-permanent-value").text(value);
                $("#filter-permanent-type").text(type);
                $("#filter-permanent-value-percentage").text(percentange);
            }

            // for alliance member
            $("#filter-alliance-today").on("click", function(){
                updateFilterAllianceValue('Today', {{$totalUsersTodayForAllianceMember}}, {{$percentageAllianceIncreaseDay}});
            });

            $("#filter-alliance-month").on("click", function(){
                updateFilterAllianceValue('This Month', {{$totalUsersThisMonthForAllianceMember}}, {{$percentageAllianceIncreaseMonth}});
            });

            $("#filter-alliance-year").on("click", function(){
                updateFilterAllianceValue('This Year', {{$totalUsersThisYearForAllianceMember}}, {{$percentageAllianceIncreaseYear}});
            });

            $("#filter-alliance-today").click();

            function updateFilterAllianceValue(type, value, percentange) {
                $("#filter-alliance-value").text(value);
                $("#filter-alliance-type").text(type);
                $("#filter-alliance-value-percentage").text(percentange);
            }

        });
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>

    <script>
        new DataTable('#membership-table', {
            pagingType: 'simple_numbers',
            layout: {
        top: {
            buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5']
        },
                bottomEnd: {
                    paging: {
                        boundaryNumbers: false
                    }
                }
            }
        });
    </script>
@endsection