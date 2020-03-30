<?php include "header.php" ;
include "../functions.php";  ?>
<script type="text/javascript" src="<?=homepage('js/jquery.js');?>"></script>
<script type="text/javascript" src="<?=homepage('js/progressbar.min.js');?>"></script>
<script>

(function ($) {

"use strict";



// LINE PROGRESS BAR
enableLineProgress();

// RADIAL PROGRESS BAR
enableRadialProgress();

// ACCORDIAN
panelAccordian();

$(window).on('load', function(){
    
    // ISOTOPE PORTFOLIO WITH FILTER
    if(isExists('.portfolioContainer')){
        var $container = $('.portfolioContainer');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
     
        $('.portfolioFilter a').click(function(){
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');
     
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
             });
             return false;
        }); 
    }

});


$('a[href="#"]').on('click', function(event){
    return;
});


if ( $.isFunction($.fn.fluidbox) ) {
    $('a').fluidbox();
}

var countCounterUp = 0;

var a = 0 ;

countCounterUp = enableCounterUp(countCounterUp);

$(window).on('scroll', function(){
    
    countCounterUp = enableCounterUp(countCounterUp);

});


})(jQuery);

function panelAccordian(){

var panelTitle = $('.panel-title');
panelTitle.on('click', function(){
    $('.panel-title').removeClass('active');
    $(this).toggleClass('active');
    
});

}

function enableRadialProgress(){

$(".radial-progress").each(function(){
    var $this = $(this),
        progPercent = $this.data('prog-percent');
        
    var bar = new ProgressBar.Circle(this, {
        color: '#aaa',
        strokeWidth: 3,
        trailWidth: 1,
        easing: 'easeInOut',
        duration: 1400,
        text: {
            
        },
        from: { color: '#aaa', width: 1 },
        to: { color: '#FEAE01', width: 3 },
        // Set default step function for all animate calls
        step: function(state, circle) {
            circle.path.setAttribute('stroke', state.color);
            circle.path.setAttribute('stroke-width', state.width);

            var value = Math.round(circle.value() * 100);
            if (value === 0) {
                circle.setText('');
            } else {
                circle.setText(value);
            }

        }
    });
    
    $(this).waypoint(function(){
       bar.animate(progPercent);  
    },{offset: "90%"})
    
});
}

function enableLineProgress(){

$(".line-progress").each(function(){
    var $this = $(this),
        progPercent = $this.data('prog-percent');
        
    var bar = new ProgressBar.Line(this, {
        strokeWidth: 1,
        easing: 'easeInOut',
        duration: 1400,
        color: '#FEAE01',
        trailColor: '#eee',
        trailWidth: 1,
        svgStyle: {width: '100%', height: '100%'},
        text: {
            style: {
                
            },
        },
        from: {color: '#FFEA82'},
        to: {color: '#ED6A5A'},
        step: (state, bar) => {
            bar.setText(Math.round(bar.value() * 100) + ' %');
        }
    });
    
    $(this).waypoint(function(){
       bar.animate(progPercent);  
    },{offset: "90%"})
    
});
}

function enableCounterUp(a){

var counterElement;

if(isExists('#counter')){ counterElement = $('#counter'); }
else{ return; }
    
var oTop = $('#counter').offset().top - window.innerHeight;
if (a == 0 && $(window).scrollTop() > oTop) {
    $('.counter-value').each(function() {
        var $this = $(this),
            countDuration = $this.data('duration'),
            countTo = $this.attr('data-count');
        $({
            countNum: $this.text()
        }).animate({
            countNum: countTo
        },{

            duration: countDuration,
            easing: 'swing',
            step: function() {
                $this.text(Math.floor(this.countNum));
            },
            complete: function() {
                $this.text(this.countNum);
            }

        });
    });
    a = 1;
}

return a;
}

function isExists(elem){
if ($(elem).length > 0) { 
    return true;
}
return false;
}
</script>
<?php
function progress(){
  $id=$_SESSION["id_student"];
      
       $con = new mysqli("localhost","root","","traino");
           $st=$con->prepare("select 	numHours from attendance where id_student ='$id'");
           $st->execute();
           $rs=$st->get_result();
           while ($row=$rs->fetch_assoc())
           {
            //  echo $row['numHours'];
            //  echo "<br>";
          //  echo (((600 - $row['numHours'])/100) ."%");
          echo (intval((600-(600-$row['numHours']))/100)."%");
           }

      }
   
     
      ?>
  
