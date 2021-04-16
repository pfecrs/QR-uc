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
                   <a href="#"> <button class="button h-button is-primary is-elevated">
                        <span class="icon">
                                <i class="fas fa-plus"></i>
                            </span>
                        <span>Ajouter Note</span>
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
                                <th>Note</th>
                                <th>matiere</th>
                                <th>CIN etudiant</th>
                                <th class="has-text-centered">CIN Prof</th>
                                <th class="has-text-centered">classe</th>
                                <th class="has-text-centered">Corrigeé le</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notes as $note)
                                
                            
                            <td>
                                    <form action="#" method="POST" >
                                        @csrf
                                        <input type="hidden" value="{{$note->id}}" name="id" >
                                        <input type="submit" style="color: white" value="Afficher QR ">
                                    </form>
                                
                            </td>

                            <td>{{$note->valeur}}</td>
                            <td>{{$note->matiere}}</td>
                            <td>
                                @foreach ($etudiants as $etudiant)
                                <?php
                                if ($note->id_etudiant == $etudiant->id){
                                    echo($etudiant->num_cin);
                                }
                                
                                ?>
                                    
                                @endforeach

                            </td>
                            <td>
                                @foreach ($professeurs as $professeur)
                                <?php
                                if ($note->id_professeur == $professeur->id){
                                    echo($professeur->num_cin);
                                }
                                
                                ?>
                                    
                                @endforeach
                                
                                
                                
                                </td>
                            <td>
                                
                            
                                @foreach ($classes as $classe)
                                <?php
                                if ($note->id_classe == $classe->id){
                                    echo($classe->nom);
                                }
                                
                                ?>
                                    
                                @endforeach
                            
                            
                            
                            
                            
                            </td>
                            <td>{{$note->created_at}}</td>
                            <td> 

                                <form action="#" method="post">
                                    @csrf

                                    <input type="hidden" value="{{$note->id}}" name="id" >
                                <input class="button bg-danger h-button" type="submit" value="delete">
                                {{-- <button class="button bg-danger h-button">
                                    <span class="icon is-small "">
                                            <i class="fas fa-times"></i>
                                        </span>
                                        <a href="#" class="" style="  text-decoration: none;"><span style="color: black">Delete</span></a>
                                    
                                </button> --}}
                            </form>


                            <form action="#" method="get">
                                @csrf
                                <input type="hidden" value="{{$note->id}}" name="id" >
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