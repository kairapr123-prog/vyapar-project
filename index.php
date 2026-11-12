<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VyapaarFlow OS - Automate Your Business</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"> 
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-custom">
  <div class="container">
    <a href="#" class="navbar-brand"><img src="images/logo.png" alt="logo" height="40"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link px-3" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link px-3" href="about.php">About</a></li>
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

<!-- HERO SECTION -->
<section class="hero-dark py-5">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-10 col-xl-9">
        <div class="badge-top mb-3">Multi-Tenant Enterprise Operating System v2.4</div>
        <h1 class="mb-3">Automate Your Business <br> Operations with <span>Zero Compromise</span></h1>
        <p class="mb-4">VyapaarFlow OS powers high-growth B2B enterprises with isolated tenant data security, automated GST invoicing queues, and real-time ledger intelligence.</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
          <a href="#" class="btn btn-primary"><i class="fa-solid fa-rocket me-2"></i>Launch Your Free Trial</a>
          <a href="#" class="btn btn-outline-light"><i class="fa-solid fa-desktop me-2"></i>Explore Live Dashboard</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- QUICK SERVICES -->
<section class="py-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4"><div class="s-card h-100"><i class="fa-solid fa-file-invoice"></i><h5>GST Billing & Invoicing</h5><p>Generate e-invoices with automatic GST validation.</p></div></div>
      <div class="col-md-4"><div class="s-card h-100"><i class="fa-solid fa-users-gear"></i><h5>Team & Role Scoping</h5><p>Granular access control for your team members.</p></div></div>
      <div class="col-md-4"><div class="s-card h-100"><i class="fa-solid fa-cubes"></i><h5>Inventory Sync</h5><p>Real-time stock levels with low-stock warnings.</p></div></div>
    </div>
  </div>
</section>

<!-- DASHBOARD STATS -->
<section class="dashboard-features py-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="browser-card p-3">
          <div class="row align-items-center mb-3">
            <div class="col-md-8 d-flex align-items-center gap-2"><span class="dot red"></span><span class="dot yellow"></span><span class="dot green"></span><span class="url-text ms-2">app.vyapaarflow.com/tenant/acme-corp</span></div>
            <div class="col-md-4 text-md-end mt-2 mt-md-0"><span class="secure-badge"><i class="fa-solid fa-lock"></i> Isolated Row Security</span></div>
          </div>
          <div class="row g-3">
            <div class="col-md-4"><div class="stat-box"><p>Monthly Recurring Revenue</p><h3>₹14,85,200</h3><small><i class="fa-solid fa-arrow-up"></i> +18.4% vs last month</small></div></div>
            <div class="col-md-4"><div class="stat-box"><p>Processed Invoices</p><h3>8,420 Bills</h3><small><i class="fa-solid fa-bolt"></i> Redis Queue Active</small></div></div>
            <div class="col-md-4"><div class="stat-box"><p>Active Team Seats</p><h3>12 Members</h3><small><i class="fa-solid fa-user-group"></i> Role-Based Scoped</small></div></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row g-4 mt-4">
      <div class="col-md-4"><div class="feature-box h-100"><div class="f-icon blue"><i class="fa-solid fa-database"></i></div><h4>Multi-Tenant Isolation</h4><p>Single DB architecture with row-level security ensuring total data isolation.</p></div></div>
      <div class="col-md-4"><div class="feature-box h-100"><div class="f-icon purple"><i class="fa-solid fa-file"></i></div><h4>Async Invoice Engine</h4><p>Generate batch PDF GST invoices seamlessly utilizing background Redis queues.</p></div></div>
      <div class="col-md-4"><div class="feature-box h-100"><div class="f-icon green"><i class="fa-solid fa-shield-halved"></i></div><h4>Granular RBAC Access</h4><p>Assign fine-grained permissions across Admins, Managers, and Audit Staff.</p></div></div>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section id="about" class="about-dark py-5">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8"><span class="small-blue">OUR PLATFORM MISSION</span><h2>Architected for Scalable B2B Commerce</h2><p>VyapaarFlow OS bridges the gap between complex legacy ERP systems and modern cloud-native SaaS agility.</p></div>
    </div>
    <div class="row g-5 mt-4 align-items-start">
      <div class="col-lg-7">
        <h3>Built for Growing Indian & Global Enterprises</h3>
        <p class="para-light">Traditional ERP platforms are notoriously slow, expensive, and require dedicated IT departments.</p>
        <div class="check-list">
          <div class="check-item d-flex gap-3 mb-3"><div class="check-icon"><i class="fa-solid fa-check"></i></div><div><strong>Subdomain Multi-tenancy:</strong> Automatic tenant scoping via subdomains.</div></div>
          <div class="check-item d-flex gap-3 mb-3"><div class="check-icon"><i class="fa-solid fa-check"></i></div><div><strong>Tax Compliance:</strong> Built-in HSN/SAC code calculator.</div></div>
          <div class="check-item d-flex gap-3"><div class="check-icon"><i class="fa-solid fa-check"></i></div><div><strong>High Security:</strong> End-to-end encryption with hourly backups.</div></div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="tech-stack-card p-4">
          <div class="row mb-3"><div class="col-8"><h5><i class="fa-solid fa-microchip me-2"></i>Tech Stack</h5></div><div class="col-4 text-end"><span class="badge bg-primary">Enterprise Ready</span></div></div>
          <div class="row g-3">
            <div class="col-6"><div class="stack-box"><span>Backend</span><p>PHP 8.3 & Laravel</p></div></div>
            <div class="col-6"><div class="stack-box"><span>Database</span><p>MySQL Row Isolation</p></div></div>
            <div class="col-6"><div class="stack-box"><span>Queue & Cache</span><p>Redis Async Cluster</p></div></div>
            <div class="col-6"><div class="stack-box"><span>UI Framework</span><p>Tailwind & Chart.js</p></div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES MODULES -->
