@extends('user.layout.layout')
@section('content')
    <section class="account">
        <div class="container ">
            <div class="d-flex justify-content-between align-items-center mb-4">

                <ol class="breadcrumb mb-0" style="font-size: 14px;">
                    <li class="breadcrumb-item"><a href="#" class="opacity5"
                            style="text-decoration: none; color: black;">Home</a></li>
                    <li class="breadcrumb-item " aria-current="page">My Account</li>
                </ol>

                <div>Welcome! <a href="#" class="text-danger fw-semibold" style="text-decoration: none;">Md Rimel</a>
                </div>
            </div>

            <div class="row" style="margin-top: 80px;">
                <div class="col-md-3 account-sidebar">
                    <h6 class="fw-bold margin16">Manage My Account</h6>
                    <a href="#" class="active">My Profile</a>
                    <a href="#" class="opacity5">Address Book</a>
                    <a href="#" class="margin16 opacity5">My Payment Options</a>
                    <h6 class="fw-bold">My Orders</h6>
                    <a href="#" class="opacity5">My Returns</a>
                    <a href="#" class="margin16 opacity5">My Cancellations</a>
                    <h6 class="fw-bold">My WishList</h6>
                </div>

                <div class="col-md-9">
                    <div class="profile-box">
                        <h5 class="  mb-4" style="color: #DB4444;">Edit Your Profile</h5>
                        <form>
                            <div class="row mb-4 " style="display: flex; justify-content: space-between;">
                                <div style="width: 48%;">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" class="form-control" placeholder="Md" />
                                </div>
                                <div style="width: 48%;">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" class="form-control" placeholder="Rimel" />
                                </div>
                            </div>

                            <div class="row mb-4" style="display: flex; justify-content: space-between;">
                                <div style="width: 48%;">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="rimel111@gmail.com" />
                                </div>
                                <div style="width: 48%;">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control" placeholder="Kingston, 5236, United State" />
                                </div>
                            </div>

                            <h6 class="fw-semibold mt-4 mb-3">Password Changes</h6>
                            <div class="mb-3">
                                <input type="password" name="current_password" class="form-control" placeholder="Current Password" />
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control" placeholder="New Password" />
                            </div>
                            <div class="mb-4">
                                <input type="password" name="password_confirmtions" class="form-control" placeholder="Confirm New Password" />
                            </div>
                            <div class="d-flex justify-content-end gap-3">
                                <button type="button" class="btn">Cancel</button>
                                <button type="submit" class="btn save-btn text-white">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
