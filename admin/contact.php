<?php
include_once "../includes/admin_header.php";
$query = "SELECT * FROM `contacts`";
$result = mysqli_query($db, $query);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<main>
   <div class="container-fluid px-4">
       <h1 class="mt-4">Contact Message</h1>
       <ol class="breadcrumb mb-4">
           <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
           <li class="breadcrumb-item active">Contact</li>
       </ol>

       <div class="card mb-4">
           <div class="card-body">
               <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Contact Message List
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>message</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach($rows as $row) 
                            echo <<<ROW
                                <tr>
                                    <td>{$row['name']}</td>
                                    <td>{$row['email']}</td>
                                    <td>{$row['phone']}</td>
                                    <td>{$row['message']}</td>
                                    <td><a href="contact.php?delete_msg={$row['id']}" class="btn btn-danger">Delete</a></td>
                                </tr>
                            ROW;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
           </div>
       </div>
       <div style="height: 100vh"></div>
       <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
   </div>
</main>



<?php include "../includes/admin_footer.php"; ?>