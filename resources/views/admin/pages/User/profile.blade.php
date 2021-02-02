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
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="d-block ui-w-80">
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
                            <label for="email" class="control-label"><b>Nama:</b></label>
                            <input type="text" name="name" placeholder="Silahkan Masukan Nama" class="form-control"
                                value="{{ $user->name }}" />
                            <?php if ($errors->has('name')): ?>
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label class="form-label">E-mail</label>
                            <input type="text" class="form-control mb-1" value="nmaxwell@mail.com">
                            <div class="alert alert-warning mt-3">
                                Your email is not confirmed. Please check your inbox.<br>
                                <a href="javascript:void(0)">Resend confirmation</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Company</label>
                            <input type="text" class="form-control" value="Company Ltd.">
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="account-change-password">
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

                    </div>
                </div>
                <div class="tab-pane fade" id="account-info">
                    <div class="card-body pb-2">

                        <div class="form-group">
                            <label class="form-label">Bio</label>
                            <textarea class="form-control"
                                rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna. Sed luctus urna nunc. Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien. Curabitur ac nibh nulla. Maecenas nec augue placerat, viverra tellus non, pulvinar risus.</textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Birthday</label>
                            <input type="text" class="form-control" value="May 3, 1995">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Country</label>
                            <select class="custom-select">
                                <option>USA</option>
                                <option selected="">Canada</option>
                                <option>UK</option>
                                <option>Germany</option>
                                <option>France</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
