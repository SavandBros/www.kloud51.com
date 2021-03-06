<?php
// Connect
$db = new Db();

// Get plans and features
$plans = $db->select("SELECT * FROM plans WHERE hidden=false and type='store'");
?>

<!-- Start Your Free Online Store -->
<div class="container-fluid cover cover-dark"
  style="background-image: url('/assets/img/page/prestashop-background.jpg');">
  <div class="container s-pad-y-hard">
    <!-- Sub title -->
    <h3 class="o-fade-soft">Your ecommerce success starts here</h3>
    <!-- Title -->
    <h1 style="font-size: 6em;"><b>Start Your <br>Managed Online Store</b></h1>
    <!-- Launch -->
    <button class="btn btn-primary btn-fat s-mar-top br-rad-no" onClick="animateScroll('#plans')">
      <i class="fa fa-fw fa-shopping-bag"></i> SELL ONLINE
    </button>
    <br><br>
    <!-- Demo -->
    <a class="t-white" target="_blank" href="http://demo.prestashop.com">
      <i class="fa fa-fw fa-laptop"></i> See the live demo
    </a>
  </div>
</div>

<!-- Web hosting plans -->
<div class="container-fluid bg-1 s-pad-y-hard" id="plans">
  <div class="container">
    <!-- Title -->
    <h1 class="title-header"><a href="#plans">Managed Online Store Plans</a></h1>
    <hr>
    <!-- Plans -->
    <div class="row s-mar-top">
      <?php foreach ($plans as $plan): ?>
      <div class="plan-wrapper col-md-4 col-sm-6">
        <div class="plan">
          <?php if ($plan["message"]): ?>
          <span class="message" style="background: <?=$plan["color"]?>">
            <?=$plan["message"]?>
          </span>
          <?php endif ?>
          <div class="head" style="border-top-color: <?=$plan["color"]?>">
            <h1><?=$plan["title"]?></h1>
            <p><?=$plan["subtitle"]?></p>
          </div>
          <div class="price" style="color: <?=$plan["color"]?>">
            <div>
              <small>$</small>
              <span><?=$plan["price"]?></span>
              <small>/mo</small>
              <br>
              <small class="renew">$<?=$plan["price_renew"]?>/mo when you renew</small>
            </div>
          </div>
          <div class="detail">
            <p class="grid"><?=nl2br($plan["detail"])?></p>
          </div>
          <div class="order">
            <a href="<?=$plan["button_link"]?>" target="_blank"
              class="btn btn-default <?php if ($plan["featured"]): ?>btn-danger t-bold<?php endif ?>">
              <?=$plan["button_label"]?>
            </a>
          </div>
        </div>
      </div>
      <?php endforeach ?>
    </div>
    <!-- More plans -->
    <div class="row row-launch">
      <a href="<?=Route::find('web')->url?>" class="btn btn-default btn-launch">
        View Web Hosting Plans <i class="fa fa-fw fa-chevron-right"></i>
      </a>
      <br>
      <br>
      <a href="<?=Route::find('business')->url?>" class="btn btn-default btn-launch">
        View Business Hosting Plans <i class="fa fa-fw fa-chevron-right"></i>
      </a>
    </div>
  </div>
</div>


