<?php
// Connect
$db = new Db();

// Get plans and features
$plans = $db->select("SELECT * FROM plans WHERE hidden=false and type='hosting'");
?>

<!-- Cover -->
<div class="container-fluid cover cover-dark bg-evening">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h1 class="t-bold">Kloud51</h1>
        <h1 class="t-5"><b>Build your own professional website</b></h1>
        <br>
        <a class="btn btn-lg btn-primary br-rad-no" onClick="animateScroll('#plans')">
          Get Started <i class="fa fa-fw fa-arrow-circle-down"></i>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Web hosting plans -->
<div class="container-fluid bg-1 s-pad-y-hard" id="plans">
  <div class="container">
    <!-- Title -->
    <h1 class="title"><a href="#plans" class="t-dark">Web Hosting Plans</a></h1>
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
              class="btn btn-default <?php if ($plan["featured"]): ?>btn-success t-bold<?php endif ?>">
              <?=$plan["button_label"]?>
            </a>
          </div>
        </div>
      </div>
      <?php endforeach ?>
    </div>
    <!-- More plans -->
    <div class="row row-launch">
      <a href="<?=Route::find('business')->url?>" class="btn btn-default btn-launch">
        View Business Hosting Plans <i class="fa fa-fw fa-chevron-right"></i>
      </a>
      <br>
      <br>
      <a href="<?=Route::find('prestashop')->url?>" class="btn btn-info btn-launch">
        Order Managed Online Store <i class="fa fa-fw fa-chevron-right"></i>
      </a>
    </div>
  </div>
</div>

<!-- Main features -->
<div class="container s-pad-y-hard">
  <!-- Title -->
  <h1 class="title">Main Features</h1>
  <hr>
  <!-- Feature list -->
  <div class="row s-mar-top text-center">
    <div class="col-md-4">
      <img src="/assets/img/home/creditcard.png" class="feature-image">
      <h2>Money Back Guarantee</h2>
      <h4 height class="o-fade-soft">
        Not fully satisfied with our services? Request a
        refund within 7 days of the initial purchase.
      </h4>
    </div>
    <div class="col-md-4">
      <img src="/assets/img/home/cpanel.png" class="feature-image">
      <h2>Simplified Interface</h2>
      <h4 height class="o-fade-soft">
        cPanel and Softaculous included for that 1-click installation
        in an easy-to-use interface. No coding skill required.
      </h4>
    </div>
    <div class="col-md-4">
      <img src="/assets/img/home/crossroads.png" class="feature-image">
      <h2>Free Migration</h2>
      <h4 height class="o-fade-soft">
        Send us a migration request in the support section,
        we'll handle the dirty work for you.
      </h4>
    </div>
  </div>
</div>

<!-- Hosting apps -->
<div class="container-fluid bg-grad-2">
  <div class="container s-pad-y-hard">
    <!-- Title -->
    <h1 class="title">AWESOME HOSTING APPS</h1>
    <br>
    <!-- Apps -->
    <div class="row">
      <!-- Wordpress -->
      <div class="col-xs-6 col-md-4">
        <a class="app" href="/hosting/wordpress">
          <div class="logo">
            <i class="fa fa-fw fa-wordpress" style="color: #3498db"></i>
          </div>
          <span>WordPress</span>
        </a>
      </div>
      <!-- PrestaShop -->
      <div class="col-xs-6 col-md-4">
        <a class="app" href="/hosting/prestashop">
          <div class="logo">
            <img src="/assets/img/page/prestashop.svg">
          </div>
          <span>PrestaShop</span>
        </a>
      </div>
      <!-- Joomla -->
      <div class="col-xs-6 col-md-4">
        <a class="app" href="/hosting/joomla">
          <div class="logo">
            <i class="fa fa-fw fa-joomla" style="color: #e67e22"></i>
          </div>
          <span>Joomla</span>
        </a>
      </div>
      <!-- SSD VPS -->
      <div class="col-xs-6 col-md-4">
        <a class="app" href="/hosting/ssd-vps">
          <div class="logo">
            <i class="fa fa-fw fa-server"></i>
          </div>
          <span>SSD VPS</span>
        </a>
      </div>
      <!-- WHMCS -->
      <div class="col-xs-6 col-md-4">
        <a class="app" href="/hosting/whmcs">
          <div class="logo">
            <img src="/assets/img/page/whmcs.png">
          </div>
          <span>WHMCS</span>
        </a>
      </div>
      <!-- MyBB -->
      <div class="col-xs-6 col-md-4">
        <a class="app" href="/hosting/mybb">
          <div class="logo">
            <img src="/assets/img/page/mybb.png">
          </div>
          <span>MyBB</span>
        </a>
      </div>
      <!-- MariaDB -->
      <div class="col-xs-6 col-md-4">
        <a class="app" href="/hosting/mariadb">
          <div class="logo">
            <img src="/assets/img/page/mariadb.png">
          </div>
          <span>MariaDB</span>
        </a>
      </div>
      <!-- bbPress -->
      <div class="col-xs-6 col-md-4">
        <a class="app" href="/hosting/bbpress">
          <div class="logo">
            <img src="/assets/img/page/bbpress.png">
          </div>
          <span>bbPress</span>
        </a>
      </div>
      <!-- Softaculous -->
      <div class="col-xs-6 col-md-4">
        <a class="app" href="/hosting/softaculous">
          <div class="logo">
            <img src="/assets/img/page/softaculous.gif" class="img-circle img-softaculous">
          </div>
          <span>Softaculous</span>
        </a>
      </div>
    </div>
    <!-- More text -->
    <h3 class="text-center t-white">More than 300 apps ready to be installed in 1-click</h3>
  </div>
