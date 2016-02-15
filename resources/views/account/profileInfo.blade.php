    <div class="page-header">
        <h3>Profile Information</h3>
    </div>

    <form role="form" method="POST" action="{{ route('account.profile') }}" class="form-horizontal">
        {!! csrf_field() !!}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="name" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-4">
                <input type="text" name="email" id="email" value="{{ $account->email ?: old('email') }}" autofocus="" class="form-control">
                @if ($errors->has('email'))
                    <span class="help-block">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="fullname" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-4">
                <input type="text" name="fullname" id="name" value="{{ $account->fullname ?: old('fullname') }}" class="form-control">
                @if ($errors->has('fullname'))
                    <span class="help-block">{{ $errors->first('fullname') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
            <label for="name" class="col-sm-2 control-label">Gender</label>
            <div class="col-sm-4">
                <label class="radio col-sm-4">
                    <input type="radio"
                        @if ($account->gender == "M")
                            {{ 'checked="checked"' }}
                        @endif

                    name="gender" value="M" data-toggle="radio"><span>Male</span>
                </label>
                <label class="radio col-sm-4">
                    <input type="radio"
                        @if ($account->gender == "F")
                            {{ 'checked="checked"' }}
                        @endif
                     name="gender" value="F" data-toggle="radio"><span>Female</span>
                </label>
                @if ($errors->has('gender'))
                    <span class="help-block">{{ $errors->first('gender') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="location" class="col-sm-2 control-label">Location</label>
            <div class="col-sm-4">
                <input type="text" name="location" id="location" value="{{ $account->location ?: old('location') }}" class="form-control" placeholder="Lagos, Nigeria">
            </div>
        </div>
        <div class="form-group">
            <label for="website" class="col-sm-2 control-label">Website</label>
            <div class="col-sm-4">
                <input type="text" name="website" id="website" value="{{ $account->website ?: old('website') }}" class="form-control" placeholder="http://goodheads.io">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Update Profile</button>
            </div>
        </div>
    </form>



