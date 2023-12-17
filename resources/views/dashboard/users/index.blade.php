@extends('layouts.main_dashboard')

@section('content_dashboard')
    <header class="page-title-bar">
        <div class="d-flex justify-content-between  flex-md-row">
            <p class="lead">
                <span class="font-weight-bold">all users</span>
            </p>
            <a class="btn btn-info" href="{{ route('user.create') }}">Create User</a>
        </div>
    </header>
    <div class="page-section">
        <div class="card-body">
            <!-- .form-group -->
            <div class="form-group">
                <!-- .input-group -->
                <div class="input-group input-group-alt">

                    <form class="input-group" action="{{ route('user.search') }}" method="get">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                        </div>
                        <input name="search" type="text" class="form-control" placeholder="Search record">
                        <input class="btn btn-success" type="submit" value="search">
                    </form><!-- /.input-group -->
                </div><!-- /.input-group -->
            </div><!-- /.form-group -->
            @if (count($users) < 1)
                <h3 class="text-center text-danger">No resulte <a href="{{ route('user.index') }}">go back</a> </h3>
            @else
                <div class="table-responsive">
                    <!-- .table -->
                    <table class="table">
                        <!-- thead -->
                        <thead>
                            <tr>
                                <th colspan="2" style="min-width:320px">
                                    <div class="thead-dd dropdown">
                                        <span class="custom-control custom-control-nolabel custom-checkbox"><input
                                                type="checkbox" class="custom-control-input" id="check-handle"> <label
                                                class="custom-control-label" for="check-handle"></label></span>
                                        <div class="thead-btn" role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <span class="fa fa-caret-down"></span>
                                        </div>
                                        <div class="dropdown-menu">
                                            <div class="dropdown-arrow"></div><a class="dropdown-item" href="#">Select
                                                all</a>
                                            <a class="dropdown-item" href="#">Unselect all</a>

                                        </div>
                                    </div>
                                </th>
                                <th> Role </th>
                                <th> Email </th>
                                <th> Phone </th>
                                <th> Address </th>
                                <th style="width:100px; min-width:100px;"> &nbsp; </th>
                            </tr>
                        </thead><!-- /thead -->
                        <!-- tbody -->
                        <tbody>
                            @foreach ($users as $user)
                                <tr data-role="{{ $user->role }}">
                                    <td class="align-middle col-checker ">
                                        <div class="custom-control custom-control-nolabel custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="selectedRow[]"
                                                id="p3"> <label class="custom-control-label" for="p3"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ route('profile.index', $user->id) }}" class="tile tile-img mr-1"><img
                                                class="img-fluid" src="{{ asset('storage/' . $user->image) }}"
                                                alt="Card image cap"></a> <a
                                            href="{{ route('profile.index', $user->id) }}">{{ $user->name }}
                                        </a>
                                    </td>
                                    <td class="align-middle">{{ $user->role }} </td>
                                    <td class="align-middle"> {{ $user->email }}</td>
                                    <td class="align-middle"> {{ $user->phoneNumber }} </td>
                                    <td class="align-middle"> {{ $user->address }} </td>
                                    <td class="align-middle text-right">
                                        <a href="{{ route('user.edit', $user->id) }}" class=" text-success"><i
                                                class="fa fa-pencil-alt"></i>

                                        </a>
                                        <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-icon btn-outline-danger"
                                                onclick="return confirm('Are you sure you want to delete this user?')">
                                                <i class="far fa-trash-alt"></i>
                                                <span class="sr-only">Remove</span>
                                            </button>
                                        </form>
                                    </td>
                                </tr><!-- /tr -->
                            @endforeach
                        </tbody><!-- /tbody -->
                    </table><!-- /.table -->
                </div><!-- /.table-responsive -->
            @endif
        </div>
    </div>
@endsection
<script>
    $(document).ready(function() {
        const filterBySelect = $('#filterBy');
        const searchInput = $('#searchInput');

        filterBySelect.on('change', handleFilterChange);
        searchInput.on('input', handleSearchInput);

        function handleFilterChange() {
            const filterValue = filterBySelect.val();
            filterTableRows(filterValue, searchInput.val());
        }

        function handleSearchInput() {
            const searchTerm = searchInput.val();
            const filterValue = filterBySelect.val();
            filterTableRows(filterValue, searchTerm);
        }

        function filterTableRows(filter, search) {
            // عرض/إخفاء الصفوف بناءً على الفلتر والبحث
            $('.user-row').each(function() {
                const row = $(this);
                const rowRole = row.data('role').toLowerCase();
                const shouldShow = filter === 'all' || rowRole === filter;
                const containsSearchTerm = row.text().toLowerCase().includes(search.toLowerCase());
                row.toggle(shouldShow && containsSearchTerm);
            });
        }
    });
</script>
