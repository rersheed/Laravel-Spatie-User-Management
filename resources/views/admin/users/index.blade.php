@extends('layouts.main')

@section('page_name', 'User Management')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All the users, their roles and permissions</h4>
                    <p class="card-subtitle mb-4 font-size-13">&nbsp;
                        <span class="float-right">
                            <a href="{{ route('admin.users.create') }}"
                                class="btn btn-lg btn-primary waves-effect waves-light">{{ __('Create') }}</a>
                        </span>
                    </p>
                    <br />

                    <table class="table mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>User</th>
                                <th>Role</th>
                                <th>Permissions</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    {{-- <td>{{ $user->name }}{{ $user->email }}</td> --}}
                                    <td>
                                        <div class="media mb-3">
                                            <img class="d-flex mr-3 rounded-circle"
                                                src="{{ asset('backend/assets/images/users/avatar-2.jpg') }}"
                                                alt="{{ $user->name }}" height="48">
                                            <div class="media-body">
                                                <h5 class="mt-0">{{ $user->name }}</h5>
                                                {{ $user->email }}
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        @foreach ($user->roles as $role)
                                            <span class="badge badge-soft-secondary">{{ $role->name }}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($user->getDirectPermissions() as $permission)
                                            <span class="badge badge-soft-primary">{{ $permission->name }}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('admin.users.destroy', $user->id) }}"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('admin.users.edit', $user->id) }}"
                                                class="btn btn-secondary waves-effect waves-light">Edit</a>
                                            <button type="submit" class="btn btn-danger waves-effect waves-light"
                                                onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
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
