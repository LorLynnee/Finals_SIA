<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>API</title>
  <link rel="stylesheet" href="css/style.css">

  <script src="{{ asset('js/app.js') }}" defer></script>
   
   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-danger">
  <div class="container bg-opacity-light p-5">
    <div class="header border border-dark bg-opacity-tan p-5 mb-5 mx-4">
      <h1 class="text-center">SIA Finals</h1>
      <h5 class="text-center">Lorna Lynne Germino</h5>
      <h6 class="text-center">BSIT - 4A </h6>


    </div>
    <div class="content border border-dark bg-opacity-tan p-5 my-5 mx-4">
      <div class="user-input text-center bg-opacity-secondary p-3">
        <form action="/" method="get">
          @csrf
          <div class="row m-2">
            <div class="col-sm-6"><label for="value1">City</label></div>
            <div class="col-sm-6"><label for="value1">Language</label></div>
          </div>
          <div class="row m-2">
            <div class="col-sm-6"><input type="text" name="q" id="" placeholder="Input City" value="Manila"></div>
            <div class="col-sm-6"><input type="text" name="language" id="" placeholder="en-us" value="en-us"></div>
          </div>
    
          <button type="submit" class="mt-3 btn btn-info">Submit</button>
        </form>
      </div>
    </div>

    <div class="border border-dark bg-opacity-tan p-5 my-5 mx-4">
      <div class="results text-center bg-opacity-secondary p-3">
        <div class="row">
          <div class="col-sm-12"><h3>Search Results</h3></div>
        </div>
        <div class="row border-dark m-4">
          @isset($data)
          <div class="col-3"><h4>Country</h4></div>
          <div class="col-9">
            {{print_r($data[0]["Country"]["LocalizedName"])}}
          </div>
          <div class="col-3"><h4>World Position</h4></div>
            <div class="col-9">

              <div class="row">
                <div class="col-4">
                  <p>Latitude</p>{{print_r($data[0]["GeoPosition"]["Latitude"])}}<br>
                </div>
                <div class="col-4">
                  <p>Longitude</p>{{print_r($data[0]["GeoPosition"]["Longitude"])}}
                </div>
              </div>
            </div>
          </div>

          @endisset
        </div>
      </div>
    </div>
  </div>
</body>
</html>