<style>
.radial-progress{ position: relative; max-width: 180px; margin: 0 auto; }

.radial-progress .progressbar-text{ font-size: 2.2em; font-weight: 500; 
	padding-bottom: 25px!important; color: #333!important; }

.radial-progress .progressbar-text:after{ content:'%'; }

.radial-progress .progress-title{ position: absolute; top: 50%; left: 50%; width: 100%;
	letter-spacing: 0; text-align: center; color: #777; 
	-webkit-transform: translate(-50%, 15px); transform: translate(-50%, 15px); }

	
/* ---------------------------------
8. PROGRESSIONS SECTION
--------------------------------- */
/* .progress{
    width: 150px;
    height: 150px;
    line-height: 150px;
    background: none;
    margin: 0 auto;
    box-shadow: none;
    position: relative;
}
.progress:after{
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 12px solid #fff;
    position: absolute;
    top: 0;
    left: 0;
}
.progress > span{
    width: 50%;
    height: 100%;
    overflow: hidden;
    position: absolute;
    top: 0;
    z-index: 1;
}
.progress .progress-left{
    left: 0;
}
.progress .progress-bar{
    width: 100%;
    height: 100%;
    background: none;
    border-width: 12px;
    border-style: solid;
    position: absolute;
    top: 0;
}
.progress .progress-left .progress-bar{
    left: 100%;
    border-top-right-radius: 80px;
    border-bottom-right-radius: 80px;
    border-left: 0;
    -webkit-transform-origin: center left;
    transform-origin: center left;
}
.progress .progress-right{
    right: 0;
}
.progress .progress-right .progress-bar{
    left: -100%;
    border-top-left-radius: 80px;
    border-bottom-left-radius: 80px;
    border-right: 0;
    -webkit-transform-origin: center right;
    transform-origin: center right;
    animation: loading-1 1.8s linear forwards;
}
.progress .progress-value{
    width: 90%;
    height: 90%;
    border-radius: 50%;
    background: #44484b;
    font-size: 24px;
    color: #fff;
    line-height: 135px;
    text-align: center;
    position: absolute;
    top: 5%;
    left: 5%;
}
.progress.blue .progress-bar{
    border-color: #049dff;
}
.progress.blue .progress-left .progress-bar{
    animation: loading-2 1.5s linear forwards 1.8s;
}
@keyframes loading-1{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }
}
@keyframes loading-2{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(144deg);
        transform: rotate(144deg);
    }
}
@media only screen and (max-width: 990px){
    .progress{ margin-bottom: 20px; }
} */

</style>


  <div class="container my-5 py-5 z-depth-1">


    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 text-center dark-grey-text">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-6 mb-4 mb-md-0">

          <h3 class="font-weight-bold">Material Design Blocks</h3>

          <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
            molestiae
            numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>

          <a class="btn btn-purple btn-md ml-0" href="#" role="button">Start now<i class="fa fa-gem ml-2"></i></a>

          <hr class="my-5">

          <p class="font-weight-bold">Follow us on:</p>

          <!--Facebook-->
          <a href="#" class="mx-1" role="button"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="mx-1" role="button"><i class="fab fa-twitter"></i></a>
          <a href="#" class="mx-1" role="button"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="mx-1" role="button"><i class="fab fa-instagram"></i></a>
          <a href="#" class="mx-1" role="button"><i class="fab fa-pinterest"></i></a>
          <a href="#" class="mx-1" role="button"><i class="fab fa-youtube"></i></a>
          <a href="#" class="mx-1" role="button"><i class="fab fa-github"></i></a>
          <a href="#" class="mx-1" role="button"><i class="fab fa-stack-overflow"></i></a>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-5 mb-4 mb-md-0">

        

        <!-- <div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="progress blue">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar   " ></span>
                </span>
                <div class="progress-value"aria-valuenow="<?php progress(); ?>" aria-valuemin="0"aria-valuemax="100"><?php    progress(); ?></div>
            </div>
        </div>
       
    </div>
</div> -->
<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-30">
								<div class="radial-progress" data-prog-percent=".97">
									<div></div>
									<h6 class="progress-title">HTML5 & CSS3</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>
    







