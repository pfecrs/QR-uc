@extends('Backoffice.layout')

@section('content')

<div class="page-content-inner">

    <!--Form Layout 1-->
    <div class="form-layout">
        <div class="form-outer">
            <div class="form-header stuck-header">
                <div class="form-header-inner">
                    <div class="left">
                        <h3>Ajouter un Professeur</h3>
                    </div>
                    <div class="right">
                        <div class="buttons">
                            <a href="{{route('showListeProfesseurs')}}" class="button h-button is-light is-dark-outlined">
                                <span class="icon">
                                        <i class="lnir lnir-arrow-left rem-100"></i>
                                    </span>
                                <span>Cancel</span>
                            </a>
                            {{-- <button id="save-button" class="button h-button is-primary is-raised">Schedule</button> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-body">
                <!--Fieldset-->
                <div class="form-fieldset">
                    {{-- <div class="fieldset-heading">
                        <h4>Personal Info</h4>
                        <p>This helps us to know you</p>
                    </div> --}}
        <form action="{{route('storeProfesseur')}}" method="post">
            @csrf
                    <div class="columns is-multiline">
                        <div class="column is-6">
                            <div class="field">
                                <label>Nom</label>
                                <div class="control has-icon">
                                    <input type="text" class="input" name="nom" required  placeholder="Nom">
                                    <div class="form-icon">
                                        <i data-feather="user"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="field">
                                <label>Pr??nom</label>
                                <div class="control has-icon">
                                    <input type="text" class="input" name="prenom" required placeholder="Prenom">
                                    <div class="form-icon">
                                        <i data-feather="user"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        {{-- <div class="column is-12">
                            <div class="field">
                                <label>Num??ro CIN</label>
                                <div class="control has-icon">
                                    <input type="number" class="input" name="num_cin" placeholder="">
                                    <div class="form-icon">
                                        <i data-feather="hash"></i>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <div class="column is-12">
                            <div class="field">
                                <label>login</label>
                                <div class="control has-icon">
                                    <input type="text" class="input" name="login" required   placeholder="login">
                                    <div class="form-icon">
                                        <i data-feather="hash"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="column is-12">
                            <div class="field">
                                <label>mot de passe</label>
                                <div class="control has-icon">
                                    <input type="text" class="input" name="password" required   placeholder="Mot de passe">
                                    <div class="form-icon">
                                        <i data-feather="hash"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
              
                    </div>
                    
                    <input  type="submit" value="Ajouter" class="button h-button is-success is-rounded is-elevated">
                       
                    
                </div>
                <!--Fieldset-->
            </form>
                <!--Fieldset-->
               
            </div>
        </div>
    </div>

</div>


@endsection