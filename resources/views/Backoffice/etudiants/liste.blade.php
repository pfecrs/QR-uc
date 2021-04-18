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
                   <a href="{{route('addEtudiant')}}"> <button class="button h-button is-primary is-elevated">
                        <span class="icon">
                                <i class="fas fa-plus"></i>
                            </span>
                        <span>Ajouter etudiant</span>
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
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Date de naissance</th>
                                <th class="has-text-centered">num CIN</th>
                                <th class="has-text-centered">num Inscription</th>
                                
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($etudiants as $etudiant)
                                
                            
                            <td>
                                    {{-- <form action="{{route('qrEtudiant')}}" method="POST" >
                                        @csrf
                                        <input type="hidden" value="{{$etudiant->id}}" name="id" >
                                        <input type="submit" style="color: white" value="Afficher QR ">
                                    </form> --}}
                                
                            </td>
                            <td>{{$etudiant->nom}}</td>
                            <td>{{$etudiant->prenom}}</td>
                            <td>{{$etudiant->date_naissance}}</td>
                            <td>{{$etudiant->num_cin}}</td>
                            <td>{{$etudiant->num_inscription}}</td>
                            <td> 

                                <form action="{{route('deleteEtudiant')}}" method="post">
                                    @csrf

                                    <input type="hidden" value="{{$etudiant->id}}" name="id" >
                                <input class="button bg-danger h-button" type="submit" value="delete">
                                {{-- <button class="button bg-danger h-button">
                                    <span class="icon is-small "">
                                            <i class="fas fa-times"></i>
                                        </span>
                                        <a href="#" class="" style="  text-decoration: none;"><span style="color: black">Delete</span></a>
                                    
                                </button> --}}
                            </form>


                            <form action="{{route('editEtudiant')}}" method="get">
                                @csrf
                                <input type="hidden" value="{{$etudiant->id}}" name="id" >
                                <input class="button bg-success h-button" type="submit" value="editer">
                                {{-- <button class="button bg-success h-button">
                                    <span class="icon is-small "">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <a href="#" class="" style="  text-decoration: none;"><span style="color: black">Edit</span></a>

                                </button> --}}
                            </form>
                        
                        
                        
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