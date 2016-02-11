@if ( session()->has('info'))
    <div class="alert alert-info" role-"alert">
        {{ session()->get('info') }}
    </div>
@endif

@if ( session()->has('warning'))
    <div class="alert alert-danger" role-"alert">
        {{ session()->get('warning') }}
    </div>
@endif