@extends('Dghrd.website.layouts.main')
@section('main-section')<!--SECTION FOR MENU NAV-->
<section>
      <div class="container-fluid bg-menu-open">
         <div class="container">
             <div class="py-2"><h5>About us >> <span> <strong> Photo Gallery</strong></span></h5></div>
         </div>
      </div>
</section>
<div class="container-fluid" >
<div class="row" style="background-color:white;">
<div class="col-lg-9 col-md-9 col-sm-auto">

    <section class="slider my-5">
        <div class="container">
            <div class="row gy-4">
                @foreach($gallery->reverse() as $item)
                <div class="col-md-3">
                    <div class="item position-relative card shadow" style="border-radius:9px;">
                        <div class="img-item card-body p-1">
                            <img src="{{asset('Admin/Images').'/'.$item->image ?? ''}}" alt="item photo" class="w-100">
                        </div>
                        <div class="text-center mt-2">
                            <p style="font-size:14px;">{{ $item->tittle }}</p>
                            {{-- <p style="font-size:14px; margin-top:-12px;">{{ $item->description }}</p> --}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    </div>
    @include('Dghrd.website.layouts.important_links')

</div>
</div>
<div class="modal-layer position-fixed justify-content-center align-items-center">

    <div class="slide-img w-75 h-75 d-flex align-items-center justify-content-between px-4 position-relative">

      <i id="closeBtn" class="far fa-times-circle fa-2x position-absolute end-0 top-0 m-4"></i>

      <div class="box-circle d-flex align-item-center text-center">
	  <i id="prev" class="fas fa-chevron-left fa-2x "></i>
	  </div>
	   <div class="box-circle d-flex align-item-center text-center">
      <i id="next" class="fas fa-chevron-right fa-2x"></i>
	  </div>
    </div>
  </div>
</div>

<script>
	// variables
// items & images
let itemsImgs = document.querySelectorAll(".img-item img");
itemsImgsArr = Array.from(itemsImgs);

// pop slider
let popSlider = document.querySelector("section .modal-layer");
let bgSlide = document.querySelector(".modal-layer .slide-img");

// icons/buttons
// close
let closeBtn = document.querySelector("#closeBtn");
closeBtn.style.cssText = cursor : pointer;;
// left
let prevBtn = document.querySelector("#prev");
prevBtn.style.cssText = cursor : pointer;;
// right
let nextBtn = document.querySelector("#next");
nextBtn.style.cssText = cursor : pointer;;

// index of item
let activeIndex;

for (let i = 0; i < itemsImgs.length; i++) {
  itemsImgs[i].addEventListener("click", function (e) {
    popSlider.style.display = "flex";
    let activeSrc = e.target.src;
    bgSlide.style.backgroundImage = url(${activeSrc});
    activeIndex = itemsImgsArr.indexOf(e.target);
  });
}

closeBtn.addEventListener("click", removeSlider);

function removeSlider() {
  popSlider.style.display = "none";
}

nextBtn.addEventListener("click", nextSlider);

function nextSlider() {
  activeIndex++;
  if (activeIndex == itemsImgs.length) {
    activeIndex = 0;
  }
  let imgSrc = itemsImgsArr[activeIndex].src;
  bgSlide.style.backgroundImage = url(${imgSrc});
}

prevBtn.addEventListener("click", prevSlider);

function prevSlider() {
  activeIndex--;
  if (activeIndex < 0) {
    activeIndex = itemsImgs.length - 1;
  }
  let imgSrc = itemsImgsArr[activeIndex].src;
  bgSlide.style.backgroundImage = url(${imgSrc});
}

// keyboard events
document.addEventListener("keydown", function (e) {
  if (e.key == "Escape") {
    removeSlider();
  } else if (e.key == "ArrowRight") {
    nextSlider();
  } else if (e.key == "ArrowLeft") {
    prevSlider();
  }
});
	 </script>
@endsection
