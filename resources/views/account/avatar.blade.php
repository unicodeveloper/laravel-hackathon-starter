    <div class="page-header">
        <h3>Manage Your Avatar Here</h3>
    </div>

    <form role="form" method="POST" action="{{ route('account.avatar') }}"  enctype="multipart/form-data" class="form-horizontal">
        <div class="form-group">
            <label for="gravatar" class="col-sm-2 control-label">Gravatar</label>
            <div class="col-sm-4">
                <img src="{{ $account->avatar }}" width="100" height="100" class="profile">
            </div>
        </div>
        <div class="form-group{{ $errors->has('file_name') ? ' has-error' : '' }}">
            <label for="gravatar" class="col-sm-2 control-label"></label>
            <div class="col-sm-4">
                <input type="file" name="file_name" id="file_name">
                @if ($errors->has('file_name'))
                    <span class="help-block">{{ $errors->first('file_name') }}</span>
                @endif
            </div>
        </div>
         <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Change Avatar</button>
            </div>
        </div>
        {!! csrf_field() !!}
    </form>