 
 <nav class="navbar">
        <div class="navbar-container">
         
              <a href="{{ url('/') }}" class="navbar-brand">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Om Furniture Logo">
            </a>

              <ul class="nav-links">
                <li><a href="{{route('home')}}" >Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="{{ route('contact.show') }}">Contact us</a></li>
            </ul>
           
            <form class="search-form" action="#">
                <input type="text" class="search-input" placeholder="Search Products...">
                <button type="submit" class="search-button">Search</button>
            </form>

            <a href="{{ route('cart.index') }}" class="cart-icon">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>

          
            <div class="navbar-right">
              <a href="{{route('login')}}" class="login-link">Login</a>
               <a href="{{route('signup')}}" class="signup-link">Signup</a>
            </div>
        </div>
    </nav>
