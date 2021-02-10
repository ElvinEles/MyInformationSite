@extends('backendmainpage')

@section('content')

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Melumatlar</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th class="tableheadnames">N</th>
                        <th class="tableheadnames">Adi</th>
                        <th class="tableheadnames">Sekili</th>
                        <th class="tableheadnames">Aktiv</th>
                        <th class="tableheadnames">
                          <a data-toggle="tooltip" data-placement="top" title="Yeni Melumat" href="{{URL::to('backendinformation/add_page')}}"><i class="fas fa-plus-square fa-lg"></i></a>
                        </th>
                      </tr>
                    </thead>
                    
                    <tbody>
                       @foreach ($backendinformations as $information)
                      <tr>
                        <td  class="tableinformationnames">{{$information->information_id}}</td>
                        <td  class="tableinformationnames">{{substr($information->information_name,0,40)."..."}}</td>
                        <td  class="tableinformationnames">
                          <img style="width:35px;height:25px;" src="{{asset('/'.$information->information_photo)}}"  alt="No Photo"></td>
                        <td  class="tableinformationnames">
                           @if ($information->information_active == 1)
                           
                           <a data-toggle="tooltip" data-placement="top" title="Aktiv et" href="{{URL::to('backendinformation/active/'.$information->information_id)}}"><i class="fas fa-thumbs-up fa-lg"></i></a>
                        
                           @elseif ($information->information_active == 0)

                           <a data-toggle="tooltip" data-placement="top" title="Deaktiv et" href="{{URL::to('backendinformation/deactive/'.$information->information_id)}}"><i class="fas fa-thumbs-down fa-lg"></i></a>

                           @endif
                            
                            
                        </td>
                        <td style="text-align: center" class="tableinformationnames">
                          <a data-toggle="tooltip" data-placement="top" title="Duzelis" href="{{URL::to('backendinformation/edit/'.$information->information_id)}}"><i class="fas fa-edit fa-lg"></i></a>
                            <a data-toggle="tooltip" data-placement="top" title="Sil" href="{{URL::to('backendinformation/delete/'.$information->information_id)}}"><i class="fas fa-trash fa-lg"></i></a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
    
@endsection