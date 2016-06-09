@extends('layouts.master')

@section('content')

<div class="bignav">
    <ul>

    {{--VAATA KUULUTUSI --}}
    <a href="#" id="showAnnosHref"  >vaata kuulutusi</a>
        <div class="panel-body" id= "showAnnosPanel" >


          <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0">
          </div>

          <div class="col-md-2 col-sm-3 col-xs-5 ">
            <div id= "showAnnounsManagePanel"class="panel-body">
              <form id="specifyAnnounForm">
                <div class="form-group">
                		<label class="floatleft">Kuulutse rubriik:</label>
                      <select id="selectCategory" name="category" class="floatleft roundEdges">
                        <option value="Üritus">Kõik </option>
                        <option value="Üritus">Üritus </option>
                        <option value="Teade">Teade </option>
                        <option value="Osta">Soov osta </option>
                        <option value="Myy">Müük </option>
                        <option value="Vaheta">Vahetus </option>
                        <option value="Muu">Muu </option>

                      </select>

                </div>

                <div class="form-group">
                		<label class=" floatleft">Hinnavahemik:</label>
                    <br>
                    <div class="col-md-12 col-sm-2 col-xs-1 floatleft">
                        <input class="floatleft roundEdges priceSetter" type="number" name="minprice" id="price" value=0>
                        <label>-</label>
                        <input class="floatright roundEdges priceSetter" type="number" name="maxprice" id="price" value=100>
                      </div>

                </div>

                <div class="form-group">
                	<label class="floatleft">Pealkiri/Objekt:</label>

                      <input name="title" type="text" class="form-control floatleft roundEdges" id="annoTitle" value="Pealkiri">

                </div>
                <button id ="manageAnnoList" class="btn btn-success col-md-12 col-sm-2 col-xs-1">Otsi</a></li>

            </form>
            </div>
          </div>

          <div class="col-md-7 col-sm-9 col-xs-10">
            <div id= "showAnnounsContainerPanel centered"class="panel-body">
              <div id="showAnnounsEmpty">
                <h2> Milliseid kuulutusi soovid näha? </h2>
                <h3> Vali vasakult </h3>
                <br><br><br>
                <h3 class="floatleft"> <------ </h3>
              </div>




              <div id= "showAnnouns" hidden>
              @foreach($announs as $announ)

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      {{$announ->category}}:  {{$announ->title}}
                    </div>

                    <div class="panel-body defaultAnnoPanel">
                      <div class="col-md-3 col-sm-2 col-xs-1 pictureFrame">
                        SIIA TULEB PILT
                      </div>
                      <div class="col-md-7 col-sm-10 col-xs-10 alignTextleft">
                        {{$announ->introText}}
                        <br>
                        <br>
                        <br>
                        <label class="dateLabel">lisatud: {{$announ->created_at}}</label>
                      </div>
                      <div class="col-md-1 col-sm-1 col-xs-3">
                        <label class="priceLabel">{{$announ->price}}€</label>
                      </div>

                    </div>
                  </div>

              @endforeach

            </div>
            {{ $announs->links() }}
          </div>
          </div>
      </div>

      {{--LISA KUULUTUSI --}}
        <li><a href="#" id="addAnnoHref">lisa kuulutus</a></li>
        <div id="addAnnoPanel" class="panel-body" >

          @if (count($errors) > 0)
            <div>
              <ul>
                @foreach($errors->all() as $error)
                  {{$error}}
                @endforeach
              </ul>
            </div>
          @endif

          <form id="submit_Announ" action="{{route('addAnnouncement')}}" method="post" class="form-horizontal form-label-left">
            <div class="form-group">
            		<label class="control-label col-md-5 col-xs-1" for="nr">Kuulutse rubriik:</label>
            		<div class="col-md-1 col-sm-2 col-xs-1">
                  <select id="selectCategory" name="category" class="floatleft">
                    <option value="Üritus">Üritus </option>
                    <option value="Osta">Osta </option>
                    <option value="Myy">Myy </option>
                    <option value="Vaheta">Vaheta </option>
                    <option value="Muu">Muu </option>
                    <option value="Teade">Teade </option>
                  </select>
            		</div>
            </div>

            <div class="form-group">
            		<label class="control-label col-md-5 col-xs-1" for="nr">Hind:</label>
            		<div class="col-md-1 col-sm-2 col-xs-1">
                  <input type="number" name="price" id="price" value=65>
            		</div>
            </div>

            <div class="form-group">
            	<label class="control-label col-md-5 col-xs-1" for="nr">Pealkiri/Objekt:</label>
            		<div class="col-md-3 col-sm-2 col-xs-1">
                  <input name="title" type="text" class="form-control" id="annoTitle" value="Pealkiri">
            		</div>
            </div>

            <div class="form-group">
            		<label class="control-label col-md-5 col-xs-1" for="nr">Tutvustav tekst:</label>
            		<div class="col-md-3 col-sm-2 col-xs-1">
                  <textarea name="introText" id="introText">Tutvustav tekst...</textarea>
            		</div>
            </div>


            <input type="hidden" value="{{Session::token()}}" name="_token">
            <button type="submit" class="btn btn-success">Lisa!</a></li>

        </form>
        </div>

      {{--INFO LEHE KOHTA --}}
      <a href="#" id="showAbout">meist</a>
        <div class="panel-body" id="showAboutPanel" hidden >
          Omg mida fakki ma nii kaua aega kulutasin selle porno peale?
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

        </div>


    </ul>
    </div>
</div>
@endsection
