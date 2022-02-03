<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles/style.css" />
  <link rel="stylesheet" href="styles/circle-perc.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.0/font/bootstrap-icons.min.css" integrity="sha512-H4E1ASW8Ru1Npd1wQPB7JClskV8Nv1FG/bXK6TWMD+U9YMlR+VWUZp7SaIbBVBV/iRtefsIsv9dLSN6fdUI36w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Portfolio - Abdell Edde</title>
</head>

<body>
  <!-- Profile sidebar --> <?php require('./parts/profile-sidebare.php'); ?>

  <div class="right-side">
    <input id="clickbutton" type="button" value="Click" onclick="showimage()" />
  </div>

  <script type="text/javascript">
    function showimage() {
      $("body").css("background-image", "url('./assets/images/me.jpg')"); // Onclick of button the background image of body will be test here. Give the image path in url
      $('#clickbutton').hide(); //This will hide the button specified in html
    }
  </script>
  <script src="./js/scripte.js"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</body>

</html>