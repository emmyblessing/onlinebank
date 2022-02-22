<nav class="navbar navbar-expand-lg navbar-light bg-white text-light">
  <div class="container-fluid px-4 px-lg-5 ">
    <a class="navbar-brand text-light" href="./">
      <img src="./uploads/logo.png" width="180" class="d-inline-block align-top" alt="" loading="lazy">
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
              <li class="nav-item"><a class="nav-link fs-5 fw-bold" href="./?p=login">Login</a></li>
              <li class="nav-item"><a class="nav-link fs-5 fw-bold" href="./?p=announcements">Announcements</a></li>
          </ul>
          <div class="d-flex align-items-center">
            
          </div>
      </div>
  </div>
</nav>
<script>
  $(function(){
    $('#login-btn').click(function(){
      uni_modal("","login.php")
    })
    $('#navbarResponsive').on('show.bs.collapse', function () {
        $('#mainNav').addClass('navbar-shrink')
    })
    $('#navbarResponsive').on('hidden.bs.collapse', function () {
        if($('body').offset.top == 0)
          $('#mainNav').removeClass('navbar-shrink')
    })
  })

  $('#search-form').submit(function(e){
    e.preventDefault()
     var sTxt = $('[name="search"]').val()
     if(sTxt != '')
      location.href = './?p=products&search='+sTxt;
  })
</script>