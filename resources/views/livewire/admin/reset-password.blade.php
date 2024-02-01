<div>
    <div class="page page-center">
        <div class="container container-tight py-4">
            <form wire:submit.prevent='submitResetPasswordForm' class="card card-md rounded-4" autocomplete="off" novalidate>
              @if (session('success'))
                   <div class="px-3">
                       <div class="alert alert-success mt-5">
                           {{ session('success') }}
                       </div>
                       <div class="mt-3">
                           <a href="{{ url('admin/login', []) }}" class="btn btn-azure rounded-pill mb-5 mt-3">Login</a>
                       </div>
                   </div>
              @else
                <div class="card-body">
                    <h2 class="text-center mb-4 fw-bolder" style="color: #ed6b23">Reset Password</h2>
                    <div class="mb-3">
                        <label class="form-label fw-bolder">Password</label>
                        <div class="input-group mb-3">
                        <input wire:model='password' type="{{ $hide ? 'password' : 'text' }}" id="password" name="password" required autofocus class="form-control rounded-start-pill"
                            placeholder="Masukan Password Baru">
                            <span class="input-group-text rounded-end-pill">
                              <a href="javascript:void()" wire:click="$toggle('hide')"
                                  class="link-secondary" title="Show password">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                      width="24" height="24" viewBox="0 0 24 24"
                                      stroke-width="2" stroke="currentColor" fill="none"
                                      stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                      <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                      <path
                                          d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                  </svg>
                              </a>
                          </span>
                        </div>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bolder">Confirmasi Password Baru</label>
                        <div class="input-group mb-3">
                        <input wire:model='password_confirmation' type="{{ $hide ? 'password' : 'text'}}" id="password-confirm" name="password_confirmation" required autofocus class="form-control rounded-start-pill"
                            placeholder="Masukan Confirmasi Password Baru">
                            <span class="input-group-text rounded-end-pill">
                              <a href="javascript:void()" wire:click="$toggle('hide')"
                                  class="link-secondary" title="Show password">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                      width="24" height="24" viewBox="0 0 24 24"
                                      stroke-width="2" stroke="currentColor" fill="none"
                                      stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                      <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                      <path
                                          d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                  </svg>
                              </a>
                          </span>
                        </div>
                            @if ($errors->has('password_confirmation'))
                                <span
                                    class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-azure w-100 rounded-pill">
                            <!-- Download SVG icon from http://tabler-icons.io/i/mail -->
                            Simpan
                        </button>
                    </div>
                </div>
            </form>
            @endif
        </div>
    </div>
    <!-- Modal Pop-Up-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content rounded-4">
          <div class="modal-body">
            <div class="mb-6">
              <img src="{{ asset('img/icons/icon_email.png') }}" class="img-fluid d-block mx-auto mb-3" alt="succes">
              <h2 class="h2 text-center" style="color:#1985A1"><b>Periksa email anda </b></h2>
              <p class="text-center">Link reset telah dikirim ke email Anda.</p>
            </div>
            <div class=" text-center">
              <a name="" id="" class="btn btn-primary btn-azure rounded-pill" href="#" role="button">Selesai</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional: Place to the bottom of scripts -->
    <script>
      const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)

    </script>
</div>




