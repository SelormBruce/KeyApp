<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                    <div class="card-header text-light"style="background-color:#082052!important">Availabel Roles

                    </div>
                    <div style="background-color:#082052!important">
                            @foreach ($role as $item)
                            <div class="card" style="background-color:#082052!important">

                                      <div  class="text-light  row " >
                                            <p class="h4 text-light  align-self-center ml-4">
                                                    {{$item->role}}
                                              </p>

                                              <a href="/roles/{{$item->id}}/edit" class="align-self-center ml-auto">Edit</a>
                                              <form action="/roles/{{$item->id}}" method="POST">
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

                          <a  class="ml-auto  text-light"   style="background-color:#082052!important" href="/roles/create">
                            
                            Add  Role</a>
                     </div>

            </div>
        </div>

