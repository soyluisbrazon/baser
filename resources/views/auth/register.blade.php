<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrarse</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="{{ asset('assets/estilos.css')}}">

</head>
<body>
  <section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Registrarse</h4>
                </div>

            <form action="route('users')" method="post">
                     @csrf

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Nombre de Usuario</label>
                    <input type="text" name="name" id="form2Example11" class="form-control"
                      placeholder="Nombre de Usuario" />
                    
                  </div>


                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Correo</label>
                    <input type="email" name="email" id="form2Example11" class="form-control"
                      placeholder="Correo" />
                    
                  </div>


                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Contraseña</label>
                    <input type="password" name="password" id="form2Example22" class="form-control" 
                    placeholder="contraseña" />
                    
                  </div>


                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Confirmar contraseña</label>
                    <input type="password" name="password confirmation" id="form2Example22" class="form-control" 
                    placeholder="Confirmar contraseña" />
                    
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <input type="submit" name="registrarse">
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Ya tienes una cuenta?</p>
                    <a href="{{route('login')}}" 
                    class="btn btn-outline-danger">iniciar sesion</a>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">sergio es bruja</h4>
                <p class="small mb-0">bruja</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>