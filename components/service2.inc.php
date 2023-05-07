<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<style type="text/css">
    .font {
  font-size: 20px;
  font-family: 'Montserrat', sans-serif;
}
/* Variables */
:root {
  --main-color: #b8860b;
  --text-color: #020102;
  --bg-color: #fff;
}

.imgg {
  width: 100%;
}

.sections {
  padding: 4rem 0 2rem;
  box-sizing: border-box;
}
.carcontainer {
  max-width: 1068px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: auto;
}

.btn {
  padding: 10px 22px;
  background: var(--main-color);
  color: var(--bg-color);
  font-weight: 400;
}
.btn:hover {
  background: #333333;
}
.heading {
  text-align: center;
  font-size: 20px;
}
.heading span {
  font-weight: 500;
  font-size: 25px;
  color: var(--main-color);
}
.heading p {
  font-size: 13px;
  font-weight: 300;
}
.cars-container {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
  margin-top: 2rem;
  margin-bottom: 5rem;
}
.cars-container .box {
  flex: 1 1 20rem;
  position: relative;
  height: 200px;
  border-radius: 0.5rem;
  overflow: hidden;
}
.cars-container .box .imgg {
  width: 100%;
  height: 100%;
  object-fit: cover;
  overflow: hidden;
}
.cars-container .box .imgg:hover {
  transform: scale(1.1);
  transition: 0.5s;
}
.cars-container .box h2 {
  position: absolute;
  bottom: 1rem;
  left: 1rem;
  font-weight: 400;
  font-size: 1rem;
  background: var(--bg-color);
  padding: 8px;
  border-radius: 0.5rem;
}
.cars-container .box:hover h2 {
  background: var(--main-color);
  color: var(--bg-color);
}
.parts-container {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
  margin-top: 2rem;
  margin-bottom: 5rem;
}
.parts-container .box {
  flex: 1 1 auto;;
  position: relative;
  padding: 20px;
  display: flex;
  flex-direction: column;
  background: #e9e9e9;
  border-radius: 0.5rem;
}
.parts-container .box .imgg  {
  width: 100%;
  height: 150px;
  object-fit: contain;
  object-position: center;
  margin-bottom: 1rem;
}
.parts-container .box h3 {
  font-size: 1.1rem;
  font-weight: 600;
}
.parts-container .box span {
  font-size: .1.8rem;
  font-weight: 600;
  color: var(--main-color);
}
.parts-container .box .bx {
  color: var(--main-color);
  margin: 0.8rem 0;
}
.parts-container .box .btn {
  max-width: 120px;
}
.parts-container .box .details {
  display: flex;
  align-items: center;
  position: absolute;
  bottom: 1.8rem;
  right: 1rem;
  font-size: 1rem;
  color: var(--text-color);
}
.parts-container .box .details:hover {
  color: var(--main-color);
  text-decoration: underline;
}
.blog-container {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
  margin-top: 2rem;
  margin-bottom: 25rem;
}
.blog-container .box {
  flex: 1 1 13rem;
  padding: 20px;
}
.blog-container .box:hover {
  background: #f6f6f6;
}
.blog-container .box span {
  font-size: 1.8rem;
  color: var(--main-color);
}
.blog-container h3 {
  font-size: 1.2rem;
}
.blog-container .box p {
  font-size: 1rem;
  margin: 4px 0;
}
.blog-container .box .blog-btn {
  display: flex;
  align-items: center;
  column-gap: 4px;
  color: var(--text-color);
}
.blog-container .box .blog-btn .bx {
  font-size: 20px;
}
.blog-container .box .blog-btn:hover {
  color: var(--main-color);
  column-gap: 0.7rem;
  transition: 0.4s;
}

/* Making Responsive */
@media (max-width: 1080px) {
  .container {
    margin-left: 1rem;
    margin-right: 1rem;
  }
}
@media (max-width: 991px) {
  .home-text {
    padding-left: 2rem;
  }
  .home-text h1 {
    font-size: 2.1rem;
  }
}

@media (max-width: 768px) {
  .blog-container .box {
    padding: 4px;
  }
}
@media (max-width: 727px) {
  .heading span {
    font-size: 0.9rem;
  }
  .heading h2 {
    font-size: 1.4rem;
  }
}

