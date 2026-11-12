<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VyapaarFlow OS - About</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- HEADER -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-custom">
  <div class="container">
    <a href="#" class="logo">
      <img src="images/logo.png" alt="logo" height="38">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link px-3" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link px-3 active" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link px-3" href="services.php">Services</a></li>
        <li class="nav-item"><a class="nav-link px-3" href="contact.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link px-3" href="dashboard.php">Dashboard</a></li>
      </ul>
      <div class="d-flex gap-2">
        <a href="signup.php" class="btn btn-outline-navy btn-sm px-3">Signup</a>
        <a href="login.php" class="btn btn-navy-primary btn-sm px-3">Login</a>
      </div>
    </div>
  </div>
</nav>

<main>

  <!-- HERO -->
  <section class="hero-wrap text-center py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <div class="top-badge mb-3">
            <i class="fa-solid fa-layer-group me-2"></i>Enterprise Cloud Architecture & Company Profile
          </div>
          <h1>Reimagining B2B Commerce<br><span>with Cloud-Native Agility</span></h1>
          <p class="mt-3">VyapaarFlow OS bridges the gap between complex, high-maintenance legacy ERP systems and modern multi-tenant SaaS architecture.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- VISION -->
  <section class="vision-wrap py-5">
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-lg-7">
          <label>OUR CORE VISION</label>
          <h2 class="mt-2">Empowering SMBs with Zero-Compromise Security</h2>
          <p class="desc mt-3">Traditional enterprise resource planning tools are notoriously slow, expensive, and require dedicated IT departments.</p>
          <div class="row g-3 mt-2">
            <div class="col-6">
              <div class="mini-stat">
                <h3>100%</h3>
                <span>Data Row Isolation</span>
              </div>
            </div>
            <div class="col-6">
              <div class="mini-stat">
                <h3>0ms</h3>
                <span>Subdomain Routing Delay</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="strategy-box">
            <h4><i class="fa-solid fa-bullseye me-2"></i>Strategic Objectives</h4>
            <div class="s-item d-flex gap-3 mb-3">
              <i class="fa-solid fa-circle-check"></i>
              <div><b>Eliminate Heavy ERP Overhead:</b> Offer intuitive platform at fraction of cost.</div>
            </div>
            <div class="s-item d-flex gap-3 mb-3">
              <i class="fa-solid fa-circle-check"></i>
              <div><b>Automated Tax Workflows:</b> Streamline CGST, SGST, IGST calculations.</div>
            </div>
            <div class="s-item d-flex gap-3">
              <i class="fa-solid fa-circle-check text-primary"></i>
              <div><b>Scalable Multi-Tenancy:</b> Provide isolated workspace subdomains.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ARCH -->
  <section class="arch-wrap py-5">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-8">
          <label>SYSTEM ARCHITECTURE</label>
          <h2 class="mt-2">Deep-Dive Into Our Technical Foundation</h2>
        </div>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <div class="a-card h-100">
            <div class="ic blue"><i class="fa-solid fa-network-wired"></i></div>
            <h5>Subdomain Multi-Tenancy</h5>
            <p>Automatic tenant scoping via dynamic subdomains.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="a-card h-100">
            <div class="ic green"><i class="fa-solid fa-database"></i></div>
            <h5>Database Row-Level Security</h5>
            <p>Single database with strict row-level isolation policies.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="a-card h-100">
            <div class="ic yellow"><i class="fa-solid fa-server"></i></div>
            <h5>Async Redis Queue Engine</h5>
            <p>Batch PDF GST invoice generation runs asynchronously.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="a-card h-100">
            <div class="ic blue"><i class="fa-solid fa-calculator"></i></div>
            <h5>Tax Compliance Automation</h5>
            <p>Built-in tax engine validates HSN/SAC codes.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="a-card h-100">
            <div class="ic red"><i class="fa-solid fa-user-shield"></i></div>
            <h5>Granular RBAC Access</h5>
            <p>Fine-grained permission controls across roles.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="a-card h-100">
            <div class="ic blue"><i class="fa-solid fa-clock-rotate-left"></i></div>
            <h5>Automated Data Backups</h5>
            <p>Continuous automated database snapshots.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<!-- FOOTER -->
<footer class="footer-dark">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4">
        <a href="#" class="footer-logo"><img src="images/logo.png" alt="logo" height="36"></a>
        <p class="footer-desc mt-3">Automate your business with VyapaarFlow OS. Secure multi-tenant architecture for modern B2B commerce.</p>
        <div class="footer-social d-flex gap-2 mt-3">
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="#"><i class="fa-brands fa-github"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </div>
      </div>
      <div class="col-lg-2 col-6">
        <h6 class="footer-title">Product</h6>
        <ul class="list-unstyled footer-links">
          <li><a href="#">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#dashboard">Dashboard</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-6">
        <h6 class="footer-title">Company</h6>
        <ul class="list-unstyled footer-links">
          <li><a href="#contact">Contact Sales</a></li>
          <li><a href="#">Pricing</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Security SLA</a></li>
        </ul>
      </div>
      <div class="col-lg-4">
        <h6 class="footer-title">Get platform updates</h6>
        <div class="footer-newsletter d-flex gap-2">
          <input type="email" class="form-control" placeholder="Enter your business email">
          <button class="btn btn-primary">Subscribe</button>
        </div>
        <div class="footer-badges d-flex gap-3 mt-3 flex-wrap">
          <span><i class="fa-solid fa-shield-halved"></i> 100% Secure</span>
          <span><i class="fa-solid fa-headset"></i> 24x7 Support</span>
          <span><i class="fa-solid fa-bolt"></i> Fast Queue</span>
        </div>
      </div>
    </div>
    <div class="row footer-bottom mt-5 pt-4">
      <div class="col-md-6 d-flex align-items-center gap-2">
        <div class="small-logo">V</div>
        <span>VyapaarFlow OS © 2026 Multi-Tenant B2B Platform.</span>
      </div>
      <div class="col-md-6 text-md-end mt-3 mt-md-0">
        <a href="#about" class="me-3">Architecture</a>
        <a href="#" class="me-3">Security SLA</a>
        <a href="#contact">Support</a>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>