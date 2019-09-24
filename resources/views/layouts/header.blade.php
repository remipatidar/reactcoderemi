<header>

<div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse sidebar-menu">
    
    <span class="close-box-collapse right-boxed ion-ios-close">X</span>
    <div class="drawer-heading">Media Verticals</div>
    <div class="box-collapse-wrap ">
      <ul class="sidebar-menu" >
        <li><a href="">AIRPORT</a></li>
        <li><a href="">AIR PLANE </a></li>
        <li><a href="">CINEMA</a></li>
        <li><a href="">DIGITAL</a></li>
        
      </ul>
    </div>
  </div>
  <!--/ Form Search End /-->

  <!--/ Nav Star   fixed-top/-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg ">
    <div class="main-top-nav">
      <a class="navbar-brand text-brand" href="index.html">
        <img src="images/logo.png" width="150px">
      </a>
      <a href="#" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none " data-toggle="collapse"
      data-target="#navbarTogglerDemo01"  aria-expanded="false"><img src="images/menu.png" width="35px" ></a>
      <!-- <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-bars" aria-hidden="true"></span>
      </button> -->
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
     
      </div>

      <div class="search-container">
        <form class="search-container-btn" action="/action_page.php">
          <input type="text" placeholder="Search.." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
          
        </form>
      </div>
     
      <a href="" class="menu-user-buttons top-menu-click-button "  aria-expanded="false"><img src="images/cart.png" width="35px" ></a>
      <a href="" class="menu-user-buttons top-menu-click-button "  aria-expanded="false"><img src="images/map.png" width="35px" ></a>
      <a href="#" class="menu-user-buttons top-menu-click-button " onclick="document.getElementById('id01').style.display='block'"  aria-expanded="false"><img src="images/user.png" width="35px" ></a> 
      <a href="#" class="menu-user-buttons top-menu-click-button navbar-toggle-box-collapse d-none d-md-block " data-toggle="collapse"
        data-target="#navbarTogglerDemo01"  aria-expanded="false"><img src="images/menu.png" width="35px" ></a>
      
       <!-- <button type="button"  class="menu-user-buttons top-menu-click-button"  aria-expanded="false">
        <span class="fa fa-globe" aria-hidden="true"></span>
      </button> -->

     <!--  <button type="button" onclick="document.getElementById('id01').style.display='block'" class="menu-user-buttons top-menu-click-button"  aria-expanded="false">
        <span class="fa fa-user" aria-hidden="true"></span>
      </button> -->
      
      <!--  <button type="button" class="menu-user-buttons top-menu-click-button navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-bars" aria-hidden="true"></span>
      </button> -->
    </div>
  </nav>

</header>
 <!-- JavaScript Libraries -->
 <script src="{{ asset('../resources/js/jquery.min.js') }}"></script>
  <script src="{{ asset('../resources/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('../resources/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('../resources/js/scrollreveal.min.js') }}"></script>


  <!-- Template Main Javascript File -->
  <script src="{{ asset('../resources/js/main.js') }}"></script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>