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
                            
                              
                                {{--<select name="nom_campagne" class="mb-4 form-group">
                                    <option>Veuillez selectionner le rétrait que vous souhaitez effectué :) </option>
                                    <option value="all">Je veux retirer tout mes sous</option>
                                    @foreach ($withdrawalinfo as $item)
                                    <option value="{{ $item->id }}-{{ $item->name }}">{{ $item->name }}/ {{ $item->created_at }}/ ${{ $item->montant_cotise ?? '0' }}</option>
                                    @endforeach
                                    
                                </select>--}}
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
                                        color: #302c51;
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
                                    <label for="">Veuillez selectionner le rétrait que vous souhaitez effectué :)
                                    </label>
                                    <select name="nom_campagne" class="select2button mt-3">
                                        <option value="all" selected>Je veux retirer tout mes sous</option>
                                       
                                        @foreach ($withdrawalinfo as $item)
                                        <option value="{{ $item->id }}-{{ $item->name }}">{{ $item->name }}/ ${{ $item->montant_cotise ?? '0' }}</option>
                                        @endforeach
                                    </select>
        
                                </div>
                              
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