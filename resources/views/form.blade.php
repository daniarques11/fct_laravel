<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pricing example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>

  <body>
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

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Pricing</h1>
      <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
    </div>

    <!--Form-->

    <form action="post">
        <div id="company">
            <h2>
                Empresa
            </h2>
            <div>
                <div>
                    Nom
                </div>
                <input type="text">
            </div>
            <div>
                <div>
                    CIF
                </div>
                <input type="text">
            </div>
            <div>
                <div>
                    Adreça
                </div>
                <input type="text">
            </div>
            <div>
                <div>
                    Població
                </div>
                <input type="text">
            </div>
            <div>
                <div>
                    CP
                </div>
                <input type="number">
            </div>
            <div>
                <div>
                    Telèfon 1
                </div>
                <input type="text">
            </div>
            <div>
                <div>
                    Telèfon 2
                </div>
                <input type="text">
            </div>
            <div>
                <div>
                    E-mail
                </div>
                <input type="text">
            </div>
            <div>
                <div>
                    Sector productiu
                </div>
                <input type="radio" name="production_sector" value="primary"> Primari
                <input type="radio" name="production_sector" value="secondary"> Secundari
                <input type="radio" name="production_sector" value="tertiary"> Terciari
            </div>
            <div>
                <div>
                    Acitivitat principal
                </div>
                <input type="text">
            </div>
            <div>
                <div>
                    Titularitat
                </div>
                <input type="radio" name="ownership" value="private">Privada
                <input type="radio" name="ownership" value="public">Public
            </div>
        </div>
        <div id="representant">
            <h2>
               Representant de l'empresa 
            </h2>
            <div>
                <div>
                    Nom
                </div>
                <input type="text">
            </div>
            <div>
                <div>
                    NIF
                </div>
                <input type="text">
            </div>
        </div>
        <div id="working_center">
            <h2>
                Centre de treball
            </h2>
            <div>
                <div>
                    Nom del centre
                </div>
                <input type="text">
            </div>
            <div>
                <div>
                    Adreça
                </div>
                <input type="text">
            </div>
            <div>
                <div>
                    Població
                </div>
                <input type="text">
            </div>
            <div>
                <div>
                    CP
                </div>
                <input type="number">
            </div>
            <div>
                <div>
                    Activitat
                </div>
                <input type="text">
            </div>
            <div>
                <div>
                    Nombre de treballadors
                </div>
                <select name="workers_number">
                    <option value="0-10">10 o menys</option>
                    <option value="11-20">Entre 11 i 20</option>
                    <option value="21-50">Entre 21 i 50</option>
                    <option value="51-100">Entre 51 i 100</option>
                    <option value="100+">Més de 100</option>
                </select>
            </div>
            <div>
            <div>
                <div>
                    E-mail
                </div>
                <input type="text">
            </div>
                <div>
                    Telèfon 1
                </div>
                <input type="text">
            </div>
            <div>
                <div>
                    Telèfon 2
                </div>
                <input type="text">
            </div>
        </div>
        <div id="agreement">
            <div>
                <div>
                    Tipus jornada
                </div>
                <input type="radio" name="day_work_type"> Continuada
                <input type="radio" name="day_work_type"> Xapada
            </div>
        </div>
        <div id="agreement">
            <div>
                <div>
                    Horari
                </div>
                <input type="text" > 
            </div>
            <div>
                <div>
                    Coordinador FCT
                </div>
                <input type="text" > 
            </div>
            <div>
                <div>
                    NIF
                </div>
                <input type="text" > 
            </div>
            <div>
                <div>
                    Nom tutor empresa
                </div>
                <input type="text" > 
            </div>
            <div>
                <div>
                    NIF
                </div>
                <input type="text" > 
            </div>
            <div>
                <div>
                    Lloc de treball
                </div>
                <input type="text" > 
            </div>
        </div>
    </form>

    <!--Form-->
      <footer class="pt-4 my-md-5 pt-md-5 border-top">
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
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
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
