

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
<style >

    input,
    textarea {
      -webkit-appearance: none;
    }

    html,
    body {
      background-color: #363636;
      height: 100%;
      margin-top: 0;
      padding-top: 0;
      width: 100%;
    }

    #registration {
      clear: both;
      height: 500px;
      margin-left: auto;
      margin-right: auto;
      padding-top: 10px;
      width: 326px;
    }

    p {
      color: rgba(255, 255, 255, 1);
      margin-top: 0;
      padding-top: 20px;
      text-align: center;
    }

    .btn,
    .textbox {
      -webkit-transform: translate3d(0, 0, 0);
      border-radius: 5px;
      border-style: solid;
      border-width: 3px;
      display: block;
      height: 20px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 15px;
      padding: 10px 5px;
      text-align: center;
      text-decoration: none;
      vertical-align: middle;
    }

    .btn.land {
      background-color: rgba(255, 255, 255, 0);
      color: #fff;
      transition: all 0.5s ease;
      width: 150px;
    }

    .btn.land:hover {
      background-color: rgba(255, 255, 255, 0.3);
    }

    .btn.reg {
      margin-top: 50px;
      opacity: 0;
      transition-delay: 0 0 0.5s;
      transition-duration: 0.2s;
      transition-property: visibility, opacity, margin-top;
      visibility: hidden;
      width: 140px;
    }

    #submit-btn {
      color: #0f0;
      float: left;
    }

    #submit-btn:hover {
      background-color: rgba(0, 255, 0, 0.1);
    }

    #cancel-btn {
      color: #919191;
      float: right;
    }

    #cancel-btn:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }

    .textbox {
      -webkit-transition: all 0.5s ease;
      border-color: #fff;
      margin-top: -46px;
      opacity: 0;
      transition: all 0.5s ease;
      visibility: hidden;
      width: 150px;
    }

    #registration:target .btn.land {
      opacity: 0;
      visibility: hidden;
      width: 310px;
    }

    #registration:target .textbox.reg {
      opacity: 1;
      visibility: visible;
      width: 310px;
    }

    #registration:target .btn.reg {
      margin-top: 15px;
      opacity: 1;
      transition-delay: 0.25s;
      transition-duration: 0.5s;
      transition-property: visibility, opacity, margin-top;
      visibility: visible;
    }


</style>
  </head>


  <body>
    <div id="registration">
      <p class="target">REGISTER</p>
      <a class="btn land" href="#registration">Register Now</a>
      <input class="textbox reg" type="text" placeholder="Full Name">

      <input class="textbox reg" type="text" placeholder="Last Name">

      <input class="textbox reg" type="text" placeholder="Email">

      <input class="textbox reg" type="text" placeholder="Tel">



      <a id="submit-btn" class="btn reg" href="#">Submit</a>
      <a id="cancel-btn" class="btn reg" href="#">Cancel</a>
    </div>
  </body>
</html>
