    <div class="page-header">
        <h3>Profile Information</h3>
    </div>

    <form role="form" method="POST" action="{{ route('contact') }}" class="form-horizontal">
        {!! csrf_field() !!}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="name" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-4">
                <input type="text" name="name" id="email" autofocus="" class="form-control">
                @if ($errors->has('email'))
                    <span class="help-block">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-4">
                <input type="text" name="name" id="name" class="form-control">
                @if ($errors->has('name'))
                    <span class="help-block">{{ $errors->first('name') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-sm-2 control-label">Gender</label>
            <div class="col-sm-4">
                <label class="radio col-sm-4">
                    <input type="radio" checked="" name="gender" value="male" data-toggle="radio"><span>Male</span>
                </label>
                <label class="radio col-sm-4">
                    <input type="radio" name="gender" value="female" data-toggle="radio"><span>Female</span>
                </label>
                @if ($errors->has('name'))
                    <span class="help-block">{{ $errors->first('name') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="location" class="col-sm-2 control-label">Location</label>
            <div class="col-sm-4">
                <input type="text" name="location" id="location" value="Lagos, Nigeria" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="website" class="col-sm-2 control-label">Website</label>
            <div class="col-sm-4">
                <input type="text" name="website" id="website" value="http://goodheads.io" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="gravatar" class="col-sm-2 control-label">Gravatar</label>
            <div class="col-sm-4">
                <img src="https://gravatar.com/avatar/1097492785caf9ffeebffeb624202d8f?s=200&amp;d=retro" width="100" height="100" class="profile">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Update Profile</button>
            </div>
        </div>
    </form>