@extends('Backoffice.layout')

@section('content')

<div class="page-content-inner">

    <!--Form Layout 1-->
    <div class="form-layout">
        <div class="form-outer">
            <div class="form-header stuck-header">
                <div class="form-header-inner">
                    <div class="left">
                        <h3>Modifier un classe</h3>
                    </div>
                    <div class="right">
                        <div class="buttons">
                            <a href="{{route('showListeClasses')}}" class="button h-button is-light is-dark-outlined">
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
        <form action="{{route('storeClasse')}}" method="post">
            @csrf
                    <div class="columns is-multiline">
                        <div class="column is-12">
                            <div class="field">
                                <label>Nom</label>
                                <div class="control has-icon">
                                    <input type="text" class="input" value="{{$classe->nom}}" name="nom" placeholder="Nom">
                                    <div class="form-icon">
                                        <i data-feather="home"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="field">
                                <label>département</label>
                                <div class="control has-icon">
                                    <input type="text" class="input"  value="{{$classe->departement}}" name="departement" placeholder="département">
                                    <div class="form-icon">
                                        <i data-feather="hash"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="field">
                                <label>niveau</label>
                                <div class="control has-icon">
                                    <input type="number" class="input"  value="{{$classe->niveau}}" name="niveau" placeholder="niveau">
                                    <div class="form-icon">
                                        <i data-feather="edit-3"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                    </div>
                    
                    <input  type="submit" value="Modifier" class="button h-button is-success is-rounded is-elevated">
                       
                    
                </div>
                <!--Fieldset-->
            </form>
                <!--Fieldset-->
               
            </div>
        </div>
    </div>

</div>


@endsection