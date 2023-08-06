@extends('layouts.main')

@section('page_name', 'Add a Role')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Add a role with relevant permissions</h4>
                    <p class="card-subtitle mb-4 font-size-13">&nbsp;
                        <span class="float-right">
                            <a href="{{ route('admin.roles.index') }}"
                                class="btn btn-lg btn-primary waves-effect waves-light">{{ __('View Roles') }}</a>
                        </span>
                    </p>
                    <br />
                    <div class="row">
                        <div class="col-xl-4">&nbsp;</div>
                        <div class="col-xl-4">
                            <form class="role" method="post" action="{{ route('admin.roles.store') }}">
                                @csrf

                                <div class="form-group">
                                    <input type="text" name="role" class="form-control" id="role" required
                                        autofocus autocomplete="role" placeholder="Enter role">
                                    @if ($errors->has('role'))
                                        <span class="text-danger">{{ $errors->first('role') }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="permissions">Permissions</label>
                                    <select multiple="" name="permissions[]" class="form-control" id="permissions">
                                        @foreach ($permissions as $permission)
                                            <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('permissions'))
                                        <span class="text-danger">{{ $errors->first('permissions') }}</span>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-success btn-block waves-effect waves-light"> Add role
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
