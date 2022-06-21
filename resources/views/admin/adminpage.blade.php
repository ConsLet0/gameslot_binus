<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.adminscript");
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")
    <div style="position: relative; top: 150px; right: -150px">
      <b><p>Please Select Menu On Left Side Navigation Bar</p></b>
    </div>  
      <div class="container-fluid page-body-wrapper">
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item nav-settings d-none d-lg-block">
                <x-app-layout>
                </x-app-layout>                
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profileDropdown">
                  <div class="navbar-profile">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Hello Administrator !</p>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </nav>
       </div>
  </body>
</html>