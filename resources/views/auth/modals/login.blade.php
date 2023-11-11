
        <!-- Sign in / Register Modal -->
        <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="icon-close"></i></span>
                        </button>

                        <div class="form-box">
                            <div class="form-tab">
                                <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Me connecter</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">M'enregistrer</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="tab-content-5">
                                    <!-- Login -->
                                    <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="singin-email">Adresse Email *</label>
                                                <input class="form-control" id="singin-email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" >
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div><!-- End .form-group -->

                                            <div class="form-group">
                                                <label for="singin-password">Mot de passe *</label>
                                                <input class="form-control" id="singin-password"
                                                type="password"
                                                name="password"
                                                required autocomplete="current-password" />

                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div><!-- End .form-group -->

                                            <div class="form-footer">
                                                <button type="submit" class="btn btn-outline-primary-2">
                                                    <span>Me connecter</span>
                                                    <i class="icon-long-arrow-right"></i>
                                                </button>

                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="signin-remember" name="remember">
                                                    <label class="custom-control-label" for="signin-remember">
                                                        Se souvenir de moi 😊
                                                    </label>
                                                </div><!-- End .custom-checkbox -->

                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}" class="forgot-link">Mot de passe oublié ?</a>
                                                @endif
                                            </div><!-- End .form-footer -->
                                        </form>
                                        <div class="form-choice">
                                            <p class="text-center">ou connectez-vous avec</p>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <a href="#" class="btn btn-login btn-g">
                                                        <i class="icon-google"></i>
                                                        Google
                                                    </a>
                                                </div><!-- End .col-6 -->
                                                <div class="col-sm-6">
                                                    <a href="#" class="btn btn-login btn-f">
                                                        <i class="icon-facebook-f"></i>
                                                        Facebook
                                                    </a>
                                                </div><!-- End .col-6 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .form-choice -->
                                    </div>
                                    <!-- End Login -->
                                    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="register-email">Prénom(s) & Nom(s) *</label>
                                                <input type="text" class="form-control" id="register-email" name="name" required>
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div><!-- End .form-group -->

                                            <div class="form-group">
                                                <label for="register-email">Numéro de téléphone *</label>
                                                <input type="tel" class="form-control" id="register-email" name="phone" required>
                                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                            </div><!-- End .form-group -->

                                            <div class="form-group">
                                                <label for="register-email">Adresse Email *</label>
                                                <input type="email" class="form-control" id="register-email" name="email" required>
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div><!-- End .form-group -->

                                            <div class="form-group">
                                                <label for="register-password">Mot de passe *</label>
                                                <input type="password" class="form-control" id="register-password" name="password" required>
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div><!-- End .form-group -->

                                            <div class="form-group">
                                                <label for="register-password">Confirmer votre mot de passe *</label>
                                                <input type="password" class="form-control" id="register-password" name="password_confirmation" required>
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div><!-- End .form-group -->

                                            <div class="form-footer">
                                                <button type="submit" class="btn btn-outline-primary-2">
                                                    <span>Confirmer</span>
                                                    <i class="icon-long-arrow-right"></i>
                                                </button>

                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                    <label class="custom-control-label" for="register-policy">J'ai lu et accepte les <a href="#">Conditions d'utilisation</a> *</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .form-footer -->
                                        </form>
                                        {{-- <div class="form-choice">
                                            <p class="text-center">or sign in with</p>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <a href="#" class="btn btn-login btn-g">
                                                        <i class="icon-google"></i>
                                                        Login With Google
                                                    </a>
                                                </div><!-- End .col-6 -->
                                                <div class="col-sm-6">
                                                    <a href="#" class="btn btn-login  btn-f">
                                                        <i class="icon-facebook-f"></i>
                                                        Login With Facebook
                                                    </a>
                                                </div><!-- End .col-6 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .form-choice --> --}}
                                    </div><!-- .End .tab-pane -->
                                </div><!-- End .tab-content -->
                            </div><!-- End .form-tab -->
                        </div><!-- End .form-box -->
                    </div><!-- End .modal-body -->
                </div><!-- End .modal-content -->
            </div><!-- End .modal-dialog -->
        </div><!-- End .modal -->
