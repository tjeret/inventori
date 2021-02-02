@extends('admin.dashboard')

@section('title')
    Profile User
@endsection

@section('content')
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group hidden">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="PATCH">
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="account-general">

                    <div class="card-body media align-items-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="d-block img-thumbnail">
                        <div class="media-body ml-4">
                            <label class="btn btn-outline-primary">
                                Upload new photo
                                <input type="file" class="account-settings-fileinput">
                            </label> &nbsp;
                            <button type="button" class="btn btn-default md-btn-flat">Reset</button>

                            <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                        </div>
                    </div>
                    <hr class="border-light m-0">

                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control mb-1" value="{{ Auth::user()->username }}" disabled>
                        </div>
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="control-label"><b>Nama:</b></label>
                            <input type="text" name="name" class="form-control"
                                value="{{ $user->profil->name }}" />
                            <?php if ($errors->has('name')): ?>
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label class="form-label">E-mail</label>
                            <input type="text" class="form-control mb-1" value="{{ Auth::user()->email }}">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Bagian</label>
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="tab-pane fade active show" id="account-change-password">
                        <div class="card-body pb-2">

                            <div class="form-group">
                                <label class="form-label">Current password</label>
                                <input type="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-label">New password</label>
                                <input type="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Repeat new password</label>
                                <input type="password" class="form-control">
                            </div>
                            <a href="#" class="btn btn-primary" type="submit" method ="post">Update</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
@endsection
