/**
 * Created by alexbenson on 8/6/14.
 */
$( document ).ready(function() {
    var list = ['It\'s Responsive', 'There\'s too much bad design out there', 'It\'s a challenge', 'I get to take an idea and make it a tangible product', 'Get to collaborate with people with different perspectives'];

    var my_reason = function() {
        return  list[Math.floor(Math.random() * list.length)];
    }


    $('.click').click(function() {
        $('.results').text(my_reason());
    });

});