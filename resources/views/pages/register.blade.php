@extends('layout')

@section('content')

<main class="main">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="/register">Register</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <form id="reg-form" method="post">
                    @csrf
                        <label for="Register">Register</label><br>
                        <div class="errors">
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                        <div class="success">
                            <ul>
                                @if(Session::has('success'))
                                    <li> {{ Session::get('success') }} </li>
                                @endif
                            </ul>
                        </div>
                        <div class="form-group">
                            <input type="text" name="username" placeholder="Username*">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password*">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password2" placeholder="Retype password*">
                        </div>
                        <div class="form-group">
                            <input type="text" name="firstName" placeholder="First name*">
                        </div>
                        <div class="form-group">
                            <input type="text" name="lastName" placeholder="Last name*" >
                        </div>
                        <!-- <div class="form-group">
                            <select name="country" class="country-select" placeholder="Please select country">
                                <option value="0">Select country*</option>
                                <option value="1">Latvia</option>
                                <option value="2">Sweden</option>
                                <option value="3">Norway</option>
                                <option value="4">China</option>
                            </select>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="agree" value="1"> Agree with terms and conditions*
                            </label>
                        </div> -->
                        <button type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection