@extends('front-end.layouts.app')
@section('content')

<section class="space-ptb">
  <div class="container">
    <div class="row align-items-center">
      <h2 class="title text-center">What are you looking for?</h2>

        <div class="col-lg-3 col-md-4 col-6 text-center mb-3">
            <div class="ans-category-item pt-3">
                <a href="{{url('company/edit/'.auth()->id())}}" class="category-item p-0">
                    <div class="category-icon mb-3">
                    <i class="flaticon-account"></i>
                    </div>
                    <h6 class="ans-category-box-heading">Basic Profile</h6>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 text-center mb-3">
            <div class="ans-category-item pt-3">
                <a href="{{route('confidential.create')}}" class="category-item p-0">
                    <div class="category-icon mb-3">
                    <i class="flaticon-debit-card"></i>
                    </div>
                    <h6 class="ans-category-box-heading">Confidential</h6>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 text-center mb-3">
            <div class="ans-category-item pt-3">
                <a href="company-post-job.php" class="category-item p-0">
                    <div class="category-icon mb-3">
                    <i class="flaticon-job"></i>
                    </div>
                    <h6 class="ans-category-box-heading">Post Job</h6>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 text-center mb-3">
            <div class="ans-category-item pt-3">
                <a href="{{url('company/sites/create')}}" class="category-item p-0">
                    <div class="category-icon mb-3">
                    <i class="flaticon-worker"></i>
                    </div>
                    <h6 class="ans-category-box-heading">Sites</h6>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 text-center mb-3">
            <div class="ans-category-item pt-3">
                <a href="#" class="category-item p-0">
                    <div class="category-icon mb-3">
                    <i class="flaticon-worker"></i>
                    </div>
                    <h6 class="ans-category-box-heading">Active Shifts</h6>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 text-center mb-3">
            <div class="ans-category-item pt-3">
                <a href="company-contact-person.php" class="category-item p-0">
                    <div class="category-icon mb-3 text-center">
                    <i class="flaticon-conversation"></i>
                    </div>
                    <h6 class="ans-category-box-heading">Contact Persons</h6>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 text-center mb-3">
            <div class="ans-category-item pt-3">
                <a href="#" class="category-item p-0">
                    <div class="category-icon mb-3 text-center">
                    <i class="flaticon-suitcase"></i>
                    </div>
                    <h6 class="ans-category-box-heading">Documents</h6>
                </a>
            </div>
        </div>
        <!--<div class="col-lg-3 col-md-4 col-6 text-center mb-3">-->
        <!--    <div class="ans-category-item pt-3">-->
        <!--        <a href="#" class="category-item p-0">-->
        <!--            <div class="category-icon mb-3">-->
        <!--            <i class="flaticon-list"></i>-->
        <!--            </div>-->
        <!--            <h6 class="ans-category-box-heading">Notes</h6>-->
        <!--        </a>-->
        <!--    </div>-->
        <!--</div>-->
        <div class="col-lg-3 col-md-4 col-6 text-center mb-3">
            <div class="ans-category-item pt-3">
                <a href="#" class="category-item p-0">
                    <div class="category-icon mb-3">
                    <i class="flaticon-shield"></i>
                    </div>
                    <h6 class="ans-category-box-heading">Change Password</h6>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 text-center mb-3">
            <div class="ans-category-item pt-3">
                <a href="#" class="category-item p-0">
                    <div class="category-icon mb-3">
                    <i class="flaticon-check-in"></i>
                    </div>
                    <h6 class="ans-category-box-heading">Sign Out</h6>
                </a>
            </div>
        </div>
    </div>

  </div>
</section>
@endsection