<!-- Features -->
<div class="container-fluid">
  <div class="container s-pad-y-hard">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 text-center">
        <!-- Title -->
        <h1 class="title-header">Features</h1>
        <hr>
        <p class="o-fade-soft">
          PrestaShop has comprehensive product features for small, medium or large ecommerce stores. Hundreds of features
          are standard and 100% free.
        </p>
      </div>
    </div>    
    <div class="row s-mar-top text-center">
      <div class="col-xs-12 col-sm-4 grid">
        <i class="fa feature-icon fa-list-alt"></i>
        <h2>Store Templates</h2>
        <p class="o-fade-soft">
          With hundreds of choices from every industry, the perfect store template is waiting for you.
        </p>
      </div>
      <div class="col-xs-12 col-sm-4 grid">
        <i class="fa feature-icon fa-building-o"></i>
        <h2>Website Builder</h2>
        <p class="o-fade-soft">Whatever store you’re dreaming of, you can build it with PrestaShop.</p>
      </div>
      <div class="col-xs-12 col-sm-4 grid">
        <i class="fa feature-icon fa-mobile"></i>
        <h2>Mobile Responsive</h2>
        <p class="o-fade-soft">PrestaShop stores display beautifully across all screens and devices.</p>
      </div>
      <div class="col-xs-12 col-sm-4 grid">
        <i class="fa feature-icon fa-credit-card" style="margin-top:30px"></i>
        <h2>Payments</h2>
        <p class="o-fade-soft">Choose from over 50 world-class payment solutions and gateways.</p>
      </div>
      <div class="col-xs-12 col-sm-4 grid">
        <i class="fa feature-icon fa-truck" style="margin-top:30px"></i>
        <h2>Shipping</h2>
        <p class="o-fade-soft">Give your customers reliable, local shipping options around the world.</p>
      </div>
      <div class="col-xs-12 col-sm-4 grid">
        <i class="fa feature-icon fa-globe" style="margin-top:30px"></i>
        <h2>Go International</h2>
        <p class="o-fade-soft">Grow your business with a store that’s localized for multiple markets</p>
      </div>
    </div>
  </div>
</div>

<!-- Theme Showcase -->
<div class="bg-grad-3 s-pad-y-hard">
  <!-- Title -->
  <h1 class="title" style="font-size: 5em">Theme Showcase</h1>
  <!-- Sub title -->
  <h3 class="text-center o-fade">
    More than 270,000 ecommerce sites run on PrestaShop.<br>
    Make your business our next success story.
  </h3>
  <!-- Showcase wrapper -->
  <div class="showcase-wrapper" scroll>
    <!-- Themes -->
    <div class="showcase">
      <!-- Theme -->
      <?php foreach(range(1, 16) as $index): ?>
      <div class="showcase-item">
        <img src="/assets/img/page/prestashop/theme/<?=$index?>.jpg" alt="Theme preview">
      </div>
      <?php endforeach ?>
    </div>
  </div>
</div>

<!-- Build Your Online Store -->
<div class="container-fluid bg-1">
  <div class="container s-pad-y-hard">
    <!-- Title -->
    <h1 class="title-header">Build Your Online Store</h1>
    <hr>
    <div class="row">
      <div class="col-md-4">
        <h2 class="text-primary s-mar-bottom-soft">Create the perfect online shopping experience</h2>
        <p>
          Whatever store you’re dreaming of, you can build it with PrestaShop. Choose a professional ecommerce template,
          add an unlimited number of products, and customize your shopping cart with the right payment and shipping
          solutions. Create a store that will display beautifully on any device so your customers can browse and
          purchase everywhere.
        </p>
        <div class="s-mobile text-center-mobile">
          <button class="btn btn-success" onClick="animateScroll('#plans')">Create Your Online Shop Now</button> 
        </div>
      </div>
      <div class="col-md-8 text-center">
        <img src="/assets/img/page/prestashop-1.png" style="max-width: 100%;">
      </div>
    </div>
  </div>
</div>

<!-- Sell Online -->
<div class="container-fluid">
  <div class="container s-pad-y-hard">
    <!-- Title -->
    <h1 class="title-header">Sell Online</h1>
    <hr>
    <div class="row">
      <div class="col-md-8 text-center">
        <img src="/assets/img/page/prestashop-2.png" style="max-width: 100%;">
      </div>
      <div class="col-md-4">
        <h2 class="text-primary s-mar-bottom-soft">Manage sales, promotions and store administration</h2>
        <p>
          PrestaShop will help you to simplify the daily management for your online store so you can sell more and
          deliver a great customer experience. Built-in SEO features make it easy to soar to the top of search results.
          Promotions can be quickly added to categories, best-sellers, and shipping fees. A centralized back office
          simplifies your day-to-day store administration.
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Grow Your Online Revenue -->
<div class="container-fluid bg-1">
  <div class="container s-pad-y-hard">
    <!-- Title -->
    <h1 class="title-header">Grow Your Online Revenue</h1>
    <hr>
    <div class="row">
      <div class="col-md-4">
        <h2 class="text-primary s-mar-bottom-soft">Increase sales through marketing and international commerce</h2>
        <p>
          The marketing tools in PrestaShop will help you to boost sales and increase customer loyalty. You can expand
          into new markets by using our extensive cross-border features. You can connect your store to local and
          international marketplaces. There are many ways to grow your revenue with PrestaShop.
        </p>
      </div>
      <div class="col-md-8 text-center">
        <img src="/assets/img/page/prestashop-3.png" style="max-width: 100%;">
      </div>
    </div>
  </div>
