<!DOCTYPE html>
<html lang="en">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Angry Pigs Level Editor</title>
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link href="css/style.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <!--Level editor container -->
    <div id="container">
      <!--Left Side Bar -->
      <div id="leftSideBar">
        <div class="logo"></div>

        <!--Level Editor Menu -->
        <div id="attributes">
          <input class="inputText" type="text" placeholder="Level Name"/>
          <input class="button" type="button" value="Save Level"/>
          <input class="button" type="button" value="Reset Level"/>
          <select class="inputText">
            <option value="" disabled selected>Select Level</option>
            <option>Level 1</option>
            <option>Level 2</option>
            <option>Level 3</option>
          </select>
          <input class="button" type="button" name="loadLevel" value="Load Level"/>
        </div>
      </div>

        <div id="editor">
            <!--Draggable Objects -->
            <div id="topMenu" class="noselect">
                <div id="draggable" class="block dummyObject"></div>
                <div id="draggable" class="cannon dummyObject"></div>
                <div id="draggable" class="bird dummyObject"></div>
            </div>
            <!--Level editor play ground -->
            <div id="droppable" class="playBackground"></div>
        </div>
    </div>

    <div id="scripts">
      <script src="js/app.js"></script>
    </div>
  </body>

</html>
