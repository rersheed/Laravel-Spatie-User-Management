@extends('layouts.main')

@section('page_name', 'Add a permission')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Add a permission with relevant roles and permissions</h4>
                    <p class="card-subtitle mb-4 font-size-13">&nbsp;
                        <span class="float-right">
                            <a href="{{ route('admin.permissions.index') }}"
                                class="btn btn-lg btn-primary waves-effect waves-light">{{ __('View Permissions') }}</a>
                        </span>
                    </p>
                    <br />
                    <div class="row">
                        <div class="col-xl-4">&nbsp;</div>
                        <div class="col-xl-4">
                            <form class="permission" method="post" action="{{ route('admin.permissions.store') }}">
                                @csrf

                                <div class="form-group">
                                    <input type="text" name="permission" class="form-control" id="permission" required
                                        autofocus autocomplete="permission" placeholder="Enter permission">
                                    @if ($errors->has('permission'))
                                        <span class="text-danger">{{ $errors->first('permission') }}</span>
                                    @endif

                                </div>

                                <button type="submit" class="btn btn-success btn-block waves-effect waves-light"> Add
                                    permission
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end card body-->

            </div>
            <!--end card-->
        </div>
        <!--end col-->

    </div>
    <!--end row-->
@endsection
