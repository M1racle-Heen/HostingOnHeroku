
<!DOCTYPE html>
<html>
<head>
	<title>Restaurant</title>
	<link rel="stylesheet" href="{{ asset('/css/main.css')}}"/>
  
	<link rel="preconnect" href="https://fonts.gstatic.com">

	<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<!--Navbar-->
  
	<div id="menu" class="menu">
		<div id="menu-bar" onclick="onClickMenu()">
			<div id="bar1" class="bar"> </div>
			<div id="bar2" class="bar"> </div>
			<div id="bar3" class="bar"> </div>
			<ul id="nav" class="nav">
        <li><a href = "{{ route('locale','ru') }}">@lang('main.lang')</a></li>
				<li><a onclick="clickHome()">@lang('main.hme')</a></li>
				<li><a onclick="clickAbout()">@lang('main.about')</a></li>
				<li><a onclick="clickMenu()">@lang('main.menu')</a></li>
				<li><a onclick="clickContact()">@lang('main.contact')</a></li>
			</ul>
		</div>
		
	</div>
	
	<header class="header">
        <div class="hero">
            <h1 class="title">@lang('main.food_for_health')</h1>
            <a href="#" class="hero-button pulsate">@lang('main.book_a_table')</a>
            <div class="user_profile">
            	<p id ="user_name"></p>
            </div>
    </header>
    <div class ="popup">  
    	<div class="popup-content">
    		<img class ="closed" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQREpNkaUqopqvFaEaPnEzWrqei9DMa5And2Q&usqp=CAU" width="7%" onclick="popout()">
    		<h1 >@lang('main.Log_in_to_continue')</h1>
    		<section id = "social-icons">
    			<div class="icn">
		   		<a href="#"><i class="fab fa-facebook facebook"></i></a>
		       <a href="#"><i class="fab fa-google-plus plus"></i></a>
		   		</div>
		   </section>
		   <hr class="empty"/>
		   <h2>@lang('main.or')</h2>
		   <hr class="empty"/>
    		<input id = "username" type="text" name="username" placeholder="Your Email">
    		<input id = "pass" type="password" name="pass" placeholder="Your password">
    		<button onclick="login(username.value)">@lang('main.log_in')</button>
    	</div>
    </div>
    <!--About Us-->
    <section id="about">
       <div>
       <h2 class="title-text">@lang('main.about_us')</h2>
    </div>
    <div class="about-center">
        
        <article class="about">
            <div class="about-icon"><i class="fas fa-mug-hot"></i></div>
            <div class="about-text">
                <h2 class="about-subtitle">@lang('main.drinks')</h2>
                <p class="about-info">@lang('main.drinks2')</p>
            </div>
        </article>
        
        <article class="about">
            <div class="about-icon"><i class="fas fa-utensils"></i></div>
            <div class="about-text">
                <h2 class="about-subtitle">@lang('main.healthy_food')</h2>
                <p class="about-info">@lang('main.healthy_food2')</p>
            </div>
        </article>
        
        <article class="about">
            <div class="about-icon"><i class="fas fa-mortar-pestle"></i></div>
            <div class="about-text">
                <h2 class="about-subtitle">@lang('main.organic_food')</h2>
                <p class="about-info">@lang('main.organic_food2')</p>
            </div>
        </article>
        
        <article class="about">
            <div class="about-icon"><i class="fas fa-drumstick-bite"></i></div>
            <div class="about-text">
                <h2 class="about-subtitle">@lang('main.white_meat')</h2>
                <p class="about-info">@lang('main.white_meat2')</p>
            </div>
        </article>
        
        <article class="about">
            <div class="about-icon"><i class="fas fa-fish"></i></div>
            <div class="about-text">
                <h2 class="about-subtitle">@lang('main.sea_food')</h2>
                <p class="about-info">@lang('main.sea_food2')</p>
            </div>
        </article>
        
        <article class="about">
            <div class="about-icon"><i class="fas fa-pepper-hot "></i></div>
            <div class="about-text">
                <h2 class="about-subtitle">@lang('main.hot_&_spicy')</h2>
                <p class="about-info">@lang('main.hot_&_spicy2')</p>
            </div>
        </article>
        
    </div>   
   </section>

   <!--Menu-->
   <section class="menu" id="menu">
       <article class="menu-image"></article>
       <article class="menu-text">
           <div class="menu-text-center">
               <h1>@lang('main.our_menu')</h1>
               <p>@lang('main.our_menu2')</p>
                <a onclick="clickMen()">@lang('main.explore')</a>
           </div>
       </article>
   </section>

   <!--Icons-->
   <section id = "social-icons">
   		<a href="#"><i class="fab fa-facebook facebook"></i></a>
       <a href="#"><i class="fab fa-twitter twitter"></i></a>
       <a href="#"><i class="fab fa-instagram instagram"></i></a>
       <a href="#"><i class="fab fa-google-plus plus"></i></a>
   </section>

   <!--Numbers-->
   <section id="numbers">
       <article class="number">
           <i class="fas fa-cloud-meatball"></i>
           <p>50</p>
          <h3> @lang('main.meat_dishes')</h3>
        </article>
        <article class="number">
            <i class="fas fa-cheese"></i>
            <p>35</p>
           <h3> @lang('main.cheese_variations')</h3>
         </article>
         <article class="number">
            <i class="fas fa-pizza-slice"></i>
            <p>25</p>
           <h3> @lang('main.pizzas')</h3>
         </article>
         <article class="number">
            <i class="fas fa-ice-cream"></i>
            <p>40</p>
           <h3>@lang('main.desserts')</h3>
         </article>
   </section>
   <section id="food">
       <div>
       <h2 class="title-text">@lang('main.food_fusion')</h2>
        </div>
      <div class="food-container">
              <!--======Card Start ----============-->
      <article class="food-card">
              <img src="{{url('images/photo8.jpg')}}" class="food-img"alt="">
              <div class="img-text">
                  <h1>@lang('main.breakfast')</h1>
              </div>
              <div class="img-footer">
                  <div class="footer-icon">
                    <i class="fas fa-dollar-sign">25</i>
                  </div>
                  <div class="footer-btn">
                    <button type="button"class="food-btn">@lang('main.view_recipe')</button>  
                  </div>
              </div>
              </article>
              <article class="food-card">
                <img src="{{url('images/photo7.jpg')}}" class="food-img"alt="">
                <div class="img-text">
                    <h1>@lang('main.lunch')</h1>
                </div>
                <div class="img-footer">
                    <div class="footer-icon">
                      <i class="fas fa-dollar-sign">35</i>
                    </div>
                    <div class="footer-btn">
                      <button type="button"class="food-btn">@lang('main.view_recipe')</button>  
                    </div>
                </div>
                </article>
                <article class="food-card">
                    <img src="{{url('images/photo5.jpg')}}" class="food-img"alt="">
                    <div class="img-text">
                        <h1>@lang('main.dinner')</h1>
                    </div>
                    <div class="img-footer">
                        <div class="footer-icon">
                          <i class="fas fa-dollar-sign">45</i>
                        </div>
                        <div class="footer-btn">
                          <button type="button"class="food-btn">@lang('main.view_recipe')</button>  
                        </div>
                    </div>
                    </article>
                    <article class="food-card">
              <img src="{{url('images/photo9.jpg')}}" class="food-img"alt="">
              <div class="img-text">
                  <h1>@lang('main.breakfast')</h1>
              </div>
              <div class="img-footer">
                  <div class="footer-icon">
                    <i class="fas fa-dollar-sign">25</i>
                  </div>
                  <div class="footer-btn">
                    <button type="button"class="food-btn">@lang('main.view_recipe')</button>  
                  </div>
              </div>
              </article>
              <article class="food-card">
                <img src="{{url('images/photo6.jpg')}}" class="food-img"alt="">
                <div class="img-text">
                    <h1>@lang('main.lunch')</h1>
                </div>
                <div class="img-footer">
                    <div class="footer-icon">
                      <i class="fas fa-dollar-sign">35</i>
                    </div>
                    <div class="footer-btn">
                      <button type="button"class="food-btn">@lang('main.view_recipe')</button>  
                    </div>
                </div>
                </article>
                    <article class="food-card">
                    <img src="{{url('images/photo10.jpg')}}" class="food-img"alt="">
                    <div class="img-text">
                        <h1>@lang('main.dinner')</h1>
                    </div>
                    <div class="img-footer">
                        <div class="footer-icon">
                          <i class="fas fa-dollar-sign">45</i>
                        </div>
                        <div class="footer-btn">
                          <button type="button"class="food-btn">@lang('main.view_recipe')</button>  
                        </div>
                    </div>
                    </article>
       </div>
   </section>

   <section id="gallery">
   	<div>
   		<h2 class="title-text">@lang('main.main_cuisines')</h2>
   	</div>
   	<div id="gallery-center">
   		<article class="gallery-item">
	   		<a href="{{url('images/new1.jpg')}}">
	   			<img src="{{url('images/new1.jpg')}}" alt="">
	   		</a>
   		</article>
   		<article class="gallery-item">
	   		<a href="{{url('images/new2.jpg')}}">
	   			<img src="{{url('images/new2.jpg')}}" alt="">
	   		</a>
   		</article>
   		<article class="gallery-item">
	   		<a href="{{url('images/new3.jpg')}}">
	   			<img src="{{url('images/new3.jpg')}}" alt="">
	   		</a>
   		</article>
   		<article class="gallery-item">
	   		<a href="{{url('images/new4.jpg')}}" >
	   			<img src="{{url('images/new4.jpg')}}" alt="">
	   		</a>
   		</article>
   		<article class="gallery-item">
	   		<a href="{{url('images/new5.jpg')}}">
	   			<img src="{{url('images/new5.jpg')}}" alt="">
	   		</a>
   		</article>
   		<article class="gallery-item">
	   		<a href="{{url('images/new6.jpg')}}">
	   			<img src="{{url('images/new6.jpg')}}" alt="">
	   		</a>
   		</article>
   		<article class="gallery-item">
	   		<a href="{{url('images/new7.jpg')}}">
	   			<img src="{{url('images/new7.jpg')}}" alt="">
	   		</a>
   		</article>
   		<article class="gallery-item">
	   		<a href="{{url('images/new8.jpg')}}">
	   			<img src="{{url('images/new8.jpg')}}" alt="">
	   		</a>
   		</article>
   	</div>
   </section>

   <footer class="footer">

        <div class="section-center">
        	<p id = "btn_white" class="tet" onclick="popup()">@lang('main.log_in')</p>
            <p class="text">
                &copy; <span>@lang('main.food_for_health')</span> 
            </p>
        </div>

       </footer>

   
   <script src="{{ asset('js/onClickMenu.js') }}"></script>
</body>
</html> 
