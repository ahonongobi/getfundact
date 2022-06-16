@extends('_layouts._head')
 <!-- french google captcha cdn link -->
 <script src='https://www.google.com/recaptcha/api.js?hl=fr'></script>
 <style>
     .dispon{
            display: none;
     }
 </style>
@section('content')


        <div class="page-title-area title-bg-eight">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="title-item">
                            <h2>Contactez-nous</h2>
                            <ul>
                                <li>
                                    <a href="/">Accueil</a>
                                </li>
                                <li>
                                    <span>GETFUND ACTION</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="contact-info-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="contact-info">
                            <i class="icofont-location-pin"></i>
                            <span>Adresse:</span>
                            <a href="#">Rue en Face de IITA, TANKPÈ ABOMEY-CALAVI</a>
                            
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="contact-info">
                            <i class="icofont-ui-call"></i>
                            <span>Téléphones:</span>
                            <a href="tel:+229 5150 7071">+229 5150 7071
                            </a>
                            <a href="tel:+229 6474 5149">+229 6474 5149
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                        <div class="contact-info">
                            <i class="icofont-ui-message"></i>
                            <span>E-mail:</span>
                            <a href="mailto:contact@getfund-act.com">
                                contact@getfund-act.com <br/>
                              contact@intelligencia-si.com
                            </a>
                            <a href="">
                                <span class="__cf_email__" data-cfemail="98f1f6fef7d8fef1f6fcf7b6fbf7f5"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="contact-area pb-70">
            <div class="container">
                <form id="contactForm" method="POST" action="{{url('contact-nous')}}">
                    @csrf
                    <h2>Parlez avec nous!</h2>
                    <p>Besoin d’aide, nous sommes là pour vous.</p>
                    <div class="row">
                        <input  class="dispon" id="object" name="object" type="text">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    <i class="icofont-user-alt-3"></i>
                                </label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Nom & Prénoms :" required data-error="Veuillez entrer votre nom">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    <i class="icofont-ui-email"></i>
                                </label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail :" required data-error="Veuillez entrer votre email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none">
                            <div class="form-group">
                                <label>
                                    <i class="icofont-ui-call"></i>
                                </label>
                                <input type="text" name="phone_number" id="phone_number" placeholder="Téléphone : required data-error="Please enter your number" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    <i class="icofont-notepad"></i>
                                </label>
                                <input type="text" name="subject" id="msg_subject" class="form-control" placeholder="Objet :" required data-error="Veuillez renseigner ce champ">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>
                                    <i class="icofont-comment"></i>
                                </label>
                                <textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Votre message....." required data-error="Veuillez ecrire un message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <div class="form-group d-flex">
                                {{-- make Are you human ?  test here--}}
                                <span style="font-size: 20px" class="mt-2">9+8=</span> <input id="norobot" class="form-control" name="no-robot" placeholder="?" type="text" required data-error="Vous devez mettre la réponse">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <button id="sendMessage" type="submit" class="btn common-btn disabled">
                                Envoyer
                            </button>
                            {{-- diseabled button --}}

                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="map-area">
            
        </div>

        
        @endsection