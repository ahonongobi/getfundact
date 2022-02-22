@extends('_layouts._user')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('textarea/css/froala_editor.css')}}">
  <link rel="stylesheet" href="{{asset('textarea/css/froala_style.css')}}">
  <link rel="stylesheet" href="{{asset('textarea/css/plugins/code_view.css')}}">
  <link rel="stylesheet" href="{{asset('textarea/css/plugins/image_manager.css')}}">
  <link rel="stylesheet" href="{{asset('textarea/css/plugins/image.css')}}">
  <link rel="stylesheet" href="{{asset('textarea/css/plugins/table.css')}}">
  <link rel="stylesheet" href="{{asset('textarea/css/plugins/video.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script><style>

</style>

@section('content')





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
                       
                        <div class="col-lg-12 mb-4">
                            <div class="form-group mb-5">
                                
                                  
                                    <select name="categories" class="mb-4 form-group">
                                        <option value="">Catégories dans laquelle se trouve votre campagne</option>
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
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="form-group">
                                <input type="text" value="{{ old('name') }}" required name="name" class="form-control" placeholder="Nom de la cagnotte">
                            </div>
                        </div>
                        
                        <div class="col-lg-12 mb-4">
                            <div class="form-group">
                                <input type="number" value="{{ old('duree') }}" required name="duree" class="form-control" placeholder="Durée(en jours)">
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="form-group">
                                <input type="text" required name="monnaie" readonly class="form-control" value="FCFA (XOF)" placeholder="Monnaie">
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="form-group">
                                <input type="number" value="{{ old('montant_v') }}" required name="montant_v" class="form-control" placeholder="* Montant visé - 0 si pas de montant précis">
                            </div>
                            <input type="checkbox" name="hidden_cash" value="1" id=""> Ne pas Montrer le montant cumulé de la collecte

                        </div>

                        <div class="col-lg-12 mb-4">
                            <div class="form-group">
                                <input type="text" value="{{ old('name_b') }}" required name="name_b" class="form-control" placeholder="* Nom du bénéficiaire">
                            </div>
                        </div>

                        
                        <div class="col-lg-12 mb-4 ">
                            <div class="form-group">
                                <input type="text" value="{{ old('where') }}" required name="where" class="form-control" placeholder="* Où sera dépensée la collecte">
                            </div>
                        </div>
                        
                        <div class="col-lg-12 mb-4 ">
                            <div class="form-group">
                                <input type="text" value="{{ old('details') }}" required name="details" class="form-control" placeholder="Détails sur le lieu">
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <textarea name="details_ojectifs" placeholder="" class="form-control" id="long_desc" rows="3">
                                 {{old('details_objectifs')}}
                                </textarea>
                                <small class="text-muted">Racontez-nous l'histoire de votre projet. Qu'est-ce que c'est, pourquoi cela importe-t-il, et pourquoi les contributeurs devraient s'en préoccuper? Voici l'endroit pour plus de détails.</small>
                        </div>

                        <div class="col-lg-12 mb-4 ">
                            <div class="form-group">
                                <input type="text" value="{{ old('keys_word') }}" required name="keys_word" class="form-control" placeholder="* Mots Clés">
                                <smal class="text-muted">
                                    Ajouter des mots-clés augmente les chances de découverte de votre projet dans les recherches. Mes mot-clés sont des mots qui décrivent le mieux votre projet. Si votre projet consiste à construire une école, 'Ecole', 'Construction', 'Education' seront des mots clés pertinents. Une liste de mots clés vous est proposée.
                                </smal>
                            </div>
                        </div>
                        <h2 style="background-color: #e15b1a;" class="text-white mx-auto py-2 ml-5  d-flex justify-content-center">
                            COMMUNICATION
                        </h2> 

                        
                        <div class="col-lg-12 mb-4 ">
                            <div class="form-group">
                                <input type="text" value="{{ old('video') }}" required name="video" class="form-control" placeholder="**Vidéo (si vous avez une vidéo youtube de votre événement ou projet)">
                                <small class="text-muted">
                                    Copier-Coller le lien d une vidéo Viméo ou Youtube qui présente votre cagnotte. Votre vidéo doit être courte pour captiver vos potentiels contributeurs mais complète afin de dire d éclairer au mieux sur votre cagnotte.
                                </small>
                            </div>
                        </div> 
                        <div class="col-lg-12 mb-4 ">
                            <div class="form-group">
                                <label for="">Image de vignette (cagnotte publique)</label>
                                <input type="file" required name="file_vignette" class="form-control">
                                <small class="text-muted">Télécharger une image de taille minimum 500x340(.jpg ou .png).</small>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4 ">
                            <div class="form-group">
                                <label for="">Image de couverture de votre cagnotte</label>
                                <input type="file" required name="file_couverture" class="form-control">
                                <small class="text-muted">Télécharger une image de taille minimum 500x340(.jpg ou .png).</small>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4 ">
                            <div class="form-group">
                                <input type="text" value="{{ old('siteweb') }}" required name="siteweb" class="form-control" placeholder="Site Web (si vous avez une page web de votre événement ou projet)">
                                <small class="text-muted">Copiez-collez le lien sur votre site web si vous en avez un.</small>
                            </div>
                        </div> 

                        <div class="col-lg-12 mb-4 ">
                            <div class="form-group">
                                <input type="text" value="{{ old('hashtag') }}" required name="hashtag" class="form-control" placeholder="Hashtag (pour cagnottes publiques)">
                                <small class="text-muted">Hashtag (pour cagnottes publiques).</small>
                            </div>
                        </div>
                        <h2 style="background-color: #e15b1a;" class="text-white mx-auto py-2 ml-5  d-flex justify-content-center">
                            BUDGET ET PLANNING
                        </h2>

                        <div class="col-lg-12 mb-4">
                            <label for="">Détails du budget</label>
                            <textarea name="detail_budget"  placeholder="" class="form-control" id="long_desc2" rows="3">
                                   {{old('detail_budget')}}
                                </textarea>
                                <small class="text-muted">Les contributeurs sont en général rassurés lorsque vous avez une idée claire de la façon avec laquelle vous allez utiliser les fonds. Donnez-en une explication ici.

                                </small>
                        </div>
                         <h2 style="background-color: #e15b1a;" class="text-white mx-auto py-2 ml-5  d-flex justify-content-center">ENGLISH TRANSLATION</h2>
                         <div class="col-lg-12 mb-4">
                            <label for="">English</label>
                            <textarea name="details_budget_en" placeholder="" class="form-control" id="long_desc3" rows="3">
                                {{old('details_budget_en')}}
                                </textarea>
                                <small class="text-muted">Les contributeurs sont en général rassurés lorsque vous avez une idée claire de la façon avec laquelle vous allez utiliser les fonds. Donnez-en une explication ici.

                                </small>
                        </div>

                        <input type="checkbox" required name="" id=""> En soumettant, vous acceptez les Conditions d'utilisation.
                        <div class="col-lg-12">
                            <button type="submit" class="btn common-btn">SOUMETTRE LES INFORMATIONS POUR VALIDATIONS</button>
                        </div>
                    </container>

                    
                </div>
            </form>
        </div>
    </div>
