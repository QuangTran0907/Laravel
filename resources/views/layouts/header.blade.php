<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">WebSiteName</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="nav-link {{ request()->is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
        <li class="nav-link {{ request()->is('about') ? 'active' : '' }}"><a href="/about">Page 1</a></li>
        <li class="nav-link {{ request()->is('products') ? 'active' : '' }}"><a href="/products">Page 2</a></li>
      </ul>
      <form class="navbar-form navbar-left" action="/action_page.php">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </nav>