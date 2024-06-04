<div class="clear-both">
</div>

@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show color col-md-12" role="alert">
        {{ session('success') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show color col-md-12" role="alert">
        {{ session('error') }}
    </div>
@endif
