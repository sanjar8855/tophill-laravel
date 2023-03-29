@extends('admin.layout')

@section('admin-content')
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Yangiliklar jadvali</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
                <a href="{{route('blogs.create')}}" class="btn btn-success ms-5">Yangilik qo'shish</a>
                <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-secondary font-weight-bolder opacity-7">T/R</th>
                        <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Nomi uz</th>
                        <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Nomi ru</th>
                        <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Nomi eng</th>
                        <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Text uz</th>
                        <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Text ru</th>
                        <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Text eng</th>
                        <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Rasmi</th>
                        <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Sana</th>
{{--                        <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Youtube</th>--}}
                        <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Izoh</th>
                        <th class="text-uppercase text-secondary text-center font-weight-bolder opacity-7">Status</th>
                        <th class="text-uppercase text-secondary opacity-7 text-center">Amallar</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($blogs as $blog)
                    <tr>
                        <td>
                            <p class="font-weight-bold mb-0">{{(($blogs->currentpage()-1) *  $blogs->perpage() + ($loop->index +1)) }}</p>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">{{$blog->name_uz}}</p>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">{{$blog->name_ru}}</p>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">{{$blog->name_eng}}</p>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">{{$blog->text_uz}}</p>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">{{$blog->text_ru}}</p>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">{{$blog->text_eng}}</p>
                        </td>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <img src="{{Storage::url('assets/images/blogs/').$blog->photo}}" class="me-3 shadow border-radius-lg" style="width: 200px;" alt="{{$blog->name_uz}}">
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">{{$blog->sana}}</p>
                        </td>
{{--                        <td>--}}
{{--                            <p class="font-weight-bold" style="word-wrap:break-word;">{{$blog->youtube_link}}</p>--}}
{{--                        </td>--}}
                        <td>
                            <p class="font-weight-bold mb-0">{{$blog->description}}</p>
                        </td>
                          <td class="align-middle text-center text-sm">
                              @if($blog->status=='Faol')
                                  <span class="badge badge-sm bg-gradient-success">Faol</span>
                              @else
                                  <span class="badge badge-sm bg-gradient-secondary">Nofaol</span>
                              @endif
                          </td>
                        <td class="align-middle d-flex justify-content-evenly">
                            <a href="{{ route('blogs.show', ['blog' => $blog->id] )}}" class="btn btn-sm btn-outline-info mb-0" data-toggle="tooltip" data-original-title="Edit user">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                </svg>
                            </a>
                            <a href="{{ route('blogs.edit', ['blog' => $blog->id] )}}" class="btn btn-sm btn-outline-warning mb-0" data-toggle="tooltip" data-original-title="Edit user">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                </svg>
                            </a>
                            <form action="{{route('blogs.destroy', ['blog' => $blog->id])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                    </svg>
                                </button>
                            </form>

                            <a href="{{ route('blogs.status', ['id' => $blog->id] )}}" class="btn btn-sm btn-outline-success mb-0" data-toggle="tooltip" data-original-title="Edit user">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

              </div>
                <div>
                    {{$blogs->links()}}
                </div>
            </div>
          </div>
        </div>
      </div>
@endsection()
