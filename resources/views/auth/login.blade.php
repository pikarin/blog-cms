<x-admin-master-layout classes_body="login-page">
    <div class="login-box">
        <div class="login-logo">
            {{ config('app.name', 'Laravel') }}
        </div>

        <div class="card">
            <div class="card-body login-card-body rounded">
                <p class="login-box-msg">Login untuk masuk ke dashboard</p>
                <form action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}

                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Kata Sandi">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </form>

                <p class="mt-4 text-center">
                    <a href="#">Lupa kata sandi?</a>
                </p>
            </div>
        </div>
    </div>
</x-admin-master-layout>
