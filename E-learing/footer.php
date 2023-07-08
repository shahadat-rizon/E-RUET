<!---start footer-->
<footer class="container-fluid bg-dark text-center p-2">
  <small class="text-white">Copyright &copy;2023 || Designed by Riz Pvt Ltd || <a href="#Login" data-bs-toggle="modal" data-bs-target="#AdminLoginModalCenter">Admin Login </a></small>
</footer>
<!---End footer--->

<!---start regestration form--->

<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="stuRegModalCenterLabel"><b>Student Registration</b></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!---Start Student Regestration--->
        <form>
          <div class="form-group">
            <i class="fas fa-user "></i><label for="stuname" class="pl-2 font-weight-bold"><b> Name</b></label><input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname"><br>
          </div>
          <div class="form-group">
            <i class="fas fa-envelope "></i><label for="stumail" class="pl-2 font-weight-bold"><b> Email</b></label><input type="email" class="form-control" placeholder="Email" name="stumail" id="stumail">
            <small class="form-text"> We will never share your email with anyone else.</small>
          </div>
          <br>
          <div class="form-group">
            <i class="fas fa-key "></i><label for="stupass" class="pl-2 font-weight-bold"><b>New Password</b></label><input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass"><br>
          </div>
        </form>
        <!---End Student Regestration--->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="addstu()">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
<!---End regestration form--->

<!---start login form--->

<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="stuLoginModalCenterLabel"><b>Student Login</b></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!---Start Student login form--->
        <form id="stuLoginForm">
          <div class="form-group">
            <i class="fas fa-envelope "></i><label for="stuLogmail" class="pl-2 font-weight-bold"><b> Email</b></label><input type="email" class="form-control" placeholder="Email" name="stuLogmail" id="stuLogmail">
          </div>
          <br>
          <div class="form-group">
            <i class="fas fa-key "></i><label for="stuLogpass" class="pl-2 font-weight-bold"><b> Password</b></label><input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass"><br>
          </div>
        </form>
        <!---End Student login form--->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="stuLoginBtn">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

      </div>
    </div>
  </div>
</div>
<!---End login form--->

<!---start Adminlogin form--->

<!-- Modal -->
<div class="modal fade" id="AdminLoginModalCenter" tabindex="-1" aria-labelledby="AdminLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="AdminLoginModalCenterLabel"><b>Admin Login</b></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!---Start Student login form--->
        <form id="AdminLoginForm">
          <div class="form-group">
            <i class="fas fa-envelope "></i><label for="AdminLogmail" class="pl-2 font-weight-bold"><b> Email</b></label><input type="email" class="form-control" placeholder="Email" name="AdminLogmail" id="AdminLogmail">
          </div>
          <br>
          <div class="form-group">
            <i class="fas fa-key "></i><label for="AdminLogpass" class="pl-2 font-weight-bold"><b> Password</b></label><input type="password" class="form-control" placeholder="Password" name="AdminLogpass" id="AdminLogpass"><br>
          </div>
        </form>
        <!---End Student login form--->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="AdminLoginBtn">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

      </div>
    </div>
  </div>
</div>
<!---End Adminlogin form--->
<!--Jquery and Bootstrap JS-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/all.min.js"></script>

<!---Student Ajex Call Javascript--->
<script type="text/javascript" src="js/ajexrequest.js"> </script>

</body>

</html>