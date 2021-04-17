@extends('Backoffice.layout')

@section('content')

<div class="page-content-inner">

    <!--Form Layout 1-->
    <div class="form-layout">
        <div class="form-outer">
            <div class="form-header stuck-header">
                <div class="form-header-inner">
                    <div class="left">
                        <h3>Ajouter un devoir</h3>
                    </div>
                    <div class="right">
                        <div class="buttons">
                            <a href="{{route('showListeDevoirs')}}" class="button h-button is-light is-dark-outlined">
                                <span class="icon">
                                        <i class="lnir lnir-arrow-left rem-100"></i>
                                    </span>
                                <span>Cancel</span>
                            </a>
                            <button id="save-button" class="button h-button is-primary is-raised">Schedule</button>
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
        <form action="{{route('storeDevoir')}}" method="post">
            @csrf
                    <div class="columns is-multiline">
                        <div class="column is-6">
                            <div class="field">
                                <label>Nom de Matiere</label>
                                <div class="control has-icon">
                                    <input type="text" class="input" name="matiere" placeholder="Matiere">
                                    <div class="form-icon">
                                        <i data-feather="hash"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="field">
                                <label>Type de devoir</label>
                                <div class="control has-icon">
                                    <input type="text" class="input" name="type" placeholder="Type">
                                    <div class="form-icon">
                                        <i data-feather="hash"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-12">
                            <div class="field">
                                <label>date du devoir</label>
                                <div class="control has-icon">
                                    <input type="date" class="input" name="date_devoir" placeholder="Date du devoir">
                                    <div class="form-icon">
                                        <i data-feather="calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-12">
                            <div class="field">
                                <label>num CIN etudiant</label>
                                <div class="control has-icon">
                                    <input type="number" class="input" name="num_cin" placeholder="Num CIN Etudiant">
                                    <div class="form-icon">
                                        <i data-feather="hash"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="column is-12">
                            <div class="field">
                                <label>Numéro d'inscription</label>
                                <div class="control has-icon">
                                    <input type="number" class="input" name="num_inscription" placeholder="">
                                    <div class="form-icon">
                                        <i data-feather="hash"></i>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
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