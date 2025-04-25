@extends('layout.app')

@section('content')
<div class="container ml-[166px] mt-[166px] h-[466px] d-flex justify-content-center align-items-center">
    <div class="row w-100">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    <h3 class="mb-0">Account Pending Approval</h3>
                </div>
                <div class="card-body text-center py-5">
                    <div class="mb-4">
                        <i class="fas fa-clock fa-4x text-warning"></i>
                    </div>
                    <h4 class="mb-4">Thank you for registering!</h4>
                    <p class="mb-4">Your account is awaiting admin approval. You will be notified once it is approved.</p>
                    <p class="mb-5">If you have any questions, feel free to contact support.</p>
                    <a href="{{ back() }}" class="btn btn-primary">
                        <i class="fas fa-envelope mr-2"></i> Contact Support
                    </a>
                </div>
                <div class="card-footer  text-muted">
                    <small>Reference : {{ auth()->user()->email }}</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
