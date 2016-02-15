    <div class="page-header">
        <h3>Change Password</h3>
    </div>

    <form role="form" method="POST" action="{{ route('account.password') }}" class="form-horizontal">
        {!! csrf_field() !!}
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-sm-3 control-label">New Password</label>
            <div class="col-sm-4">
                <input type="password" name="password" id="password" class="form-control">
                @if ($errors->has('password'))
                    <span class="help-block">{{ $errors->first('password') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label for="password" class="col-sm-3 control-label">Confirm Password</label>
            <div class="col-sm-4">
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-4">
                <button type="submit" class="btn btn-primary"><i class="fa fa-lock"></i> Change Password</button>
            </div>
        </div>
    </form>