@extends('layouts.main')

@section('page_name', 'Permission Management')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All the permissions in the application</h4>
                    <p class="card-subtitle mb-4 font-size-13">&nbsp;
                        <span class="float-right">
                            <a href="{{ route('admin.permissions.create') }}"
                                class="btn btn-lg btn-primary waves-effect waves-light">{{ __('Create') }}</a>
                        </span>
                    </p>
                    <br />

                    <table class="table mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>Permission</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $permission)
                                <tr>
                                    <td>{{ $permission->name }}</td>
                                    <td>
                                        <form method="POST"
                                            action="{{ route('admin.permissions.destroy', $permission->id) }}"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('admin.permissions.edit', $permission->id) }}"
                                                class="btn btn-secondary waves-effect waves-light">Edit</a>
                                            <button type="submit" class="btn btn-danger waves-effect waves-light"
                                                onclick="return confirm('Are you sure you want to delete this permission?')">Delete</button>
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
