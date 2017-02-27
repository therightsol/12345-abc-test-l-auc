@yield('form-open', '<form class="form"  id="modal-form" data-uid="" method="post" >')
    {{csrf_field()}}
    @yield('form-alerts', '')
    <div class="card">
        <div class="card-head style-primary">
            @yield('form-title')
        </div>



        <div class="card-body floating-label">

            <div class="row">
                <div class="col-sm-7">
                        <div class="form-group">
                            <h4>Choose Gender: </h4>
                            <div id="gender" class="{{ $errors->has('gender') ? 'has-error' : ''}}">
                                <label class="radio-inline radio-styled">
                                    <input type="radio" name="gender" id="male" @if(old('gender') == 'male') {{'checked'}} @endif  value="male"><span>Male</span>
                                </label>
                                <label class="radio-inline radio-styled">
                                    <input type="radio" name="gender" value="female" id="female" @if(old('gender') == 'female') {{'checked'}} @endif ><span>Female</span>
                                </label>
                                {!! $errors->first('gender', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group {{ $errors->has('firstname') ? 'has-error' : ''}}">
                                <input type="text" class="form-control" value="{{old('firstname')}}" name="firstname" id="firstname">
                                <label for="firstname">First Name</label>
                                {!! $errors->first('firstname', '<p class="help-block">:message</p>') !!}
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="form-group {{ $errors->has('lastname') ? 'has-error' : ''}}">
                                <input type="text" class="form-control" value="{{old('lastname')}}" id="lastname" name="lastname">
                                <label for="lastname">Last Name</label>
                                {!! $errors->first('lastname', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('display_name') ? 'has-error' : ''}}">
                        <input type="text" class="form-control" value="{{old('display_name')}}" id="display_name" name="display_name">
                        <label for="display_name">Display Name</label>
                        {!! $errors->first('display_name', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="col-sm-5 text-center">

                            <div class="form-group no-margin {{ $errors->has('picture') ? 'has-error' : ''}}">
                                <div class="img img-thumbnail" id="picture-btn">
                                    <i class="ajax-loader medium animate-spin" style="display: none"></i>

                                    <img class="picture" data-picture="@if(!empty(old('picture'))){{asset(old('picture'))}}@else{{asset('images/image-not-found-100x100.png')}}@endif" id="picture"
                                         src="@if(!empty(old('picture'))){{asset(old('picture'))}}@else{{asset('images/image-not-found-100x100.png')}}@endif" style="    height: 200px;max-width: 290px" alt="profile-image" />
                                </div>
                                <input type="hidden" name="picture" id="picture-val" value="{{old('picture')}}">
                                {!! $errors->first('picture', '<p class="help-block">:message</p>') !!}
                            </div>
                    <p class="text-center no-margin" >Click the image to edit or update</p>


                </div>

            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
                        <input type="text" class="form-control" value="{{old('username')}}" name="username" id="username">
                        <label for="username">Username</label>
                        {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                        <input type="email" class="form-control" value="{{old('email')}}" name="email" id="email">
                        <label for="email">Email</label>
                        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group {{ $errors->has('url') ? 'has-error' : ''}}">
                        <input type="text" class="form-control" value="{{old('url')}}" name="url" id="url">
                        <label for="url">URL</label>
                        {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group {{ $errors->has('user_role_id') ? 'has-error' : ''}}">
                        <form class="form">
                            <label for="user_role_id">User Role</label>

                            <select class="form-control select2-list" name="user_role_id" id="user_role_id" data-placeholder="Select Role">
                                <option selected value="">Choose Role</option>
                                <optgroup label="User Roles">
                                    @foreach($userroles as $userrole)
                                        <option value="{{strtolower($userrole->id)}}" {!! old('user_role_id') == strtolower($userrole->id) ? 'selected' : '' !!}>
                                            {{$userrole->role}}
                                        </option>
                                    @endforeach
                                </optgroup>
                            </select>
                            {!! $errors->first('user_role_id', '<p class="help-block">:message</p>') !!}

                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                        <input type="password" class="form-control" value="{{old('password')}}" name="password" id="password">
                        <label for="password">Password</label>
                        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group {{ $errors->has('confirm_password') ? 'has-error' : ''}}">
                        <input type="password" class="form-control" value="{{old('confirm_password')}}" name="confirm_password" id="confirm_password">
                        <label for="confirm-password">Confirm Password</label>
                        {!! $errors->first('confirm_password', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            <div class="card-actionbar">
                <div class="card-actionbar-row">
                    @yield('form-submit-buttons')
                </div>
            </div>
        </div>
    </div>
</form>
