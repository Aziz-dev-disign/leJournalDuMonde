@extends('layouts.default')

@section('content')


        <style>
          #mapid { height: 180px; }  
        </style>

  <section id="content">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="topadd_bar"><a href="#"><img src="../images/addbanner_728x90_V1.jpg" alt=""></a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-8" onload="initialize()">
          <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>
        <div class="col-md-4 col-sm-8">
          <div class="contact_area wow fadeInLeftBig">
            <form action="#" class="contact_form">
              <input class="form-control" type="text" placeholder="Name(Required)">
              <input class="form-control" type="mail" placeholder="Email(Required)">
              <input class="form-control" type="text" placeholder="Subject">
              <textarea class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
              <input type="submit" value="Submit">
            </form>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="contact_address wow fadeInRightBig">
            <h3>Address</h3>
            <p>Burkina Faso, Ouagadoudou<br/> Hamdalaye,... </p>
            <h4>Le Journal du Monde</h4>
            <address>
            <p>Hamdalaye secteur 8, RUE.1074</p>
            <p>Jupiter, Charle 2.0</p>
            <p>P: 00 (226) 456 78 90</p>
            <a href="mailto:#">Contact@gmail.com</a>
            </address>
          </div>
        </div>
      </div>
    </div>
  </section>
     

    @endsection
