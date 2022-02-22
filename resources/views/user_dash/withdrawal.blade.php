@extends('_layouts._user')

@section('content')
  
      <div class="container">
        <div class="details-payment">
            <h3>Contribution</h3>
            <form method="POST" action="{{ url('withdrawal') }}">
                @csrf
                
                

                <div class="form-input-area">
                    <div class="col-lg-12 mb-4">
                        <div class="form-group mb-5">
                            
                              
                                <select name="nom_campagne" class="mb-4 form-group">
                                    <option>Veuillez selectionner le rétrait que vous souhaitez effectué :) </option>
                                    <option value="all">Je veux retirer tout mes sous</option>
                                    @foreach ($withdrawalinfo as $item)
                                    <option value="{{ $item->id }}-{{ $item->name }}">{{ $item->name }}/ {{ $item->created_at }}/ ${{ $item->montant_cotise ?? '0' }}</option>
                                    @endforeach
                                    
                                </select>
                              
                         </div>
                    </div>
                    
                    
                    
                    <div class="text-center mt-3 mb-3">
                        
                        <button type="submit" class="btn common-btn">Lancer le rétrait</button>

                    
                    </div>
                </div>
            </form>
        </div>
      </div>
  
@endsection