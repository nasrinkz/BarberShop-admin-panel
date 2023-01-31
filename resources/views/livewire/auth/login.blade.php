<main class="main container">

    <div class="row justify-content-center align-items-center">
        <form action="" class="bg_blur_light p-4 col-12 col-md-6 my-5 shadow ">
{{--            <i class="fas fa-user-check fa-3x d-block text-center my-3"></i>--}}
            <h5 class="text-center">Login</h5>
            <div class="form-group row justify-content-center">
                <input type="text" required wire:model="data.email" class="form-control rounded_5 col-10 col-md-8 shadow" placeholder="admin@gmail.com">
            </div>
            @error('data.email')
            <div class="form-group row justify-content-center">
                <small>{{$message}}</small>
            </div>
            @enderror
            <div class="form-group row justify-content-center">
                <input type="password" required wire:model="data.password" class="form-control rounded_5 col-10 col-md-8 shadow" placeholder="admin">
            </div>
            @error('data.password')
            <div class="form-group row justify-content-center">
                <small class="justify-content-center">{{$message}}</small>
            </div>
            @enderror
            <div class="form-group row justify-content-center">
                <input type="checkbox" wire:model="data.remember" class="form-control outline_0 box_shadow_0 h-auto">
                remember me
            </div>
            <div class="form-group row justify-content-center">
                <button class="btn btn-success rounded_5 px-5 shadow-sm" type="button" wire:click="login">login</button>
            </div>
            @if(Session::has('message'))
                <div class="row">
                    <div class="col-md-10 col-md-push-1 alert alert-danger" style="direction: rtl">
                        {{Session::get('message')}}
                    </div>
                </div>
            @endif
            <a href="{{url('register')}}" class="btn rounded_5 px-5 shadow-sm" style="background-color: rgba(128,128,128,0.19)">Register</a>        </form>

    </div>

</main>
