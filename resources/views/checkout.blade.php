@extends('layout.app')

<div class="container" style="margin-top: 70px;height:100%;">
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3 sticky-top">
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (INR)</span>
                    <strong>₹ {{ $total }}</strong>
                </li>
            </ul>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Contact Details</h4>
            <form class="needs-validation" novalidate="" action="{{ route('booking') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required="">
                        <div class="invalid-feedback"> Valid first name is required. </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required="">
                        <div class="invalid-feedback"> Valid last name is required. </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                </div>
                <div class="mb-3">
                    <label for="email">Mobile Number</label>
                    <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="+91" required>
                    <div class="invalid-feedback"> Please enter a valid Mobile Number for shipping updates. </div>
                </div>
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required="">
                    <div class="invalid-feedback"> Please enter your shipping address. </div>
                </div>
                <div class="mb-3">
                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment or suite">
                </div>
                <center><button class="btn btn-primary btn-lg btn-block" type="submit">Book Now</button></center>
            </form>
        </div>
    </div>
    <div style="height: 15%"></div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© Shree Tulja Bhavani Arts</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="https://www.instagram.com/_shree_tuljabhavani_arts_/">Instagram</a></li>
        </ul>
    </footer>
</div>

<script>
    (function () {
  'use strict'

  window.addEventListener('load', function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation')

    // Loop over them and prevent submission
    Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
  }, false)
}())
</script>