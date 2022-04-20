<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />

    <link rel="stylesheet" href="style.css" />
    <!-- Boxicons CDN Link -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <!-- <i class="bx bxl-c-plus-plus"></i> -->
        <span class="logo_name">MotoZone</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="AdminViewProduct.php">
            <i class="bx bx-box"></i>
            <span class="links_name">List of Vehicles</span>
          </a>
        </li>
        <li>
          <a href="adminviewbooking.php">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Booking List</span>
          </a>
        </li>
        <li>
          <a href="AdminViewvender.php">
            <i class="bx bx-pie-chart-alt-2"></i>
            <span class="links_name">Vendor List</span>
          </a>
        </li>
        <li>
          <a href="AdminAddproduct.php">
            <i class="bx bx-coin-stack"></i>
            <span class="links_name">Add Vehicle</span>
          </a>
        </li>

        <li>
          <a href="AdminAddstaff.php">
            <i class="bx bx-user"></i>
            <span class="links_name">Add Staff</span>
          </a>
        </li>
        
        <li>
          <a href="Adminchangepassword.php">
            <i class="bx bx-user"></i>
            <span class="links_name">Change Password</span>
          </a>
        </li>
           
        <li>
          <a href="AdminViewReport.php">
            <i class="bx bx-user"></i>
            <span class="links_name">View Reports</span>
          </a>
        </li>
        <li>
          <a href="AdminViewStaff.php">
            <i class="bx bx-user"></i>
            <span class="links_name">View Staffs</span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class="bx bx-cog"></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li>
          <a href="AdminAddCategory.php">
            <i class="bx bx-cog"></i>
            <span class="links_name">Add Category</span>
          </a>
        </li>
        <li>
          <a href="AdminAddSubCategory.php">
            <i class="bx bx-cog"></i>
            <span class="links_name">Add Subcategory</span>
          </a>
        </li>
        <li>
          <a href="AdminAddBrand.php">
            <i class="bx bx-cog"></i>
            <span class="links_name">Add Brand</span>
          </a>
        </li>


        <li>
            <a href="z_viewbrands.php">
              <i class="bx bx-cog"></i>
              <span class="links_name">View Brands</span>
            </a>
          </li>





        <li>
            <a href="Z_viewcategory.php">
              <i class="bx bx-cog"></i>
              <span class="links_name">View Category</span>
            </a>
          </li>

          <li>
            <a href="z_viewsub.php">
              <i class="bx bx-cog"></i>
              <span class="links_name">View Subcategory</span>
            </a>
          </li>









        <li>
          <a href="account.php">
            <i class="bx bx-log-out"></i>
            <span class="links_name">Log out</span>
          </a>
        </li>




        <!-- ----------------- -->

        <!-- <li class="log_out">
          <a href="account.php">
            <i class="bx bx-log-out"></i>
            <span class="links_name">Log out</span>
          </a>
        </li>

        <li class="log_out">
          <a href="account.php">
            <i class="bx bx-log-out"></i>
            <span class="links_name">Log out</span>
          </a>
        </li>

        <li class="log_out">
          <a href="account.php">
            <i class="bx bx-log-out"></i>
            <span class="links_name">Log out</span>
          </a>
        </li> -->
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Dashboard</span>
        </div>
        <!-- <div class="search-box">
          <input type="text" placeholder="Search..." />
          <i class="bx bx-search"></i>
        </div> -->
        <!-- <div class="profile-details">
          <img src="images/profile.jpg" alt="">
          <span class="admin_name">Harish</span>
          <i class="bx bx-chevron-down"></i>
        </div> -->
      </nav>

      <div class="home-content">
        <!-- <div class="overview-boxes">
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Bookings</div>
              <div class="number">40,876</div>
              <div class="indicator">
                <i class="bx bx-up-arrow-alt"></i>
                <span class="text">Up from yesterday</span>
              </div>
            </div>
            <i class="bx bx-cart-alt cart"></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Vendors</div>
              <div class="number">12</div>
              <div class="indicator">
                <i class="bx bx-up-arrow-alt"></i>
                <span class="text">Up from yesterday</span>
              </div>
            </div>
            <i class="bx bxs-cart-add cart two"></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Users</div>
              <div class="number">12,876</div>
              <div class="indicator">
                <i class="bx bx-up-arrow-alt"></i>
                <span class="text">Up from yesterday</span>
              </div>
            </div>
            <i class="bx bx-cart cart three"></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Return</div>
              <div class="number">11,086</div>
              <div class="indicator">
                <i class="bx bx-down-arrow-alt down"></i>
                <span class="text">Down From Today</span>
              </div>
            </div>
            <i class="bx bxs-cart-download cart four"></i>
          </div>
        </div> -->
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="title"></div>
            <div class="sales-details">