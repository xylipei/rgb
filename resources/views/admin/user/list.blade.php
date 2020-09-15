@extends('admin.layouts.app')

@section('title', '用户列表')

@section('breadcrumb')
    {{ Breadcrumbs::render('userList') }}
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- /.col -->
                <div class="col-md-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">#</h3>
                            <div class="card-tools">
                                {{ $users->links() }}
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 10px">ID</th>
                                    <th>昵称</th>
                                    <th>邮箱</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
