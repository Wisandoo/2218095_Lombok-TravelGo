<div class="sidebar">
  <div class="logo-details">
    <i class="bx bx-customer"></i>
    <span class="logo_name">Lombok Travel-Go</span>
  </div>
  <ul class="nav-links">
    <li>
      <a href="#">
        <i class="bx bx-grid-alt"></i>
        <span class="links_name">Dashboard</span>
      </a>
    </li>
    <li>
      <a href="/customer" class="{{ request()->Is('customer*') ? 'active' : '' }}">
        <i class="bx bx-box"></i>
        <span class="links_name">Customer Data</span>
      </a>
    </li>
    <li>
      <a href="/transaction" class="{{ request()->Is('transaction*') ? 'active' : '' }}">
        <i class="bx bx-list-ul"></i>
        <span class="links_name">Paket Travel</span>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="bx bx-log-out"></i>
        <span class="links_name">Log out</span>
      </a>
    </li>
  </ul>
</div>
