@extends('layouts.main')

@section('page_name', 'Roles Management')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">&nbsp;</h4>
                    <p class="card-subtitle mb-4 font-size-13">&nbsp;
                        <span class="float-right">
                            <a href="{{ route('admin.roles.create') }}"
                                class="btn btn-lg btn-primary waves-effect waves-light">{{ __('Create') }}</a>
                        </span>
                    </p>
                    <br />

                    <table class="table mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>Role</th>
                                <th>Permissions</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        @foreach ($role->permissions as $permission)
                                            <span class="badge badge-soft-primary">{{ $permission->name }}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('admin.roles.destroy', $role->id) }}"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('admin.roles.edit', $role->id) }}"
                                                class="btn btn-secondary waves-effect waves-light">Edit</a>
                                            <button type="submit" class="btn btn-danger waves-effect waves-light"
                                                onclick="return confirm('Are you sure you want to delete this role?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                <!--end card body-->

            </div>
            <!--end card-->
        </div>
        <!--end col-->

    </div>
    <!--end row-->
@endsection
