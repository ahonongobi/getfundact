@extends('_layouts._admin')
<style>
    tr,td {
        text-align: justify !important;
        width: 50% !important;
    }
    td:first-child{
        font-weight: bold;
    }

</style>
@section('content')


   
                <div class="row">
                    
                </div>

                <div class="row">
                    <div class="d-flex justify-content-between mb-3">
                        @if ($campagnePost->statut==0)
                        <a href="{{ url('activePost/'.$campagnePost->id) }}" class="btn btn-success ml-3 text-white">Activer </a>

                        @else
                        <a href="{{ url('unactivePost/'.$campagnePost->id) }}" class="btn btn-danger ml-3 text-white">Désactiver </a>

                        @endif
                    </div>
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title mb-0">Details</p>
                                <table class="table">
                            
                                    <tr>
                                        <td>Categories</td>
                                        <td>{{ $campagnePost->categories ?? 'non rensigné' }}</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Name</td>
                                        <td>{{ $campagnePost->name ?? 'non rensigné' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Durée</td>
                                        <td>{{ $campagnePost->monnaie ?? 'non rensigné' }}</td>
                                    </tr><tr>
                                        <td>Montant visé</td>
                                        <td>{{ $campagnePost->montant_v ?? 'non rensigné' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nom du bénéficiaire</td>
                                        <td>{{ $campagnePost->name_b ?? 'non rensigné' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Oû depensez l'argent</td>
                                        <td>{{ $campagnePost->where ?? 'non rensigné' }}</td>
                                    </tr><tr>
                                        <td>Detaille</td>
                                        <td>{{ $campagnePost->details ?? 'non rensigné' }}</td>
                                    </tr><tr>
                                        <td>keys_word</td>
                                        <td>{{ $campagnePost->keys_word ?? 'non rensigné' }}</td>
                                    </tr><tr>
                                        <td>Siteweb</td>
                                        <td>{{ $campagnePost->siteweb ?? 'non rensigné' }}</td>
                                    </tr><tr>
                                        <td>Hashtag</td>
                                        <td>{{ $campagnePost->hashtag ?? 'non rensigné' }}</td>
                                    </tr><tr>
                                        <td>Montant_cotise</td>
                                        <td>{{ $campagnePost->montant_cotise ?? 'non rensigné' }}</td>
                                    </tr><tr>
                                        <td>Statut</td>
                                        {{-- return inactif if statut = 0 or actif if statut is 1 --}}
                                        <td>{{ $campagnePost->statut == 0 ? 'inactif' : 'actif' }}</td>
                                        {{--<td>{{ $campagnePost->statut ?? 'non rensigné' }}</td>--}}
                                    </tr>
                                </table>
                                 <div class="details">
                                    <tr>
                                        <td class="text-bold"><span style="font-weight: bold;">Details ojectifs</span></td>
                                        <td style="text-align: justify !important">
                                           <?php echo htmlspecialchars_decode($campagnePost->details_ojectifs) ?? 'non rensigné' ?></td>
                                    </tr>

                                    <tr>
                                        <td style="font-weight:bold;"> <span style="font-weight: bold;">Details budgets</span> </td>
                                        <td style="text-align: justify !important">
                                           <?php echo htmlspecialchars_decode($campagnePost->detail_budget) ?? 'non rensigné' ?></td>
                                    </tr>
                                 </div>
                                <div class="d-flex justify-content-between">
                                    
                                    
                                    <a data-fancybox="gallery" data-caption="Caption Images 1" href="{{ asset('storage/UserDocument/'.$campagnePost->file_vignette) }}">
                                        <img width="400" height="300" src="{{ asset('storage/UserDocument/'.$campagnePost->file_vignette) }}" alt="" srcset="">
                                    </a>
                                    <a data-fancybox="gallery" data-caption="Caption Images 2" href="{{ asset('storage/UserDocument/'.$campagnePost->file_couverture) }}">
                                        <img width="400" height="300" src="{{ asset('storage/UserDocument/'.$campagnePost->file_couverture) }}" alt="" srcset="">
                                    </a>
                                    
                                    <span>
                                        @php
                                           echo htmlspecialchars_decode($campagnePost->video) ?? 'non rensigné'
                                        @endphp
                                    </span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                
            </div>
        </div>

    @endsection
