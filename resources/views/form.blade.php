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

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <!--Form-->

    <form class="container mt-5" action="/form" method="POST">
    @csrf
        <div>
            <h2>
                Informació de l'empresa
            </h2>
            <div class="form-group">
                <label for="companyName">Nom</label>
                <input type="text" class="form-control" id="companyName" placeholder="Empresa S.L.">

            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="companyCif">CIF</label>
                    <input type="text" class="form-control" id="companyCif" placeholder="4124992032X">
                </div>
                <div class="form-group col-md-4">
                    <label for="companyPhone1">Telèfon 1</label>
                    <input type="text" class="form-control" id="companyPhone1" placeholder="+34 971123456">
                </div>
                <div class="form-group col-md-4">
                    <label for="companyPhone2">Telèfon 2</label>
                    <input type="text" class="form-control" id="companyPhone2" placeholder="+34 971123456">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="companyLocation">Població</label>
                    <input type="text" class="form-control" id="companyLocation" placeholder="Palma de Mallorca">
                </div>
                <div class="form-group col-md-4">
                    <label for="companyAddress">Adreça</label>
                    <input type="text" class="form-control" id="companyAddress" placeholder="C/ Aragó 21, 1A">
                </div>
                <div class="form-group col-md-4">
                    <label for="companyCp">Codi Postal</label>
                    <input type="number" class="form-control" id="companyCp" placeholder="07006">
                </div>
            </div>

            <div class="form-group">
                <label for="companyEmail">Adreça electrònica</label>
                <input type="email" class="form-control" id="companyEmail" placeholder="exemple@gmail.com">
            </div>

            <div class="form-row">
                <fieldset class="form-group col-md-6">
                    <div class="row">
                        <legend class="col-form-label col-sm-4 pt-0">Titularitat empresa</legend>
                        <div class="col-sm-8">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="companyOwnership" id="companyOwnership1" value="private" checked>
                                <label class="form-check-label" for="companyOwnership1">
                                    Pública
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="companyOwnership" id="companyOwnership2" value="public">
                                <label class="form-check-label" for="companyOwnership2">
                                    Privada
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form-group col-md-6">
                    <div class="row">
                        <legend class="col-form-label col-sm-4 pt-0">Sector productiu</legend>
                        <div class="col-sm-8">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="companySector" id="companySector1" value="primary">
                                <label class="form-check-label" for="companySector1">
                                    Primari
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="companySector" id="companySector2" value="secondary">
                                <label class="form-check-label" for="companySector2">
                                    Secondari
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="companySector" id="companySector3" value="tertiary" checked>
                                <label class="form-check-label" for="companySector3">
                                    Terciari
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div>
            <h2>
                Representant de l'empresa
            </h2>
            <div class="form-group">
                <label for="representantName">Nom complet</label>
                <input type="text" class="form-control" id="representantName" placeholder="Nom i cognoms">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="representantNif">NIF</label>
                    <input type="text" class="form-control" id="representantNif" placeholder="41234567-X">
                </div>
            </div>
        </div>

        <div>
            <h2>
                Centre de treball
            </h2>
            <div class="form-group">
                <label for="workCenterName">Nom</label>
                <input type="text" class="form-control" id="workCenterName" placeholder="Centre Empresa">
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="companyCif">CIF</label>
                    <select name="companyCif" class="form-control">
                        <option value="0-10">10 o menys</option>
                        <option value="11-20">Entre 11 i 20</option>
                        <option value="21-50">Entre 21 i 50</option>
                        <option value="51-100">Entre 51 i 100</option>
                        <option value="100+">Més de 100</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="companyPhone1">Telèfon 1</label>
                    <input type="text" class="form-control" id="companyPhone1" placeholder="+34 971123456">
                </div>
                <div class="form-group col-md-4">
                    <label for="companyPhone2">Telèfon 2</label>
                    <input type="text" class="form-control" id="companyPhone2" placeholder="+34 971123456">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="companyLocation">Població</label>
                    <input type="text" class="form-control" id="companyLocation" placeholder="Palma de Mallorca">
                </div>
                <div class="form-group col-md-4">
                    <label for="companyAddress">Adreça</label>
                    <input type="text" class="form-control" id="companyAddress" placeholder="C/ Aragó 21, 1A">
                </div>
                <div class="form-group col-md-4">
                    <label for="companyCp">Codi Postal</label>
                    <input type="number" class="form-control" id="companyCp" placeholder="07006">
                </div>
            </div>

            <div class="form-group">
                <label for="companyEmail">Adreça electrònica</label>
                <input type="email" class="form-control" id="companyEmail" placeholder="exemple@gmail.com">
            </div>
        </div>
        <div>
            <h2>
                Contracte de formació
            </h2>
            <div class="form-row">
                <fieldset class="form-group col-md-6">
                    <div class="row">
                        <legend class="col-form-label col-sm-4 pt-0">Tipus de jornada</legend>
                        <div class="col-sm-8">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="agreementType" id="agreementType1" value="full-time" checked>
                                <label class="form-check-label" for="agreementType1">
                                    Completa
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="agreementType" id="agreementType2" value="part-time">
                                <label class="form-check-label" for="agreementType2">
                                    Xapada
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class="form-group">
                <label for="agreementPosition">Lloc de treball</label>
                <input type="text" class="form-control" id="agreementPosition" placeholder="Lloc de treball">
            </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <!--Footer-->
    <footer class="pt-4 my-md-5 pt-md-5 border-top container">
        <div class="row">
            <div class="col-12 col-md">
                <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
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