</div>

<!-- Customize Your Prestashop Store To Go Even Further -->
<div class="container-fluid">
  <div class="container s-pad-y-hard">
    <!-- Title -->
    <h1 class="title-header">Customize Your PrestaShop Store To Go Even Further</h1>
    <hr>
    <div class="row">
      <div class="col-md-8 text-center">
        <img src="/assets/img/page/prestashop-4.png" style="max-width: 100%;">
      </div>
      <div class="col-md-4">
        <h2 class="text-primary s-mar-bottom-soft">Customize your store and scale your business</h2>
        <p>
          As you expand your online business, PrestaShop will support your future requirements. You can add new features
          in a matter of minutes using Addons modules. The multi-store management will help you run multiple online
          stores from one location. Developers can also build on our open source code.
        </p>
        <div class="s-mobile text-center-mobile">
          <button class="btn btn-success" onClick="animateScroll('#plans')">Start Your Shop Now</button> 
        </div>
      </div>
    </div>
  </div>
</div>

<!-- More Features -->
<div class="container-fluid bg-1">
  <div class="container s-pad-y-hard">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 text-center">
        <!-- Title -->
        <h1 class="title-header">More Features</h1>
        <hr>
        <p class="o-fade-soft">
          PrestaShop has comprehensive product features that support large, medium or small ecommerce stores. Hundreds
          of features are standard and 100% free.
        </p>
      </div>
    </div>
    <!-- Features -->
    <div class="row s-mar-top icon-title">
      <div class="col-lg-6">
        <div class="row">
          <div class="col-sm-3">
            <i class="fa fa-line-chart" style="color: #e74c3c"></i>
          </div>
          <div class="col-sm-9">
            <h3>Powerful Marketing</h3>
            <p>Boost your sales with cart reminders, newsletters, cart rules and discounts.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-sm-3">
            <i class="fa fa-globe" style="color:#2ecc71"></i>
          </div>
          <div class="col-sm-9">
            <h3>65 Languages</h3>
            <p>Start your business from anywhere, in any language, and grow internationally.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-sm-3">
            <i class="fa fa-puzzle-piece" style="color:#3498db"></i>
          </div>
          <div class="col-sm-9">
            <h3>Endless Possibilities</h3>
            <p>Thousands of modules integrate with PrestaShop. Add any feature from PrestaShop Addons to your store.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-sm-3">
            <i class="fa fa-truck" style="color:#f39c12"></i>
          </div>
          <div class="col-sm-9">
            <h3>Shipping Made Easy</h3>
            <p>Define where and how to ship your products with local and international carriers.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-sm-3">
            <i class="fa fa-credit-card" style="color: #2ecc71"></i>
          </div>
          <div class="col-sm-9">
            <h3>Accept All Payments</h3>
            <p>Receive instant payments, from more that 50 payment providers all over the world.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-sm-3">
            <i class="fa fa-desktop" style="color:#9b59b6"></i>
          </div>
          <div class="col-sm-9">
            <h3>Build Your Online Presence</h3>
            <p>Easily integrate with social networks to improve your SEO and increase store visibility.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center s-pad-top">
      <button onClick="animateScroll('#plans')" class="btn btn-success btn-launch">
        <i class="fa fa-shopping-cart fa-fw"></i> Start Your Shop Now
      </button>
    </div>
  </div>
</div>
