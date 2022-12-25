
<?php include_once "../includes/admin_header.php"; ?>

<main>
   <div class="container-fluid px-4">
       <h1 class="mt-4">Home Page</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Home Page</li>
        </ol>

       <div class="card mb-4">
           <div class="card-body">
               <div class="mb-3">
                    <label for="formFileSm" class="form-label">Home Page Cover Photo</label>
                    <div class="d-flex justify-content-between align-items-center">
                        <input class="form-control" id="formFileSm" type="file">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input class="form-control" id="inputLastName" name="title" type="text" />
                        <label for="inputLastName">Title</label>
                    </div>
                </div>
                
                <div class="mb-3">
                    <div class="form-floating">
                        <input class="form-control" id="inputLastName" name="sub_title" type="text" />
                        <label for="inputLastName">Sub Title</label>
                    </div>
                </div>

                <div class="mt-4 mb-0">
                    <div class="d-grid">
                        <button class="btn btn-primary btn-block" type="submit" name="register">Store Home</button>
                    </div>
                </div>
           </div>
       </div>
       <div style="height: 100vh"></div>
   </div>
</main>



<?php include "../includes/admin_footer.php"; ?>