function validar() {
    let name = document.getElementById("name").value;
    let lasname = document.getElementById("lasname").value;
    let idnumbre = document.getElementById("idnumbre").value;
    let birthdate = document.getElementById("birthdate").value;
    let residencecity = document.getElementById("residencecity").value;
    let neighborhood = document.getElementById("neighborhood").value;
    let phonenumber = document.getElementById("phonenumber").value;

    valor = new Date(date_birth)


    console.log("validar")

    if (name === "" || lasname === "" || idnumbre === "" || birthdate === "" || residencecity === "" || neighborhood === "" || phonenumber === "") {

        alert("You must fill all the fields");
        return false;

    }
    else
        if (isNaN(idnumbre)) {
            alert("The Identification field must be numeric");
            return false;
        }

        else
            if (isNaN(phonenumber)) {
                alert("The Phone Number field must be numeric");
                return false;
            }
            else
                if (phonenumber.length > 10) {
                    alert("The Phone Number must be 10 digits");
                    return false;
                }
              

    return true;

}