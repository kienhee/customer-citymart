@extends('admin.layout.index')
@section('title', 'Add New Role')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard.index') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="javascript:void(0);">Roles</a>
            </li>
            <li class="breadcrumb-item active">Add New Role</li>
        </ol>
    </nav>
    <form action="{{ route('dashboard.permission.store-role') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-body">
                <x-notice />
                <div class=" d-flex align-items-center justify-content-end">
                    <a href="{{ route('dashboard.permission.index') }}" class="btn btn-outline-primary">
                        <i class='bx bx-list-ul'></i> &nbsp;Roles List
                    </a>
                </div>

                <div class="mb-4 border-bottom pb-4">
                    <label class="form-label" for="name">ROLE NAME: <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('name') invalid @enderror" value="{{ old('name') }}"
                        name="name" id="name" placeholder="Enter a role name">
                    @error('name')
                        <p class="text-danger mt-1 fs-6">{{ $message }}</p>
                    @enderror
                </div>
                <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <h5 class="mb-0"> Permissions</h5>
                    <button id="toggleCheckboxesBtn" class="btn btn-sm btn-outline-primary" type="button">Select
                        all</button>
                </div>

                <div class="table-responsive">
                    <table class="table table-borderless  mb-4">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Permissions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($modules as $module)
                                @if ($module->route == 'admin')
                                    <tr>
                                        <td class="d-flex align-items-center gap-1">
                                            <strong>{{ $module->title }}</strong>
                                            @if ($module->description)
                                                <i class="bx bx-info-circle bx-xs" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" aria-label="{{ $module->description }}"
                                                    data-bs-original-title="{{ $module->description }}"></i>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label" for="role_{{ $module->route }}_access">
                                                    View
                                                </label>
                                                <input class="form-check-input" type="checkbox"
                                                    name="roles[{{ $module->route }}][]" value="view"
                                                    id="role_{{ $module->route }}_access">
                                            </div>
                                        </td>

                                    </tr>
                                @elseif($module->route == 'dashboard')
                                    <tr>
                                        <td class="d-flex align-items-center gap-1">
                                            <strong>{{ $module->title }}</strong>
                                            @if ($module->description)
                                                <i class="bx bx-info-circle bx-xs" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" aria-label="{{ $module->description }}"
                                                    data-bs-original-title="{{ $module->description }}"></i>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label" for="role_{{ $module->route }}_dashboard">
                                                    View
                                                </label>
                                                <input class="form-check-input" type="checkbox"
                                                    name="roles[{{ $module->route }}][]" value="view"
                                                    id="role_{{ $module->route }}_dashboard">
                                            </div>
                                        </td>

                                    </tr>
                                @elseif($module->route == 'library')
                                    <tr>
                                        <td class="d-flex align-items-center gap-1">
                                            <strong>{{ $module->title }}</strong>
                                            @if ($module->description)
                                                <i class="bx bx-info-circle bx-xs" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" aria-label="{{ $module->description }}"
                                                    data-bs-original-title="{{ $module->description }}"></i>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label" for="role_{{ $module->route }}_library">
                                                    Management (View, add, edit, delete)
                                                </label>
                                                <input class="form-check-input" type="checkbox"
                                                    name="roles[{{ $module->route }}][]" value="view"
                                                    id="role_{{ $module->route }}_library">
                                            </div>
                                        </td>

                                    </tr>
                                @elseif($module->route == 'settings')
                                    <tr>
                                        <td class="d-flex align-items-center gap-1">
                                            <strong>{{ $module->title }}</strong>
                                            @if ($module->description)
                                                <i class="bx bx-info-circle bx-xs" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" aria-label="{{ $module->description }}"
                                                    data-bs-original-title="{{ $module->description }}"></i>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label" for="role_{{ $module->route }}_setting">
                                                    Full management (View, update)
                                                </label>
                                                <input class="form-check-input" type="checkbox"
                                                    name="roles[{{ $module->route }}][]" value="view"
                                                    id="role_{{ $module->route }}_setting">
                                            </div>
                                        </td>

                                    </tr>
                                @else
                                    <tr>
                                        <td class="d-flex align-items-center gap-1">
                                            <strong>{{ $module->title }}</strong>
                                            @if ($module->description)
                                                <i class="bx bx-info-circle bx-xs" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" aria-label="{{ $module->description }}"
                                                    data-bs-original-title="{{ $module->description }}"></i>
                                            @endif
                                        </td>


                                        @foreach ($roleArr as $roleName => $label)
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label"
                                                        for="role_{{ $module->route }}_{{ $roleName }}">
                                                        {{ $label }}
                                                    </label>
                                                    <input class="form-check-input" type="checkbox"
                                                        name="roles[{{ $module->route }}][]" value="{{ $roleName }}"
                                                        id="role_{{ $module->route }}_{{ $roleName }}">
                                                </div>
                                            </td>
                                        @endforeach
                                     
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary ms-auto ">Add New Role</button>
                </div>
            </div>

        </div>
    </form>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            // Thêm sự kiện click cho nút
            $("#toggleCheckboxesBtn").click(function() {
                // Lặp qua tất cả các ô kiểm
                $("input[type='checkbox']").each(function() {
                    // Chuyển đổi trạng thái checked của ô kiểm
                    $(this).prop("checked", !$(this).prop("checked"));
                });
            });
        });
    </script>
@endsection
