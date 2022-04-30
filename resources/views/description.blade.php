@extends('clients.layouts.app')

@section('content')
  <div class="wrapper col2" style="background-color: #406e4c;">
    <div class="intro">
      <div class="fl_left">
        <h1 style="background-color: #406e4c;">Product Description for: {{$item->name}}</h1>
        <ul>
          <li>
            <h2 style="background-color: #406e4c;">Details</h2>
            <p>The set of full hall-room furniture as shown in picture at rate of <b>49,999</b> only.</p>
            <p>{{ $item->details }}</p>
            <p>Price: <b>{{$item->price}}</b></p>
            <p class=""><a href="#" style="background-color: #406e4c;">More &raquo;</a></p>
          </li>
          <li class="last">
            <h2 style="background-color: #406e4c;">Special Offer</h2>
            <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et feugiat. Adipisciniap ellentum leo ut consequam.</p>
            <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
          </li>
        </ul>
      </div>
      <div class="fl_right">
        <ul id="rotation">
          <li><a href="#"><img src="{{ asset('dist/img/fur/home-1.jpg') }}" alt="" /></a></li>
          <li><a href="#"><img src="{{ asset('dist/img/fur/home-2.jpg') }}" alt="" /></a></li>
          <li><a href="#"><img src="{{ asset('dist/img/fur/home-3.jpg') }}" alt="" /></a></li>
        </ul>
      </div>
        <div class="col-md-7">
            <button type="button" class="btn btn-primary">Buy Now</button>
            <button type="button" class="btn btn-success">Add to wish list</button>
            <button type="button" class="btn btn-secondary">View more offers</button>
        </div>
      <br class="clear" />
    </div>
  </div>
  <div class="wrapper col3">
    <div id="container">
        <h4> Related items...</h4>
      <div id="latest">
        <ul>
          <li>
            <h2>Wooden</h2>
            <p class="imgholder"><img src="{{ asset('dist/img/fur/wood-1.jpg') }}" alt="" width="290" height="100"/></p>
            <p>Here you can find all the Wooden items we sell and manufacture here. <a href="#">More &raquo;</a></p>
          </li>
          <li>
            <h2>PolyVinyl Chloride(PVC)</h2>
            <p class="imgholder"><img src="{{ asset('dist/img/fur/pvc-1.jpeg') }}" alt="" width="290" height="100"/></p>
            <p>Here you can find all the PVC items we sell and manufacture here. Like PVC kitchen, bathroom doors. <a href="#">More &raquo;</a></p>
          </li>
          <li class="last">
            <h2>Aluminium Section</h2>
            <p class="imgholder"><img src="{{ asset('dist/img/fur/alu-1.jpg') }}" alt=""  width="290" height="100"/></p>
            <p>Nullamlacus dui ipsum conseqlo bo rttis non euisque morbipen asda pibulum orna. <a href="#">More &raquo;</a></p>
          </li>
        </ul>
        <br class="clear" />
      </div>
      <div id="content">
        <h2>Little fact about the furniture site</h2>
        <p>This is a W3C standards compliant free website template from <a href="http://www.os-templates.com/">OS Templates</a>.</p>
        <p>This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>, which allows you to use and modify the template for both personal and commercial use when you keep the provided credit links in the footer.</p>
        <p>For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>
        <p>Sedvestibulum rhoncus rhoncus mauris tincidunt mollis intesque elit arcu lor tempus. Feugiateget nis justo amet eger venean cras elit sociis morbi congue.</p>
        <p>Malesuadaipsum vel felit sed pede curabitae phasellus in morbi pellent cursuspendissim. Elisadipiscingillamcorper ut et eger adipit mi vestie vitae magnis ut in sapibusinterdum.</p>
      </div>
      <div id="column">
        <div class="holder">
          <h2 class="title"><img src="{{ asset('dist/img/avatar2.png') }}"  width="60" height="60" alt="" />Natalia </h2>
          <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat adipisciniapellentum leo.</p>
          <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
@endsection