</div>

<!-- Why kloud51 -->
<div class="container-fluid bg-1">
  <div class="container s-pad-y-hard">
    <!-- Title -->
    <h1 class="title">Why Kloud51?</h1>
    <hr>
    <!-- Reasons -->
    <div class="row icon-title">
      <div class="col-lg-6">
        <div class="row">
          <div class="col-sm-3">
            <i class="fa fa-check-circle" style="color: #2ecc71"></i>
          </div>
          <div class="col-sm-9">
            <h3>Quality Hosting</h3>
            <p>
              With a selection of server hardware and infrastructure sourced from
              globally-reputable providers, we guarantee 99.9% uptime 24 hours a day, 7 days a week.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-sm-3">
            <i class="fa fa-shield" style="color: tomato"></i>
          </div>
          <div class="col-sm-9">
            <h3>Complete Protection</h3>
            <p>
              We provide anti-DDoS, Firewalls, and Antivirus to protect your data,
              with options for RAID-1 or RAID-10 redundancy for that extra-sensitive information.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-sm-3">
            <i class="fa fa-comments" style="color: #9b59b6"></i>
          </div>
          <div class="col-sm-9">
            <h3>Excellent Support</h3>
            <p>
              Having issues? We are dedicated to swiftly resolving issues and will assign
              a technician you help you every step of the way for techniclal help.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-sm-3">
            <i class="fa fa-code" style="color: #1abc9c"></i>
          </div>
          <div class="col-sm-9">
            <h3>Constant Development</h3>
            <p>
              We are always improving and developing to add more features and better services.
              Missing something? Let us know so we can work on it!
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-sm-3">
            <i class="fa fa-database" style="color: #e67e22"></i>
          </div>
          <div class="col-sm-9">
            <h3>Solid Infrastructure</h3>
            <p>
              Kloud51 servers are being maintained round-the-clock by our technical staff
              and are connected to a global network with over 3 Tbps of total bandwidth.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-sm-3">
            <i class="fa fa-bolt" style="color: #3498db"></i>
          </div>
          <div class="col-sm-9">
            <h3>Lightning Performance</h3>
            <p>
              All of our servers feature high-performance hardware with optimized configurations,
              and are constantly being monitored by our developers and admins.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-sm-3">
            <i class="fa fa-arrow-up" style="color: #3498db"></i>
          </div>
          <div class="col-sm-9 grid-3">
            <h3>Level up!</h3>
            <p>
              We have resources – CPU, memory, entry processes, I/O – at the ready for when you need them
              (we'll alert you when you're close.) Or you can really stay on top of things through our robust stats
              dashboard. Either way, leveling up is a one-click affair.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-sm-3">
            <i class="fa fa-lock" style="color: #e67e22"></i>
          </div>
          <div class="col-sm-9 grid-3">
            <h3>Security</h3>
            <p>
              It’s hard to believe anyone would want to harm your website, but they do. Thankfully, our security team is
              on the job 24/7 to meticulously monitor, thwart suspicious activity and deflect DDoS attacks.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Member area -->
