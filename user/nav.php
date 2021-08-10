     <!-- Menu Area -->
                            <div class="main-menu-area">
                                <nav class="navbar navbar-expand-lg align-items-start">

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

                                    <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                                        <ul class="navbar-nav animated" id="nav">
                                            <li class="nav-item active"><a class="nav-link" href="./">Home</a></li>
                                             <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="karlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Read</a>
                                                <div class="dropdown-menu" aria-labelledby="karlDropdown">
                                                    <a class="dropdown-item" href="index.php">Home</a>
                                                    <a class="dropdown-item" href="books.php">Read pdf</a>
                                                    <a class="dropdown-item" href="review.php">Books Review</a>
                                                   
                                                </div>
                                            </li> 
                                             <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="karlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Buy</a>
                                                <div class="dropdown-menu" aria-labelledby="karlDropdown">
                                                    <a class="dropdown-item" href="buy.php">Old Book</a>
                                                    <a class="dropdown-item" href="buy-book.php">New Book</a>
                                                    <a class="dropdown-item" href="cart.php">My Cart</a>
                                                    <a class="dropdown-item" href="checkout.php">Checkout</a>
                                                </div>
                                            </li>
                                              <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="karlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Post</a>
                                                <div class="dropdown-menu" aria-labelledby="karlDropdown">
                                                    <a class="dropdown-item" href="post.php">Sell Books</a>
                                                    <a class="dropdown-item" href="review-post.php">Write Review</a>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="search.php">Search Books</a></li>

                                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                       
                      <li class="nav-item">
                                                    <?php if($user_logged_id=="yes") { echo "<a class='nav-link' href='signout.php'>Signout</a>"; } else { echo "<a class='nav-link' href='login.php'>Login"; }  ?>
                                                </a>
                                            </li>
                                        </ul>
                                    
                                    </div>
                                </nav>
                            </div>