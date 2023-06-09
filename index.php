<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap/css/style.css">
    <!-- JS DI BAWAH -->
    <title>Document</title>
</head>
<body>
  <!-- Section 1 -->
  <!-- Navbar -->
  <div class="container-fluid-sm" style="background-color: #03256C;">
    <header class="d-flex flex-wrap justify-content-center py-2">
      <p class="align-items-center mb-md-0 me-md-auto">
        <span class="fs-4 ps-3" style="color: #ffffff;"><img src="Logo.png" width="80px" height="80px"></span>
      </p>
      <nav class="nav align-items-center">
        <a class="nav-link" href="#" style="color: #ffffff;">Actions</a>
        <a class="nav-link" href="#" style="color: #ffffff;">Resources</a>
        <a class="nav-link" href="#" style="color: #ffffff;">Projects</a>
        <a class="nav-link" href="#" style="color: #ffffff;">Explore</a>
      </nav>
    </header>
  </div>
  <!-- Sec 1 Content -->
  <div class="text-center bg-image-md" style="background-image: url('Laut.png'); height: 900px; width: 100%;">
    <div class="d-flex justify-content-center align-items-center h-100">
      <div style="color: #03256C;">
        <h1 class="mb-sm-3">Act Now or Swim in Plastic</h1>
        <h5 class="mb-sm-0">
          Plastic waste in the ocean can harm marine life and ecosystems,
        </h5>
        <h5 class="mb-sm-4">
          disrupt food chains, and even enter the human food chain through seafood consumption
        </h5>
        <button type="button" onclick="action()" class="btn btn-lg py-3 px-4" style="background-color: #03256C; color: #ffffff;">TAKE ACTION</button>
      </div>
    </div>
  </div>
  <!-- Section 2 -->
  <div class="container-fluid p-5" style="background-color: #03256c; color: #ffffff;">
    <div class="row">
      <p class="fs-2 mb-0 mt-5 mx-5">OFFSET YOUR</p>
      <P class="fs-2 mx-5">PLASTIC FOOTPRINT</P>
    </div>
    <div class="row mt-5 mx-5 d-flex justify-content-around">
      <?php 
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "ocean_one";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $database);

      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      $query = "SELECT * FROM sec2";
      $result = mysqli_query($conn, $query);

      foreach ($result as $row) {
        echo "
        <div class='col-sm-3'>
          <div class='card border-0' style='background-color: #03256c; color: #ffffff;'>
            <div class='card-body'>
              <p class='fs-4>" . $row['title'] . "</p>
              <p id='align-content'>" . $row['text'] . "</p>
              <button type='button' class='btn px-4' style='background-color: #1768ac; color: #ffffff;'>". $row['button'] . "</button>
            </div>
          </div>
        </div>";
      }
      ?>
      <!-- <div class="col-sm-3">
        <div class="card border-0" style="background-color: #03256c; color: #ffffff;">
          <div class="card-body">
            <p class="fs-4">ALIGN</p>
            <p id="align-content">66% of people (73% of Millennials) are willing to pay more for products and services from companies committed to
            positive social and environmental impact.</p>
            <textarea id="textArea" style="display: none;" cols="30" rows="10"></textarea>
            <button type="button" class="btn px-4" style="background-color: #1768ac; color: #ffffff;">LEARN MORE</button>
            <a onclick="editText()" id="edit">[edit]</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card border-0" style="background-color: #03256c; color: #ffffff;">
          <div class="card-body">
            <p class="fs-4">KICKSTART</p>
            <p>Ocean One are a turnkey solution to begin the journey of reducing your business’s environmental footprint or going
            plastic neutral.</p>
            <button type="button" class="btn px-4" style="background-color: #1768ac; color: #ffffff;">START ACTION</button>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card border-0" style="background-color: #03256c; color: #ffffff;">
          <div class="card-body">
            <p class="fs-4">AMPLIFY</p>
            <p>Is your actions already making strides in its commitment to sustainability? Measure your action success using IMPACT</p>
            <br>
            <button type="button" class="btn px-5" style="background-color: #1768ac; color: #ffffff;">SEE HOW</button>
          </div>
        </div>
      </div> -->
    </div>
  </div>
  <!-- Section 3 -->
  <div class="text-center bg-image" style="background-image: url('Underwater2.jpg'); height: 1000px; width: 100%;">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.5); height: 1000px; width: 100%;">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <div class="row mb-5 pb-5">
            <p class="fs-1">MAKE YOUR IMPACT</p>
          </div>
          <div class="row mt-5 px-5">
            <div class="col-sm-4 mt-5 px-5">
              <span class="for-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#03256c" class="bi bi-trash3" viewBox="0 0 16 16">
                  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                </svg>
              </span>
              <p class="mt-5">COMMIT TO REMOVING A SPECIFIC AMOUNT</p>
            </div>
            <div class="col-sm-4 mt-5 px-5">
              <span class="for-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#03256c" class="bi bi-receipt-cutoff" viewBox="0 0 16 16">
                  <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zM11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                  <path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293 2.354.646zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z"/>
                </svg>
              </span>
              <p class="mt-5">TIE REMOVAL TO PRODUCT SALES</p>
            </div>
            <div class="col-sm-4 mt-5 px-5">
              <span class="for-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#03256c" class="bi bi-people-fill" viewBox="0 0 16 16">
                  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                </svg>
              </span>
              <p class="mt-5">INCENTIVIZE COMMUNITY ACTION</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Section 4 -->
  <div class="container-fluid pt-5" style="background-color: #03256c; color: #ffffff;">
    <div class="row px-5 pb-5">
      <p>PROJECT 1:</p>
      <p class="fs-3">OCEANBOUND CLEAN UP</p>
    </div>
    <div class="row p-0">
      <div class="col">
        <img src="p-1.jpg" class="image-fluid" height="390" width="747">       
      </div>
      <div class="col p-5">
        <p class="fs-5">PROBLEM</p>
        <p class="fs-5">Plastic recycling generates plastic waste effluent as a standard part of the process. This dirty discharge known as
          "Mud" is at risk of being discharged into the wastewater and, in the best-case, is usually taken to the nearest
          landfill.</p>
      </div>
    </div>
    <div class="row p-0">
      <div class="col p-5">
        <p class="fs-5 text-end">SOLUTION</p>
        <p class="fs-5 text-end">Repurposes the “Mud” into useful building materials. It's composition is perfect for producing bricks!
          Unfortunately, these recycled plastic compound bricks are slightly more expensive than standard building bricks, so
          Impact program incentivizes the reuse of the “Mud” in the bricks by making them competitive on the open market.</p>
      </div>
      <div class="col">
        <img src="s-1.png" class="image-fluid" height="390" width="747">         
      </div>
    </div>
    <div class="row p-5">
      <p>PROJECT 2:</p>
      <p class="fs-3">FISHING NET RECOVERY</p>
    </div>
    <div class="row p-0">
      <div class="col">
        <img src="p-2.jpg" class="image-fluid" height="390" width="747">        
      </div>
      <div class="col p-5">
        <p class="fs-5">PROBLEM</p>
        <p class="fs-5">Fishing gear - nets and ropes - pose a significant risk to sea life if cut away in the ocean.
          Unfortunately, incentives do not exist to recover this gear so at the end of its life, most gets landfilled or simply
          cut away at sea. It's a huge reason for why fishing nets are the largest ocean plastic polluter.
        </p>
      </div>
    </div>
    <div class="row p-0">
      <div class="col p-5">
        <p class="fs-5 text-end">SOLUTION</p>
        <p class="fs-5 text-end">We provides the funds needed to incentivize collection and recycling of this gear. This program
          creates a pathway for the reclamation of end of life fishing gear.</p>
      </div>
      <div class="col">
        <img src="s-2.jpg" class="image-fluid" height="390" width="747">       
      </div>
    </div>
  </div>
  <!-- Section 5 -->
  <div class="container-fluid p-5" id="last">
    <div class="row my-5">
      <p class="fs-1 text-center" style="color: #03256c;">GET IN TOUCH</p>
    </div>
    <div class="row mx-sm-4">
      <div class="col">
        <div class="mapouter">
          <div class="gmap_canvas">
            <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Universitas Gadjah Mada&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
            </iframe><a href="https://capcuttemplate.org/">Capcut Templates</a>
          </div>
          <style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}
          </style>
        </div>
      </div>
      <div class="col mx-sm-4">
        <form action="#">
          <table border="0">
              <tr>
                  <td><input type="text" id="nama" size="52" placeholder="Name" class="input-box"></td>
              </tr>
              <tr>
                  <td><input type="email" id="email" size="52" placeholder="Email" class="input-box"></td>
              </tr>
              <tr>
                  <td><textarea type="text" id="message" rows="3" cols="55" style="resize: none;" placeholder="Write your message here..." class="input-box"></textarea><br></td>
              </tr>
          </table>
          <br>
          <button type="button" class="btn btn-sm py-1 px-4" onclick="send()" style="background-color: #03256C; color: #ffffff;">SEND</button>
          <br><br>
          <p id="output" style="color: #03256C;"></p>
      </form>
      </div>
    </div>
  </div>
  <!-- FOOTER -->
  <div class="container-fluid" style="background-color: #03256C; color: #ffffff;">
    <footer class="d-flex flex-wrap justify-content-center py-2">
      <p class="align-items-center mb-md-0 me-md-auto">
        <span class="ps-3"><img src="Logo.png" width="50px" height="50px"></span>
        <span class="ps-3 fs-4" style="color: #ffffff;">Ocean One</span>
      </p>
      <nav class="nav align-items-center">
        <a class="nav-link" href="#" style="color: #ffffff;">Newsletter</a>
        <a class="nav-link" href="#" style="color: #ffffff;">Privacy policy</a>
        <a class="nav-link" href="#" style="color: #ffffff;">FAQs</a>
      </nav>
    </footer>
  </div>
  <script src="script.js"></script>
</body>
</html>