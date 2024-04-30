<div>
    @extends('layouts.admin')

    @section('content')
        <div class="container-fluid px-4">
            <h1 class="mt-4">View Users</h1>
            <ol class="breadcrumb mb-4">

                <li class="breadcrumb-item active">Dashboard</li>
            </ol>

            <div class="card">
                <div class="card-body">

                    <table class="table table-bordered table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Active Status</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>

                                    @if ($user->role == true)
                                        <td>Admin</td>
                                    @elseif ($user->role == false)
                                        <td>Normal User</td>
                                    @endif

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="">No Users found</td>
                                </tr>
                            @endforelse

                        </tbody>

                    </table>
                </div>

                @if (session('message'))
                    <small class="alert alert-danger mx-3">{{ session('message') }}
                @endif


            </div>
        </div>
    @endsection
</div>
