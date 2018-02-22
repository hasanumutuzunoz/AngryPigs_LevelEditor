
    class App {
      constructor(){
          this.drag();
          this.resize();
      }

      //Jquery Drag Object Function
      drag(){
          $( function() {
          $( ".block" ).draggable({helper:"clone"});
          $( ".cannon" ).draggable({helper:"clone"});
          $( ".bird" ).draggable({helper:"clone"});

          $( "#droppable" ).droppable({
            accept: "#topMenu .dummyObject",
            drop: function( event, ui ) {
              // console.log(ui.helper.clone().attr("class"));

              $(this).append($(ui.helper).clone().draggable({
                containment: "#droppable"
              }).resizable({handles: "all"}));
            }
          });
        });
          }

        //Jquery Resize Object Function
        resize() {
          $( function() {
            $( "droppable" ).resizable();
          } );
        }

  }
  let app = new App();
