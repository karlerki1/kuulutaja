@extends('layouts.master') @section('content')

<div class="bignav">
    <ul>


        {{--VAATA KUULUTUSI --}}
        <a href="#x" id="showAnnosHref">vaata kuulutusi</a>
        <div class="panel-body" id="showAnnosPanel">



            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12
                      col-lg-offset-0 col-md-offset-0 ">
                <div id="showAnnounsManagePanel" class="panel-body">
                    <form id="specifyAnnounForm">
                        <div class="form-group">
                            <label class="floatleft ">Kuulutse rubriik:</label>
                            <select id="selectCategory" name="selectCategory" class="form-control">
                                <option value="koik">Kõik </option>
                                <option value="üritus">Üritus </option>
                                <option value="teade">Teade </option>
                                <option value="osta">Soov osta </option>
                                <option value="myy">Müük </option>
                                <option value="vaheta">Vahetus </option>
                                <option value="muu">Muu </option>

                            </select>

                        </div>



                        <div class="form-group">
                            <label class=" floatleft">Hinnavahemik:</label>

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="number" name="minPrice" id="minPrice" placeholder="min">
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="number" name="maxPrice" id="maxPrice" placeholder="max">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="floatleft">Pealkiri/Objekt:</label>

                            <input name="title" type="text" class="form-control floatleft" id="annoTitle" placeholder="...">

                        </div>
                        <button id="manageAnnoList" class="btn btn-success col-md-12 col-sm-12 col-xs-12">Otsi</a>
                            </li>

                    </form>
                </div>
            </div>

            <div class="col-md-7 col-sm-0 col-xs-12">
                <div id="showAnnounsContainerPanel" class="panel-body">
                    <div id="showAnnounsEmpty">
                        <h2 id="findAnnouns"> Milliseid kuulutusi soovid näha? </h2>
                        <h2 id="noAnnouns" hidden> Selliseid kuulutusi hetkel ei ole : ( </h2>
                        <!-- Only for copying -->
                        <div id="copy-that" style="display:none;">
                            <div class="announs-animate-ID" class="panel panel-default" style="display:none">
                                <div class="panel-heading">
                                    CAT: TITLE
                                </div>

                                <div class="panel-body defaultAnnoPanel">
                                    <div class="col-md-3 col-sm-2 col-xs-1 pictureFrame">
                                        SIIA TULEB PILT
                                    </div>
                                    <div class="col-md-7 col-sm-10 col-xs-10 alignTextleft">
                                        INTROTEXT
                                        <br>
                                        <br>
                                        <br>
                                        <label class="dateLabel">lisatud: CREATED</label>
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-xs-3">
                                        <label class="priceLabel">PRICE €</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                    <div id="showAnnouns">


                    </div>


                </div>
            </div>
        </div>

        {{--LISA KUULUTUSI --}}
        <li><a href="#x" id="addAnnoHref">lisa kuulutus</a></li>
        <div id="addAnnoPanel" class="panel-body">
            <div class="col-md-10 col-sm-12 col-xs-12">

                {{-- @if (count($errors) > 0)
                <div>
                    <ul>
                        @foreach($errors->all() as $error) {{$error}} @endforeach
                    </ul>
                </div>
                @endif --}}

                <form id="submit_Announ" class="form-vertical form-label-left">
                    <div class="form-group">
                        <label class="control-label col-md-6 col-sm-12 col-xs-12 col-md-offset-4" for="nr">Kuulutse rubriik:</label>
                        <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-4">
                            <select id="addedselectCategory" name="category" class="floatleft form-control">
                                <option value="üritus">Üritus </option>
                                <option value="osta">Osta </option>
                                <option value="myy">Myy </option>
                                <option value="vaheta">Vaheta </option>
                                <option value="muu">Muu </option>
                                <option value="teade">Teade </option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-6  col-sm-12 col-xs-12 col-md-offset-4" for="nr">Hind:</label>
                        <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-4">
                            <input type="number" class="form-control" name="price" id="addedprice" placeholder="...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-6 col-sm-12 col-xs-12 col-md-offset-4" for="nr">Pealkiri/Objekt:</label>
                        <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-4">
                            <input name="title" type="text" class="form-control" id="addedAnnoTitle" placeholder="lühike kokkuvõttev nimetus">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-6 col-sm-12 col-xs-12 col-md-offset-4" for="nr">Tutvustav tekst:</label>
                        <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-4">
                            <textarea class="form-control" name="introText" id="addedintroText" placeholder="anna siin oma kuulutusest võimalikult hea ülevaade"></textarea>
                        </div>
                    </div>


                    <input type="hidden" id="token" value="{{Session::token()}}" name="_token">

                    <!--  {{csrf_field()}} - Niipidi saab ka :D -->
                    <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-4">
                        <button type="submit" id="addAnnoButton" class="btn btn-success col-md-12 col-sm-12 col-xs-12">Lisa!</button>
                    </div>
                </form>
            </div>
        </div>

        {{--INFO LEHE KOHTA --}}
        <a href="#x" id="showAbout">meist</a>
        <div class="panel-body" id="showAboutPanel" hidden>
            Omg mida fakki ma nii kaua aega kulutasin selle porno peale? :D :DxD mulle meeeldib see lause. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

        </div>



</div>
@endsection
