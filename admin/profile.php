<?php 
include_once "../includes/admin_header.php"; 
$query = "SELECT * FROM `users` WHERE email='{$_SESSION['email']}'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
?>

<main>
   <div class="container-fluid px-4">
       <h1 class="mt-4">Profile Page</h1>
       <ol class="breadcrumb mb-4">
           <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
           <li class="breadcrumb-item active">Profile</li>
       </ol>
        <div class="mb-4 d-flex" style="justify-content: space-between;">
            <div class="card col-md-3">
                <div class="card-body d-flex" style="flex-direction: column;">
                    <img src="<?php echo base_url(); ?>/assets/photos/profile_blank.png" alt="Profile" height="200" style="margin-bottom: 0.7em;">
                    <ul class="list-group">
                        <li class="list-group-item">First Name:  <?php echo $row['first_name']; ?> </li>
                        <li class="list-group-item">Last Name: <?php echo $row['last_name']; ?></li>
                        <li class="list-group-item">Email: <?php echo $row['email']; ?></li>
                    </ul>
                </div>
            </div>

            <div class="card col-md-8">
                <div class="card-body">
                    <?php echo $error; ?>
                    <form action="register.php" method="post">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputFirstName" name="first_name" type="text" placeholder="Enter your first name" value="<?php echo $row['first_name']; ?>" />
                                    <label for="inputFirstName">First name</label>
                                </div>
                                <?php echo $first_nameError; ?>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="inputLastName" name="last_name" type="text" placeholder="Enter your last name"  value="<?php echo $row['last_name']; ?>"  />
                                    <label for="inputLastName">Last name</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com"  value="<?php echo $row['email']; ?>"  />
                            <label for="inputEmail">Email address</label>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Create a password" />
                                    <label for="inputPassword">Password</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputPasswordConfirm" type="password" name="password_confirmation" placeholder="Confirm password" />
                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                </div>
                                <?php echo $password_ConfirmationError; ?>
                            </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <button class="btn btn-primary btn-block" type="submit" name="register">Update Account</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
       <div style="height: 100vh"></div>
       <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
   </div>
</main>



<?php include "../includes/admin_footer.php"; ?>