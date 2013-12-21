$(function() {
    $("#dialog_onze_pizzas").dialog({
        autoOpen: false,
        width: 783,
        height: 450,
        minHeight: 450,
        top: 27,
        position: ['center'],
        show: {
            effect: "blind",
            duration: 1000
        },
        hide: {
            effect: "explode",
            duration: 500

        }
    });
    $('#content').append($('#dialog_onze_pizzas').parent());
    $("#opener_onze_pizzas").click(function() {
        $("#dialog_onze_pizzas").dialog("open");
    });

});



$(function() {
    $("#dialog_levering").dialog({
        autoOpen: false,
        width: 783,
        height: 400,
        top: 27,
        position: ['center'],
        show: {
            effect: "blind",
            duration: 1000
        },
        hide: {
            effect: "explode",
            duration: 500
        }
    });
    $('#content').append($('#dialog_levering').parent());
    $("#opener_levering").click(function() {
        $("#dialog_levering").dialog("open");
    });

});
//---------------------------------- Facebook login ----------------------------
 function goLogIn(){
              window.location = "{{ path('_fb_security_check') }}";
          }

          function onFbInit() {
              if (typeof(FB) != 'undefined' && FB != null ) {
                  FB.Event.subscribe('auth.statusChange', function(response) {
                      setTimeout(goLogIn, 500);
                  });
              }
              FB.Event.subscribe('auth.logout',
                       function(response) {
                           if (response.status === 'unknown')  {
                              window.location = "{{ path('_demo_logout') }}";
                            }
              });                            
          }