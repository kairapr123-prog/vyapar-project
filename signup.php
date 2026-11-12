<!DOCTYPE html>
<html>
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"> 
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Inter', sans-serif;
}

body {
  background: #bfcae4;
  color: white;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
}

.container {
  width: 100%;
  max-width: 1050px;
  background: #285eca;
  border: 1px solid #1E293B;
  border-radius: 20px;
  display: flex;
  overflow: hidden;
}

.left {
  width: 45%;
  padding: 50px;
  background: #101A2E;
  display: flex;
  flex-direction: column;
  justify-content: center;
  border-right: 1px solid #1E293B;
}

.left h1 {
  font-size: 36px;
  font-weight: 700;
  margin-bottom: 15px;
  line-height: 1.2;
}

.left h1 span {
  color: #38BDF8;
}

.left p {
  color: #64748B;
  font-size: 14px;
  line-height: 1.7;
  margin-bottom: 35px;
}

.feature {
  display: flex;
  gap: 12px;
  margin-bottom: 22px;
  align-items: center;
}

.feature i {
  width: 36px;
  height: 36px;
  background: #121C2E;
  border: 1px solid #1E293B;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #38BDF8;
  font-size: 14px;
}

.feature h4 {
  font-size: 14px;
}

.feature p {
  font-size: 12px;
  margin: 0;
  color: #64748B;
}

.right {
  width: 55%;
  background: #0F172A;
  padding: 40px;
}

.right h2 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 6px;
}

.right .sub {
  color: #e2e6ec;
  font-size: 13px;
  margin-bottom: 25px;
}

.right .sub a {
  color: #38BDF8;
  text-decoration: none;
}

.field {
  margin-bottom: 16px;
}

.field label {
  display: block;
  font-size: 12px;
  color: #94A3B8;
  margin-bottom: 6px;
  font-weight: 600;
}

.field label i {
  margin-right: 6px;
  color: #38BDF8;
}

.input-box {
  position: relative;
}

.input-box i {
  position: absolute;
  left: 14px;
  top: 50%;
  transform: translateY(-50%);
  color: #475569;
  font-size: 13px;
}

.input {
  width: 100%;
  background: #121C2E;
  border: 1px solid #1E293B;
  padding: 12px 14px 12px 38px;
  border-radius: 10px;
  color: white;
  outline: none;
  font-size: 13px;
}

.input:focus {
  border-color: #38BDF8;
}

.row {
  display: flex;
  gap: 14px;
}

.row .field {
  flex: 1;
}

.btn {
  width: 100%;
  background: #0EA5E9;
  border: none;
  padding: 13px;
  border-radius: 10px;
  color: white;
  font-weight: 700;
  font-size: 14px;
  cursor: pointer;
  margin-top: 10px;
}

.btn i {
  margin-right: 6px;
}

.btn:hover {
  background: #0284C7;
}
  </style>
</head>
<body>
<div class="container">
  <div class="left">
    <h1>Start Your <span>14-Day Free Trial</span></h1>
    <p>Build your enterprise workflow with multi-tenant isolation and real-time intelligence.</p>
    
    <div class="feature"><i class="fa-solid fa-shield-halved"></i><div><h4>Zero Risk</h4><p>No credit card required</p></div></div>
    <div class="feature"><i class="fa-solid fa-bolt"></i><div><h4>Instant Setup</h4><p>Workspace ready in 60s</p></div></div>
    <div class="feature"><i class="fa-solid fa-lock"></i><div><h4>Bank-Grade Security</h4><p>Row-Level Isolation</p></div></div>
  </div>

  <div class="right">
    <h2>Create Account</h2>
    <p class="sub">Already have account? <a href="login.php">Log In</a></p>
    
    <form method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="field">
          <label><i class="fa-solid fa-user"></i>Username</label>
          <div class="input-box"><i class="fa-solid fa-user"></i><input class="input" type="text" name="username" placeholder="Harshit"></div>
        </div>
        <div class="field">
          <label><i class="fa-solid fa-phone"></i>Mobile</label>
          <div class="input-box"><i class="fa-solid fa-phone"></i><input class="input" type="text" name="mobile" placeholder="9876543210"></div>
        </div>
      </div>

      <div class="field">
        <label><i class="fa-solid fa-envelope"></i>Email</label>
        <div class="input-box"><i class="fa-solid fa-envelope"></i><input class="input" type="email" name="email" placeholder="name@company.com"></div>
      </div>

      <div class="field">
        <label><i class="fa-solid fa-location-dot"></i>Address</label>
        <div class="input-box"><i class="fa-solid fa-location-dot"></i><input class="input" type="text" name="address" placeholder="Lucknow, UP"></div>
      </div>

      <div class="field">
        <label><i class="fa-solid fa-image"></i>Profile Pic</label>
        <input type="file" name="profilepic" style="color:#64748B; font-size:13px;">
      </div>

      <div class="field">
        <label><i class="fa-solid fa-globe"></i>Workspace Subdomain</label>
        <div class="input-box"><i class="fa-solid fa-globe"></i><input class="input" type="text" name="subdomain" placeholder="your-company"></div>
      </div>

      <div class="row">
        <div class="field">
          <label><i class="fa-solid fa-key"></i>Password</label>
          <div class="input-box"><i class="fa-solid fa-lock"></i><input class="input" type="password" name="password"></div>
        </div>
        <div class="field">
          <label><i class="fa-solid fa-key"></i>Confirm</label>
          <div class="input-box"><i class="fa-solid fa-lock"></i><input class="input" type="password" name="cpassword"></div>
        </div>
      </div>

      <button class="btn" name="signup"><i class="fa-solid fa-rocket"></i> Launch Your Workspace</button>
    </form>
  </div>
</div>
</body>
</html>