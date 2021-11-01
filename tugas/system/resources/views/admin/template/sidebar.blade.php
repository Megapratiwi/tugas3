<div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{request()->is('dashboard') ? 'active' : ''}} ">
            <a class="nav-link" href="{{ url('dashboard') }}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{request()->is('user') ? 'active' : ''}} ">
            <a class="nav-link" href="{{ url('user') }}">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item {{request()->is('product') ? 'active' : ''}} ">
            <a class="nav-link" href="{{ url('product') }}">
              <i class="material-icons">Product</i>
              <p>Product</p>
            </a>
          </li>
          <li class="nav-item {{request()->is('category') ? 'active' : ''}} ">
            <a class="nav-link" href="{{ url('category') }}">
              <i class="material-icons">category</i>
              <p>Category</p>
            </a>
          </li>
          <li class="nav-item {{request()->is('icons') ? 'active' : ''}} ">
            <a class="nav-link " href="{{ url('icons') }}">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item active-pro ">
            <a class="nav-link" href="./upgrade.html">
              <i class="material-icons">unarchive</i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
        </ul>
      </div>