<?php include '../views/header.php'; ?>
    <div class="container mt-5">
      <div class="card card-register">
        <h4 class="card-header">
          Sign Up
        </h4>
        <div class="card-body">
          <form>
            <div class="form-group">
              <label for="first-name">First name</label>
              <input type="text" class="form-control" id="first-name" placeholder="Enter your first name">
            </div>
            <div class="form-group">
              <label for="last-name">Last name</label>
              <input type="text" class="form-control" id="last-name" placeholder="Enter your last name">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email address">
            </div>
            <div class="form-group">
              <label for="tel">Phone</label>
              <input type="tel" class="form-control" placeholder="(555)-555-5555" id="tel">
            </div>
            <div class="form-group">
              <label for="dob">Date of birth</label>
              <input type="date" class="form-control" placeholder="" id="dob">
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label class="mr-sm-2" for="gender">Gender</label>
                  <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="gender">
                    <option selected>Choose one...</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                    <option value="3">Other</option>
                  </select>
                </div>
              </div>
              <div class="col">
                <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
              </div>
            </div>
          </form>
        </div>
      <div>
    </div>
<?php include '../views/footer.php'; ?>
