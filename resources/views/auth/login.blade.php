<x-layout>
    <x-layout>
        <div class="container my-5">
          <div class="row justify-content-center align-items-center text-center">
            <h2>Iscriviti adesso.</h2>
            <div class="col-4">
              <form 
              class="p-3 rounded-5 border border-dark"
              method="POST"
              action="{{route('login')}}"
              >
              @csrf   
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password">
                  </div>
                  <button type="submit" class="btn rounded-5 border border-dark">Submit</button>
                </form>
            </div>
          </div>
        </div>
      </x-layout>
</x-layout>