<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SNC</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="{{ route('gallery.create') }}">Gallery</a></li>
      <li><a href="{{ route('employee.create') }}">Employee</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="{{ route('notice.create') }}">Notice</a></li>
      <li><a href="{{ route('logout') }}">Logout</a></li>
    </ul>
  </div>
</nav>