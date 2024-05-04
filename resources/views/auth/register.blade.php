<x-layout>
  <div class="container my-5">
    <div class="row justify-content-center align-items-center text-center">
      <h2>Iscriviti adesso.</h2>
      <div class="col-4">
        <form 
        class="p-3 rounded-5 border border-dark"
        method="POST"
        action="{{route('register')}}"
        >
        @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nome utente</label>
              <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
            </div>    
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input name="password" type="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
              <label for="InputPasswordConfirmation" class="form-label">Conferma Password</label>
              <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
            </div>
            <button type="submit" class="btn rounded-5 border border-dark">Submit</button>
          </form>
      </div>
    </div>
  </div>
</x-layout>