</style>
<!-- Cars Section -->
    <section class="cars sections" id="cars">
        <div class="heading">
            <span>All Cars</span>
            <h2>Our types cars</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, aperiam!</p>
        </div>
        <!-- Cars Container -->
        <div class="cars-container carcontainer">
            <!-- Box 1 -->
            <div class="box">
                <img class="imgg" src="img/sedan.jpg" alt="">
                <h2>Sedan Car</h2>
            </div>
            <!-- Box 2 -->
            <div class="box">
                <img class="imgg" src="img/suv.png" alt="">
                <h2>SUV Car</h2>
            </div>
            <!-- Box 3 -->
            <div class="box">
                <img class="imgg" src="img/van.png" alt="">
                <h2>Van Car</h2>
            </div>
           
        </div>
    </section>
   
    <!-- Parts Section -->
    <section class="parts sections" id="parts">
        <div class="heading">
            <span>What We Offer</span>
            <h2>Hassle-Free Booking Process</h2>
            <p>Booking your next car rental has never been easier. Simply choose the vehicle you wish to rent, fill-up the Request Quotation Form for both the self drive car rental service in Manila and the car rental service with a driver in Manila and wait for our email with the quotation. Renting a car in Manila has never been easier! 
            If you need any assistance, please use our live chat so we can assist you on your car rental journey.</p>
        </div>
        <!-- Parts Container -->
        <div class="parts-container carcontainer">
            <!-- Box 1 -->
            <div class="box">
                <img class="imgg" src="img/suv1.png" alt="">
                <h3>SUV Type</h3>
                <span>Php 5,000.00</span>
                <i class='bx bxs-star'>(6 Reviews)</i>
                <a href="#" class="btn">Rent Now</a>
                <a href="#" class="details">View Details</a>
            </div>
            <!-- Box 2 -->
            <div class="box">
                <img class="imgg" src="img/suv.png" alt="">
                <h3>SUV Type</h3>
                <span>Php 5,000.00</span>
                <i class='bx bxs-star'>(6 Reviews)</i>
                <a href="#" class="btn">Rent Now</a>
                <a href="#" class="details">View Details</a>
            </div>
            <!-- Box 3 -->
            <div class="box">
                <img class="imgg" src="img/sedan.jpg" alt="">
                <h3>Sedan Type</h3>
                <span>$120.99</span>
                <i class='bx bxs-star'>(6 Reviews)</i>
                <a href="#" class="btn">Rent Now</a>
                <a href="#" class="details">View Details</a>
            </div>
            <!-- Box 4 -->
            <div class="box">
                <img class="imgg" src="img/sedan2.jpg" alt="">
                <h3>Sedan Type</h3>
                <span>Php 5,000.00</span>
                <i class='bx bxs-star'>(6 Reviews)</i>
                <a href="#" class="btn">Rent Now</a>
                <a href="#" class="details">View Details</a>
            </div>
            <!-- Box 5 -->
            <div class="box">
                <img class="imgg" src="img/van1.png" alt="">
                <h3>Van Type</h3>
                <span>Php 5,000.00</span>
                <i class='bx bxs-star'>(6 Reviews)</i>
                <a href="#" class="btn">Rent Now</a>
                <a href="#" class="details">View Details</a>
            </div>
            <!-- Box 6 -->
            <div class="box">
                <img class="imgg" src="img/van2.jpeg" alt="">
                <h3>Van Type</h3>
                <span>Php 5,000.00</span>
                <i class='bx bxs-star'>(6 Reviews)</i>
                <a href="#" class="btn">Rent Now</a>
                <a href="#" class="details">View Details</a>
            </div>
            <div class="box">
                <img class="imgg" src="img/suv1.png" alt="">
                <h3>SUV Type</h3>
                <span>Php 5,000.00</span>
                <i class='bx bxs-star'>(6 Reviews)</i>
                <a href="#" class="btn">Rent Now</a>
                <a href="#" class="details">View Details</a>
            </div>
            <!-- Box 7 -->
            <div class="box">
                <img class="imgg" src="img/suv.png" alt="">
                <h3>SUV Type</h3>
                <span>Php 5,000.00</span>
                <i class='bx bxs-star'>(6 Reviews)</i>
                <a href="#" class="btn">Rent Now</a>
                <a href="#" class="details">View Details</a>
            </div>
            <!-- Box 8 -->
            <div class="box">
                <img class="imgg" src="img/sedan.jpg" alt="">
                <h3>Sedan Type</h3>
                <span>Php 5,000.00</span>
                <i class='bx bxs-star'>(6 Reviews)</i>
                <a href="#" class="btn">Rent Now</a>
                <a href="#" class="details">View Details</a>
            </div>
        </div>
    </section>
    <!-- Blog Container -->
    <section class="blog sections" id="blog">
        <div class="heading">
            <span>Blog & News</span>
            <h2>Our Blog Content</h2>
            <p>Please see how people react !</p>
        </div>
        <!-- Blog Container -->
        <div class="blog-container carcontainer">
            <!-- Box 1 -->
            <div class="box">
                <img class="imgg" src="img/suv1.jpg" alt="">
                <span>Feb 5 2023</span>
                <h3>Outstanding Customer Service support</h3>
                <p>Highly recommended!!! The customer service was excellent. 
                Their online booking is very good. I requested a quote online from U.S. and only 
                took within 24 hrs for the response. They keep me updated for all requirements needed. 
                They deliver the vehicle on time and it was almost new. I am very 
                satisfied and I will continue to rent to this place. Thank you !</p>
                <a href="#" class="blog-btn">Read More<i class='bx bx-right-arrow-alt' ></i></a>
            </div>
            <!-- Box 2 -->
            <div class="box">
                <img class="imgg" src="img/sedan.jpg" alt="">
                <span>Feb 14 2023</span>
                <h3>Booking</h3>
                <p>Highly impressed with the streamline booking.
                Their prompt responses to my inquiries were very professional.</p>
                <a href="#" class="blog-btn">Read More<i class='bx bx-right-arrow-alt' ></i></a>
            </div>
            <!-- Box 3 -->
            <div class="box">
                <img class="imgg" src="img/van.png" alt="">
                <span>Jan 14 2023</span>
                <h3>Usefulness</h3>
                <p>I found this service to be very useful while in Manila. Our driver 
                    was very skilled. He arrived promptly at the hour we needed him and 
                    was patient with us. We booked a 10 hour day trip and it was well 
                    worth it booking with them. I will happily use this service again and strongly recommend them.</p>
                <a href="#" class="blog-btn">Read More<i class='bx bx-right-arrow-alt' ></i></a>
            </div>
        </div>
    </section>
    
    </section>

    <!-- Link To Js -->
    <script>
        let search = document.querySelector('.search-box');

            document.querySelector('#search-icon').onclick = () => {
                search.classList.toggle('active');
                menu.classList.remove('active');
            }

            let menu = document.querySelector('.navbar');

            document.querySelector('#menu-icon').onclick = () => {
                menu.classList.toggle('active');
                search.classList.remove('active');
            }
            // Hide Menu And Search Box On Scroll
            window.onscroll = () => {
                menu.classList.remove('active');
                search.classList.remove('active');
            }

    </script>

    </html>