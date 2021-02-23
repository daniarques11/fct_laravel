<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pricing example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">

</head>


<body class="w-100">
    <!--Nav bar-->
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="#">Features</a>
            <a class="p-2 text-dark" href="#">Enterprise</a>
            <a class="p-2 text-dark" href="#">Support</a>
            <a class="p-2 text-dark" href="#">Pricing</a>
        </nav>
        <a class="btn btn-outline-primary" href="#">Sign up</a>
    </div>

    <!--Form-->
    <form method="POST" action="/form" class="container mt-5">
        @csrf
        <div>
            <h2>
                Informació de l'empresa
            </h2>
            <div class="form-group">
                <label for="companyName">@lang('formData.companyName')</label>
                <input type="text" class="form-control @error('companyName') is-invalid @enderror" name="companyName" value="{{ old('companyName') }}" placeholder="Empresa S.L." >
                @error('companyName')
                <div class="text-danger my-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-row">
                <div class="form-group @error('companyCif') is-invalid @enderror col-md-4">
                    <label for="companyCif">{{__('formData.companyCif')}}</label>
                    <input type="text" class="form-control @error('companyCif') is-invalid @enderror" name="companyCif" value="{{ old('companyCif') }}" placeholder="4124992032X">
                    @error('companyCif')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('companyPhone1') is-invalid @enderror col-md-4">
                    <label for="companyPhone1">@lang('formData.companyPhone1')</label>
                    <input type="tel" class="form-control @error('companyPhone1') is-invalid @enderror" name="companyPhone1" value="{{ old('companyPhone1') }}" placeholder="+34 971123456">
                    @error('companyPhone1')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('companyPhone2') is-invalid @enderror col-md-4">
                    <label for="companyPhone2">Telèfon 2</label>
                    <input type="tel" class="form-control @error('companyPhone2') is-invalid @enderror" name="companyPhone2" value="{{ old('companyPhone2') }}" placeholder="+34 971123456">
                    @error('companyPhone2')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="form-group @error('companyLocation') is-invalid @enderror col-md-4">
                    <label for="companyLocation">Població</label>
                    <input type="text" class="form-control @error('companyLocation') is-invalid @enderror" name="companyLocation"  autocomplete="locality" value="{{ old('companyLocation') }}" placeholder="Palma de Mallorca">
                    @error('companyLocation')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('companyAddress') is-invalid @enderror col-md-4">
                    <label for="companyAddress">Adreça</label>
                    <input type="text" class="form-control @error('companyAddress') is-invalid @enderror" name="companyAddress"  autocomplete="street-address" value="{{ old('companyAddress') }}" placeholder="C/ Aragó 21">
                    @error('companyAddress')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('companyCp') is-invalid @enderror col-md-4">
                    <label for="companyCp">Codi Postal</label>
                    <input type="number" class="form-control @error('companyCp') is-invalid @enderror" name="companyCp"  autocomplete="postal-code" value="{{ old('companyCp') }}" placeholder="07006">
                    @error('companyCp')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group @error('companyEmail') is-invalid @enderror">
                <label for="companyEmail">Adreça electrònica</label>
                <input type="email" class="form-control @error('companyEmail') is-invalid @enderror" name="companyEmail"  autocomplete="email" value="{{ old('companyEmail') }}" placeholder="exemple@gmail.com">
                @error('companyEmail')
                <div class="text-danger my-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-row">
                <fieldset class="form-group @error('companyOwnership') is-invalid @enderror col-md-6" value="{{ old('companyOwnership') }}">
                    <div class="row">
                        <legend class="col-form-label col-sm-4 pt-0">Titularitat empresa</legend>
                        <div class="col-sm-8">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="companyOwnership" name="companyOwnership1" value="private">
                                <label class="form-check-label" for="companyOwnership1">
                                    Pública
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="companyOwnership" name="companyOwnership2" value="public">
                                <label class="form-check-label" for="companyOwnership2">
                                    Privada
                                </label>
                            </div>
                            @error('companyOwnership')
                            <div class="text-danger my-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form-group @error('companySector') is-invalid @enderror col-md-6" value="{{ old('companySector') }}">
                    <div class="row">
                        <legend class="col-form-label col-sm-4 pt-0">Sector productiu</legend>
                        <div class="col-sm-8">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="companySector" name="companySector1" value="primary">
                                <label class="form-check-label" for="companySector1">
                                    Primari
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="companySector" name="companySector2" value="secondary">
                                <label class="form-check-label" for="companySector2">
                                    Secondari
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="companySector" name="companySector3" value="tertiary">
                                <label class="form-check-label" for="companySector3">
                                    Terciari
                                </label>
                            </div>
                            @error('companySector')
                            <div class="text-danger my-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class="form-group @error('companyMainActivity') is-invalid @enderror">
                <label for="companyMainActivity">Activitat principal</label>
                <input type="text" class="form-control @error('companyMainActivity') is-invalid @enderror" name="companyMainActivity" value="{{ old('companyMainActivity') }}" placeholder="Fusteria">
                @error('companyMainActivity')
                <div class="text-danger my-2">{{ $message }}</div>
                @enderror
            </div>
        </div>
        

        <div class="mt-5">
            <h2>
                Representant de l'empresa
            </h2>
            <div class="form-group @error('representantName') is-invalid @enderror">
                <label for="representantName">Nom complet</label>
                <input type="text" class="form-control @error('representantName') is-invalid @enderror" name="representantName" value="{{ old('representantName') }}" placeholder="Nom i cognoms">
                @error('representantName')
                <div class="text-danger my-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-row">
                <div class="form-group @error('representantNif') is-invalid @enderror col-md-4">
                    <label for="representantNif">NIF</label>
                    <input type="text" class="form-control @error('representantNif') is-invalid @enderror" name="representantNif" value="{{ old('representantNif') }}" placeholder="41234567-X">
                    @error('representantNif')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="mt-5">
            <h2>
                Centre de treball
            </h2>
            <div class="form-group @error('workCenterName') is-invalid @enderror">
                <label for="workCenterName">Nom</label>
                <input type="text" class="form-control @error('workCenterName') is-invalid @enderror" name="workCenterName" value="{{ old('workCenterName') }}" placeholder="Centre Empresa">
                @error('workCenterName')
                <div class="text-danger my-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-row">
                <div class="form-group @error('workCenterWorkersNum') is-invalid @enderror col-md-4">
                    <label for="workCenterWorkersNum">Nombre de treballadors</label>
                    <select name="workCenterWorkersNum" class="form-control @error('workCenterWorkersNum') is-invalid @enderror" value="{{ old('workCenterWorkersNum') }}">
                        <option value="-10">10 o menys</option>
                        <option value="11-20">Entre 11 i 20</option>
                        <option value="21-50">Entre 21 i 50</option>
                        <option value="51-100">Entre 51 i 100</option>
                        <option value="100->">Més de 100</option>
                    </select>
                    @error('workCenterWorkersNum')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('workCentrePhone1') is-invalid @enderror col-md-4">
                    <label for="workCentrePhone1">Telèfon 1</label>
                    <input type="tel" class="form-control @error('workCentrePhone1') is-invalid @enderror" name="workCentrePhone1" value="{{ old('workCentrePhone1') }}" placeholder="+34 971123456">
                    @error('workCentrePhone1')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('workCentrePhone2') is-invalid @enderror col-md-4">
                    <label for="workCentrePhone2">Telèfon 2</label>
                    <input type="tel" class="form-control @error('workCentrePhone2') is-invalid @enderror" name="workCentrePhone2" value="{{ old('workCentrePhone2') }}" placeholder="+34 971123456">
                    @error('workCentrePhone2')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="form-group @error('workCentreLocation') is-invalid @enderror col-md-4">
                    <label for="workCentreLocation">Població</label>
                    <input type="text" class="form-control @error('workCentreLocation') is-invalid @enderror" name="workCentreLocation" autocomplete="locality" value="{{ old('workCentreLocation') }}" placeholder="Palma de Mallorca">
                    @error('workCentreLocation')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('workCentreAddress') is-invalid @enderror col-md-4">
                    <label for="workCentreAddress">Adreça</label>
                    <input type="text" class="form-control @error('workCentreAddress') is-invalid @enderror" name="workCentreAddress" autocomplete="street-address" value="{{ old('workCentreAddress') }}" placeholder="C/ Aragó 21">
                    @error('workCentreAddress')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('workCentreCp') is-invalid @enderror col-md-4">
                    <label for="workCentreCp">Codi Postal</label>
                    <input type="number" class="form-control @error('workCentreCp') is-invalid @enderror" name="workCentreCp" autocomplete="postal-code" value="{{ old('workCentreCp') }}" placeholder="07006">
                    @error('workCentreCp')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group @error('workCentreEmail') is-invalid @enderror">
                <label for="workCentreEmail">Adreça electrònica</label>
                <input type="email" class="form-control @error('workCentreEmail') is-invalid @enderror" name="workCentreEmail" autocomplete="email" value="{{ old('workCentreEmail') }}" placeholder="name@example.com">
                @error('workCentreEmail')
                <div class="text-danger my-2">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mt-5">
            <h2>
                Contracte de formació
            </h2>
            <div class="form-row">
                <fieldset class="form-group @error('agreementType') is-invalid @enderror col-md-6" value="{{ old('agreementType') }}">
                    <div class="row">
                        <legend class="col-form-label col-sm-4 pt-0">Tipus de jornada</legend>
                        <div class="col-sm-8">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="agreementType" name="agreementType1" value="full-time">
                                <label class="form-check-label" for="agreementType1">
                                    Completa
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="agreementType" name="agreementType2" value="part-time">
                                <label class="form-check-label" for="agreementType2">
                                    Xapada
                                </label>
                            </div>
                            @error('agreementType')
                            <div class="text-danger my-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </fieldset>
                <div class="form-group @error('agreementSchedule') is-invalid @enderror">
                    <label for="agreementSchedule">Horari</label>
                    <!--TODO: Modificar per input time (canvia de 2 a 4 inputs si es xapat)-->
                    <input type="text" class="form-control @error('agreementSchedule') is-invalid @enderror" name="agreementSchedule" value="{{ old('agreementSchedule') }}" placeholder="De 8:00 a 10:00">
                    @error('agreementSchedule')
                        <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 @error('agreementCoordinatorName') is-invalid @enderror">
                    <label for="agreementCoordinatorName">Coordindaor FCT</label>
                    <input type="text" class="form-control @error('agreementCoordinatorName') is-invalid @enderror" name="agreementCoordinatorName" value="{{ old('agreementCoordinatorName') }}" placeholder="Nom i cognom">
                    @error('agreementCoordinatorName')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6 @error('agreementCoordinatorNif') is-invalid @enderror">
                    <label for="agreementCoordinatorNif">NIF</label>
                    <input type="text" class="form-control @error('agreementCoordinatorNif') is-invalid @enderror" name="agreementCoordinatorNif" value="{{ old('agreementCoordinatorNif') }}" placeholder="433432412F">
                    @error('agreementCoordinatorNif')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 @error('agreementTutorName') is-invalid @enderror">
                    <label for="agreementTutorName">Tutor de les pràctiques</label>
                    <input type="text" class="form-control @error('agreementTutorName') is-invalid @enderror" name="agreementTutorName" value="{{ old('agreementTutorName') }}" placeholder="Nom i cognom">
                    @error('agreementTutorName')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6 @error('agreementTutorNif') is-invalid @enderror">
                    <label for="agreementTutorNif">NIF</label>
                    <input type="text" class="form-control @error('agreementTutorNif') is-invalid @enderror" name="agreementTutorNif" value="{{ old('agreementTutorNif') }}" placeholder="433432412F">
                    @error('agreementTutorNif')
                    <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="form-group @error('agreementPosition') is-invalid @enderror">
                <label for="agreementPosition">Lloc de treball</label>
                <input type="text" class="form-control @error('agreementPosition') is-invalid @enderror" name="agreementPosition" value="{{ old('agreementPosition') }}" placeholder="Lloc de treball">
                @error('agreementPosition')
                <div class="text-danger my-2">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <!--Footer-->
    <footer class="pt-4 my-md-5 pt-md-5 border-top container">
        <div class="row">
            <div class="col-12 col-md">
                <small class="d-block mb-3 text-muted">&copy; 2020-2021</small>
                <small class="d-block mb-3 text-muted">Daniel Arqués Toro</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cool stuff</a></li>
                    <li><a class="text-muted" href="#">Random feature</a></li>
                    <li><a class="text-muted" href="#">Team feature</a></li>
                    <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="#">Another one</a></li>
                    <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Resource</a></li>
                    <li><a class="text-muted" href="#">Resource name</a></li>
                    <li><a class="text-muted" href="#">Another resource</a></li>
                    <li><a class="text-muted" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>
                    <li><a class="text-muted" href="#">Locations</a></li>
                    <li><a class="text-muted" href="#">Privacy</a></li>
                    <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
        Holder.addTheme('thumb', {
            bg: '#55595c',
            fg: '#eceeef',
            text: 'Thumbnail'
        });
    </script>
</body>

</html>