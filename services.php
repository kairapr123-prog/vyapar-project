<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VyapaarFlow OS - Services</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"> 
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-custom">
  <div class="container">
    <a href="#" class="logo"><img src="images/logo.png" alt="logo" height="38"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link px-3" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link px-3" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link px-3 active" href="services.php">Services</a></li>
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

<!-- HERO -->
<section class="hero-section text-center py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <div class="hero-badge mb-3"><i class="fa-solid fa-layer-group me-2"></i>Next-Gen Enterprise Capabilities</div>
        <h1 class="display-5 fw-bold text-white mb-3">Architecting Your Business <span>Workflow Engine</span></h1>
        <p class="lead text-muted mx-auto mb-4">Accelerate operations, simplify GSTR compliance, and deploy AI analytics with VyapaarFlow OS.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <a href="#configurator" class="btn btn-navy-primary"><i class="fa-solid fa-sliders me-2"></i>Configure Solution</a>
          <a href="#matrix" class="btn btn-outline-navy"><i class="fa-solid fa-table-list me-2"></i>Compare Modules</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 4 PILLARS -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-7">
        <h6 class="small-blue">ENTERPRISE ARCHITECTURE</h6>
        <h2 class="fw-bold text-white">4 Core Service Pillars</h2>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3"><div class="pillar-card h-100"><div class="icon-box"><i class="fa-solid fa-cubes"></i></div><h4 class="h5 fw-bold text-white mb-2">Modular Core SaaS</h4><p class="text-muted small mb-3">Scalable tenant isolation and GST compliance built-in.</p><ul class="list-unstyled text-muted small mb-4"><li class="mb-2"><i class="fa-solid fa-check me-2"></i>Multi-tenant isolation</li><li class="mb-2"><i class="fa-solid fa-check me-2"></i>Multi-currency billing</li><li><i class="fa-solid fa-check me-2"></i>Auto-scaling</li></ul><button class="btn btn-outline-navy btn-sm w-100 mt-auto">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></button></div></div>
      <div class="col-md-6 col-lg-3"><div class="pillar-card h-100"><div class="icon-box"><i class="fa-solid fa-network-wired"></i></div><h4 class="h5 fw-bold text-white mb-2">Advanced API Integration</h4><p class="text-muted small mb-3">Unified connectivity with ERP connectors and REST support.</p><ul class="list-unstyled text-muted small mb-4"><li class="mb-2"><i class="fa-solid fa-check me-2"></i>Tally & SAP Connectors</li><li class="mb-2"><i class="fa-solid fa-check me-2"></i>OpenAPI Docs</li><li><i class="fa-solid fa-check me-2"></i>99.99% Uptime</li></ul><button class="btn btn-outline-navy btn-sm w-100 mt-auto">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></button></div></div>
      <div class="col-md-6 col-lg-3"><div class="pillar-card h-100"><div class="icon-box"><i class="fa-solid fa-brain"></i></div><h4 class="h5 fw-bold text-white mb-2">Real-time AI Analytics</h4><p class="text-muted small mb-3">Predictive intelligence with anomaly detection and forecasting.</p><ul class="list-unstyled text-muted small mb-4"><li class="mb-2"><i class="fa-solid fa-check me-2"></i>Tax Reconciliation</li><li class="mb-2"><i class="fa-solid fa-check me-2"></i>Demand Signals</li><li><i class="fa-solid fa-check me-2"></i>Cash Flow Prediction</li></ul><button class="btn btn-outline-navy btn-sm w-100 mt-auto">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></button></div></div>
      <div class="col-md-6 col-lg-3"><div class="pillar-card h-100"><div class="icon-box"><i class="fa-solid fa-headset"></i></div><h4 class="h5 fw-bold text-white mb-2">Multi-channel Support</h4><p class="text-muted small mb-3">24/7 Premium support with dedicated success managers.</p><ul class="list-unstyled text-muted small mb-4"><li class="mb-2"><i class="fa-solid fa-check me-2"></i>Dedicated Manager</li><li class="mb-2"><i class="fa-solid fa-check me-2"></i>15-Min Critical Response</li><li><i class="fa-solid fa-check me-2"></i>Priority Access</li></ul><button class="btn btn-outline-navy btn-sm w-100 mt-auto">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></button></div></div>
    </div>
  </div>
</section>

