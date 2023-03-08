
        <?php
    $con= mysqli_connect('localhost', 'root', '');
    if(!$con){
        echo 'Not Connected to the server.';
    }
    else{
    mysqli_select_db($con,'customer');
    if(! mysqli_select_db($con,'customer')) {
        echo 'Database is not selected.';
    }
    else{
        $form_name= $_POST['user_name'];
        $form_email= $_POST['user_email'];
        $form_phone= $_POST['user_phone'];
        $sql="insert into user (name_f, email_f, phone_f) VALUES('$form_name','$form_email','$form_phone')";
        if(!mysqli_query($con, $sql)){
            echo "Not inserted/saved";
        }
        else{
            echo "Inserted/Saved Succesfully";
            
        }
    }
}
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> cake and coffee shop </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <link rel="stylesheet" href="css/style.css">

</head>

<body>


    <header class="header">

        <a href="#" class="logo">
            <img src="images/logo.jpg" alt="">
        </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#products">products</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
            <a href="#blogs">blogs</a>
        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>

        <div class="cart-items-container">
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-1.png" alt="">
                <div class="content">
                    <h3>cart item 01</h3>
                    <div class="price">200 tk</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-2.png" alt="">
                <div class="content">
                    <h3>cart item 02</h3>
                    <div class="price">210 tk</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-3.png" alt="">
                <div class="content">
                    <h3>cart item 03</h3>
                    <div class="price">190 tk</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-4.png" alt="">
                <div class="content">
                    <h3>cart item 04</h3>
                    <div class="price">200 tk</div>
                </div>
            </div>
            <a href="#" class="btn">checkout now</a>
        </div>

    </header>



    <section class="home" id="home">

        <div class="content">
            <h3>fresh cake & coffee everyday</h3>
            <h6>Time for Coffee and cake........</h6>
            <a href="#" class="btn">get yours now</a>
        </div>

    </section>


    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="images/about-img.jpg" alt="">
            </div>

            <div class="content">
                <h3>what makes our cake & coffee special?</h3>
                <p>Low quality beans have less flavor, so these companies roast the coffee darker to hide imperfections in the coffee and eke out as much flavor as possible, regardless of what that flavor ends up being. But the flavor you often taste is
                    over-roasted or burnt</p>
                <p>Cake should be fluffy, spongy, and moist. Having fewer ingredients and proper baking methods make the cake more appealing. Using quality ingredients are always add-ons. Flavours- The most necessary feature of any cake is its flavour</p>
                <a href="#" class="btn">learn more</a>
            </div>

        </div>

    </section>


    <section class="menu" id="menu">

        <h1 class="heading"> our <span>menu</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/flat-white.png" alt="">
                <h3>Flate white coffee</h3>
                <div class="price">327 tk <span>350 tk</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="images/Cappuccino.jpg" alt="">
                <h3>Cappuccino Coffee</h3>
                <div class="price">150 tk <span>165 tk</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="images/Café Latte.jpg" alt="">
                <h3>cafe latte coffee</h3>
                <div class="price">400 tk <span>450 tk</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="images/Funfetti cake.jpg" alt="">
                <h3>funfetti cake</h3>
                <div class="price">450 tk <span>490 tk</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="images/lemon_cake.jpg" alt="">
                <h3>lemon cake</h3>
                <div class="price">370 tk <span>395 tk</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="images/black-forest.jpeg" alt="">
                <h3>Black forest cake</h3>
                <div class="price">570 tk <span>590 tk</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
            <div class="box">
                <img src="images/Vegan.webp" alt="">
                <h3>Luxurious Vegan Chocolate Truffle Cake</h3>
                <div class="price">400 tk <span>420 tk</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
            <div class="box">
                <img src="images/Cookies.jpg" alt="">
                <h3>Cookies and Cream Cake</h3>
                <div class="price">280 tk <span>295 tk</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
            <div class="box">
                <img src="images/bombon.jpg" alt="">
                <h3>Frothy Cafe Bombon</h3>
                <div class="price">290 tk <span>320 tk</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
            <div class="box">
                <img src="images/birthday.jpg" alt="">
                <h3>Birthday Cake</h3>
                <div class="price">580 tk <span>640 tk</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </section>


    <section class="products" id="products">

        <h1 class="heading"> our <span>products</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/p1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>fresh coffee</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">280 tk <span>295 tk</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/p2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>fresh coffee</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">290 tk <span>310 tk</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/p3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>fresh coffee</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">275 tk <span>290 tk</span></div>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/1.webp" alt="">
                </div>
                <div class="content">
                    <h3>fresh coffee</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">310 tk <span>330 tk</span></div>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>fresh coffee</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">275 tk <span>290 tk</span></div>
                </div>
            </div>



        </div>

    </section>

    <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>The texture, fragrance and the after taste is all classy!! This doesn’t even need frothing.. simple stirring, makes it creamy and lathered.. love the taste.. some might find it too sweet or less strong.</p>
                <img src="images\k.jpg" class="user" alt="">
                <h3>Mustafizur Rahman Konik</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            
        </div>

    </section>


    <section class="blogs" id="blogs">

        <h1 class="heading"> our <span>blogs</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/blog-1.jpeg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty cake and refreshing coffee</a>
                    <span> 21st march, 2022</span>
                    
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/blog-2.jpeg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty cake and refreshing coffee</a>
                    <span> 22st march, 2022</span>
                    
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/blog-3.jpeg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty cake and refreshing coffee</a>
                    <span>21st march, 2022</span>
                    
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

    </section>

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="row">

            <form action="index.php" method="POST">
                <h3>get in touch</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" name="user_name" placeholder="name">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" name="user_email" placeholder="email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" name="user_phone" placeholder="Phone Number" pattern="[0-9]{11}" required>
                </div>
                <input type="submit" name="save" value="contact now" class="btn">
            </form>

        </div>

    </section>


    <section class="footer">

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="links">
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">menu</a>
            <a href="#">products</a>
            <a href="#">review</a>
            <a href="#">contact</a>
            <a href="#">blogs</a>
        </div>

        <div class="credit">created by <span>Team Alpha</span> </div>

    </section>

    <script src="js/script.js"></script>

</body>

</html>