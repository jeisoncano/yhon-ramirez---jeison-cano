<div class="container">
  <br>
  <div class="row bg-dark text-white pt-2">

    <div class="col-sm-12 d-flex justify-content-center">
      <h2> <b>New Appointment</b></h2>
    </div>

  </div>



  <form action="<?php echo base_url() . "CreateUser/create" ?>" method="post" onsubmit="return validar();" class="pl-3 pr-3 pb-3 shadow">

  <br>
    <div class="row">
      <div class="form-group col-sm-12 col-md-6"">
        <label>Name</label>
        <input type=" text" class="form-control" name="name" aria-describedby="emailHelp" required>

      </div>


      <div class="form-group col-sm-12 col-md-6"">
        <label>Last Name</label>
        <input type=" text" class="form-control" name="lastname" required>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-sm-12 col-md-6"">
        <label>Identification</label>
        <input type=" number" class="form-control" name="idnumbre" required>
      </div>

      <div class="form-group col-sm-12 col-md-6"">
        <label>birthdate</label>
        <input type="date" class="form-control" name="birthdate" required>
      </div>
    </div>


    <div class="row">
      <div class="form-group col-sm-12 col-md-6"">
        <label>City</label>
        <input type=" text" class="form-control" name="residencecity" aria-describedby="emailHelp" required>
        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
      </div>

      <div class="form-group col-sm-12 col-md-6"">
        <label>Neighborhood</label>
        <input type=" text" class="form-control" name="neighborhood">
      </div>
    </div>

    <div class="row">
      <div class="form-group col-sm-12 col-md-6"">
        <label>Phone Number</label>
        <input type=" number" class="form-control" name="phonenumber" aria-describedby="emailHelp" required maxlength="10">
        <small id="emailHelp" class="form-text text-muted">You must enter a numerical data.</small>
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-danger" href="home" role="button">Cancelar</a>

  </form>
</div>