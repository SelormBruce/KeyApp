<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">

                <div class="card-header text-light"style="background-color:#FF5733!important">Availabel Buildings

                </div>
                <div style="background-color:#082052!important">
                        @foreach ($building as $item)
                        <div class="card" style="background-color:#082052!important">

                                  <div  class="text-light  row " >
                                        <small class="h4 text-light  align-self-center ml-4">
                                             <a href="/building/{{$item->id}}">   {{$item->name}}</a>
                                        </small>
    {{--  <p>{{$item->description}}</p> --}}

                                          <a href="/building/{{$item->id}}/edit" class="align-self-center ml-auto">Edit</a>
                                          <form action="/building/{{$item->id}}" method="POST">
                                              @method('DELETE')
                                              <button class="btn btn-small" >
                                                    <i class="fas fa-trash-alt text-danger align-self-center ml-3 mr-5" ></i>
                                              </button>

                                              @csrf
                                            </form>
                                          </div>


                        </div>

                        @endforeach
                </div >

                      <a  class="ml-auto  text-light"   style="background-color:#082052!important" href="/building/create">

                        Add  Building</a>
                 </div>

        </div>
    </div>

