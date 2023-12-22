<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}" />
    <script src="https://kit.fontawesome.com/16ffd14b17.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- header -->
    <header>
        <div class="nav border-yellow">
            <!-- navBar -->
            <div class="border-red flex-container top-nav">
                <nav class="flex-container">
                    <a href="#">Indonesia</a>
                    <a href="#">Find a store</a>
                    <a href="#">Contact Us</a>
                    <a href="logout.php">Logout</a>
                </nav>
            </div>

            <div class="border-red flex-container bot-nav">
                <input class="search-box" type="text" placeholder="Search" />
                <h1>Lorem</h1>
                <nav class="flex-container">
                    <a href="#">Account</a>
                    <a href="#">Shop</a>
                    <a href="#">Collection</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- content -->
    <main>
        <section class="big-banner flex-container border-purple">
            <article class="border-red">
                <h1>Find the best home furniture for your room</h1>
                <p>
                    Accent chairs at Herman Miller include a clear
                    mid-century modern accent
                </p>
            </article>
            <div class="border-red flex-container btn-container">
                <button class="btn btn-color">Shop now</button>
                <div class="flex-container">
                    <p class="vertical-divider">
                        20k+ <br />
                        Collection
                    </p>
                    <p>
                        16k <br />
                        Users
                    </p>
                </div>
            </div>
        </section>
        <!-- exclusive furniture -->
        <!-- <section>
            <h1>Exclusive Furniture</h1>
            <p>Check out this week's selection of popular products that might catch your eye</p>
            <div class="card-container">
                <div class="card">
                    <div>
                        <img src="assets/images/living-room.jpeg" alt="living-room">
                    </div>
                    <h4>Living Room</h4>
                </div>
                <div class="card">
                    <div>
                        <img src="assets/images/bedroom.jpeg" alt="bedroom">
                    </div>
                    <h4>Bedroom Room</h4>
                </div>
                <div class="card">
                    <div>
                        <img src="assets/images/workspace.jpeg" alt="workspace">
                    </div>
                    <h4>Workspace</h4>
                </div>
                <div class="card">
                    <div>
                        <img src="assets/images/kitchen.jpeg" alt="kitchen">
                    </div>
                    <h4>Kitchen</h4>
                </div>
            </div>
        </section> -->

        <!-- our features special for you -->

        <section class="border-purple">
            <div class="title border-red">
                <h1 class="border-green">Our Special Features For You</h1>
                <p class="border-green">
                    We provid a variety of specials features for all of you,
                    to make it easier and make you even more happy shopping
                    here
                </p>
            </div>
            <div class="card-container border-red">
                <div class="card border-green">
                    <h4>Easy payment</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                    </p>
                </div>
                <div class="card border-green">
                    <h4>Lots of promos</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                    </p>
                </div>
                <div class="card border-green">
                    <h4>Fast shipping</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                    </p>
                </div>
                <div class="card border-green">
                    <h4>Save in cart</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                    </p>
                </div>
            </div>
            <div class="border-red grid-container">
                <div class="img-section border-green">
                    <img src="{{ asset('images/1.jpeg') }}" alt="" />
                </div>
                <div class="text-section border-green">
                    <div class="title">
                        <h1>Our chair design are modern and elegant</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Id sunt, officia odio magnam
                            necessitatibus
                        </p>
                    </div>
                    <button class="btn btn-color">Read more</button>
                </div>

                <div class="text-section border-green">
                    <div class="title">
                        <h1>
                            More than 10k interesting products that we sell
                        </h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Id sunt, officia odio magnam
                            necessitatibus
                        </p>
                    </div>
                    <button class="btn btn-color">Read more</button>
                </div>
                <div class="img-section border-green">
                    <img src="{{ asset('images/2.jpeg') }}" alt="" />
                </div>

                <div class="img-section border-green">
                    <img src="{{ asset('images/3.jpeg') }}" alt="" />
                </div>
                <div class="text-section border-green">
                    <div class="title">
                        <h1>Lots of accessories to beautify your room</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Id sunt, officia odio magnam
                            necessitatibus
                        </p>
                    </div>
                    <button class="btn btn-color">Read more</button>
                </div>

                <div class="text-section border-green">
                    <div class="title">
                        <h1>
                            We sell the best quality products on the mark
                        </h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Id sunt, officia odio magnam
                            necessitatibus
                        </p>
                    </div>
                    <button class="btn btn-color">Read more</button>
                </div>
                <div class="img-section border-green">
                    <img src="{{ asset('images/4.jpeg') }}" alt="" />
                </div>
            </div>
        </section>
        <!-- our popular product -->

        <!-- this is what they say -->
        <section class="comment-section">
            <article>
                <h1 class="hero">This is What They Say</h1>
                <div id="comment" class="comment-top-sec border-red">
                    <h2>
                        <p id="commentText">The best market to buy furniture</p>
                    </h2>
                    <p id="commentDescription">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quam, similique harum! Esse, velit! Quos incidunt
                        consequuntur aliquam. Est cumque dolorem optio id mollitia
                        accusamus natus possimus fugiat ipsam porro, quas sapiente
                        nisi, esse eligendi incidunt veniam labore, iste nostrum
                        fuga rerum praesentium corrupti. Rerum harum earum accusamus
                        rem! Fugiat, quas.
                    </p>
                </div>
                <div class="comment-bot-sec border-red">
                    <div>
                        <h3 id="customer">Amanda Z</h3>
                        <p id="customerJob">Designer</p>
                    </div>
                    <div class="comment-slider">
                        <button onclick="prevComment()"><i class="fa-solid fa-arrow-left"
                                style="color: #ffffff;"></i></button>
                        <button onclick="nextComment()"><i class="fa-solid fa-arrow-right"
                                style="color: #ffffff;"></i></button>
                    </div>
                </div>
            </article>
            <aside class="border-green">
                <img id="customerImage" src="{{ asset('images/amanda-seyfried.jpg') }}" alt="">
            </aside>
        </section>
    </main>
    <!-- footer -->
    <footer class="border-red">
        <div class="border-green top-footer">
            <div class="border-purple">
                <h2>Contact Us</h2>
                <p>
                    Have a question?, you may find an answer in our FAQs<br />Call
                    0811-2222-333 <br />Monday to Friday: 9am - 9pm <br /><a href="">Email Us</a>
                </p>
            </div>

            <div class="border-purple">
                <h2>Order Now!</h2>
                <p><a href="form.html">Order</a></p>
            </div>
        </div>

        <div class="bottom-footer">
            <h4>
                2023&copy; Chandramawa Corp by Kristian Suriyadharma. All
                rights reserved
            </h4>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-youtube"></i>
        </div>
    </footer>

    <script>
        let currentIndex = 0;

        const comments = [{
                text: "The best market to buy furniture",
                description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, similique harum! Esse, velit! Quos incidunt consequuntur aliquam. Est cumque dolorem optio id mollitia accusamus natus possimus fugiat ipsam porro, quas sapiente nisi, esse eligendi incidunt veniam labore, iste nostrum fuga rerum praesentium corrupti. Rerum harum earum accusamus rem! Fugiat, quas.",
                customerName: "Amanda Z",
                job: "Housewife",
                picture: "amanda-seyfried.jpg"
            },
            {
                text: "Nice customer support",
                description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, similique harum! Esse, velit! Quos incidunt consequuntur aliquam. Est cumque dolorem optio id mollitia accusamus natus possimus fugiat ipsam porro, quas sapiente nisi.",

                customerName: "Khabib",
                job: "Designer",
                picture: "khabib.jpeg"
            },
            {
                text: "Fast delivery",
                description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, similique harum! Esse, velit! Quos incidunt consequuntur aliquam. Est cumque dolorem optio id mollitia accusamus natus possimus fugiat ipsam porro, quas sapiente nisi.",

                customerName: "Vladimir Putin",
                job: "Student",
                picture: "Vladimir-Putin.jpg"
            },
        ];

        function displayComment() {
            const commentTextElement = document.getElementById("commentText");
            const commentDescriptionElement = document.getElementById("commentDescription");
            const personWhoComment = document.getElementById("customer")
            const personJob = document.getElementById("customerJob")
            const personImage = document.getElementById("customerImage")

            commentTextElement.innerText = comments[currentIndex].text;
            commentDescriptionElement.innerText = comments[currentIndex].description;

            personWhoComment.innerText = comments[currentIndex].customerName
            personJob.innerText = comments[currentIndex].job

            personImage.src = `images/${comments[currentIndex].picture}`
            
        }

        let index = comments.length;

        function nextComment() {
            currentIndex = (currentIndex + 1) % index; // 1 mod 3, 2 mod 3, 3 mod 3 ...
            displayComment();
        }

        function prevComment() {
            currentIndex = (currentIndex - 1 + index) % index;
            displayComment();
        }

        displayComment();
    </script>
</body>

</html>