</div>
<script>
   // CKEDITOR.replace('long_desc');
   CKEDITOR.replace('long_desc4', {
      height: 300,
     
      
    });
    CKEDITOR.replace('long_desc5');
    CKEDITOR.replace('long_desc6');

    CKEDITOR.editorConfig = function( config ) {
  config.extraPlugins = 'imageuploader';
};
</script>
<script>
    
</script>
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="{{asset('textarea/js/froala_editor.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('textarea/js/plugins/align.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('textarea/js/plugins/code_beautifier.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('textarea/js/plugins/code_view.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('textarea/js/plugins/draggable.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('textarea/js/plugins/image.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('textarea/js/plugins/image_manager.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('textarea/js/plugins/link.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('textarea/js/plugins/lists.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('textarea/js/plugins/paragraph_format.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('textarea/js/plugins/paragraph_style.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('textarea/js/plugins/table.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('textarea/js/plugins/video.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('textarea/js/plugins/url.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('textarea/js/plugins/entities.min.js')}}"></script>

  <script>
    (function () {
      const editorInstance = new FroalaEditor('#long_desc', {
        enter: FroalaEditor.ENTER_P,
        placeholderText: null,
        events: {
          initialized: function () {
            const editor = this
            this.el.closest('form').addEventListener('submit', function (e) {
              console.log(editor.$oel.val())
              e.preventDefault()
            })
          }
        }
      })
    })()
  </script>



<script>
    (function () {
      const editorInstance = new FroalaEditor('#long_desc2', {
        enter: FroalaEditor.ENTER_P,
        placeholderText: null,
        events: {
          initialized: function () {
            const editor = this
            this.el.closest('form').addEventListener('submit', function (e) {
              console.log(editor.$oel.val())
              e.preventDefault()
            })
          }
        }
      })
    })()
  </script>
  <script>
    (function () {
      const editorInstance = new FroalaEditor('#long_desc3', {
        enter: FroalaEditor.ENTER_P,
        placeholderText: null,
        events: {
          initialized: function () {
            const editor = this
            this.el.closest('form').addEventListener('submit', function (e) {
              console.log(editor.$oel.val())
              e.preventDefault()
            })
          }
        }
      })
    })()
  </script>


@endsection