      
@extends('layouts.middle')
@push('title')
<title>Essential Drugs & Company Limited (EDCL)</title>

@endpush


@section('middle_section')
<!-- =================================== start middle section -->

@include('layouts.slider')










@include('layouts.division')



















<!-- __________________________________________________ slider image start -->


<link rel="stylesheet" href="{{url('style/css/slider_image.css')}}">


<div class="cool_slider">
  <h1>Galary & View</h1>
<!-- partial:index.partial.html -->
<div class="cont s--inactive">
  <!-- cont inner start -->
  <div class="cont__inner">
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <!-- <h2 class="el__heading">Section 1</h2> -->
          </div>
          <div class="el__content">
            <!-- <div class="el__text">Whatever</div> -->
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back"></div>
        <div class="el__index-front">
          <div class="el__index-overlay" data-index=""> <img src="{{url('resource/images/quick_galary/1.png')}}" alt=""></div>
        </div>
      </div>
    </div>
    <!-- el end -->
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <!-- <h2 class="el__heading">Section 2</h2> -->
          </div>
          <div class="el__content">
            <!-- <div class="el__text">Whatever</div> -->
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back"></div>
        <div class="el__index-front">
          <div class="el__index-overlay" data-index=""><img src="{{url('resource/images/quick_galary/2.png')}}" alt=""></div>
        </div>
      </div>
    </div>
    <!-- el end -->
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <!-- <h2 class="el__heading">Section 3</h2> -->
          </div>
          <div class="el__content">
            <!-- <div class="el__text">Whatever</div> -->
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back"></div>
        <div class="el__index-front">
          <div class="el__index-overlay" data-index=""><img src="{{url('resource/images/quick_galary/3.png')}}" alt=""></div>
        </div>
      </div>
    </div>
    <!-- el end -->
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <!-- <h2 class="el__heading">Section 4</h2> -->
          </div>
          <div class="el__content">
            <!-- <div class="el__text">Whatever</div> -->
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back"></div>
        <div class="el__index-front">
          <div class="el__index-overlay" data-index=""><img src="{{url('resource/images/quick_galary/4.png')}}" alt=""></div>
        </div>
      </div>
    </div>
    <!-- el end -->
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <!-- <h2 class="el__heading">Section 5</h2> -->
          </div>
          <div class="el__content">
            <!-- <div class="el__text">Whatever</div> -->
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back"></div>
        <div class="el__index-front">
          <div class="el__index-overlay" data-index=""><img src="{{url('resource/images/quick_galary/5.png')}}" alt=""></div>
        </div>
      </div>
    </div>
    <!-- el end -->
  </div>
  <!-- cont inner end -->
</div>


<!-- partial -->
</div>

<script>
var $cont = document.querySelector('.cont');
var $elsArr = [].slice.call(document.querySelectorAll('.el'));
var $closeBtnsArr = [].slice.call(document.querySelectorAll('.el__close-btn'));

setTimeout(function() {
  $cont.classList.remove('s--inactive');
}, 200);

$elsArr.forEach(function($el) {
  $el.addEventListener('click', function() {
    if (this.classList.contains('s--active')) return;
    $cont.classList.add('s--el-active');
    this.classList.add('s--active');
  });
});

$closeBtnsArr.forEach(function($btn) {
  $btn.addEventListener('click', function(e) {
    e.stopPropagation();
    $cont.classList.remove('s--el-active');
    document.querySelector('.el.s--active').classList.remove('s--active');
  });
});

</script>
<!-- __________________________________________________ slider image end -->










@endsection