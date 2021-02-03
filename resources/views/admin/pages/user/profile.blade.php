@extends('admin.app')


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
                <div class="row">
                    <div class="col">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                                <div>
                                    <label for="_img">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="img-thumbnail" >
                                </label>
                                <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary" hidden>
                                        Upload new photo
                                        <input name="img" type="file" id="_img" class="account-settings-fileinput hidden">
                                        <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <hr class="border-light m-0"> --}}
                    <div class="col">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control mb-1" value="{{ Auth::user()->username }}" disabled>
                            </div>
                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="control-label"><b>Nama:</b></label>
                                <input type="text" name="name" class="form-control" value="{{ $user->profil->name }}" />
                                <?php if ($errors->has('name')): ?>
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label class="form-label">E-mail</label>
                                <input type="text" class="form-control mb-1" value="{{ Auth::user()->email }}">

                                <label class="form-label">Repeat new password</label>
                                <input type="password" class="form-control">
                            </div>
                            <a href="#" class="btn btn-primary" type="submit" method="post">Update</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </form>
@endsection
