    <div class="page-header">
        <h3>Delete Account</h3>
    </div>

    <p> You can delete your account, but keep in mind this action is irreversible. </p>

    <form role="form" method="POST" action="{{ route('contact') }}" class="form-horizontal">
        {!! csrf_field() !!}

        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete my account</button>
    </form>