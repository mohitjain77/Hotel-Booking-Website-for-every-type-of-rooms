

<div id="banner">
  <div class="container-fluid">
    <div class="row">
      <div class="bg">
        <div class="card">
          <form class="" action="index.php" method="post">
            <div class="box">
              <h3>hotel room enquiry</h3>
            <div class="input-wrapper">

              <input placeholder="full name" type="text" name="fullname" value="">
            </div>
            <div class="input-wrapper">
            <input placeholder="contact number" type="text" name="contactnumber" value="" required>
            </div>
            <div class="input-wrapper">

            <input placeholder="no. of rooms" type="number" name="numberofrooms" value="">
            </div>
            <div class="input-wrapper">

              <input placeholder="Select rooms" list="rooms" type="dropdown" name="typeofrooms" value="">
              <datalist id = "rooms">
                <option value = "MasterSuite">Master suite</option>
                <option value = "KingSizeRoom">King size room</option>
                <option value = "QueenSizeRoom">Queen size room</option>
                <option value = "Studio">Studio</option>
                <option value = "DoubleRoom">Double room</option>
                <option value = "SingleRoom">Single room</option>
              </datalist>
            </div>
            <div class="input-wrapper">

              <input placeholder="check-in" type="date" name="checkin" value="">
            </div>
            <div class="input-wrapper">

            <input placeholder="check-out" type="date" name="checkout" value="">
            </div>

            <div class="input-wrapper">
            <button onclick = "alertUser(event)" type="submit">book now</button>
            </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script type='text/javascript'>
  function alertUser(e){
    alert("Your room is successfully booked!!!");
  }
  </script>