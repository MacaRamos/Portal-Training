<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Portal Training</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/base.min.css")}}">

</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100">
                <div class="h-100 no-gutters row">
                    <div class="d-none d-lg-block col-lg-4">
                        <div class="slider-light">
                            <div class="slick-slider">
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate"
                                        tabindex="-1">
                                        <div class="slide-img-bg"
                                            style="background-image: url('{{asset("assets/$theme/dist/images/originals/1-PORTALTRAINING.jpg")}}');">
                                        </div>
                                        <div class="slider-content">
                                            <h3>Perfect Balance</h3>
                                            <p>ArchitectUI is like a dream. Some think it's too good to be true!
                                                Extensive collection of unified React Boostrap Components and Elements.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark"
                                        tabindex="-1">
                                        <div class="slide-img-bg"
                                            style="background-image: url('{{asset("assets/$theme/dist/images/originals/2-PORTALTRAINING.jpg")}}');">
                                        </div>
                                        <div class="slider-content">
                                            <h3>Scalable, Modular, Consistent</h3>
                                            <p>Easily exclude the components you don't require. Lightweight, consistent
                                                Bootstrap based styles across all elements and components</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-sunny-morning"
                                        tabindex="-1">
                                        <div class="slide-img-bg"
                                            style="background-image: url('{{asset("assets/$theme/dist/images/originals/5-PORTALTRAINING.jpg")}}');">
                                        </div>
                                        <div class="slider-content">
                                            <h3>Complex, but lightweight</h3>
                                            <p>We've included a lot of components that cover almost all use cases for
                                                any type of application.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <div class="app-logo"></div>
                            <h4 class="mb-0">
                                <span class="d-block">Bienvenido</span>
                            </h4>
                            <div class="divider row"></div>
                            <div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-6 col-6">
                                            <div class="position-relative form-group">
                                                <label for="email" class="">Email</label>
                                                <input name="email" id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" required>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <div class="position-relative form-group">
                                                <label for="password" class="">Contraseña</label>
                                                <input name="password" id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    required>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-relative form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                        <label for="exampleCheck" class="form-check-label">
                                            Recordarme</label>
                                    </div>
                                    <div class="divider row"></div>
                                    <div class="d-flex align-items-center">
                                        <div class="ml-auto">
                                            <button type="submit" class="btn btn-primary btn-lg">Iniciar sesión</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--SCRIPTS INCLUDES-->

    <!--CORE-->
    {{-- <script src="{{asset("assets/$theme/dist/js/jquery/jquery.min.js")}}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>


    <!--Slick Carousel -->
    <script src="{{asset("assets/$theme/dist/js/vendors/carousel-slider.js")}}"></script>
    <script src="{{asset("assets/$theme/dist/js/scripts-init/carousel-slider.js")}}"></script>


    <!--Ladda Loading Buttons -->
    <script src="{{asset("assets/$theme/dist/js/vendors/ladda-loading.js")}}"></script>
    <script src="{{asset("assets/$theme/dist/js/vendors/spin.js")}}"></script>
    <script src="{{asset("assets/$theme/dist/js/scripts-init/ladda-loading.js")}}"></script>

</body>

</html>