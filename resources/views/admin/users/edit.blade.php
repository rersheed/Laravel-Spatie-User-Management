@extends('layouts.main')

@section('page_name', 'Edit a User')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Edit a user with relevant roles and permissions</h4>
                    <p class="card-subtitle mb-4 font-size-13">&nbsp;
                        <span class="float-right">
                            <a href="{{ route('admin.users.index') }}"
                                class="btn btn-lg btn-primary waves-effect waves-light">{{ __('View Users') }}</a>
                        </span>
                    </p>
                    <br />
                    <div class="row">
                        <div class="col-xl-4">&nbsp;</div>
                        <div class="col-xl-4">
                            <form class="user" method="post" action="{{ route('admin.users.update', $user->id) }}">
                                @csrf
                                @method('put')

                                <div class="form-group">
                                    <input type="text" name="name" class="form-control form-control-user"
                                        value="{{ $user->name }}" id="name" required autofocus autocomplete="name"
                                        placeholder="Enter Name">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif

                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user"
                                        value="{{ $user->email }}" id="email" required autofocus autocomplete="email"
                                        placeholder="Email Address">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <input type="password" required autocomplete="current-password" name="password"
                                        value="{{ $user->password }}" class="form-control form-control-user" id="password"
                                        placeholder="Password">
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <input type="password" required autocomplete="current-password"
                                        value="{{ $user->password }}" name="password_confirmation"
                                        class="form-control form-control-user" id="password_confirmation"
                                        placeholder="Confirm Password">
                                    @if ($errors->has('password_confirmation'))
                                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                    @endif

                                </div>


                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <select name="role" class="form-control" id="roles">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}"
                                                @if (in_array($role->id, (array) $user->roles)) selected @endif>{{ $role->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('roles'))
                                        <span class="text-danger">{{ $errors->first('roles') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="permissions">Permissions</label>
                                    <select multiple="" name="permissions[]" class="form-control" id="permissions">
                                        @foreach ($permissions as $permission)
                                            <option value="{{ $permission->id }}"
                                                @if ($user->hasPermissionTo($permission->id)) selected @endif>{{ $permission->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('permissions'))
                                        <span class="text-danger">{{ $errors->first('permissions') }}</span>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-success btn-block waves-effect waves-light"> Update
                                    User
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
