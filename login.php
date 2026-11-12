<?php
session_start();
include 'dbconnect.php';
if(isset($_POST['login'])){
  $id = $_POST['loginid'];
  $pass = $_POST['password'];
  $q = "SELECT * FROM userss WHERE email='$id' OR username='$id' LIMIT 1";
  $res = mysqli_query($conn,$q);
  if(mysqli_num_rows($res)==1){
    $row=mysqli_fetch_assoc($res);
    if(password_verify($pass,$row['password'])){
      $_SESSION['user']=$row['username'];
      echo "<script>alert('Login Success'); location.href='dashboard.php'</script>";
    } else { echo "<script>alert('Wrong Password')</script>"; }
  } else { echo "<script>alert('User Not Found')</script>"; }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - VyapaarFlow OS</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Inter', sans-serif;
}

body {
  background: #686d79;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}

.card {
  width: 95%;
  max-width: 950px;
  background: #101A2E;
  border: 1px solid #1E293B;
  border-radius: 20px;
  display: flex;
  overflow: hidden;
}

.left {
  width: 45%;
  padding: 50px;
  border-right: 1px solid #1E293B;
}

.logo {
  color: #38BDF8;
  font-weight: 700;
  font-size: 13px;
  margin-bottom: 35px;
}

.logo i {
  margin-right: 6px;
}

.left h1 {
  font-size: 36px;
  font-weight: 700;
  line-height: 1.2;
  margin-bottom: 15px;
  color: #fff;
}

.left p {
  color: #64748B;
  font-size: 14px;
  line-height: 1.6;
  margin-bottom: 40px;
}

.enc-box {
  background: #0F172A;
  border: 1px solid #1E293B;
  border-radius: 12px;
  padding: 16px;
  display: flex;
  gap: 12px;
  align-items: center;
}

.enc-box i {
  width: 38px;
  height: 38px;
  background: #122a2e;
  color: #2DD4BF;
  border-radius: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 16px;
}

.enc-box h4 {
  font-size: 13px;
  font-weight: 600;
}

.enc-box span {
  font-size: 11px;
  color: #64748B;
}

.right {
  width: 55%;
  background: #0F172A;
  padding: 45px;
}

.right h2 {
  font-size: 26px;
  font-weight: 700;
  color: #fff;
}

.sub {
  color: #64748B;
  font-size: 13px;
  margin: 8px 0 28px 0;
}

.sub a {
  color: #38BDF8;
  text-decoration: none;
  font-weight: 600;
}

.field {
  margin-bottom: 20px;
}

.field label {
  display: block;
  font-size: 12px;
  color: #94A3B8;
  margin-bottom: 7px;
  font-weight: 600;
}

.input-wrap {
  position: relative;
}

.input-wrap i {
  position: absolute;
  left: 14px;
  top: 50%;
  transform: translateY(-50%);
  color: #475569;
  font-size: 14px;
}

.input-wrap .right-icon {
  left: auto;
  right: 14px;
  cursor: pointer;
}

.input {
  width: 100%;
  background: #121C2E;
  border: 1px solid #1E293B;
  border-radius: 10px;
  padding: 13px 14px 13px 40px;
  color: #fff;
  outline: none;
  font-size: 14px;
}

.input:focus {
  border-color: #38BDF8;
}

.top-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.top-row a {
  font-size: 12px;
  color: #38BDF8;
  text-decoration: none;
}

.check {
  display: flex;
  gap: 8px;
  align-items: center;
  font-size: 12px;
  color: #94A3B8;
  margin-bottom: 25px;
}

.btn {
  width: 100%;
  background: #0EA5E9;
  border: none;
  padding: 13px;
  border-radius: 10px;
  color: #fff;
  font-weight: 700;
  font-size: 14px;
  cursor: pointer;
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

<div class="card">
  <div class="left">
    <div class="logo"><i class="fa-solid fa-cube"></i> VyapaarFlow OS</div>
    <h1>Welcome Back to Your Flow</h1>
    <p>Access your multi-tenant workspace, monitor active queues and manage GST billing seamlessly.</p>

    <div class="enc-box">
      <i class="fa-solid fa-shield-halved"></i>
      <div>
        <h4>End-to-End Encryption</h4>
        <span>Database Row-Level Isolation Active</span>
      </div>
    </div>
  </div>

  <div class="right">
    <h2>Log In to Workspace</h2>
    <p class="sub">Don't have an account? <a href="signup.php">Sign Up Free</a></p>

    <form method="POST">
      <div class="field">
        <label>Workspace Subdomain / Email</label>
        <div class="input-wrap">
          <i class="fa-solid fa-envelope"></i>
          <input class="input" type="text" name="loginid" placeholder="your-company" required>
        </div>
      </div>

      <div class="field">
        <div class="top-row">
          <label>Password</label>
          <a href="#">Forgot Password?</a>
        </div>
        <div class="input-wrap">
          <i class="fa-solid fa-lock"></i>
          <input class="input" type="password" name="password" placeholder="••••••••" required>
          <i class="fa-solid fa-eye right-icon"></i>
        </div>
      </div>

      <div class="check">
        <input type="checkbox" checked>
        <span>Remember this device for 30 days</span>
      </div>

      <button class="btn" name="login"><i class="fa-solid fa-arrow-right-to-bracket"></i> Log In to Dashboard</button>
    </form>
  </div>
</div>

</body>
</html>