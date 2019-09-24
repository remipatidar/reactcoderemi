@extends('layouts/index')
@section('title', 'Page Title') {{-- For different pages you can change your title here --}}    
@section('middle_content') {{--Put your middle content--}}
    <!-- ================End login model ==================-->

    <div id="id01" class="modal">
      
      <div class="modal-content animate" action="/action_page.php" method="post">
        <div class="row">
          <div class="col-md-6">
            <div class="model-logo-box">
               <div class="model-logo">
                  <img  src="images/logo.png" width="100%">
               </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="model-login-form">
              <div class="model-form-data">
                <div class="login-header">
                  <ul class="list-login ">
                    <li class="active" ><a>SIGN IN</a></li>
                    <li  style="margin-left: 97px" class=""><a>SIGN UP</a></li>
                  </ul>
                </div>
                  <form action="">
                        <div class="form-group form-input">
                          <input type="email" class=" text-bor" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group form-input">
                          <input type="password" class=" text-bor" id="pwd" placeholder="Enter password" name="pswd">
                        </div>
                        <div class="model-form-button">
                           <button type="submit" class="btn model-btn-sub">
                             <h4 class="model-btn-text">Login</h4>
                            </button>
                        </div>
                      </form>
                      <div class="model-footer-containt" >
                        <span class="forgot-password-text">Forgot Password ?</span>
                        <div class="model-signin-box">
                            <a class="model-signin-button" href="">
                              <img src="images/google_PNG19635.png" width="20px">
                              Sign in with Google
                            </a>
                        </div>
                      </div>
              </div>
            </div>
          </div>

         </div>


        
      </div>
    </div>
      
  <!-- ================End login model ==================-->
  
  <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
     <div class="main-image ">
        <!-- <img src="images/Multi Medias.jpg" width="100%"> -->
        <div class="main-body">
          <div class="container">
                  <div class="main-body-containt">
                     <div class="main-heading-con">
                         <div>
                           <span>Indonesia's first e-commerce platform for media buyine and planning. </span>
                         </div>
                     </div>
                  </div>
            

          </div>
        </div> 

        <div class="filter-form" style="margin-top:170px ">
             <div class="filter-form-header">
                <div class="bs-search-clas">
                  <ul class="nav nav-tabs">
                    <li style="margin-left: 15px;"><a class="Active" href="">Newspaper</a></li>
                    <li><a href="">Radio</a></li>
                    <li><a href="">Cinema</a></li>
                    <li><a href="">Magazine</a></li>
                    <li><a href="">Digital</a></li>
                  </ul>
                </div>
             </div> 
            
             
             <div class="tab-containt-form">
                <div class="tab-containt">
                   <form >
                    <div class="row">
                      <div class="col-md-11">
                        <div class="row form-group">
                       <div class="col-md-3">
                          <select class="form-control">
                            <option>Select</option>
                            <option>option1</option>
                            <option>option2</option>
                            <option>option3</option>
                            <option>option4</option>
                          </select>
                       </div>
                       <div class="col-md-3">
                          <select class="form-control">
                            <option>Select</option>
                            <option>option1</option>
                            <option>option2</option>
                            <option>option3</option>
                            <option>option4</option>
                          </select>
                       </div>
                       <div class="col-md-3">
                          <select class="form-control">
                            <option>Select</option>
                            <option>option1</option>
                            <option>option2</option>
                            <option>option3</option>
                            <option>option4</option>
                          </select>
                       </div>
                       <div class="col-md-3">
                          <select class="form-control">
                            <option>Select</option>
                            <option>option1</option>
                            <option>option2</option>
                            <option>option3</option>
                            <option>option4</option>
                          </select>
                       </div>
                     </div>
                      </div>
                      <div class="col-md-1">
                        <div>
                         <a href="" class="btn btn-primary form-controller-serchbtn"><i class="fa fa-search" aria-hidden="true"></i></a>
                       </div>
                      </div>

                    </div>
                     
                       
                     </div>
                   </form>
                </div>
             </div>  

     </div>
  </div>
  <!--/ Carousel end /-->

  <section class="section-services section-t8">
    <div class="container">
      <div class="col-md-12">
          <div class="row">
              <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                  <div class="title-box">
                    <h4 class="title-a">Now buying advertising online is a simple step.</h4>
                    <span class="sort-title-a">Search, plan and buy media options</span>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </div>
  </section>

  <!--/ Services Star /-->
  <section class="section-services section-t8" style="padding: 0rem;padding-left: 14rem;">
    <div class="container" style="max-width: 1300px;">
      <div class="col-md-12">
      
      <div class="row">
        <div class="col-md-2 col-sm-6 ">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <img src="images/Web-Icons-06.png" width="100px">
              </div>
            </div>
            <hr class="card-bottom-line">
            <div class="card-body-c">
              <span class="content-c">
              AIRPORT
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 ">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <img src="images/Web-Icons-07.png" width="100px">
              </div>
            </div>
            <hr class="card-bottom-line">
            <div class="card-body-c">
              <span class="content-c">
              AIR PLANE
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 ">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <img src="images/Web-Icons-08.png" width="100px">
              </div>
            </div>
            <hr class="card-bottom-line">
            <div class="card-body-c">
              <span class="content-c">
              CINEMA
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 ">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <img src="images/Web-Icons-09.png" width="100px">
              </div>
            </div>
            <hr class="card-bottom-line">
            <div class="card-body-c">
              <span class="content-c">
              DIGITAL
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 ">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <img src="images/Web-Icons-10.png" width="100px">
                </div>
              </div>
              <hr class="card-bottom-line">
              <div class="card-body-c">
                <span class="content-c">
                MAGAZINE
                </span>
              </div>
            </div>
          </div>
      </div><!-- first row -->
       <div class="row">
        <div class="col-md-2 col-sm-6 ">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <img src="images/Web-Icons-11.png" width="100px">
              </div>
            </div>
            <hr class="card-bottom-line">
            <div class="card-body-c">
              <span class="content-c">
              NEWSPAPER
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 ">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <img src="images/Web-Icons-12.png" width="100px">
              </div>
            </div>
            <hr class="card-bottom-line">
            <div class="card-body-c">
              <span class="content-c">
              OUTDOR
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 ">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <img src="images/Web-Icons-13.png" width="100px">
              </div>
            </div>
            <hr class="card-bottom-line">
            <div class="card-body-c">
              <span class="content-c">
              RADIO
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 ">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <img src="images/Web-Icons-14.png" width="100px">
                </div>
              </div>
              <hr class="card-bottom-line">
              <div class="card-body-c">
                <span class="content-c">
                TELIVISION
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-6 ">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <img src="images/Web-Icons-15.png" width="100px">
                </div>
              </div>
              <hr class="card-bottom-line">
              <div class="card-body-c">
                <span class="content-c">
                RETAIL
                </span>
              </div>
            </div>
          </div>
      </div><!-- second row -->
      <div class="row">
        <div class="col-md-2 col-sm-6 ">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <img src="images/Web-Icons-16.png" width="100px">
              </div>
            </div>
            <hr class="card-bottom-line">
            <div class="card-body-c">
              <span class="content-c">
              DIGITAL OOH
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 ">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <img src="images/Web-Icons-17.png" width="100px">
              </div>
            </div>
            <hr class="card-bottom-line">
            <div class="card-body-c">
              <span class="content-c">
              HYPERLOCAL
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 ">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <img src="images/Web-Icons-18.png" width="100px">
                </div>
              </div>
              <hr class="card-bottom-line">
              <div class="card-body-c">
                <span class="content-c">
                TRAIN
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-6 ">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                 <img src="images/Web-Icons-19.png" width="100px">
                </div>
              </div>
              <hr class="card-bottom-line">
              <div class="card-body-c">
                <span class="content-c">
                AUTOMOTIVE
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-6 ">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <img src="images/Web-Icons-20.png" width="100px">
                </div>
              </div>
              <hr class="card-bottom-line">
              <div class="card-body-c">
                <span class="content-c">
                SPECAIL PLACEMENTS
                </span>
              </div>
            </div>
          </div> 
      </div><!-- third row -->
    </div>
    </div>
  </section>
  <!--/ Services End /-->



    <!--/ how work Star /-->
    <section class="section-workservice section-t8 section-t9 ">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h1 class="title-b">How it works?</h1>
                  <h3 class="sort-title-b">Ad buying made ease</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  <section class="section-workservice section-t8 " style="padding: 0rem;">
    <div class="container" style="max-width: 1300px;">
     
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2 col-sm-6 card-box-ac">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <img src="images/Web-Icons-21.png" width="100px">
                 <p><strong>STEP 1</strong></p>
              </div>
            </div>
            <div class="card-body-cd">
              <p class="content-cd" style="padding: 18px;">
              THINK OF YOUR BIG IDEA AND ALL YOUR EXECUTION CHANELS
              </p>
            </div>
            
          </div>
        </div>
        <div class="col-md-2 col-sm-6 card-box-ac">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <img src="images/Web-Icons-22.png" width="100px">
                 <p><strong>STEP 2</strong></p>
              </div>
            </div>
            <div class="card-body-cd">
              <p class="content-cd" style="padding: 3px;">
                  EXPLORE ALL MEDIA                  
                  OPTIONS WITH BEST RATES
                  AND REACH AND SELECT
                  YOUR MEDIA OPTIONS USING
                  FILTERS AND SORTING
              </p>
            </div>
            
          </div>
        </div>
        <div class="col-md-2 col-sm-6 card-box-ac">
          <div class="card-box-c  foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <img src="images/Web-Icons-23.png" width="100px">
                 <p><strong>STEP 3</strong></p>
              </div>
            </div>
             <div class="card-body-cd" >
               <p class="content-cd" style="padding: 12px;">
                BOOK YOUR ADS/ CREATE
                YUR CAMPAIGN ONLINE,
                ASSIGN DATES, UPLOAD
                ARTWORKS
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 card-box-ac">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <img src="images/Web-Icons-24.png" width="100px">
                 <p><strong>STEP 4</strong></p>
              </div>
            </div>
            <div class="card-body-cd">
               <p class="content-cd" style="padding: 2.4px;">
                MAKE AYMENTS AND
                RESERVE YOUR MEDIA AD
                SPACES. RECEIVE
                EXECUTION PROOF AND
                INVOICE FOR YOUR
                CAMPAIGNS
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 card-box-ac">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <img src="images/Web-Icons-25.png" width="100px">
                <p><strong>STEP 5</strong></p>
              </div>
            </div>
            <div class="card-body-cd" >
              <p class="content-cd" style="padding: 23.25px;">
                SEE YOUR CAMPAIGN
                PERFORMANCE REPORTS
              </p>
            </div>
          </div>
        </div>

  
      </div>
    </div>
  </section>
  <!--/ work End /-->
@endsection