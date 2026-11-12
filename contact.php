<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VyapaarFlow OS - Contact</title>
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
        <li class="nav-item"><a class="nav-link px-3" href="services.php">Services</a></li>
        <li class="nav-item"><a class="nav-link px-3 active" href="contact.php">Contact</a></li>
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
        <div class="hero-badge mb-3">
          <span class="status-dot"></span>
          All Systems Operational (99.99% Uptime)
        </div>
        <h1 class="fw-bold text-white mb-3">Let's Architect Your <span>Enterprise Growth</span></h1>
        <p class="lead text-muted mx-auto">Connect with our solution architects to scale your B2B workflow and automate GSTR.</p>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT CARDS -->
<section class="py-4">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-3 col-md-6"><div class="contact-info-card h-100 p-4 text-center"><div class="contact-icon mb-3"><i class="fa-solid fa-briefcase"></i></div><h5 class="text-white fw-bold mb-1">Enterprise Sales</h5><p class="text-muted small mb-3">POCs, Custom SLA & Pricing</p><a href="mailto:sales@vyapaarflow.com" class="contact-link">sales@vyapaarflow.com</a></div></div>
      <div class="col-lg-3 col-md-6"><div class="contact-info-card h-100 p-4 text-center"><div class="contact-icon mb-3"><i class="fa-solid fa-code"></i></div><h5 class="text-white fw-bold mb-1">Tech Support</h5><p class="text-muted small mb-3">API & Tenant DB Queries</p><a href="mailto:support@vyapaarflow.com" class="contact-link">support@vyapaarflow.com</a></div></div>
      <div class="col-lg-3 col-md-6"><div class="contact-info-card h-100 p-4 text-center"><div class="contact-icon mb-3"><i class="fa-solid fa-handshake"></i></div><h5 class="text-white fw-bold mb-1">Partnerships</h5><p class="text-muted small mb-3">CA Alliances & Reseller</p><a href="mailto:partners@vyapaarflow.com" class="contact-link">partners@vyapaarflow.com</a></div></div>
      <div class="col-lg-3 col-md-6"><div class="contact-info-card h-100 p-4 text-center"><div class="contact-icon mb-3"><i class="fa-solid fa-phone"></i></div><h5 class="text-white fw-bold mb-1">Direct Hotline</h5><p class="text-muted small mb-3">Mon-Sat 9AM-8PM IST</p><a href="tel:+9118001234567" class="contact-link">+91 1800 123-4567</a></div></div>
    </div>
  </div>
</section>

<!-- FORM + LOCATION -->
<section class="py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-7">
        <div class="contact-form-box">
          <div class="row mb-3 align-items-center">
            <div class="col-8"><h3 class="text-white fw-bold mb-0">Send Enterprise Message</h3></div>
            <div class="col-4 text-end"><span class="badge bg-primary">Avg. 15 Mins</span></div>
          </div>
          <p class="text-muted mb-4">Provide details about your business requirements.</p>
          <form class="row g-3">
            <div class="col-md-6"><label class="form-label text-white">Full Name *</label><input type="text" class="form-control" placeholder="Harshit Prajapati" required></div>
            <div class="col-md-6"><label class="form-label text-white">Work Email *</label><input type="email" class="form-control" placeholder="harshit@company.com" required></div>
            <div class="col-md-6"><label class="form-label text-white">Company</label><input type="text" class="form-control" placeholder="Acme Enterprises"></div>
            <div class="col-md-6"><label class="form-label text-white">Phone *</label><input type="tel" class="form-control" placeholder="+91 98765 43210" required></div>
            <div class="col-md-6"><label class="form-label text-white">User Base</label><select class="form-select"><option>10-50 Users</option><option>50-250 Users</option><option>250-1000+ Users</option></select></div>
            <div class="col-md-6"><label class="form-label text-white">Topic</label><select class="form-select"><option>Schedule Demo</option><option>Multi-tenancy</option><option>GST API</option></select></div>
            <div class="col-12"><label class="form-label text-white">Project Brief *</label><textarea class="form-control" rows="4" placeholder="Mention your invoice volume, stack, requirements..." required></textarea></div>
            <div class="col-12"><button type="submit" class="btn btn-navy-primary btn-lg w-100"><i class="fa-solid fa-paper-plane me-2"></i>Submit Inquiry</button></div>
          </form>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="location-card p-4 mb-4">
          <h4 class="text-white fw-bold mb-3"><i class="fa-solid fa-building me-2"></i>Corporate HQ</h4>
          <p class="text-white fw-semibold mb-1">VyapaarFlow OS Pvt Ltd</p>
          <p class="text-muted small mb-3">Level 4, Cyber Tech Tower, Sector 62, Noida, UP - 201309</p>
          <div class="map-placeholder rounded-3 p-3 text-center border"><i class="fa-solid fa-map-location-dot fs-2 mb-2 d-block"></i><span class="text-white small d-block">Asia-South1 (Mumbai) & Noida R&D Lab</span><small class="text-muted">ISO 27001 & SOC2 Certified</small></div>
          <a href="https://maps.google.com" target="_blank" class="btn btn-outline-navy btn-sm w-100 mt-3"><i class="fa-solid fa-directions me-1"></i>Get Directions</a>
        </div>
        <div class="p-4 border rounded-4">
          <h6 class="text-white fw-bold mb-3"><i class="fa-solid fa-comments me-2"></i>Instant Assistance</h6>
          <div class="d-flex flex-column gap-2">
            <a href="#" class="btn btn-outline-navy w-100 text-start"><i class="fa-brands fa-whatsapp me-2"></i>Chat on WhatsApp</a>
            <button class="btn btn-outline-navy w-100 text-start"><i class="fa-solid fa-headset me-2"></i>Launch Live Chat</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-7"><h6 class="small-blue">GOT QUESTIONS?</h6><h2 class="fw-bold text-white">Frequently Asked Questions</h2></div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <div class="accordion custom-accordion" id="contactFaq">
          <div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">How fast can we set up subdomain?</button></h2><div id="faq1" class="accordion-collapse collapse" data-bs-parent="#contactFaq"><div class="accordion-body text-muted">Tenant subdomains are provisioned instantly with automated SSL.</div></div></div>
          <div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">Does it offer custom GSTR integration?</button></h2><div id="faq2" class="accordion-collapse collapse" data-bs-parent="#contactFaq"><div class="accordion-body text-muted">Yes, built-in tax engine validates HSN/SAC codes and generates JSON exports.</div></div></div>
          <div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">Is data shared across tenants?</button></h2><div id="faq3" class="accordion-collapse collapse" data-bs-parent="#contactFaq"><div class="accordion-body text-muted">No. Every query passes through strict Row-Level Security middleware.</div></div></div>
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