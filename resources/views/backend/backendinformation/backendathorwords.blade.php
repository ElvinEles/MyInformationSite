@extends('backendmainpage')

@section('content')

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Sozler</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th class="tableheadnames">N</th>
                        <th class="tableheadnames">Adi</th>
                        <th class="tableheadnames">
                          <a data-toggle="tooltip" data-placement="top" title="Yeni Melumat" href="{{URL::to('backendpage/athorwords/athorwords_add_page')}}"><i class="fas fa-plus-square fa-lg"></i></a>
                        </th>
                      </tr>
                    </thead>
                    
                    <tbody>
                       @foreach ($athorwords as $athorword)
                      <tr>
                        <td  class="tableinformationnames">{{$athorword->athorwords_id}}</td>
                        <td  class="tableinformationnames">{{substr($athorword->athorwords_name,0,40)."..."}}</td>
    
                        <td style="text-align: center" class="tableinformationnames">
                          <a data-toggle="tooltip" data-placement="top" title="Duzelis" href="{{URL::to('/backendathorword/edit/'.$athorword->athorwords_id)}}"><i class="fas fa-edit fa-lg"></i></a>
                            <a data-toggle="tooltip" data-placement="top" title="Sil" href="{{URL::to('/backendathorword/delete/'.$athorword->athorwords_id)}}"><i class="fas fa-trash fa-lg"></i></a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
    
@endsection