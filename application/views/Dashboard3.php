<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dashboard3.css') ?>">
  </head>
  <body>
    <nav class="sidebar locked">
      <div class="logo_items flex">
        <span class="logo_name">Q&A</span>
        <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar"></i>
        <i class="bx bx-x" id="sidebar-close"></i>
      </div>

      <div class="menu_container">
        <div class="menu_items">
          <ul class="menu_item">
            <div class="menu_title flex">
              <span class="title">Dashboard</span>
              <span class="line"></span>
            </div>
            <li class="item">
              <a href="#" class="link flex">
                <i class="bx bx-home-alt"></i>
                <span>Home</span>
              </a>
            </li>
            <li class="item">
              <a href="#" class="link flex">
                <i class="bx bx-search"></i>
                <span>Search Question</span>
              </a>
            </li>
            <li class="item">
              <a href="#" class="link flex">
                <i class="bx bx-repost"></i>
                <span>Post a Question</span>
              </a>
            </li>
            <li class="item">
              <a href="#" class="link flex">
                <i class="bx bxs-file-find"></i>
                <span>View my Questions</span>
              </a>
            </li>
            <li class="item">
              <a href="#" class="link flex">
                <i class="bx bxs-user"></i>
                <span>Profile</span>
              </a>
            </li>
            <li class="item">
              <a href="<?php echo base_url('logout'); ?>" class="link flex">
                <i class="bx bx-log-out"></i>
                <span>Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Navbar -->
    <!-- <nav class="navbar flex">
      <i class="bx bx-menu" id="sidebar-open"></i>
      <input type="text" placeholder="Search..." class="search_box" />
      <span class="nav_image">
        <img src="images/profile.jpg" alt="logo_img" />
      </span>
    </nav> -->
    <nav class="menubar">
        <div class="logo">
            <h1>Logo</h1>
        </div>
        <ul id="menuList">
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Product</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        <div class="menu-icon">
            <i class="fa-solid fa-bars" onclick="toggleMenu()"></i>
        </div>
    </nav>

    <script>
        let menuList = document.getElementById("menuList")
        menuList.style.maxHeight = "0px";

        function toggleMenu(){
            if(menuList.style.maxHeight == "0px")
            {
                menuList.style.maxHeight = "300px";
            }
            else{
                menuList.style.maxHeight = "0px";
            }
        }
        
    </script>
    <script>
        // Selecting the sidebar and buttons
        const sidebar = document.querySelector(".sidebar");
        const sidebarOpenBtn = document.querySelector("#sidebar-open");
        const sidebarCloseBtn = document.querySelector("#sidebar-close");
        const sidebarLockBtn = document.querySelector("#lock-icon");

        // Function to toggle the lock state of the sidebar
        const toggleLock = () => {
        sidebar.classList.toggle("locked");
        // If the sidebar is not locked
        if (!sidebar.classList.contains("locked")) {
            sidebar.classList.add("hoverable");
            sidebarLockBtn.classList.replace("bx-lock-alt", "bx-lock-open-alt");
        } else {
            sidebar.classList.remove("hoverable");
            sidebarLockBtn.classList.replace("bx-lock-open-alt", "bx-lock-alt");
        }
        };

        // Function to hide the sidebar when the mouse leaves
        const hideSidebar = () => {
        if (sidebar.classList.contains("hoverable")) {
            sidebar.classList.add("close");
        }
        };

        // Function to show the sidebar when the mouse enter
        const showSidebar = () => {
        if (sidebar.classList.contains("hoverable")) {
            sidebar.classList.remove("close");
        }
        };

        // Function to show and hide the sidebar
        const toggleSidebar = () => {
        sidebar.classList.toggle("close");
        };

        // If the window width is less than 800px, close the sidebar and remove hoverability and lock
        if (window.innerWidth < 800) {
        sidebar.classList.add("close");
        sidebar.classList.remove("locked");
        sidebar.classList.remove("hoverable");
        }

        // Adding event listeners to buttons and sidebar for the corresponding actions
        sidebarLockBtn.addEventListener("click", toggleLock);
        sidebar.addEventListener("mouseleave", hideSidebar);
        sidebar.addEventListener("mouseenter", showSidebar);
        sidebarOpenBtn.addEventListener("click", toggleSidebar);
        sidebarCloseBtn.addEventListener("click", toggleSidebar);
    </script>
  </body>
</html>