(function($) {
    'use strict';

    var requesting = false;
    var piece = 'O';

    var $tds = $('td');
    $tds.on('click', function() {
        // disable board when requestion to servers
        if (requesting) {
            return;
        }

        var $elem = $(this);
        var $tr = $elem.parent('tr');
        var x = $tr.index();
        var y = $elem.index();

        $.ajax({
            url: '/tictactoe/move',
            beforeSend: function() {
                requesting = true;
            },
            data: {
                x: x,
                y: y,
                piece: piece
            },
            success: function(response) {
                $elem.html('<div class="content">'+piece+'</div>');

                // timout needed to render the piece 
                // before the confirmation modal appears
                setTimeout(function(){
                    if (response.result) {
                        var playAgain = confirm(response.message+' Play again?');
                        if (playAgain) {
                            location.reload();
                        }
                    }
                }, 10);
            },
            complete: function() {
                requesting = false;
                piece = piece == 'O' ? 'X': 'O';
            }
        });
    });


})(jQuery);