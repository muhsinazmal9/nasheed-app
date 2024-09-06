@extends('layouts.backend')
@section('content')
<main id="main-container">
    <div class="bg-image">
      <div class="bg-primary-dark-op">
        <div class="content content-full text-center">
          <div class="my-3">
            @if (auth()->user()->image == null)
                <img class="img-avatar img-avatar-thumb" src="https://placehold.co/50" alt="">
            @else
                <img class="img-avatar img-avatar-thumb" src="{{asset('uploads')}}/profile/{{auth()->user()->image}}" alt="">
            @endif
          </div>
          <h1 class="h2 text-white mb-0">Edit Account</h1>
          <h2 class="h4 fw-normal text-white-75">
           {{auth()->user()->name}}
          </h2>
          <a class="btn btn-alt-secondary" href="{{route('dashboard')}}">
            <i class="fa fa-fw fa-arrow-left text-danger"></i> Back to Dashboard
          </a>
        </div>
      </div>
    </div>
    <div class="content content-boxed">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Profile</h3>
        </div>
        <div class="block-content">
          <form action="{{route('profile.update' , auth()->user()->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row push">
              <div class="col-lg-8 col-xl-5 m-auto">
                <div class="mb-4">
                  <label class="form-label" for="one-profile-edit-name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name.." value="{{auth()->user()->name}}">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="one-profile-edit-email">Email Address</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email.." value="{{auth()->user()->email}}">
                </div>
                <div class="mb-4">
                  <label class="form-label">Your Avatar</label>
                  <div class="mb-4">
                    <img class="img-avatar" id="image" src="{{asset('uploads')}}/profile/{{auth()->user()->image}}" alt="">
                  </div>
                  <div class="mb-4">
                    <label for="image" class="form-label">Choose a new avatar</label>
                    <input class="form-control" id="image" type="file" name="image" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
                  </div>
                </div>
                <div class="mb-4">
                  <button type="submit" class="btn btn-alt-primary">
                    Update
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Change Password</h3>
        </div>
        <div class="block-content">
          <form action="be_pages_projects_edit.html" method="POST" onsubmit="return false;">
            <div class="row push">
              <div class="col-lg-4">
                <p class="fs-sm text-muted">
                  Changing your sign in password is an easy way to keep your account secure.
                </p>
              </div>
              <div class="col-lg-8 col-xl-5">
                <div class="mb-4">
                  <label class="form-label" for="one-profile-edit-password">Current Password</label>
                  <input type="password" class="form-control" id="one-profile-edit-password" name="one-profile-edit-password">
                </div>
                <div class="row mb-4">
                  <div class="col-12">
                    <label class="form-label" for="one-profile-edit-password-new">New Password</label>
                    <input type="password" class="form-control" id="one-profile-edit-password-new" name="one-profile-edit-password-new">
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-12">
                    <label class="form-label" for="one-profile-edit-password-new-confirm">Confirm New Password</label>
                    <input type="password" class="form-control" id="one-profile-edit-password-new-confirm" name="one-profile-edit-password-new-confirm">
                  </div>
                </div>
                <div class="mb-4">
                  <button type="submit" class="btn btn-alt-primary">
                    Update
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Billing Information</h3>
        </div>
        <div class="block-content">
          <form action="be_pages_projects_edit.html" method="POST" onsubmit="return false;">
            <div class="row push">
              <div class="col-lg-4">
                <p class="fs-sm text-muted">
                  Your billing information is never shown to other users and only used for creating your invoices.
                </p>
              </div>
              <div class="col-lg-8 col-xl-5">
                <div class="mb-4">
                  <label class="form-label" for="one-profile-edit-company-name">Company Name (Optional)</label>
                  <input type="text" class="form-control" id="one-profile-edit-company-name" name="one-profile-edit-company-name">
                </div>
                <div class="row mb-4">
                  <div class="col-6">
                    <label class="form-label" for="one-profile-edit-firstname">Firstname</label>
                    <input type="text" class="form-control" id="one-profile-edit-firstname" name="one-profile-edit-firstname">
                  </div>
                  <div class="col-6">
                    <label class="form-label" for="one-profile-edit-lastname">Lastname</label>
                    <input type="text" class="form-control" id="one-profile-edit-lastname" name="one-profile-edit-lastname">
                  </div>
                </div>
                <div class="mb-4">
                  <label class="form-label" for="one-profile-edit-street-1">Street Address 1</label>
                  <input type="text" class="form-control" id="one-profile-edit-street-1" name="one-profile-edit-street-1">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="one-profile-edit-street-2">Street Address 2</label>
                  <input type="text" class="form-control" id="one-profile-edit-street-2" name="one-profile-edit-street-2">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="one-profile-edit-city">City</label>
                  <input type="text" class="form-control" id="one-profile-edit-city" name="one-profile-edit-city">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="one-profile-edit-postal">Postal code</label>
                  <input type="text" class="form-control" id="one-profile-edit-postal" name="one-profile-edit-postal">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="one-profile-edit-vat">VAT Number</label>
                  <input type="text" class="form-control" id="one-profile-edit-vat" name="one-profile-edit-vat" value="IT00000000" disabled="">
                </div>
                <div class="mb-4">
                  <button type="submit" class="btn btn-alt-primary">
                    Update
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Connections</h3>
        </div>
        <div class="block-content">
          <div class="row push">
            <div class="col-lg-4">
              <p class="fs-sm text-muted">
                You can connect your account to third party networks to get extra features.
              </p>
            </div>
            <div class="col-lg-8 col-xl-7">
              <div class="row mb-4">
                <div class="col-sm-10 col-md-8 col-xl-6">
                  <a class="btn w-100 btn-alt-danger text-start" href="javascript:void(0)">
                    <i class="fab fa-fw fa-google opacity-50 me-1"></i> Connect to Google
                  </a>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-sm-10 col-md-8 col-xl-6">
                  <a class="btn w-100 btn-alt-info text-start" href="javascript:void(0)">
                    <i class="fab fa-fw fa-twitter opacity-50 me-1"></i> Connect to Twitter
                  </a>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-sm-10 col-md-8 col-xl-6">
                  <a class="btn w-100 btn-alt-primary bg-white d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span>
                      <i class="fab fa-fw fa-facebook me-1"></i> John Doe
                    </span>
                    <i class="fa fa-fw fa-check me-1"></i>
                  </a>
                </div>
                <div class="col-sm-12 col-md-4 col-xl-6 mt-1 d-md-flex align-items-md-center fs-sm">
                  <a class="btn btn-sm btn-alt-secondary rounded-pill" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Facebook Connection
                  </a>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-sm-10 col-md-8 col-xl-6">
                  <a class="btn w-100 btn-alt-warning bg-white d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span>
                      <i class="fab fa-fw fa-instagram me-1"></i> @john_doe
                    </span>
                    <i class="fa fa-fw fa-check me-1"></i>
                  </a>
                </div>
                <div class="col-sm-12 col-md-4 col-xl-6 mt-1 d-md-flex align-items-md-center fs-sm">
                  <a class="btn btn-sm btn-alt-secondary rounded-pill" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Instagram Connection
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      </main>
@endsection
