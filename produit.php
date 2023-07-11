<?php require 'header.php' ?> 

        <!-- Entête du site -->
    
    
    <div class="breadcrumbs woocom overlay">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="bread-inner">
              <div class="bread-title">
                <h2>Products</h2>
              </div>
              <div class="bread-menu">
                <span property="itemListElement" typeof="ListItem">
                  <a property="item" typeof="WebPage" title="Go to Eshop." href="https://preview.wpthemesgrid.com/eshop-pro" class="home">
                    <span property="name">Eshop</span>
                  </a>
                  <meta property="position" content="1">
                </span>&gt;
                <span property="itemListElement" typeof="ListItem">
                  <span property="name" class="archive post-product-archive current-item">Products</span>
                  <meta property="url" content="https://preview.wpthemesgrid.com/eshop-pro/shop/">
                  <meta property="position" content="2">
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        <!-- Entête du site Fin -->



    <div class="eshop-pro-internal-area eshop-section section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="page-title">Shop</h1>
            <div class="woocommerce-notices-wrapper">
            </div>
            <div class="product-view-change grid-mode">
              <div class="row">
                <div class="col-lg-8">
                  <p class="woocommerce-result-count">Showing 1&ndash;12 of 14 results</p>
                </div>
                <div class="col-lg-4">
                  <ul class="view-mode">
                    <li class="view-mode-grid">
                      <a href="?mode=grid">
                        <i class="fa fa-th-large"></i>
                      </a>
                    </li>
                    <li class="list-mode-list">
                      <a href="?mode=list">
                        <i class="fa fa-th-list"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <form class="woocommerce-ordering" method="get">
              <select name="orderby" class="orderby" aria-label="Shop order">
                <option value="menu_order" selected="selected">Default sorting</option>
                <option value="popularity">Sort by popularity</option>
                <option value="rating">Sort by average rating</option>
                <option value="date">Sort by latest</option>
                <option value="price">Sort by price: low to high</option>
                <option value="price-desc">Sort by price: high to low</option>
              </select>
              <input type="hidden" name="paged" value="1" />
              <input type="hidden" name="mode" value="grid" />
            </form>
            <!-- afficher les Produits  -->
            <ul class="products columns-4  products-grid-view ">
            <?php
                require 'config.php'; 
                $aff = $pdo->query("SELECT * FROM woman") 
                ?>          
                <?php while($affi = $aff->fetch(PDO::FETCH_ASSOC)) : ?>          

              <li class="product type-product post-461 status-publish instock product_cat-man product_cat-women has-post-thumbnail shipping-taxable purchasable product-type-simple">
                <div class="single-product-item">
                  <div class="product-img">
                    <a href="https://preview.wpthemesgrid.com/eshop-pro/product/men-winter-dress/">
                      <img class="default-img" src="https://preview.wpthemesgrid.com/eshop-pro/wp-content/uploads/2022/04/p23-549x650.jpg" alt="#">
                      <img class="hover-img" src="https://preview.wpthemesgrid.com/eshop-pro/wp-content/uploads/2022/04/p24-549x650.jpg" alt="#">
                    </a>
                    <div class="button-head">
                      <div class="product-action-2">
                        <a href="?add-to-cart=461" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="461" data-product_sku aria-label="Add &ldquo;Men Winter Dress&rdquo; to your cart" rel="nofollow">Add to cart</a>
                      </div>
                      <div class="product-action">
                        <div class="single-action-btn">
                          <a href="#" class="button yith-wcqv-button" data-product_id="461">Quick View</a>
                          <span>Quick View</span>
                        </div>
                        <div class="single-action-btn">
                          <div class="yith-wcwl-add-to-wishlist add-to-wishlist-461  wishlist-fragment on-first-load" data-fragment-ref="461" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:461,&quot;parent_product_id&quot;:461,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
                            <div class="yith-wcwl-add-button">
                              <a href="?add_to_wishlist=461&#038;_wpnonce=af89c60cec" class="add_to_wishlist single_add_to_wishlist" data-product-id="461" data-product-type="simple" data-original-product-id="461" data-title="Add to wishlist" rel="nofollow">
                                <i class="fa fa-heart"></i>
                                <span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="single-action-btn">
                          <a class="compare" title="Compare" data-product_id="461" href="https://preview.wpthemesgrid.com/eshop-pro/?action=yith-woocompare-add-product&amp;id=461">
                            <i class="fas fa-chart-bar"></i>
                            <span>Add to Compare</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-content">
                    <a href="https://preview.wpthemesgrid.com/eshop-pro/product/men-winter-dress/">
                      <h2 class="woocommerce-loop-product__title"><?= $affi['name_products'] ?></h2>
                    </a>
                    <div class="product-price">
                      <span>
                        <span class="price">
                          <span class="woocommerce-Price-amount amount">
                            <bdi>
                              <span class="woocommerce-Price-currencySymbol">&#36;</span>25.00</bdi>
                          </span>
                        </span>
                      </span>
                    </div>
                    <div class="list-bottom-part">
                      <p class="des">
                        <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                      </p>
                      <a href="#" class="btn">
                        <a href="?add-to-cart=461" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="461" data-product_sku aria-label="Add &ldquo;Men Winter Dress&rdquo; to your cart" rel="nofollow">Add to cart</a>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
             
              <?php endwhile ?>          



  
            </ul>

            <!-- afficher les Produits Fin  -->



            <!-- <nav class="woocommerce-pagination">
              <ul class="page-numbers">
                <li>
                  <span aria-current="page" class="page-numbers current">1</span>
                </li>
                <li>
                  <a class="page-numbers" href="https://preview.wpthemesgrid.com/eshop-pro/shop/page/2/?mode=grid">2</a>
                </li>
                <li>
                  <a class="next page-numbers" href="https://preview.wpthemesgrid.com/eshop-pro/shop/page/2/?mode=grid">&rarr;</a>
                </li>
              </ul>
            </nav> -->

          </div>
        </div>
      </div>
    </div>


    <?php require 'footer.php' ?> 
