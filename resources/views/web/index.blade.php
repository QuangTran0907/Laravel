@extends('layouts.web')
 @section('content')
<!-- Main Content - start -->
<main>
    <section class="container">


        <!-- Slider -->
        <div class="fr-slider-wrap">
            <div class="fr-slider">
                <ul class="slides">
                    <li>
                        <img src="https://bizweb.dktcdn.net/100/140/774/themes/827866/assets/slider_1.jpg?1679044115385" alt="">
                       
                        
                    </li>
                    <li>
                        <img src="https://bizweb.dktcdn.net/100/140/774/themes/827866/assets/slider_4.jpg?1679044115385" alt="">
                      
                    </li>
                    <li>
                        <img src="https://bizweb.dktcdn.net/100/140/774/themes/827866/assets/slider_2.jpg?1679044115385" alt="">
                        <div class="fr-slider-cont">
                            
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>


        <!-- Popular Products -->
        <div class="fr-pop-wrap">

            <h3 class="component-ttl"><span>Popular products</span></h3>

            <ul class="fr-pop-tabs sections-show">
                <li><a data-frpoptab-num="1" data-frpoptab="#frpoptab-tab-1" href="#" class="active">All Products</a></li>
                <li><a data-frpoptab-num="2" data-frpoptab="#frpoptab-tab-2" href="#">Adidas</a></li>
                <li><a data-frpoptab-num="3" data-frpoptab="#frpoptab-tab-3" href="#">Puma</a></li>
                <li><a data-frpoptab-num="4" data-frpoptab="#frpoptab-tab-4" href="#">Nike</a></li>
                <li><a data-frpoptab-num="5" data-frpoptab="#frpoptab-tab-5" href="#">Reebok</a></li>
            </ul>

            <div class="fr-pop-tab-cont">

                <p data-frpoptab-num="1" class="fr-pop-tab-mob active" data-frpoptab="#frpoptab-tab-1">All Categories</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-1">

                    <ul class="slides">
                      @foreach ($products as $item)
                      <li class="prod-i">
                        <div class="prod-i-top">
                            <a href="homepage/{{ $item->id }}" class="prod-i-img"><!-- NO SPACE --><img src="{{ asset('images/'.$item->image_path) }}" alt="Aperiam tempore"><!-- NO SPACE --></a>
                            
                            <p class="prod-i-addwrap">
                                <a href="/add_product/{{ $item->id }}" class="prod-i-add">Add to cart</a>
                            </p>
                        </div>
                        <h3>
                            <a href="product.html">{{ $item->name }}</a>
                        </h3>
                        <p class="prod-i-price">
                            <b>${{ $item->price }}</b>
                        </p>
                    </li>
                      @endforeach

                    </ul>
                </div>

                <p data-frpoptab-num="2" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-2">Adidas</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-2">

                    <ul class="slides">
                        @foreach ($products as $item)
                        @if ($item->brand->name == 'Adidas')
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="homepage/{{ $item->id }}" class="prod-i-img"><!-- NO SPACE --><img src="{{ asset('images/'.$item->image_path) }}" alt="Aperiam tempore"><!-- NO SPACE --></a>
                                
                                <p class="prod-i-addwrap">
                                    <a href="/add_product/{{ $item->id }}" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">{{ $item->name }}</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>${{ $item->price }}</b>
                            </p>
                        </li>
                        @endif
                        
                        @endforeach
  
                      </ul>
                </div>
                <p data-frpoptab-num="2" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-3">Puma</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-3">

                    <ul class="slides">
                        @foreach ($products as $item)
                        @if ($item->brand->name == 'Puma')
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="homepage/{{ $item->id }}" class="prod-i-img"><!-- NO SPACE --><img src="{{ asset('images/'.$item->image_path) }}" alt="Aperiam tempore"><!-- NO SPACE --></a>
                                
                                <p class="prod-i-addwrap">
                                    <a href="/add_product/{{ $item->id }}" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">{{ $item->name }}</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>${{ $item->price }}</b>
                            </p>
                        </li>
                        @endif
                        
                        @endforeach
  
                      </ul>
                </div>
                <p data-frpoptab-num="2" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-4">Nike</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-4">

                    <ul class="slides">
                        @foreach ($products as $item)
                        @if ($item->brand->name == 'Nike')
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="homepage/{{ $item->id }}" class="prod-i-img"><!-- NO SPACE --><img src="{{ asset('images/'.$item->image_path) }}" alt="Aperiam tempore"><!-- NO SPACE --></a>
                                
                                <p class="prod-i-addwrap">
                                    <a href="/add_product/{{ $item->id }}" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">{{ $item->name }}</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>${{ $item->price }}</b>
                            </p>
                        </li>
                        @endif
                        
                        @endforeach
  
                      </ul>
                </div>
                <p data-frpoptab-num="2" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-5">Reebok</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-5">

                    <ul class="slides">
                        @foreach ($products as $item)
                        @if ($item->brand->name == 'Reebok')
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="homepage/{{ $item->id }}" class="prod-i-img"><!-- NO SPACE --><img src="{{ asset('images/'.$item->image_path) }}" alt="Aperiam tempore"><!-- NO SPACE --></a>
                                
                                <p class="prod-i-addwrap">
                                    <a href="/add_product/{{ $item->id }}" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">{{ $item->name }}</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>${{ $item->price }}</b>
                            </p>
                        </li>
                        @endif
                        
                        @endforeach
  
                      </ul>
                </div>

                

            </div><!-- .fr-pop-tab-cont -->


        </div><!-- .fr-pop-wrap -->


       


        <!-- Special offer -->
        <div class="discounts-wrap">
            <h3 class="component-ttl"><span>Special offer</span></h3>
           
        </div>


        <!-- Latest news -->
        <div class="posts-wrap">
            <div class="posts-list">
                <div class="posts-i">
                    <a class="posts-i-img" href="post.html">
                        <span style="background: url(http://placehold.it/354x236)"></span>
                    </a>
                    <time class="posts-i-date" datetime="2016-11-09 00:00:00"><span>30</span> Jan</time>
                    <div class="posts-i-info">
                        <a href="blog.html" class="posts-i-ctg">Reviews</a>
                        <h3 class="posts-i-ttl">
                            <a href="post.html">Animi quaerat at</a>
                        </h3>
                    </div>
                </div>
                <div class="posts-i">
                    <a class="posts-i-img" href="post.html">
                        <span style="background: url(http://placehold.it/354x236)"></span>
                    </a>
                    <time class="posts-i-date" datetime="2016-11-09 00:00:00"><span>29</span> Jan</time>
                    <div class="posts-i-info">
                        <a href="blog.html" class="posts-i-ctg">Articles</a>
                        <h3 class="posts-i-ttl">
                            <a href="post.html">Ex atque commodi</a>
                        </h3>
                    </div>
                </div>
                <div class="posts-i">
                    <a class="posts-i-img" href="post.html">
                        <span style="background: url(http://placehold.it/354x236)"></span>
                    </a>
                    <time class="posts-i-date" datetime="2016-11-09 00:00:00"><span>25</span> Jan</time>
                    <div class="posts-i-info">
                        <a href="blog.html" class="posts-i-ctg">News</a>
                        <h3 class="posts-i-ttl">
                            <a href="post.html">Hic quod maxime deserunt</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>


        <!-- Testimonials -->
        <div class="reviews-wrap">
            <div class="reviewscar-wrap">
                <div class="swiper-container reviewscar">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Corrupti velit, vero esse, aperiam error magni illum quos, accusantium debitis et possimus recusandae tempora ad itaque dolorem veniam non voluptatem impedit iste? Dicta doloremque hic porro aspernatur. Dolores eligendi similique, cumque, eius veritatis</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Distinctio modi, quos, vero quibusdam ab deserunt doloribus eligendi velit temporibus ratione at est officia repellat? Adipisci nemo expedita rerum distinctio laudantium nihil voluptatem ullam vel ex magnam velit aliquid voluptate voluptatum excepturi</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Similique delectus totam ex cum magnam quasi, ipsam officiis amet temporibus enim modi rerum quo maxime reprehenderit, deserunt, libero quas distinctio quos! Ullam harum nesciunt omnis consectetur distinctio? Iste sunt, dolorem deserunt quibusdam</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Tempora ea ratione vel nisi, qui perferendis nulla, fugit aut, beatae, tempore modi. Minus sequi iste, nam nobis, excepturi nihil consequuntur reprehenderit ipsam, quam consequatur in. Esse, doloremque consectetur veniam quo ut voluptas necessitatibus</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Perferendis recusandae consequuntur quasi, non culpa. Minus porro officiis veniam facilis praesentium expedita doloribus, recusandae aut dolore autem, modi consequuntur rem perferendis dolores quisquam, sequi quas. Iusto et, eius laboriosam beatae</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Aliquid soluta nisi incidunt, dolores sequi itaque sunt et nesciunt delectus ipsam est molestias illo obcaecati, totam ducimus cumque consequuntur modi, laudantium! Temporibus vero odit quis, quibusdam maiores voluptatum sunt dolor tempora architecto fugiat quam.</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Ea reiciendis modi, molestiae dolores beatae facere quas	consequatur delectus ducimus, magni voluptates, eius, quia unde ut vitae doloribus illum! Optio saepe, modi aliquid perferendis veniam</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Ea reiciendis modi, molestiae dolores beatae facere quas	consequatur delectus ducimus, magni voluptates, eius, quia unde ut vitae doloribus illum! Optio saepe, modi aliquid perferendis veniam</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Quod soluta corrupti earum officia vel inventore vitae quidem, consequuntur odit impedit, eaque dolorem odio praesentium iusto amet voluptatum distinctio iste dicta maiores doloremque porro. Ipsa doloremque illum animi laborum quo in nemo delectus</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Eveniet nobis minus possimus eius, doloribus ex similique debitis nihil at facere delectus unde, commodi, alias. Eius facilis, dolore officia veritatis, doloribus voluptatem aliquid rem corporis quam officiis at dignissimos dolorum, velit assumenda</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-container reviewscar-thumbs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Aureole Jayde">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Aureole Jayde</a></h3>
                            <p class="reviewscar-post">Director</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Benjy Darrin">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Benjy Darrin</a></h3>
                            <p class="reviewscar-post">Designer</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Jeni Margie">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Jeni Margie</a></h3>
                            <p class="reviewscar-post">Developer</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Edweena Chelsea">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Edweena Chelsea</a></h3>
                            <p class="reviewscar-post">Manager</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Sean Rudolph">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Sean Rudolph</a></h3>
                            <p class="reviewscar-post">Designer</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Brigham Murphy">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Brigham Murphy</a></h3>
                            <p class="reviewscar-post">Director</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Barrie Roderick">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Barrie Roderick</a></h3>
                            <p class="reviewscar-post">Developer</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="John Doe">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">John Doe</a></h3>
                            <p class="reviewscar-post">Manager</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Shirlee Annabel">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Shirlee Annabel</a></h3>
                            <p class="reviewscar-post">Developer</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Lettice Alyce">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Lettice Alyce</a></h3>
                            <p class="reviewscar-post">Director</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Meriel Glory">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Meriel Glory</a></h3>
                            <p class="reviewscar-post">Manager</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Janene Alaina">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Janene Alaina</a></h3>
                            <p class="reviewscar-post">Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Subscribe Form -->
        <div class="newsletter">
            <h3>Subscribe to us</h3>
            <p>Enter your email if you want to receive our news</p>
            <form action="#">
                <input placeholder="Your e-mail" type="text">
                <input name="OK" value="Subscribe" type="submit">
            </form>
        </div>

        <!-- Quick View Product - start -->
        <div class="qview-modal">
            <div class="prod-wrap">
                <a href="product.html">
                    <h1 class="main-ttl">
                        <span>hhhh</span>
                    </h1>
                </a>
                <div class="prod-slider-wrap">
                    <div class="prod-slider">
                        <ul class="prod-slider-car">
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">
                                    <img src="http://placehold.it/500x525" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x591">
                                    <img src="http://placehold.it/500x591" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">
                                    <img src="http://placehold.it/500x525" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="prod-thumbs">
                        <ul class="prod-thumbs-car">
                            <li>
                                <a data-slide-index="0" href="#">
                                    <img src="http://placehold.it/500x525" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="1" href="#">
                                    <img src="http://placehold.it/500x591" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="2" href="#">
                                    <img src="http://placehold.it/500x525" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="3" href="#">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="4" href="#">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="5" href="#">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="6" href="#">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="prod-cont">
                    <p class="prod-actions">
                        <a href="#" class="prod-favorites"><i class="fa fa-heart"></i> Add to Wishlist</a>
                        <a href="#" class="prod-compare"><i class="fa fa-bar-chart"></i> Compare</a>
                    </p>
                    <div class="prod-skuwrap">
                        <p class="prod-skuttl">Color</p>
                        <ul class="prod-skucolor">
                            <li class="active">
                                <img src="img/color/blue.jpg" alt="">
                            </li>
                            <li>
                                <img src="img/color/red.jpg" alt="">
                            </li>
                            <li>
                                <img src="img/color/green.jpg" alt="">
                            </li>
                            <li>
                                <img src="img/color/yellow.jpg" alt="">
                            </li>
                            <li>
                                <img src="img/color/purple.jpg" alt="">
                            </li>
                        </ul>
                        <p class="prod-skuttl">Sizes</p>
                        <div class="offer-props-select">
                            <p>XL</p>
                            <ul>
                                <li><a href="#">XS</a></li>
                                <li><a href="#">S</a></li>
                                <li><a href="#">M</a></li>
                                <li class="active"><a href="#">XL</a></li>
                                <li><a href="#">L</a></li>
                                <li><a href="#">4XL</a></li>
                                <li><a href="#">XXL</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="prod-info">
                        <p class="prod-price">
                            <b class="item_current_price">$238</b>
                        </p>
                        <p class="prod-qnt">
                            <input type="text" value="1">
                            <a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>
                            <a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>
                        </p>
                        <p class="prod-addwrap">
                            <a href="#" class="prod-add">Add to cart</a>
                        </p>
                    </div>
                    <ul class="prod-i-props">
                        <li>
                            <b>SKU</b> 05464207
                        </li>
                        <li>
                            <b>Manufacturer</b> Mayoral
                        </li>
                        <li>
                            <b>Material</b> Cotton
                        </li>
                        <li>
                            <b>Pattern Type</b> Print
                        </li>
                        <li>
                            <b>Wash</b> Colored
                        </li>
                        <li>
                            <b>Style</b> Cute
                        </li>
                        <li>
                            <b>Color</b> Blue, Red
                        </li>
                        <li><a href="#" class="prod-showprops">All Features</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Quick View Product - end -->
    </section>
</main>
<!-- Main Content - end -->
@endsection
