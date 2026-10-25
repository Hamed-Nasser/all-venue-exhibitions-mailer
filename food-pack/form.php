<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food Pack Africa 2026-27 – Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    body { background: #f1f3f6; font-family: Arial, Helvetica, sans-serif; }
    .form-container { max-width: 900px; margin: 2rem auto; background: #fff; padding: 2rem; border-radius: 10px; box-shadow: 0px 4px 15px rgba(0,0,0,0.1); }
    h2 { color: #2b7a0b; margin-bottom: 1.5rem; font-weight: 700; text-align: center; }
    label { font-weight: 600; color: #555; }
    .btn-submit { background-color: #38E31A; color: #fff; font-weight: 600; transition: all 0.3s ease; }
    .btn-submit:hover { background-color: #2bb209; color: #fff; }
    .expo-label { font-weight: 500; color: #333; }
    #expoSection.error { border: 2px solid red; padding: 10px; border-radius: 5px; background-color: #ffe6e6; }
  </style>
</head>
<body>
  <div class="container form-container">
    <img src="images/apphead.jpeg" class="img-fluid mb-4" alt="Food Pack Africa 2026-27">
    <h2>Please fill the form below:</h2>
    <form id="expoForm" method="post" action="thankyou.php">
      <div class="row g-3">
        <div class="col-md-6">
          <label for="companyName">Company Name</label>
          <input type="text" class="form-control" name="companyName" id="companyName" placeholder="Enter your Company name" required>
        </div>
        <div class="col-md-6">
          <label for="contactPerson">Contact Person</label>
          <input type="text" class="form-control" name="contactPerson" id="contactPerson" placeholder="Enter Contact Person name" required>
        </div>
        <div class="col-md-6">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
        </div>
        <div class="col-md-6">
          <label for="country">Country</label>
          <input type="text" class="form-control" name="country" id="country" placeholder="Enter your Country name" required>
        </div>
        <div class="col-md-6">
          <label for="products">Product Dealing In</label>
          <input type="text" class="form-control" name="products" id="products" placeholder="Enter your Products" required>
        </div>
        <div class="col-md-6">
          <label for="phone">Phone</label>
          <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter your Contact Number" required>
        </div>

        <div class="col-12" id="expoSection">
          <label class="expo-label">Select Expo(s) you want to participate in</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="expos[]" value="Nigeria" id="expoNG">
            <label class="form-check-label" for="expoNG">Nigeria – 10–12 Dec 2026</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="expos[]" value="Tanzania" id="expoTZ">
            <label class="form-check-label" for="expoTZ">Tanzania – 27–29 Jan 2027</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="expos[]" value="Uganda" id="expoUG">
            <label class="form-check-label" for="expoUG">Uganda – 09–11 Jun 2027</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="expos[]" value="Kenya" id="expoKE">
            <label class="form-check-label" for="expoKE">Kenya – 27–29 Aug 2027</label>
          </div>
        </div>

        <div class="col-12 text-end mt-3">
          <button type="submit" class="btn btn-submit px-4 py-2">Submit</button>
        </div>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script>
    document.getElementById('expoForm').addEventListener('submit', function(e) {
      const expoSection = document.getElementById('expoSection');
      const checked = document.querySelectorAll('input[name="expos[]"]:checked').length > 0;
      if (!checked) {
        e.preventDefault();
        expoSection.classList.add('error');
        alert("Please select at least one Expo to participate in.");
      } else {
        expoSection.classList.remove('error');
      }
    });
  </script>
</body>
</html>
