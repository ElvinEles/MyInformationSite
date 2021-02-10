@extends('backendmainpage')

@section('content')

    
<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Kateqoriyalar</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th class="tableheadnames">N</th>
                        <th class="tableheadnames">Adı</th>
                        <th class="tableheadnames">İşlemler</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                     @foreach ($categories as $category)
                     <tr>
                        <td class="tableheadnames">{{$category->category_id}}</td>
                        <td class="tableheadnames">{{$category->category_name}}</td>
                        <td class="tableheadnames">
                         <a class="btn btn-primary btn-block" href="{{URL::to('backendpage/allcategories/category_edit/'.$category->category_id)}}">
                            <i class="fas fa-edit"></i>
                        </a>
                        </td>
                      </tr>
                     @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>



@endsection