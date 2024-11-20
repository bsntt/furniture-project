 
 <nav class="navbar">
        <div class="navbar-container">
         
              <a href="<?php echo e(url('/')); ?>" class="navbar-brand">
                <img src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="Om Furniture Logo">
            </a>

              <ul class="nav-links">
                <li><a href="<?php echo e(route('home')); ?>" >Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="<?php echo e(route('contact.show')); ?>">Contact us</a></li>
            </ul>
           
            <form class="search-form" action="#">
                <input type="text" class="search-input" placeholder="Search Products...">
                <button type="submit" class="search-button">Search</button>
            </form>

            <a href="<?php echo e(route('cart.index')); ?>" class="cart-icon">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>

          
            <div class="navbar-right">
              <a href="<?php echo e(route('login')); ?>" class="login-link">Login</a>
               <a href="<?php echo e(route('signup')); ?>" class="signup-link">Signup</a>
            </div>
        </div>
    </nav>
<?php /**PATH C:\Users\HP\Desktop\OMFurniture\furniture-project\resources\views/layout/navbar.blade.php ENDPATH**/ ?>