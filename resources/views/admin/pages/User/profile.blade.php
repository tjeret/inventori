@extends('admin.dashboard')


@section('title')
    Profile User
@endsection

@section('content')
    <form action="{{ route('profil.update') }}" method="post" enctype="multipart/form-data">
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
                                <input name="img" type="file" class="account-settings-fileinput">
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
<<<<<<< HEAD
<<<<<<< Updated upstream
                            <label class="control-label"><b>Nama:</b></label>
                            <input type="text" name="name" class="form-control"
=======
                            <label for="email" class="control-label"><b>Nama:</b></label>
                            <input type="text" name="name" placeholder="Silahkan Masukan Nama" class="form-control"
>>>>>>> Stashed changes
=======
                            <label class="control-label"><b>Nama:</b></label>
                            <input type="text" name="name" class="form-control"
>>>>>>> main
                                value="{{ $user->profil->name }}" />
                            <?php if ($errors->has('name')): ?>
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            <?php endif; ?>
                        </div>
<<<<<<< Updated upstream
                        <div class="form-group">
                            <label class="form-label">E-mail</label>
                            <input type="text" class="form-control mb-1" value="{{ Auth::user()->email }}">
<<<<<<< HEAD
=======
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label"><b>Email:</b></label>
                            <input type="text" name="email" placeholder="Please enter your email here" class="form-control"
                                value="{{ $user->email }}" />

                            <?php if ($errors->has('email')): ?>
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="email" class="control-label"><b>Nomor Telepon:</b></label>
                            <input type="text" name="name" placeholder="Silahkan Masukan Nomor Telephone"
                                class="form-control" value="{{ $user->profil->phone }}" />
                            <?php if ($errors->has('name')): ?>
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            <?php endif; ?>
>>>>>>> Stashed changes
=======
>>>>>>> main
                        </div>
                        <div class="form-group">
                            <label class="form-label">Bagian</label>
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="tab-pane fade active show" id="account-change-password">
                        <div class="card-body pb-2">
<<<<<<< HEAD

                            <div class="form-group">
                                <label class="form-label">Current password</label>
                                <input type="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-label">New password</label>
                                <input type="password" class="form-control">
                            </div>

                            <div class="form-group">
=======

                            <div class="form-group">
                                <label class="form-label">Current password</label>
                                <input type="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-label">New password</label>
                                <input type="password" class="form-control">
                            </div>

                            <div class="form-group">
>>>>>>> main
                                <label class="form-label">Repeat new password</label>
                                <input type="password" class="form-control">
                            </div>
                            <a href="#" class="btn btn-primary" type="submit" method ="post">Update</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
<<<<<<< Updated upstream
=======
        <div class="form-group">
            <button type="submit" class="btn btn-info"> Submit </button>
>>>>>>> Stashed changes
=======
>>>>>>> main
        </div>
    </form>
@endsection
