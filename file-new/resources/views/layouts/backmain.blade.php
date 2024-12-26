<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin registration form</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
  </head>
  <body>
    <div class="container">
      <button type="button" class="back"><a href="{{ route('backmain') }}">Back</a></button>

      <div class="logo">
        <img src="{{ asset('images/logo.png') }}?v={{ time() }}" alt="logo" />
      </div>
      <div class="reg-forms"></div>
      <form action="" method="post">
        <input type="text" id="fname" placeholder="First name" required />
        <input type="text" id="lname" placeholder="Last name" required />
        <input type="email" id="email" placeholder="Email" required />
        <input type="password" id="name1" placeholder="Password" required />
        <input
          type="password"
          id="name2"
          placeholder="Confirm password"
          required
        />

        <div class="buttons">
          <button type="submit" class="border-primary-subtle">
            Create Admin Account
          </button>
          <button type="submit" class="border-primary-subtle">
            Create Casher Account
          </button>
        </div>
      </form>
    </div>
  </body>
  <style>
    * {
      font-family: Arial, Helvetica, sans-serif;
      text-decoration: none;
    }
    body {
      background-color: rgb(39, 39, 39);
    }
    .back {
      float: left;
      margin-left: 3%;
      margin-top: 2%;
      width: auto;
      font-size: 1em;
      background-color: #fff;
      border: 1px solid #000;
      padding: 5px 10px;
      border-radius: 5px;
    }

    .back a {
      color: #000;
      text-decoration: none;
    }

    .back:hover {
      background-color: rgb(105, 199, 243);
      cursor: pointer;
      transition: 0.5s;
    }

    form {
      display: inline-flex;
      flex-direction: column; /* Stack inputs vertically */
      gap: 15px;
    }
    input {
      width: 20rem;
      height: 2rem;
      border-radius: 5%;
      text-indent: 3%;
    }

    .logo {
      text-align: center;
      margin-top: 1%;
      margin-right: 8%;
    }

    .logo img {
      width: 15%;
    }

    .container,
    .reg-forms {
      text-align: center;
    }
    .reg-forms {
      margin-top: 1%;
    }
    button[type="submit"] {
      display: flex;
      margin: 10px 0px auto;
      width: 50%;
      height: 30px;
      padding-top: 5px;
      padding-left: 12px;
    }
    .buttons {
      justify-items: center;
    }
    button[type="submit"]:hover {
      background-color: rgb(105, 199, 243);
      cursor: pointer;
      transition: 0.5s;
    }
  </style>
</html>
