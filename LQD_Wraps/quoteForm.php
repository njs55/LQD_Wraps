<div  class="form-wrapper">
   <h1 class="center">Get a quote today!</h1>
   <br />
   <form id="myForm" action = "sendQuote.php" method = "POST">

      <!--User enters First and Last name in an inline format-->
      <div class="form-inline">
         <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" name="inputFirstName" class="form-control" id="firstName" placeholder="First Name">
         </div>
         <span class="block-space"></span>
         <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" name="inputLastName" class="form-control" id="lastName" placeholder="Last Name">
         </div>
      </div>
      <br />

      <!--User enters Email address and then phone number-->
      <fieldset class="form-group">
         <label for="exampleInputEmail1">Email address</label>
         <input type="email" name="inputEmail" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
         <small class="text-muted">We'll never share your email with anyone else.</small>
      </fieldset>
      <fieldset class="form-group">
         <label for="phoneNumber">Phone Number</label>
         <input type="text" name="inputPhone" id="phoneNumber" class="form-control bfh-phone" placeholder="(555)555-555">
      </fieldset>

      <!--User enters their Car's make model and year in an inline format-->
      <div class="form-inline">
         <div class="form-group">
            <label for="make">Car Make</label>
            <input type="text" name="inputMake" class="form-control" id="make" placeholder="Car Make">
         </div>
         <span class="block-space"></span>
         <div class="form-group">
            <label for="model">Model</label>
            <input type="text" name="inputModel" class="form-control" id="model" placeholder="Car Model">
         </div>
         <span class="block-space"></span>
         <div class="form-group">
            <label for="year">Year</label>
            <input type="text" name="inputYear" class="form-control" id="year" placeholder="Car Year">
         </div>
      </div>
      <br />

      <!--User enters color of car or wheels they desire-->
      <fieldset class="form-group">
         <label for="color">Desired Color</label>
         <input type="text" name="inputColor" id="color" class="form-control" placeholder="Color">
      </fieldset>

      <!--User selects the type of finish they want from a drop down menu-->
      <fieldset class="form-group">
         <label for="exampleSelect1">Select Finish</label>
         <select name="inputFinish" class="form-control" id="exampleSelect1">
            <option>Matte</option>
            <option>Satin</option>
            <option>High Gloss</option>
         </select>
         <small class="text-muted">Matte is a flat finish with no shine.</small>
         <small class="text-muted">Satin finish is slighly shinier matte finish.</small>
         <small class="text-muted">High Gloss finish will resemble an OEM paint job.</small>
      </fieldset>

      <!--User decides if they would like their door jams dipped-->
      <div class="form-inline">
         <label for="make">Would you liked you door jams wrapped?</label>
      </div>
      <label class="radio-inline">
         <input type="radio" name="inputJams" id="inlineRadio1" value="1"> Yes
      </label>
      <label class="radio-inline">
         <input type="radio" name="inputJams" id="inlineRadio2" value="0"> No
      </label>
      <br /><br />

      <!--User selects what part of car is being wrapped-->
      <fieldset class="form-group">
         <label for="carWheels">What would you like wrapped?</label>
         <select class="form-control" name="inputCarWheels" id="carWheels">
            <option>Car</option>
            <option>Wheels</option>
            <option>Both</option>
         </select>
      </fieldset>

      <!--User enters addtional comments-->
      <fieldset class="form-group">
         <label for="exampleTextarea">Additional Comments/Questions</label>
         <textarea name="inputComment" class="form-control" id="exampleTextarea" rows="3" placeholder="Example: I would like the roof to be black"></textarea>
      </fieldset>

      <!--User presses button to send information to database and email user_error-->
      <button type="submit" class="btn btn-primary">Request A Quote</button>
   </form>
</div>
