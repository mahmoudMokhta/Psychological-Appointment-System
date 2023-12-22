@extends('layouts.main_dashboard')

@section('content_dashboard')

<div class="page-inner">
    <!-- .page-title-bar -->
    <header class="page-title-bar d-flex justify-content-between ">
        <!-- page title stuff goes here -->
        <h1 class="page-title"> all appointment </h1>
        <a class="btn btn-success " href="{{ route('appointment.create') }}">Create appointment</a>
    </header><!-- /.page-title-bar -->
    <!-- .page-section -->
    <div class="page-section">
        <!-- .section-block -->
        <div class="card card-fluid">
            <!-- .card-body -->
            <div class="card-body">
                <div class="table-responsive">
                    <!-- .table -->
                    @if ($appointments && count($appointments) > 0)
                    <table class="table">
                        <!-- thead -->
                        <thead>
                            <tr>
                                <th colspan="3" style="min-width: 240px">
                                    <div class="thead-dd dropdown">
                                        <span class="custom-control custom-control-nolabel custom-checkbox"><input
                                                type="checkbox" class="custom-control-input" id="check-handle2"> <label
                                                class="custom-control-label" for="check-handle2"></label></span>
                                        <div class="thead-btn" role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <span class="fa fa-caret-down"></span>
                                        </div>
                                        <div class="dropdown-menu">
                                            <div class="dropdown-arrow"></div><a class="dropdown-item" href="#">Select
                                                all</a> <a class="dropdown-item" href="#">Unselect all</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Bulk
                                                remove</a> <a class="dropdown-item" href="#">Bulk edit</a> <a
                                                class="dropdown-item" href="#">Separate actions</a>
                                        </div>
                                    </div>
                                </th>
                                <th> Appointment Date </th>
                                <th> Appointment time </th>
                                <th> Status </th>
                                <th style="width:100px; min-width:100px;"> &nbsp; </th>
                            </tr>
                        </thead><!-- /thead -->
                        <!-- tbody -->
                        <tbody>
                            <!-- tr -->
                            @foreach ($appointments as $appointment )


                            <tr>
                                <td class="align-middle col-checker">
                                    <div class="custom-control custom-control-nolabel custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="cid5743"> <label
                                            class="custom-control-label" for="cid5743"></label>
                                    </div>
                                </td>
                                <td class="align-middle px-0" style="width: 1.5rem">
                                    <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="collapse"
                                        data-target="#details-{{ $appointment->id }}"><span
                                            class="collapse-indicator"><i class="fa fa-angle-right"></i></span></button>
                                </td>
                                <td class="align-middle">
                                    <a href="#">Opentech</a>
                                </td>
                                <td class="align-middle"> {{ $appointment->appointment_date }} </td>
                                <td class="align-middle"> {{ $appointment->appointment_time }} </td>
                                <td class="align-middle">
                                    <span
                                        class="badge badge-subtle badge-{{ $appointment->status == 'available' ? 'success' : 'danger' }}">
                                        {{ $appointment->status }}</span>
                                </td>
                                <td class="align-middle text-right">
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-icon btn-secondary" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fa fa-fw fa-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" style="">
                                            <div class="dropdown-arrow"></div>

                                            <a href="{{ route('appointment.edit', $appointment->id) }}"
                                                class="dropdown-item btn btn-success">
                                                <i class="fa fa-edit"></i> Edit Appointment
                                            </a>

                                            <form action="{{ route('appointment.updateStatus', $appointment->id) }}"
                                                method="post" class="dropdown-item">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit"
                                                    class="btn btn-block
                                                    {{ $appointment->status == 'available' ? 'btn-success' : 'btn-danger' }}">
                                                    {{ $appointment->status == 'available' ? 'Reserve' : 'Make Available' }}
                                                </button>
                                            </form>

                                            <form action="{{ route('appointment.destroy', $appointment->id) }}"
                                                method="post" class="dropdown-item">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-block"
                                                    onclick="return confirm('هل أنت متأكد من حذف الميعاد؟')">
                                                    <i class="fa fa-trash"></i> Remove
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tr>
                            @if (isset($appointment->patient) && $appointment->status == 'reserved')

                            <tr class="row-details bg-light collapse" id="details-{{ $appointment->id }}">
                                <td colspan="6">
                                    <!-- .row -->
                                    <div class="row">
                                        <!-- .col -->
                                        <div class="col-md-auto text-center">
                                            <div class="tile tile-xl tile-circle bg-purple mb-2"> M </div>
                                            <h3 class="card-title mb-4"> Opentech </h3>
                                        </div><!-- /.col -->
                                        <!-- .col -->
                                        <div class="col-md-7">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td> Contact </td>
                                                        <td> {{$appointment->patient->name  }} </td>
                                                    </tr>
                                                    <tr>
                                                        <td> Email </td>
                                                        <td> {{$appointment->patient->email  }} </td>
                                                    </tr>
                                                    <tr>
                                                        <td> Phone </td>
                                                        <td> {{$appointment->patient->phoneNumber  }} </td>
                                                    </tr>
                                                    <tr>
                                                        <td> Address </td>
                                                        <td> {{$appointment->patient->address  }} </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div><!-- /.col -->
                                        <!-- .col -->
                                        <div class="col">
                                            <!-- .publisher -->
                                            <form class="publisher keep-focus focus" action="">
                                                @csrf
                                                <label for="publisherInput85743" class="publisher-label">Send a message
                                                    to patient</label> <!-- .publisher-input -->
                                                <div class="publisher-input">
                                                    <textarea id="publisherInput85743" class="form-control"
                                                        placeholder="Write a message"></textarea>
                                                </div><!-- /.publisher-input -->
                                                <!-- .publisher-actions -->
                                                <div class="publisher-actions align-items-center">
                                                    <!-- .publisher-tools -->
                                                    <div class="publisher-tools mr-auto">
                                                        <div class="btn btn-light btn-icon fileinput-button">
                                                            <i class="fa fa-paperclip"></i> <input type="file"
                                                                id="attachment85743[]" name="attachment85743[]"
                                                                multiple="">
                                                        </div><button type="button" class="btn btn-light btn-icon"><i
                                                                class="far fa-smile"></i></button>
                                                    </div><!-- /.publisher-tools -->
                                                    <div class="custom-control custom-control-inline custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="copymsg5743" checked=""> <label
                                                            class="custom-control-label" for="copymsg5743">Send me a
                                                            copy</label>
                                                    </div><button type="submit" class="btn btn-primary">Send</button>
                                                </div><!-- /.publisher-actions -->
                                            </form><!-- /.publisher -->
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->
                                </td>
                            </tr><!-- /tr -->
                            @endif

                            @endforeach
                        </tbody><!-- /tbody -->
                    </table><!-- /.table -->
                    @else
                    <h4 class="text-muted">No appointments available.</h4>
                    @endif



                </div><!-- /.table-responsive -->
            </div><!-- /.card-body -->
        </div>
    </div><!-- /.page-section -->
</div>

@endsection
