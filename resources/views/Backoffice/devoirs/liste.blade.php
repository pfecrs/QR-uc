@extends('Backoffice.layout')

@section('content')

<div id="app-projects" class="view-wrapper" data-naver-offset="214" data-menu-item="#layouts-sidebar-menu" data-mobile-item="#home-sidebar-menu-mobile">

    <div class="page-content-wrapper">
        <div class="page-content is-relative">

          

                
            


               
                </div>
            </div>

            <div class="datatable-toolbar">

                <div class="field has-addons is-disabled">
                   
                </div>

                <div class="buttons">
                   <a href="{{route('addDevoir')}}"> <button class="button h-button is-primary is-elevated">
                        <span class="icon">
                                <i class="fas fa-plus"></i>
                            </span>
                        <span>Ajouter devoir</span>
                    </button></a>
                </div>
            </div>

            <div class="page-content-inner">

                <!-- Datatable -->
                <div class="table-wrapper" data-simplebar>
                    <table id="products-datatable" class="table is-datatable is-hoverable table-is-bordered">
                        <thead>
                            <tr>
                                <th>
                                    <div class="control">
                                        <label class="checkbox is-primary is-outlined is-circle">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                </th>
                                <th>matiere</th>
                                <th>niveau</th>
                                {{-- <th>Date de devoir</th> --}}
                                <th class="has-text-centered">num CIN Etudiant</th>
                                {{-- <th class="has-text-centered">num CIN correcteur</th> --}}
                                
                                <th>note</th>
                                <th>date de correction </th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($devoirs as $devoir)
                                
                            
                            <td>
                                    {{-- <form action="{{route('qrDevoir')}}" target="_blank" method="POST" >
                                        @csrf
                                        <input type="hidden" value="{{$devoir->id}}" name="id" >
                                        <input type="submit" class="button bg-primary h-button" style="color: white" value="Afficher QR ">
                                    </form> --}}
                                
                            </td>
                            <td>{{$devoir->matiere}}</td>
                            <td>{{$devoir->type}}</td>
                            <td>{{$devoir->num_cin_etudiant}}</td>
                            {{-- <td>{{$devoir->num_cin_correcteur}}</td> --}}
                            <td>{{$devoir->note}}</td>
                            <td>{{$devoir->created_at}}</td>
                            <td>  <div class="is-flex">

                                <form action="{{route('deleteDevoir')}}" method="post">
                                    @csrf

                                    <input type="hidden" value="{{$devoir->id}}" name="id" >
                                <input class="button bg-danger h-button" type="submit" value="delete">
                                {{-- <button class="button bg-danger h-button">
                                    <span class="icon is-small "">
                                            <i class="fas fa-times"></i>
                                        </span>
                                        <a href="#" class="" style="  text-decoration: none;"><span style="color: black">Delete</span></a>
                                    
                                </button> --}}
                            </form>


                            <form action="{{route('editDevoir')}}" method="get">
                                @csrf
                                <input type="hidden" value="{{$devoir->id}}" name="id" >
                                <input class="button bg-success h-button" type="submit" value="editer">
                                {{-- <button class="button bg-success h-button">
                                    <span class="icon is-small "">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <a href="#" class="" style="  text-decoration: none;"><span style="color: black">Edit</span></a>

                                </button> --}}
                            </form>
                        
                        </div>
                        
                          </td>
                          
                        </tbody>
                        @endforeach
                    </table>

                </div>

                <div id="paging-first-datatable" class="pagination datatable-pagination">
                    <div class="datatable-info">
                        <span></span>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection