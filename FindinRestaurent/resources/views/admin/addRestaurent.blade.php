<html>
<head>
    <meta charset="UTF-8">
    <title>Add Restaurent</title>
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }

        html,body {
          font-family: 'Open Sans';
          height: 100%;
        }

        a {
          text-decoration: none;
        }

        div#header {
          width: 100%;
          height: 8%;
          background-color: #2c3e50; 
          margin: 0 auto;
        }

        .logo{
          float: left;
          margin-top: .2ex; 
          margin-left: 10px;
        }

        .logo a {
          font-size: 1.6em;
          color: #fff;
        }

        .logo a span {
          font-weight: 300;
        }

        div#container {
          height: 92%;
          width: 100%;
          margin: 0 auto;
        }


        .sidebar {
          width: 250px;
          background:#171717;
          float: left; 
        }

        ul#nav{

        }

        ul#nav li {
          list-style: none;
          height:10px;
          /*background-image: url("../images/success.png");*/
          
        }
        ul#nav li span{
          position:relative;
        }
        ul#nav li span img {
          float: left;
          display: block;
          margin-left: 1px;
          margin-top: 2px;
        }
        ul#nav li a {
          color: #ccc;
          display: block;
          padding: 10px;
          font-size: 0.8em;
          width: 85%;
          float: right;
          border-bottom: 1px solid #444;
          -webkit-transition: all 0.2s ease;  
          -moz-transition: all 0.2s ease;
          -ms-transition: all 0.2s ease;
          -o-transition: all 0.2s ease;
          transition: all 0.2s ease;
        }

        ul#nav li a:hover {
          background: #030303;
          color: #fff;
        }

        ul#nav li a.selected{
          background: #030303;
          color:#fff;
        }


        .content {
          width: auto;
          height: 100%;
          background: #95a5a6;
          margin-left: 250px;
          padding: 15px;
        }

        .content p {
          color: #424242;
          fonnt-size: 0.8em;
        }

        div#box {
          margin-top: 15px;
        }

        div#box .box-top {
          color: #fff;
          text-shadow: 0 1px #000;
          background: #2980b9;
          padding: 5px;
          padding-left: 15px;
          font-weight: 300;
        } 

        div#box .box-panel {
          padding: 15px;
          background: #fff;
          color: #333;
        }



        @media only screen and (max-width: 480px) {

          a.mobile {
            display: block;
            color: #fff;
            background: #000;
            text-align: center;
            padding: 7px; 
            cursor: pointer;
          }

          a.mobile:active{
            background: #474747;
          }


          .sidebar {
            width: 100%;
            display: none;
            height: auto;
          }

          .content {
            margin-left: 0;
          }


        }



        @media only screen and (min-width: 480px) {
          .sidebar {
            height: 92%;
            left: 0;
            display: block;
            position: absolute;
          }
          a.mobile {
            display: none;
          }
        }
    </style>
</head>

<body>

    <div id="header">
        <div class="logo">
            <a href="#">Restaurent<span>Finding</span></a>
        </div>

    </div>


    <a class="mobile">MENU</a>


    <div id="container">
    <div class="sidebar">
      <ul id="nav">
        <li>
          <span>
            <img src="http://www.webhostingreviewsbynerds.com/wp-content/plugins/rss-poster/cache/e17b1_fnal-570x456.png" width="32" height="32" >
          </span>
          <a href="{{route('Admin_Dashboard')}}">Dashboard</a>
        </li>
        <li>
          <span>
            <img src="http://www.webhostingreviewsbynerds.com/wp-content/plugins/rss-poster/cache/e17b1_fnal-570x456.png" width="32" height="32" >
          </span>
          <a href="{{route('CreateUser')}}">Create User</a>
        </li>
        <li>
          <span>
            <img src="http://www.webhostingreviewsbynerds.com/wp-content/plugins/rss-poster/cache/e17b1_fnal-570x456.png" width="32" height="32" >
          </span>
          <a href="{{route('Location')}}">Location</a>
        </li>
        <li>
          <span>
            <img src="http://www.webhostingreviewsbynerds.com/wp-content/plugins/rss-poster/cache/e17b1_fnal-570x456.png" width="32" height="32" >
          </span>
          <a href="{{ route('Restaurent') }}">Restaurent List</a>
        </li>
        <li>
          <span>
            <img src="http://www.webhostingreviewsbynerds.com/wp-content/plugins/rss-poster/cache/e17b1_fnal-570x456.png" width="32" height="32" >
          </span>
          <a href="{{ route('Logout')}}">Logout</a>
        </li>
      </ul>

    </div>

    <div class="content">
        <h1>Add Restauret</h1>
        <div id="box">
          <form method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <table width="900" style="background-color: white;">
              <tr>
                <td><label>Name :</label></td>
                <td><input type="text" name="name"></td>
              </tr>
              <tr>
                <td><label>Address :</label></td>
                <td><input type="text" name="address"></td>
              </tr>
              <tr>
                <td><label>Contact :</label></td>
                <td><input type="text" name="contact"></td>
              </tr>
              <tr>
                <td><label>Email :</label></td>
                <td><input type="text" name="email"></td>
              </tr>
              <tr>
                <td><label>Image :</label></td>
                <td><input type="file" class="form-control" name="r_image" id="r_image"></td>
              </tr>
              <tr>
                <td><label>Location :</label></td>
                <td>
                  <select class="browser-default custom-select" name="location_id">
                    <option selected>Select Police Station</option>
                    @foreach($locations as $location)
                      <option value="{{$location->id}}" selected="selected">{{$location->police_station}}</option>
                    @endforeach
                  </select>
                </td>
              </tr>
              <tr>
                <td><label>Preference Type :</label></td>
                <td>
                  <select class="browser-default custom-select" name="preference_type_id">
                    <option selected>Select Preference</option>
                    @foreach($preference_type as $preference)
                      <option value="{{$preference->id}}" selected="selected">{{$preference->preference_type}}</option>
                    @endforeach
                  </select>
                </td>
              </tr>
              <tr>
                <td><label>User :</label></td>
                <td>
                  <select class="browser-default custom-select" name="user_id">
                    <option selected>Select User</option>
                    @foreach($users as $user)
                      <option value="{{$user->id}}" selected="selected">{{$user->name}}</option>
                    @endforeach
                  </select>
                </td>
              </tr>
              <tr>
                <td></td>
                <td><button type="submit">Submit</td>
              </tr>
            </table>
            </form>
        </div>
    </div>


    </div>
    <!-- #container -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <script src="js/index.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("a.mobile").click(function(){
          $(".sidebar").slideToggle('fast');
        });
        window.resize = function(event){
          if($(window).width() > 320){
            $(".sidebar").show();
          }
        };
      });
    </script>

</body>