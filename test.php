<script>
  function submitForSearch() {
    var gender = document.getElementsByName('gender');
    var marital_status = document.getElementsByName('marital_status')
    var age_from = document.getElementsByName('age_from')
    var age_to = document.getElementsByName('age_to')
    var height_from = document.getElementsByName('age_to')
    var height_to = document.getElementsByName('age_to')
    var manglik = document.getElementsByName('manglik')
    var physical_status = document.getElementsByName('physical_status')
    var caste_barrier = document.getElementsByName('caste_barrier')
    var employedin = document.getElementsByName('employedin')
    var countryliving = document.getElementsByName('country-dropdown1')
    var citizenship = document.getElementsByName('citizenship')
    
  }
</script>
<?php
$userdata = array(
            // "user_id" => $userid,
            "gender" => $this->input->post("gender"),
            "age_from" => $this->input->post("age_from"),
            "age_to" => $this->input->post("age_to"),
            "marital_status" => $this->input->post("marital_status"),
            "height_from" => $this->input->post("height_from"),  
            "height_to" => $this->input->post("height_to"), 
            "manglik" => $this->input->post("manglik"),
            "physical_status" => $this->input->post("physical_status"),  
            "caste_barrier" => $this->input->post("caste_barrier"),
            "employed_in" => $this->input->post("employedin"), 
            "countryliving" => $this->input->post("countryliving"),
            "citizenship" => $this->input->post("citizenship"),  
            "caste_barrier" => $this->input->post("caste_barrier"), 
        );

        ?>