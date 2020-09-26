<div class="container">
  <div class="row bg-dark text-white">


    <div class="col-sm-12 d-flex justify-content-center">
      <h2> <b>Your Schedule</b></h2>
    </div>

  </div>


  <div class="table-responsive" style="height: 500px">
    <div style="background-color: #F0B27A;">
    

      <div class="form-row text-center mb-4 pb-3 d-flex justify-content-center">




        <?php
        foreach ($users as $user) {
          $usersRecordsTemplate = "
          <div class='row  m-2'>
          <div class='col-4'>
          <div class='card ' style='width: 18rem;'>
          <div class='card-body'>
                <h5 class='card-title'>{$user->name} {$user->lastname}</h5>
                <h6 class='card-subtitle mb-2 text-muted'>{$user->idnumbre} - Date:{$user->birthdate}</h6>
                <p class='card-text'><b>City:</b> {$user->residencecity} <br><b> Neighborhood:</b> {$user->neighborhood} <br><b>Phone Number:</b> {$user->phonenumber}</p>
                <div class='card-footer bg-transparent border-success'>
                <a href='http://localhost:81/moment1/CreateUser/editUser?id={$user->id}' class='card-link'>Edit</a>
                <a href='http://localhost:81/moment1/CreateUser/deleteUser?id={$user->id}' class='card-link text-danger'  >Delete</a>
                
          </div>
          </div>
          </div>
          </div>
          </div>
       ";
          echo $usersRecordsTemplate;
        }
        ?>
        </tr>



      </div>
    </div>
  </div>
</div>
