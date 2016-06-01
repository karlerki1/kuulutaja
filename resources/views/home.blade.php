@extends('layouts.master')

@section('content')

<div class="bignav">
    <ul>
    <li><a href="#">vaata kuulutusi</a></li>

        <div class="panel-body" hidden="true">
          <ul>
          @for($i=0;$i<5;$i++)
            <li>ITERATION {{$i+1}}</li>
          @endfor
          <a href="userPage">?</a></li>
        </ul>
        </div>

        <li><a href="#">lisa kuulutus</a></li>
        <div id="lisaKuulutus" class="panel-body">
          <form action="{{route('addAnnouncement')}}" method="post">
            <div class="row">
                  <div class="col-md-4">Kuulutse rubriik</div>
                  <div class="col-md-2">
                      <select id="selectCategory" name="category">
                        <option value="Üritus">Üritus </option>
                        <option value="Osta">Osta </option>
                        <option value="Myy">Myy </option>
                        <option value="Vaheta">Vaheta </option>
                        <option value="Muu">Muu </option>
                        <option value="Teade">Teade </option>
                      </select>
                  </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">Pealkiri/Objekt:</div>
                <div class="col-md-5">
                  <input name="title" type="text" class="form-control" id="annoTitle" value="Pealkiri">
                </div>

            </div>
            <br>

            <div class="row">
              <div class="col-md-4">Tutvustav tekst:</div>
              <div class="col-md-5">
                <textarea name="introtext" id="introText">Tutvustav tekst...</textarea>
              </div>

            </div>
            <input type="hidden" value="{{Session::token()}}" name="_token">
            <button type="submit" class="btn btn-success">Lisa!</a></li>

        </form>
        </div>


      <li><a href="#">meist</a></li>
        <div class="panel-body">
          Omg mida fakki ma nii kaua aega kulutasin selle porno peale?
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

        </div>


    </ul>
    </div>
</div>
@endsection
