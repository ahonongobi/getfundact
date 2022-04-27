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
                <h4>Ma cagnotte</h4>
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

                        </style>



                        <div class="col-lg-12 col-md-12 mt-3">
                            <label for="">Veuillez selectionner la catégories dans laquelle se trouve votre campagne:
                            </label>
                            <select name="categories" id="#" class="select2button mt-3">
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
                                    placeholder="Nom de la cagnotte">
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
                            <input type="checkbox" name="hidden_cash" value="1" id=""> Ne pas Montrer le montant cumulé de
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
                                    placeholder="* Où sera dépensée la collecte">
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
                                    class="form-control" placeholder="* Mots Clés">
                                <smal class="text-muted">
                                    Ajouter des mots-clés augmente les chances de découverte de votre projet dans les
                                    recherches. Mes mot-clés sont des mots qui décrivent le mieux votre projet. Si votre
                                    projet consiste à construire une école, 'Ecole', 'Construction', 'Education' seront des
                                    mots clés pertinents. Une liste de mots clés vous est proposée.
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
                                    Copier-Coller le lien d une vidéo Viméo ou Youtube qui présente votre cagnotte. Votre
                                    vidéo doit être courte pour captiver vos potentiels contributeurs mais complète afin de
                                    dire d éclairer au mieux sur votre cagnotte.
                                </small>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4 ">
                            <div class="form-group">
                                <label for="">Image de vignette (cagnotte publique)</label>
                                <input type="file" required name="file_vignette" class="form-control">
                                <small class="text-muted">Télécharger une image de taille minimum 500x340(.jpg ou
                                    .png).</small>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4 ">
                            <div class="form-group">
                                <label for="">Image de couverture de votre cagnotte</label>
                                <input type="file" required name="file_couverture" class="form-control">
                                <small class="text-muted">Télécharger une image de taille minimum 500x340(.jpg ou
                                    .png).</small>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4 ">
                            <div class="form-group">
                                <input type="text" value="{{ old('siteweb') }}" required name="siteweb"
                                    class="form-control"
                                    placeholder="Site Web (si vous avez une page web de votre événement ou projet)">
                                <small class="text-muted">Copiez-collez le lien sur votre site web si vous en avez un./
                                    <span class="text-danger">mettez # le cas écheant</span> </small>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-4 ">
                            <div class="form-group">
                                <input type="text" value="{{ old('hashtag') }}" required name="hashtag"
                                    class="form-control" placeholder="Hashtag (pour cagnottes publiques)">
                                <small class="text-muted">Hashtag (pour cagnottes publiques).</small>
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

                        <input type="checkbox" required name="" id=""> En soumettant, vous acceptez les Conditions
                        d'utilisation.
                        <div class="col-lg-12">
                            <button type="submit" class="btn common-btn">SOUMETTRE LES INFORMATIONS POUR
                                VALIDATIONS</button>
                        </div>
                    </container>


            </div>
            </form>
        </div>
    </div>
    </div>


    {{-- footer - --}}
@endsection