<section id="services" class="services-dark py-5">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8"><span class="small-blue">PLATFORM FEATURES</span><h2>Comprehensive SaaS Operating Modules</h2><p>Explore the built-in modules designed to handle all aspects of B2B commerce.</p></div>
    </div>
    <div class="row g-4 mt-4">
      <div class="col-lg-4 col-md-6"><div class="service-dark-card h-100"><div class="s-icon blue"><i class="fa-solid fa-file-invoice"></i></div><h4>GST Billing & Invoicing</h4><p>Generate e-invoices with automatic GST validation.</p></div></div>
      <div class="col-lg-4 col-md-6"><div class="service-dark-card h-100"><div class="s-icon purple"><i class="fa-solid fa-users"></i></div><h4>Team & Role Scoping</h4><p>Define access permissions down to read-only or billing admin.</p></div></div>
      <div class="col-lg-4 col-md-6"><div class="service-dark-card h-100"><div class="s-icon green"><i class="fa-solid fa-chart-line"></i></div><h4>Revenue Analytics</h4><p>Track cash flow and profit margins through interactive charts.</p></div></div>
      <div class="col-lg-4 col-md-6"><div class="service-dark-card h-100"><div class="s-icon yellow"><i class="fa-solid fa-cubes"></i></div><h4>Inventory Sync</h4><p>Monitor SKU stock levels in real-time with low-stock warnings.</p></div></div>
      <div class="col-lg-4 col-md-6"><div class="service-dark-card h-100 active"><div class="s-icon blue"><i class="fa-solid fa-globe"></i></div><h4>Custom Subdomains</h4><p>Dedicated subdomain pointer and whitelabel customer portal.</p></div></div>
      <div class="col-lg-4 col-md-6"><div class="service-dark-card h-100"><div class="s-icon pink"><i class="fa-solid fa-headset"></i></div><h4>24/7 SLA Support</h4><p>Enterprise-grade uptime guarantee with dedicated managers.</p></div></div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact" class="contact-dark py-5">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-7"><span class="small-blue">GET IN TOUCH</span><h2>Contact Enterprise Sales & Support</h2><p>Have questions regarding tenant integration or pricing?</p></div>
    </div>
    <div class="row justify-content-center mt-4">
      <div class="col-lg-8">
        <div class="contact-form-card p-4">
          <form class="row g-3">
            <div class="col-md-6"><label class="form-label">Full Name</label><input type="text" class="form-control" placeholder="Harshit Prajapati"></div>
            <div class="col-md-6"><label class="form-label">Business Email</label><input type="email" class="form-control" placeholder="harshit@company.com"></div>
            <div class="col-12"><label class="form-label">Inquiry Category</label><select class="form-select"><option>Request Platform Sales Demo</option><option>Technical Question</option><option>Billing & Subscription</option></select></div>
            <div class="col-12"><label class="form-label">Message</label><textarea class="form-control" rows="4" placeholder="Tell us about your company..."></textarea></div>
            <div class="col-12"><button type="submit" class="btn btn-primary w-100"><i class="fa-solid fa-paper-plane me-2"></i>Send Inquiry</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer-dark py-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4"><a href="#" class="footer-logo"><img src="images/logo.png" alt="logo" height="35"></a><p class="footer-desc mt-3">Automate your business with VyapaarFlow OS. Secure multi-tenant architecture.</p><div class="d-flex gap-3 footer-social"><a href="#"><i class="fa-brands fa-twitter"></i></a><a href="#"><i class="fa-brands fa-linkedin-in"></i></a><a href="#"><i class="fa-brands fa-github"></i></a><a href="#"><i class="fa-brands fa-youtube"></i></a></div></div>
      <div class="col-lg-2 col-6"><h6 class="footer-title">Product</h6><ul class="list-unstyled footer-links"><li><a href="#">Home</a></li><li><a href="#about">About</a></li><li><a href="#services">Services</a></li><li><a href="#">Dashboard</a></li></ul></div>
      <div class="col-lg-2 col-6"><h6 class="footer-title">Company</h6><ul class="list-unstyled footer-links"><li><a href="#contact">Contact Sales</a></li><li><a href="#">Pricing</a></li><li><a href="#">Privacy</a></li><li><a href="#">Security SLA</a></li></ul></div>
      <div class="col-lg-4"><h6 class="footer-title">Get platform updates</h6><div class="input-group"><input type="email" class="form-control" placeholder="Enter business email"><button class="btn btn-primary">Subscribe</button></div></div>
    </div>
    <hr class="mt-4">
    <div class="row"><div class="col-md-6"><span>VyapaarFlow OS © 2026 Multi-Tenant B2B Platform.</span></div><div class="col-md-6 text-md-end"><a href="#about" class="me-3">Architecture</a><a href="#" class="me-3">Security SLA</a><a href="#contact">Support</a></div></div>
  </div>
</footer>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>