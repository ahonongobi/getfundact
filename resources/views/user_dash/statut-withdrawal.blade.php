@extends('_layouts._user')
{{--link css fileinput file --}}
@section('content')
  <div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Moyen de paiement</th>
            <th scope="col">Campagne</th>
            <th scope="col">Montant</th>
            <th scope="col">Statut</th>
          </tr>
        </thead>
        <tbody>
            {{-- if withdrawal_count != 0 --}}
            @if($withdrawalinfo_count != 0)
            @foreach ($withdrawalinfo as $item)
            <tr>
                <th scope="row">{{$item->payment_method ?? ''}}</th>
                <td>{{$item->nom_campagne ?? ''}}</td>
                <td>{{$item->montant ?? ''}}</td>
                {{-- if statut = 0  <td class="text-danger"> En attente </td>  if statut = 1 <td class="text-danger"> Approuvé </td> --}}
                @if ($item->statut == 0)
                    <td class="text-danger"> En attente </td>
                @elseif ($item->statut == 1)
                    <td class="text-success"> Approuvé </td>
                @elseif ($item->statut == 2)
                    <td class="text-danger"> Refusé </td>
                @endif

                
              </tr>
            @endforeach
            @else
            <tr>
                <th scope="row">1</th>
                <td>Aucune campagne</td>
                <td>Aucun montant</td>
                <td class="text-danger"> En attente </td>
                </tr>
            @endif
        </tbody>

          
          
          
      </table>
      
      
  </div> 
@endsection
