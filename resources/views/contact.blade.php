@extends('_layouts._head')

@section('content')


        <div class="page-title-area title-bg-eight">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="title-item">
                            <h2>Contact</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <span>Contact</span>
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
                            <span>Location:</span>
                            <a href="#">6B, Helvetica street, Jordan</a>
                            <a href="#">6A, North street, Jordan</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="contact-info">
                            <i class="icofont-ui-call"></i>
                            <span>Phone:</span>
                            <a href="tel:+123456789">+123-456-789</a>
                            <a href="tel:+548658956">+548-658-956</a>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                        <div class="contact-info">
                            <i class="icofont-ui-email"></i>
                            <span>Email:</span>
                            <a href="">
                                <span class="">contact@getfund-act.com</span>
                            </a>
                            <a href="">
                                <span class="__cf_email__" data-cfemail="98f1f6fef7d8fef1f6fcf7b6fbf7f5">infos@getfund-act.com</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="contact-area pb-70">
            <div class="container">
                <form id="contactForm">
                    <h2>Let's talk...!</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, iusto possimus doloremque amet vitae facere blanditiis nulla explicabo obcaecati nihil ipsam deleniti nesciunt illo, non iure</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    <i class="icofont-user-alt-3"></i>
                                </label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Nom" required data-error="Veuillez entrer votre nom">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    <i class="icofont-ui-email"></i>
                                </label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required data-error="Veuillez entrer votre email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none">
                            <div class="form-group">
                                <label>
                                    <i class="icofont-ui-call"></i>
                                </label>
                                <input type="text" name="phone_number" id="phone_number" placeholder="Phone" required data-error="Please enter your number" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none">
                            <div class="form-group">
                                <label>
                                    <i class="icofont-notepad"></i>
                                </label>
                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>
                                    <i class="icofont-comment"></i>
                                </label>
                                <textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Ecrivez nous par ici" required data-error="Veuillez ecrire un message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn common-btn">
                                Envoyer message
                            </button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="map-area">
            <iframe id="map" src="../../../external.html?link=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59843174.53779285!2d62.17507173408571!3d23.728204508550363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3663f18a24cbe857%3A0xa9416bfcd3a0f459!2sAsia!5e0!3m2!1sen!2sbd!4v1603558902714!5m2!1sen!2sbd" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>


        @endsection