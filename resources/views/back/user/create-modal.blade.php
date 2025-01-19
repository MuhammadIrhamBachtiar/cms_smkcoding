<!-- Modal -->
<div class="modal fade" id="modalCreate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header bg-success text-white">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Create User</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="{{ url('users') }}" method="post">
                  @csrf
                  <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input 
                          type="text" 
                          name="name" 
                          id="name" 
                          class="form-control @error('name') is-invalid @enderror" 
                          value="{{ old('name') }}"
                      >
                      @error('name')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                      <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input 
                            type="email" 
                            name="email" 
                            id="email" 
                            class="form-control @error('email') is-invalid @enderror" 
                            value="{{ old('email') }}"
                        >
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input 
                            type="password" 
                            name="password" 
                            id="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            value="{{ old('password') }}"
                        >
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="konfirmasi_password">Konfirmasi Password</label>
                        <input type="konfirmasi_password" name="password_confirmation" 
                               id="konfirmasi_password" class="form-control @error('konfirmasi_password') is-invalid @enderror" 
                               value="{{ old('konfirmasi_password') }}">
                        @error('konfirmasi_password')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success">Submit</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
