<?php require 'header.php' ?>



    <div class="page-breadcrumb overlay" style="background-image:url()">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="bread-inner">
              <div class="bread-title">
                <h2>My account</h2>
              </div>
              <div class="bread-menu">
                <span property="itemListElement" typeof="ListItem">
                  <a property="item" typeof="WebPage" title="Go to Eshop." href="https://preview.wpthemesgrid.com/eshop-pro" class="home">
                    <span property="name">Eshop</span>
                  </a>
                  <meta property="position" content="1">
                </span>&gt;
                <span property="itemListElement" typeof="ListItem">
                  <span property="name" class="post post-page current-item">My account</span>
                  <meta property="url" content="https://preview.wpthemesgrid.com/eshop-pro/my-account/">
                  <meta property="position" content="2">
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <main id="primary" class="woo-account-page section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <article id="post-15" class="post-15 page type-page status-publish hentry">
              <header class="entry-header">
                <h1 class="entry-title">My account</h1>
              </header>
              <div class="entry-content">
                <div class="woocommerce">
                  <div class="woocommerce-notices-wrapper">
                  </div>
                  <div class="u-columns col2-set" id="customer_login">
                    <div class="u-column1 col-1">
                      <div class="section-title text-center">
                        <h2>Login</h2>
                        <p>Please register in order to checkout more quickly</p>
                      </div>
                      <h2>
                      </h2>
                      <form class="woocommerce-form woocommerce-form-login login woocommerce-form__eshop" method="post">
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                          <label for="username">Username or email address&nbsp;
                            <span class="required">*</span>
                          </label>
                          <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username">
                        </p>
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                          <label for="password">Password&nbsp;
                            <span class="required">*</span>
                          </label>
                          <span class="password-input">
                            <input class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="password" id="password" autocomplete="current-password">
                            <span class="show-password-input display-password">
                            </span>
                          </span>
                        </p>
                        <p class="form-row button-group__row">
                          <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="a14fdc3876">
                          <input type="hidden" name="_wp_http_referer" value="/eshop-pro/my-account/">
                          <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">Log in</button>
                        </p>
                        <div class="form-checkbox__lost">
                          <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                            <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">
                            <span>Remember me</span>
                          </label>
                          <p class="woocommerce-LostPassword lost_password">
                            <a href="https://preview.wpthemesgrid.com/eshop-pro/my-account/lost-password/">Lost your password?</a>
                          </p>
                        </div>
                        <p></p>
                      </form>
                    </div>
                    <div class="u-column2 col-2">
                      <h2>Register</h2>
                      <form method="post" class="woocommerce-form woocommerce-form-register register">
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                          <label for="reg_email">Email address&nbsp;
                            <span class="required">*</span>
                          </label>
                          <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email">
                        </p>
                        <p>A link to set a new password will be sent to your email address.</p>
                        <div class="woocommerce-privacy-policy-text">
                          <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our
                            <a href="https://preview.wpthemesgrid.com/eshop-pro/?page_id=3" class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.</p>
                        </div>
                        <p class="woocommerce-form-row form-row">
                          <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="73b2ff4050">
                          <input type="hidden" name="_wp_http_referer" value="/eshop-pro/my-account/">
                          <button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="Register">Register</button>
                        </p>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </main>
  </div>

  <?php require 'footer.php' ?>