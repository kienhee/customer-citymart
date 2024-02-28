@extends('admin.layout.index')
@section('title', 'Permission')
@section('content')
    <x-notice />
    <h4 class="py-3 mb-2">Roles List</h4>
    <p>
        A role provided access to predefined menus and features so that depending on <br />
        assigned role an administrator can have access to what user needs.
    </p>
    <!-- Role cards -->
    <div class="row g-4 align-items-center mb-3">
        @foreach ($roleList as $item)
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <h6 class="fw-normal">Total {{ $item['length'] }} users</h6>
                            @if (count($item['users']) > 0)
                                <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                    @foreach ($item['users'] as $user)
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="{{ $user->full_name }}" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle object-fit-cover"
                                                src="{{ $user->avatar ? $user->avatar : asset('admin-frontend/assets/img/avatar.png') }}"
                                                alt="Avatar" />
                                        </li>
                                    @endforeach


                                </ul>
                            @endif

                        </div>
                        <div class="d-flex justify-content-between align-items-end">
                            <div class="role-heading">
                                <h4 class="mb-1">{{ $item['group']->name }}</h4>
                                @can('update', App\Models\Group::class)
                                    <a href="{{ route('dashboard.permission.edit-role', $item['group']->id) }}"><small>Edit
                                            Role</small></a>
                                @endcan
                            </div>
                            @can('delete', App\Models\Group::class)
                                <form action="{{ route('dashboard.permission.delete-role', $item['group']->id) }}"
                                    method="POST" onsubmit="return confirm('Are you sure you want to permanently delete?')">
                                    @csrf
                                    @method('delete')
                                    <button class="btn text-muted p-0"><i class="bx bx-trash me-1"></i></button>
                                </form>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        @can('create', App\Models\Group::class)
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100">
                    <div class="row h-100">
                        <div class="col-sm-5">
                            <div class="d-flex align-items-end h-100 justify-content-center mt-sm-0 mt-3">
                                <img src="{{ asset('admin-frontend') }}/assets/img/illustrations/sitting-girl-with-laptop-light.png"
                                    class="img-fluid" alt="Image" width="120"
                                    data-app-light-img="illustrations/sitting-girl-with-laptop-light.png"
                                    data-app-dark-img="illustrations/sitting-girl-with-laptop-dark.png" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="card-body text-sm-end text-center ps-sm-0">

                                <a class="btn btn-primary mb-3 text-nowrap add-new-role"
                                    href="{{ route('dashboard.permission.add-role') }}"><i class="fa-solid fa-plus"></i>
                                    &nbsp;Add New Role</a>
                                <p class="mb-0">Add role, if it does not exist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endcan
    </div>
    <!--/ Role cards -->



    <h4 class="py-3 mb-2">Permissions List</h4>
    <p>
        Used only during development and only by developer accounts.
    </p>
    <!-- Permission Table -->
    <div class="card">

        <div class="card-header border-bottom d-flex align-items-center justify-content-end">
            <button class="dt-button add-new btn btn-primary mb-3 mb-md-0" tabindex="0" aria-controls="DataTables_Table_0"
                type="button" data-bs-toggle="modal" data-bs-target="#addPermissionModal"><span><i
                        class="fa-solid fa-plus"></i> &nbsp; Add
                    Permission</span></button>
        </div>
        <div class="card-datatable table-responsive">
            <table class="datatables-permissions table border-top" id="permission-table">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>route</th>
                        <th>description</th>
                        <th>created at</th>
                        <th>actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <!--/ Permission Table -->

    <!-- Modal -->
    <!-- Add Permission Modal -->
    <div class="modal fade" id="addPermissionModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-simple">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h3>Add New Permission</h3>
                        <p>Permissions you may use and assign to your users.</p>
                    </div>

                    <div class="alert alert-danger d-none" id="alert-error">
                        <ul id="list-error" class="mb-0">
                        </ul>
                    </div>
                    <div class="alert alert-success d-none" id="alert-success"></div>
                    <form id="addPermissionForm" class="row" onsubmit="return false">
                        <div class="col-12 mb-3">
                            <label class="form-label" for="title">Permission Name</label>
                            <input type="text" id="title" name="title" class="form-control"
                                placeholder="Permission Name" name="title" autofocus />
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label" for="route">Route</label>
                            <input type="text" id="route" name="route" class="form-control" placeholder="Route"
                                name="route" />
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label" for="description">Description</label>
                            <textarea class="form-control" id="description" placeholder="Description" name="description" rows="3"></textarea>
                        </div>
                        <div class="col-12 text-center demo-vertical-spacing">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Create Permission</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                aria-label="Close">
                                Discard
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function() {
            let table = $('#permission-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('dashboard.permission.list-permission') !!}',
                columns: [{
                        data: 'title',
                        name: 'title',
                        orderable: false,
                    },
                    {
                        data: 'route',
                        name: 'route',
                        orderable: false,
                    },
                    {
                        data: 'description',
                        name: 'description',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false
                    },
                ],
                order: [
                    [3,
                        'desc'
                    ] // 4 corresponds to the index of the 'created_at' column in the 'columns' array
                ],
                initComplete: function() {
                    // Customize the search input placeholder
                    $('#users-table_filter input').attr('placeholder', 'Search');
                },
            });


            FormValidation.formValidation(document.getElementById('addPermissionForm'), {
                fields: {
                    title: {
                        validators: {
                            notEmpty: {
                                message: 'Please enter permission name'
                            }
                        }
                    },
                    route: {
                        validators: {
                            notEmpty: {
                                message: 'Please enter route name'
                            }
                        }
                    },

                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap5: new FormValidation.plugins.Bootstrap5({
                        // Use this for enabling/changing valid/invalid class
                        // eleInvalidClass: '',
                        eleValidClass: '',
                        rowSelector: '.col-12'
                    }),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                    // Submit the form when all fields are valid
                    // defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
                    autoFocus: new FormValidation.plugins.AutoFocus()
                }

            }).on('core.form.valid', function() {

                FormValidation.utils.fetch('{{ route('dashboard.permission.add-permission') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    params: {
                        title: $('#title').val(),
                        route: $('#route').val(),
                        description: $('#description').val(),
                    },
                }).then(function(response) {

                    if (response.errors) {
                        $('#alert-success').addClass('d-none')
                        $('#alert-error').removeClass('d-none');
                        let html = '';
                        let errorArr = parseServerError(response);
                        errorArr.forEach(error => {
                            html += `<li>${error}</li>`
                        });
                        $('#list-error').html(html)
                    } else {
                        $('#alert-error').addClass('d-none')
                        let result = $('#alert-success')
                        result.removeClass('d-none');
                        result.text(response.message);
                        table.ajax.reload();
                        $('#addPermissionForm')[0].reset();
                    }

                })
            });


        });

        function parseServerError(errorData) {
            let errors = errorData.errors || {};
            let errorArray = [];

            // Loop through each field in the errors object
            for (let field in errors) {
                if (errors.hasOwnProperty(field)) {
                    // Add each error message to the errorArray
                    errors[field].forEach(function(errorMessage) {
                        errorArray.push(errorMessage);
                    });
                }
            }

            return errorArray;
        }
    </script>
@endsection
