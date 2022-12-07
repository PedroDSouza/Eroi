@extends('layouts.main')

@section('title', 'Eroi - Página Principal')

@section('content')

<!-- Background image -->

        <div>

        <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Acessar</h3>

            <div class="form-outline mb-4">
              <input type="email" id="typeEmailX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">E-mail</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typePasswordX-2">Senha</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3">Lembrar senha</label>
            </div>

            <button class="btn btn-dark btn-lg btn-block" type="submit">Entrar</button>

            <hr class="my-4">

          

          </div>
        </div>
      </div>
    </div>
  </div>
         
        </div>
<!-- Background image -->
      
@endsection