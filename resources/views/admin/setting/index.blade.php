@extends('admin.layout.index')
@section('title', 'Cài đặt')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard.index') }}">Bảng điều khiển</a>
            </li>
            <li class="breadcrumb-item">
                <a href="javascript:void(0);">Cài đặt</a>
            </li>
            <li class="breadcrumb-item active">Tổng quan</li>
        </ol>
    </nav>

    <div class="row g-4">
        <!-- Navigation -->
        <div class="col-12 col-lg-2">
            <div class="d-flex justify-content-between flex-column mb-3 mb-md-0">
                <ul class="nav nav-align-left nav-pills flex-column" role="tablist">
                    <li class="nav-item mb-1">
                        <a class="nav-link active" href="javascript:void(0);" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-infomation" aria-controls="navs-infomation" aria-selected="true">
                            <i class='bx bx-link me-2'></i>
                            <span class="align-middle">Thông tin</span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
        <!-- /Navigation -->

        <!-- Options -->
        <div class="col-12 col-lg-10 pt-4 pt-lg-0">

            <form class="tab-content p-0" action="{{ route('dashboard.settings.update') }}" method="POST">
                @csrf
                @method('put')
                <div class="tab-pane fade show active" id="navs-infomation">
                    <div class="card mb-4">
                        <div class="px-3 pt-2">
                            <x-notice />
                        </div>
                        <div class="card-header">
                            <h5 class="card-title m-0"><i class='bx bxs-contact'></i> Liên hệ</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label class="form-label" for="email">email</label>
                                    <input type="text" id="email"
                                        class="form-control @error('email')
                                        is-invalid
                                    @enderror"
                                        name="email" value="{{ old('email') ?? $setting->email }}"
                                        placeholder="john.doe@example.com" />
                                    @error('email')
                                        <p class="text-danger my-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label" for="phone">phone</label>
                                    <input type="text" id="phone"
                                        class="form-control @error('phone')
                                        is-invalid
                                    @enderror"
                                        name="phone" value="{{ old('phone') ?? $setting->phone }}"
                                        placeholder="+1 (609) 988-44-11" />
                                    @error('phone')
                                        <p class="text-danger my-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label" for="address">address</label>
                                    <input type="text" id="address"
                                        class="form-control @error('address')
                                        is-invalid
                                    @enderror"
                                        name="address" value="{{ old('address') ?? $setting->address }}"
                                        placeholder="Enter your address" />
                                    @error('address')
                                        <p class="text-danger my-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label" for="swish">swish</label>
                                    <input type="text" id="swish"
                                        class="form-control @error('swish')
                                        is-invalid
                                    @enderror"
                                        name="swish" value="{{ old('swish') ?? $setting->swish }}"
                                        placeholder="Enter your swish" />
                                    @error('swish')
                                        <p class="text-danger my-1">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title m-0"><i class='bx bx-link'></i> Social</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label class="form-label" for="twitter">Twitter</label>
                                    <input type="text" id="twitter"
                                        class="form-control @error('twitter')
                                        is-invalid
                                    @enderror"
                                        name="twitter" value="{{ old('twitter') ?? $setting->twitter }}"
                                        placeholder="https://twitter.com/abc" />
                                    @error('twitter')
                                        <p class="text-danger my-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="facebook">Facebook</label>
                                    <input type="text" id="facebook"
                                        class="form-control @error('facebook')
                                        is-invalid
                                    @enderror"
                                        name="facebook" value="{{ old('facebook') ?? $setting->facebook }}"
                                        placeholder="https://facebook.com/abc" />
                                    @error('facebook')
                                        <p class="text-danger my-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="instagram">instagram</label>
                                    <input type="text" id="instagram"
                                        class="form-control @error('instagram')
                                        is-invalid
                                    @enderror"
                                        name="instagram" value="{{ old('instagram') ?? $setting->instagram }}"
                                        placeholder="https://instagram.com/abc" />
                                    @error('instagram')
                                        <p class="text-danger my-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label class="form-label" for="linkedin">LinkedIn</label>
                                    <input type="text" id="linkedin"
                                        class="form-control @error('linkedin')is-invalid @enderror" name="linkedin"
                                        value="{{ old('linkedin') ?? $setting->linkedin }}"
                                        placeholder="https://linkedin.com/abc" />
                                    @error('linkedin')
                                        <p class="text-danger my-1">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="d-flex justify-content-end gap-3">
                        <button type="reset" class="btn btn-label-secondary">Reset</button>
                        <button class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /Options-->
    </div>
@endsection