<div class="container-fluid bg-grad">
  <div class="container s-pad-y-hard">
    <div class="row">
      <div class="col-md-4">
        <div class="s-mar-top hidden-xs hidden-sm"></div>
        <h1 class="title">Powerful Dashboard</h1>
        <h3 class="t-line">
          Manage all of your services and account in one place, a control panel has been
          carefully designed and crafted to let you manage your account easily.
        </h3>
      </div>
      <div class="col-md-8">
        <div class="s-mar-top hidden-md hidden-lg"></div>
        <img class="img-shadow s-full" src="/assets/img/home/memberarea.png">
      </div>
    </div>
  </div>
</div>

<!-- Ratings -->
<div class="container-fluid s-pad-no bg-1">
  <div id="reviews" class="carousel slide" data-ride="carousel" data-interval="false">
    <ol class="carousel-indicators">
      <li data-target="#reviews" data-slide-to="0" class="active"></li>
      <li data-target="#reviews" data-slide-to="1"></li>
      <li data-target="#reviews" data-slide-to="2"></li>
      <li data-target="#reviews" data-slide-to="3"></li>
      <li data-target="#reviews" data-slide-to="4"></li>
      <li data-target="#reviews" data-slide-to="5"></li>
      <li data-target="#reviews" data-slide-to="6"></li>
      <li data-target="#reviews" data-slide-to="7"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="review col-md-8 col-md-offset-2">
          <div class="col-md-3 text-center">
            <div class="review-avatar" style="background: #006BC9">
              <span>A</span>
              <div class="review-stars">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">Great Linux Web Hosting</div>
              <div class="panel-body">
                First, I started with their Free Linux Web Hosting, it had everything I needed.
                Don't get it wrong if it says "Free" it has the Enterprise features.
                <br><br> SSH Access, Unlimited FTP, Emails, Websites, Domains, Addon-Domains,
                +400 app auto installers that will take only 1 click to install and setup website,
                much more and comes with 24/7 support as well and daily backups.
                <br><br> Their support is completely dedicated to what they do and never failed me,
                always responsible and professional and very polite.
                <br><br> Now I'm subscribed to their Paid Plans and get my friends and own client to get from Kloud51.
                <br><br> Thank you for the great services. Excellent, I would recommend Kloud51 to anyone.
                <hr small>
                <em class="text-right dis-b">
                  <small>Kloud51 reviewed by</small>
                  <a target="_blank" href="https://www.trustpilot.com/reviews/56844ef90000ff00092aa251">Aga</a>
                </em>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="review col-md-8 col-md-offset-2">
          <div class="col-md-3 text-center">
            <div class="review-avatar">
              <span>CG</span>
              <div class="review-stars">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">A Very Good Service!</div>
              <div class="panel-body">
                I have a reseller account and I'm very happy that my customers have excellent services. Price are
                good for every pocket! Their services are best as compared to other hosting companies. Also great
                hosting, 99% uptime, and no problem with it at all.
                <hr small>
                <em class="text-right dis-b">
                  <small>Kloud51 reviewed by</small>
                  <a target="_blank" href="https://www.trustpilot.com/reviews/56e011c90000ff000943eb28">
                    Ciobanu Ioan Georgian
                  </a>
                </em>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="review col-md-8 col-md-offset-2">
          <div class="col-md-3 text-center">
            <div class="review-avatar" style="background: darkcyan">
              <span>DW</span>
              <div class="review-stars">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">Great VPS Service</div>
              <div class="panel-body">
                Kloud51 is a fantastic Linux VPS hosting service for a great price. You can choose your flavor of
                Linux and jump right into it with Cpanel and RDP. I'm currently using the ARCH Desktop and its quick
                and smooth. You can really tell they care by the support they offer though I haven't had to contact
                them because I haven't experienced any downtime of any sort. All in all, I would recommend Kloud51
                to anyone, they are fast and reliable.
                <hr small>
                <em class="text-right dis-b">
                  <small>Kloud51 reviewed by</small>
                  <a target="_blank" href="https://www.trustpilot.com/reviews/56e134050000ff0009443ffd">
                    David Williams
                  </a>
                </em>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="review col-md-8 col-md-offset-2">
          <div class="col-md-3 text-center">
            <div class="review-avatar" style="background: blueviolet">
              <span>A</span>
              <div class="review-stars">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">Awesome VPS &amp; Awesome Hosting</div>
              <div class="panel-body">
                I'm using Kloud51's VPS for 3 months now and what should I say? They have awesome service and great
                support team. they added all features that I want, helped me start working with Linux.<br><br>Also
                great hosting, 99% uptime, and no problem with it at all.
                <hr small>
                <em class="text-right dis-b">
                  <small>Kloud51 reviewed by</small>
                  <a target="_blank" href="https://www.trustpilot.com/reviews/56debfa30000ff0009437b34">Andrew</a>
                </em>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="review col-md-8 col-md-offset-2">
          <div class="col-md-3 text-center">
            <div class="review-avatar" style="background: cornflowerblue">
              <span>L</span>
              <div class="review-stars">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">Excelent service</div>
              <div class="panel-body">
                My experience here was great, the VPS work 24/7, I started using with 0 knowledge ArchLinux Desktop
                (Super Fast) [Remote Desktop Ready], they got one support forum and individual support team, and
                the results were great. I pushed the VPS to the limits and worked excellently.
                <br><br>When they changed 50GB HDD to 10GB SSD they suspended my VPS because I got 40GB+ full, I sent
                a ticket to support team and in some hours, it was solved.
                <hr small>
                <em class="text-right dis-b">
                  <small>Kloud51 reviewed by</small>
                  <a target="_blank" href="https://www.trustpilot.com/reviews/56e42f780000ff0009450f4b">Leandro</a>
                </em>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="review col-md-8 col-md-offset-2">
          <div class="col-md-3 text-center">
            <div class="review-avatar" style="background: deeppink">
              <span>J</span>
              <div class="review-stars">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">Awesome service</div>
              <div class="panel-body">
                Bought five VPS from kloud51, the VPSs were running on 1 GB RAM and Arch Linux OS. Never had
                problems using them, VPS runs smoothly. I recommend them.
                <hr small>
                <em class="text-right dis-b">
                  <small>Kloud51 reviewed by</small>
                  <a target="_blank" href="https://www.trustpilot.com/reviews/56ea5e680000ff000946a92b">Julie</a>
                </em>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="review col-md-8 col-md-offset-2">
          <div class="col-md-3 text-center">
            <div class="review-avatar" style="background: orange">
              <span>O</span>
              <div class="review-stars">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">Excellent! The best in the business</div>
              <div class="panel-body">
                Their service is solid,their network is fast, I never had an issue with that.Great support, quick
                and accurate, the best I had so far. I bought 10 VPS ArchLinux Desktop (Super Fast)
                [Remote Desktop Ready],easy to use,never crashed.check it out here at Kloud51.com
                <hr small>
                <em class="text-right dis-b">
                  <small>Kloud51 reviewed by</small>
                  <a target="_blank" href="https://www.trustpilot.com/reviews/56f18fb70000ff00094882eb">Ovidiu</a>
                </em>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="review col-md-8 col-md-offset-2">
          <div class="col-md-3 text-center">
            <div class="review-avatar" style="background: lime">
              <span>R</span>
              <div class="review-stars">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">One of the best &amp; Easy to use VPS Provider</div>
              <div class="panel-body">
                I've been looking for good VPS providers for a while, and finally found out this Reliable provider.
                No issues, 100% Satisfied.<br>I bought VPS 1 GB RAM from them and it is Performing really well With
                high Uptime.<br>It is really Beginner-friendly, with the Available option of Preinstalled Desktop
                &amp; All required stuff. Everything was setup, So fast without the need for manual installation of
                the needed Things. Really happy with the Service.
                <hr small>
                <em class="text-right dis-b">
                  <small>Kloud51 reviewed by</small>
                  <a target="_blank" href="https://www.trustpilot.com/reviews/56f28be60000ff000948c1ad">Risin</a>
                </em>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#reviews" data-slide="prev">
      <span class="fa fa-chevron-left" aria-hidden="true"></span>
    </a>
    <a class="right carousel-control" href="#reviews" data-slide="next">
      <span class="fa fa-chevron-right" aria-hidden="true"></span>
    </a>
  </div>
</div>
