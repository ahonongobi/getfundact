@extends('_layouts._user_head2')

@section('content')
    <div class="container d-none">
        <div class="row">
            <div class="col-lg-12">
                <div class="div-center">
                    <h2>TinyMCE Editor: Basic Example</h2>
                    <textarea name="myTextarea" id="myTextarea"></textarea>

                    <h2>TinyMCE Editor: With All Plugins</h2>

                </div>
            </div>
        </div>
    </div>

    <div class="about-area two pb-70">
        <div class="container">
            <center>
                <h4>Ma campagne</h4>
            </center>
            <div class="row align-items-center">

                <form method="POST" enctype="multipart/form-data" action="{{ url('addcampagnes') }}">
                    @csrf

                    <container class="col-md-12">
                        <h2 style="background-color: #e15b1a;" class="text-white mx-auto py-4 d-flex justify-content-center">
                            INFORMATIONS DÉTAILLÉES
                        </h2>
                        <style>
                            section:last-of-type button {
                                width: 50%;
                                padding: 2em 0;
                                border-bottom: 0;
                            }

                            section:last-of-type button:nth-child(even) {
                                border-right: 1px solid #e15b1a;
                            }

                            section:last-of-type button:nth-child(3),
                            section:last-of-type button:nth-child(4) {
                                border-bottom: 1px solid #e15b1a;
                            }

                            section button {
                                width: 25%;
                                padding: 1em 0;
                                background: none;
                                box-shadow: none;
                                text-transform: uppercase;
                                letter-spacing: 5px;
                                border-left: 1px solid #e15b1a;
                                border-top: 1px solid #e15b1a;
                                border-bottom: 1px solid #e15b1a;
                                border-right: 0;
                                transition: background 0.25s ease-in;
                                cursor: pointer;
                            }
                            @media (max-width: 991px) {
                                section button {
                                    width: 50%;
                                }
                            }

                            section button:hover,
                            section button.active {
                                background: #e15b1a;
                                color: white;
                            }

                            section button:focus {
                                outline: none;
                            }

                            section button:last-of-type {
                                border-right: 1px solid #e15b1a;
                            }

                            .drop-zone {
                                max-width: 100%;
                                height: 200px;
                                padding: 25px;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                text-align: center;
                                font-family: "Quicksand", sans-serif;
                                font-weight: 500;
                                font-size: 20px;
                                cursor: pointer;
                                color: #cccccc;
                                border: 4px dashed #009578;
                                border-radius: 10px;
                            }

                            .drop-zone--over {
                                border-style: solid;
                            }

                            .box-icon {
                                max-width: 50px;
                                display: block;
                                margin: auto;
                            }

                            .drop-zone__input {
                                display: none;
                            }

                            .drop-zone__thumb {
                                width: 100%;
                                height: 100%;
                                border-radius: 10px;
                                overflow: hidden;
                                background-color: #cccccc;
                                background-size: cover;
                                position: relative;
                            }

                            .drop-zone__thumb::after {
                                content: attr(data-label);
                                position: absolute;
                                bottom: 0;
                                left: 0;
                                width: 100%;
                                padding: 5px 0;
                                color: #ffffff;
                                background: rgba(0, 0, 0, 0.75);
                                font-size: 14px;
                                text-align: center;
                            }

                        </style>



                        <div class="col-lg-12 col-md-12 mt-3">
                            <label for="">Veuillez selectionner la catégorie dans laquelle se trouve votre campagne:
                            </label>
                            <select name="categories" class="select2button mt-3">
                                <option value="Anniversaire" selected>Anniversaire</option>
                                <option value="Associatif">Associatif</option>

                                
                                <option value="Entertainment">Divertissement</option>
                                <option value="Environment">Environnement</option>
                                <option value="Evènement">Evénément</option>
                                
                                <option value="Familial">Familial</option>
                                <option value="Humanitaire">Humanitaire</option>
                                <option value="Mariage">Mariage</option>
                                <option value="Mobility">Mobilité</option>
                                <option value="Recreation">Récréation</option>
                                <option value="Restauration">Restauration</option>
                                <option value="Éducation">Éducation</option>
                                
                                <option value="Sports">Sports</option>
                                <option value="Santé">Santé</option>
                                <option value="Technology">Technologie</option>
                                
                                <option value="Transit">Transit</option>
                                <option value="Voyage">Voyage</option>
                                <option value="Soutien pour proche">Soutien pour proche</option>
                                <option value="Autres">Autres</option>
                            </select>

                            <!--<div class="mb-3">
                                                    <select class="" name="categories" class="mb-4">
                                                        <option value="">Veuillez selectionner la catégories dans laquelle se trouve votre campagne                    </option>
                                                        <option value="Anniversaire">Anniversaire</option>
                                                        <option value="Associatif">Associatif</option>
                                                        <option value="Autres">Autres</option>
                                                        <option value="Bicycling">Bicycling</option>
                                                        <option value="Entertainment">Entertainment</option>
                                                        <option value="Environment">Environment</option>
                                                        <option value="Evènement">Evènement</option>
                                                        <option value="Event">Event</option>
                                                        <option value="Familial">Familial</option>
                                                        <option value="Humanitaire">Humanitaire</option>
                                                        <option value="Mariage">Mariage</option>
                                                        <option value="Mobility">Mobility</option>
                                                        <option value="Recreation">Recreation</option>
                                                        <option value="Restoration">Restoration</option>
                                                        <option value="Schools">Schools</option>
                                                        <option value="Soutien pour proche">Soutien pour proche</option>
                                                        <option value="Sports">Sports</option>
                                                        <option value="Streetscapes">Streetscapes</option>
                                                        <option value="Technology">Technology</option>
                                                        <option value="Tontine">Tontine</option>
                                                        <option value="Transit">Transit</option>
                                                        <option value="Voyage">Voyage</option>
                                                    </select>
                                                  </div>
                                                -->


                        </div>
                        <div class="col-lg-12 mb-4 mt-3">
                            <div class="form-group">
                                <input type="text" value="{{ old('name') }}" required name="name" class="form-control"
                                    placeholder="Nom de la campagne">
                            </div>
                        </div>

                        <div class="col-lg-12 mb-4">
                            <div class="form-group">
                                <input type="number" value="{{ old('duree') }}" required name="duree"
                                    class="form-control" placeholder="Durée(en jours)">
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="form-group">
                                <input type="text" required name="monnaie" readonly class="form-control"
                                    value="FCFA (XOF)" placeholder="Monnaie">
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="form-group">
                                <input type="number" value="{{ old('montant_v') }}" required name="montant_v"
                                    class="form-control" placeholder="* Montant visé - 0 si pas de montant précis">
                            </div>
                            <input type="checkbox" name="hidden_cash" value="1" id=""> Ne pas montrer le montant cumulé de
                            la collecte

                        </div>

                        <div class="col-lg-12 mb-4">
                            <div class="form-group">
                                <input type="text" value="{{ old('name_b') }}" required name="name_b"
                                    class="form-control" placeholder="* Nom du bénéficiaire">
                            </div>
                        </div>


                        <div class="col-lg-12 mb-4 ">
                            <div class="form-group">
                                <input type="text" value="{{ old('where') }}" required name="where" class="form-control"
                                    placeholder="* Où sera dépensée la collecte ?">
                            </div>
                        </div>

                        <div class="col-lg-12 mb-4 ">
                            <div class="form-group">
                                <input type="text" value="{{ old('details') }}" required name="details"
                                    class="form-control" placeholder="Détails sur le lieu">
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <textarea name="details_ojectifs" id="myTextarea2">{{ old('details_ojectifs') }}</textarea>
                            {{-- <textarea name="details_ojectifs" placeholder="" class="form-control" id="long_desc" rows="3">
                                   {{old('details_objectifs')}}
                                  </textarea> --}}
                            <small class="text-muted">Racontez-nous l'histoire de votre projet. Qu'est-ce que c'est,
                                pourquoi cela importe-t-il, et pourquoi les contributeurs devraient s'en préoccuper? Voici
                                l'endroit pour plus de détails.</small>
                        </div>

                        <div class="col-lg-12 mb-4 ">
                            <div class="form-group">
                                <input type="text" value="{{ old('keys_word') }}" required name="keys_word"
                                    class="form-control" placeholder="* Mots Cléfs">
                                <smal class="text-muted">
                                    Ajouter des mots-cléfs augmente les chances de découverte de votre projet dans les
                                    recherches. Mes mot-cléfs sont des mots qui décrivent le mieux votre projet. Si votre
                                    projet consiste à construire une école, 'Ecole', 'Construction', 'Education' seront des
                                    mots cléfs pertinents. Une liste de mots cléfs vous est proposée.
                                </smal>
                            </div>
                        </div>
                        <h2 style="background-color: #e15b1a;"
                            class="text-white mx-auto py-2 ml-5  d-flex justify-content-center">
                            COMMUNICATION
                        </h2>


                        <div class="col-lg-12 mb-4 ">
                            <div class="form-group">
                                <input type="text" value="{{ old('video') }}" required name="video" class="form-control"
                                    placeholder="**Vidéo (si vous avez une vidéo youtube de votre événement ou projet)">
                                <small class="text-muted">
                                    Copier-Coller le lien "ifrmae" d une vidéo Viméo ou Youtube qui présente votre campagne. Votre
                                    vidéo doit être courte pour captiver vos potentiels contributeurs mais complète afin de
                                    dire d éclairer au mieux sur votre campagne. Comment copier le lien iframe de votre video Youtube, si vous ne le savez pas faire: cliquez 👉
                                    {{-- modal a target--}}
                                    <a href="#" id="modalshow">ici</a>
                                    {{-- modal a target--}}
                                </small>
                            </div>
                        </div>
                        <!--<div class="col-lg-12 mb-4 ">
                                    <div class="form-group">
                                        <label for="">Image de vignette (campagne publique)</label>
                                        <input type="file" required name="file_vignette" class="form-control">
                                        <small class="text-muted">Télécharger une image de taille minimum 500x340(.jpg ou
                                            .png).</small>
                                    </div>
                                </div> -->

                        <!--- drop file zone -->

                        <!-- file drop zone 2 -->
                        <label for="">Image de vignette (campagne publique)</label>
                        <small class="text-muted">Télécharger une image de taille minimum 500x340(.jpg ou
                            .png).</small>
                        <div class="drop-zone col-lg-12 mb-4 ">

                            <span class="drop-zone__prompt">
                                <img class="box-icon"
                                    src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Octicons-cloud-upload.svg" />
                                Glissez et deposer / ou cliquez pour télécharger
                            </span>
                            <input type="file" required name="file_vignette" class="drop-zone__input">
                        </div>
                        <!-- end file drop zone 2 -->


                        {{-- <div class="col-lg-12 mb-4 ">
                            <div class="form-group">
                                <label for="">Image de couverture de votre campagne</label>
                                <input type="file" required name="file_couverture" class="form-control">
                                <small class="text-muted">Télécharger une image de taille minimum 500x340(.jpg ou
                                    .png).</small>
                            </div>
                        </div> --}}

                        <!-- file drop zone 2 -->
                        <label for="">Image de couverture de votre campagne</label>
                        <small class="text-muted">Télécharger une image de taille minimum 500x340(.jpg ou
                            .png).</small>
                        <div class="drop-zone col-lg-12 mb-4 ">

                            <span class="drop-zone__prompt">
                                <img class="box-icon"
                                    src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Octicons-cloud-upload.svg" />
                                Glissez et deposer / ou cliquez pour télécharger
                            </span>
                            <input type="file" required name="file_couverture" class="drop-zone__input">
                        </div>
                        <!-- end file drop zone 2 -->
                        <div class="col-lg-12 mb-4 ">
                            <div class="form-group">
                                <input type="text" value="{{ old('siteweb') }}" required name="siteweb"
                                    class="form-control"
                                    placeholder="Site Web (si vous avez une page web de votre événement ou projet)">
                                <small class="text-muted">Copiez-collez le lien sur votre site web si vous en avez un./
                                    <span class="text-danger">mettez # si n'avez pas</span> </small>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-4 ">
                            <div class="form-group">
                                <input type="text" value="{{ old('hashtag') }}" required name="hashtag"
                                    class="form-control" placeholder="Hashtag (pour campagnes publiques)">
                                <small class="text-muted">Hashtag (pour campagnes publiques).</small>
                            </div>
                        </div>
                        <h2 style="background-color: #e15b1a;"
                            class="text-white mx-auto py-2 ml-5  d-flex justify-content-center">
                            BUDGET ET PLANNING
                        </h2>

                        <div class="col-lg-12 mb-4">
                            <label for="">Détails du budget</label>
                            <textarea name="detail_budget" placeholder="" class="form-control" id="long_desc2" rows="3">
                                     {{ old('detail_budget') }}
                                  </textarea>
                            <small class="text-muted">Les contributeurs sont en général rassurés lorsque vous avez une
                                idée claire de la façon avec laquelle vous allez utiliser les fonds. Donnez-en une
                                explication ici.

                            </small>
                        </div>
                        <h2 style="background-color: #e15b1a;"
                            class="text-white mx-auto py-2 ml-5  d-flex justify-content-center">ENGLISH TRANSLATION</h2>
                        <div class="col-lg-12 mb-4">
                            <label for="">English</label>
                            <textarea name="details_budget_en" placeholder="" class="form-control" id="long_desc3" rows="3">
                                  {{ old('details_budget_en') }}
                                  </textarea>
                            <small class="text-muted">Les contributeurs sont en général rassurés lorsque vous avez une
                                idée claire de la façon avec laquelle vous allez utiliser les fonds. Donnez-en une
                                explication ici.

                            </small>
                        </div>

                        <input type="checkbox" required name="" id=""> En soumettant, vous acceptez les conditions
                        d'utilisation.
                        <div class="col-lg-12">
                            <button type="submit" class="btn common-btn">SOUMETTRE LES INFORMATIONS POUR
                                VALIDATION</button>
                        </div>
                    </container>


            </div>
            </form>
        </div>
    </div>
    </div>

{{-- then make modal according to the below a target ans display this -> 
    <div style="position: relative; padding-bottom: 56.25%; height: 0;"><iframe src="https://www.loom.com/embed/4378ae6bdb5d44b398de9f906896803d" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe></div> --}}
    <!-- Modal -->
    <div class="m-4">
        <div id="myModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Comment copier le lien iframe de votre vidéo Youtube</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div style="position: relative; padding-bottom: 56.25%; height: 0;"><iframe src="https://www.loom.com/embed/4378ae6bdb5d44b398de9f906896803d" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- footer - --}}
@endsection