<!-- CONFIGURATOR -->
<section id="configurator" class="py-5">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5">
        <h6 class="small-blue">SOLUTION ESTIMATOR</h6>
        <h2 class="fw-bold text-white mb-3">Tailor Your OS Features</h2>
        <p class="text-muted mb-4">Select your active user base and enterprise add-ons to configure ideal package.</p>
        <div class="p-3 border rounded-3 d-flex gap-3 align-items-center"><i class="fa-solid fa-shield-halved fs-3"></i><div><h6 class="text-white mb-0">SOC2 Type II Certified</h6><small class="text-muted">Enterprise-grade encryption.</small></div></div>
      </div>
      <div class="col-lg-7">
        <div class="configurator-box">
          <div class="mb-4"><label class="form-label text-white fw-bold d-flex justify-content-between">Active Users: <span class="text-primary">50 Users</span></label><input type="range" class="form-range" min="10" max="500" value="50"></div>
          <div class="mb-4"><label class="form-label text-white fw-bold d-flex justify-content-between">API Calls: <span class="text-primary">100k Calls</span></label><input type="range" class="form-range" min="10" max="1000" value="100"></div>
          <div class="row g-2 mb-4"><div class="col-md-6"><div class="form-check p-3 border rounded"><input class="form-check-input" type="checkbox" checked><label class="form-check-label text-white ms-2">AI Analytics (+₹2k)</label></div></div><div class="col-md-6"><div class="form-check p-3 border rounded"><input class="form-check-input" type="checkbox"><label class="form-check-label text-white ms-2">ERP Connectors (+₹3k)</label></div></div></div>
          <hr><div class="d-flex justify-content-between align-items-center"><div><span class="text-muted small">Monthly Investment</span><h3 class="text-white fw-bold mb-0">₹8,500 <span class="fs-6 text-muted fw-normal">/ month</span></h3></div><a href="#cta" class="btn btn-navy-primary">Lock In Estimate</a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MATRIX -->
<section id="matrix" class="py-5">
  <div class="container">
    <div class="row justify-content-center text-center mb-5"><div class="col-lg-7"><h6 class="small-blue">SERVICE MATRIX</h6><h2 class="fw-bold text-white">Compare Edition Capabilities</h2></div></div>
    <div class="row"><div class="col-12"><div class="table-responsive matrix-table"><table class="table table-dark mb-0"><thead><tr><th>Service / Capability</th><th class="text-center">Standard</th><th class="text-center">Pro SaaS</th><th class="text-center">Enterprise</th></tr></thead><tbody><tr><td>Tenant Architecture</td><td class="text-center">Shared Cloud</td><td class="text-center">Isolated</td><td class="text-center">Dedicated VPC</td></tr><tr><td>API Rate Limit</td><td class="text-center">1k req/min</td><td class="text-center">10k req/min</td><td class="text-center">Unlimited</td></tr><tr><td>AI Insights</td><td class="text-center"><i class="fa-solid fa-xmark text-danger"></i></td><td class="text-center"><i class="fa-solid fa-check text-success"></i></td><td class="text-center"><i class="fa-solid fa-check text-success"></i> Full</td></tr></tbody></table></div></div></div>
  </div>
</section>

<!-- CTA -->
<section id="cta" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="cta-banner">
          <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0"><h2 class="fw-bold text-white mb-2">Ready to Upgrade Your Operations?</h2><p class="text-muted mb-0">Join 500+ businesses optimizing with VyapaarFlow OS.</p></div>
            <div class="col-lg-4 text-lg-end d-flex gap-3 justify-content-lg-end"><button class="btn btn-navy-primary"><i class="fa-solid fa-calendar-check me-2"></i>Schedule Demo</button><button class="btn btn-outline-navy"><i class="fa-solid fa-book me-2"></i>Explore Docs</button></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer-dark">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4"><a href="#" class="footer-logo"><img src="images/logo.png" alt="logo" height="36"></a><p class="footer-desc mt-3">Automate your business with VyapaarFlow OS.</p></div>
      <div class="col-lg-2 col-6"><h6 class="footer-title">Product</h6><ul class="list-unstyled footer-links"><li><a href="#">Home</a></li><li><a href="#">About</a></li><li><a href="#">Services</a></li><li><a href="#">Dashboard</a></li></ul></div>
      <div class="col-lg-2 col-6"><h6 class="footer-title">Company</h6><ul class="list-unstyled footer-links"><li><a href="#">Contact</a></li><li><a href="#">Pricing</a></li><li><a href="#">Privacy</a></li><li><a href="#">Security SLA</a></li></ul></div>
      <div class="col-lg-4"><h6 class="footer-title">Get updates</h6><div class="input-group"><input type="email" class="form-control" placeholder="Enter email"><button class="btn btn-primary">Subscribe</button></div></div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>