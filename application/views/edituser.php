<div class="container">
  <br>
  <div class="row bg-dark text-white pt-2">

    <div class="col-sm-12 d-flex justify-content-center">
      <h2> <b>Update</b></h2>
    </div>

  </div>



  <form action="<?php echo base_url() . "CreateUser/updateUser?id=" . $userdata->id ?>" method="post" onsubmit="return validar();" class="pl-3 pr-3 pb-3 shadow">
    <br>

    <div class="row">
      <div class="form-group col-sm-12 col-md-6"">
        <label>Name</label>
        <input type="text" value="<?php echo $userdata->name ?>" class="form-control" name="name" aria-describedby="emailHelp" required>

      </div>

      <div class="form-group col-sm-12 col-md-6"">
        <label>Last Name</label>
        <input type="text" value="<?php echo $userdata->lastname ?>" class="form-control" name="lastname">
      </div>
    </div>

    <div class="row">
      <div class="form-group col-sm-12 col-md-6"">
        <label>Identification</label>
        <input type="text" value="<?php echo $userdata->idnumbre ?>" class="form-control" name="idnumbre">
      </div>

      <div class="form-group col-sm-12 col-md-6"">
        <label>birthdate</label>
        <input type="date" value="<?php echo $userdata->birthdate ?>" class="form-control" name="birthdate">
      </div>
    </div>


    <div class="row">
      <div class="form-group col-sm-12 col-md-6"">
        <label>City</label>
        <input type="text" value="<?php echo $userdata->residencecity ?>" class="form-control" name="residencecity" aria-describedby="emailHelp">

      </div>

      <div class="form-group col-sm-12 col-md-6"">
        <label>Neighborhood</label>
        <input type="text" value="<?php echo $userdata->neighborhood ?>"" class=" form-control" name="neighborhood">
      </div>
    </div>

    <div class="row">
      <div class="form-group col-sm-12 col-md-6"">
        <label>Phone Number</label>
        <input type="number" value="<?php echo $userdata->phonenumber ?>"" class=" form-control" name="phonenumber" aria-describedby="emailHelp">

      </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-danger" href="http://localhost:81/moment1" role="button">Cancelar</a>

  </form>
</div>