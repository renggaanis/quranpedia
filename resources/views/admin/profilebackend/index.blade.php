@extends('template_backend.home')
@section('sub-judul','Profile')

@section('content')
<div class="section-body">
            <h2 class="section-title">Hi, {{ Auth::user()->name }} !</h2>
            <p class="section-lead">
            </p>
            <a href="http://localhost/webquranpedia/profil" class="btn btn-info btn-sm">Ganti Profil</a>
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                  <div class="profile-widget-header">                     
                    <img alt="image" src="{{ Auth::user()->avatar }}" class="rounded-circle profile-widget-picture">
                    <div class="profile-widget-items">
                      <div class="profile-widget-item">
                      </div>
                      
                    </div>
                  </div>
                  <div class="profile-widget-description">
                    <div class="profile-widget-name">{{ Auth::user()->name }} <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> {{ Auth::user()->role }}</div></div>
                     @if(auth()->user()->role == 'kontributor')
                    <ul>
                      <li>username: {{ Auth::user()->name }}</li>
                      <li>email: {{ Auth::user()->email }}</li>
                    </ul>
                    @endif
                  </div>
                 	
                </div>
              </div>
              
            </div>
          </div>
@endsection