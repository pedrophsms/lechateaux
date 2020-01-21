import {TimelineMax, TweenMax, TimelineLite, Power2, Elastic, CSSPlugin } from "gsap";
import ScrollMagic from 'scrollmagic';


$(document).ready(function () {
    const menuTl = new TimelineMax();
    menuTl.to('.navigation', {
        y: 0,
        duration: 0.5,
        ease: 'expo.out'
    });
    menuTl.to(['.hamburger-text__item.menu', '.hamburger-text__item.close'], {
        y: -10,
        ease: 'ease'
    });
    menuTl.reversed(true);
    $('.hamburger-wrapper').click(function (e) { 
        e.preventDefault();
        menuTl.reversed(!menuTl.reversed());
    });


    // DEGUSTE
    const item1 = $('#deguste .item1');
    const item2 = $('#deguste .item2');
    const item3 = $('#deguste .item3');

    var controller = new ScrollMagic.Controller();
    new ScrollMagic.Scene({triggerElement: "#about", duration: 3000})
    .setTween("#deguste .item1", {borderTop: "30px solid white", backgroundColor: "blue", scale: 0.7}) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);


    var lastScrollTop = 0;
    var height1 = 400;
    var height2 = 600;
    var height3 = 500;
    $(window).scroll(function(event){
        var st = $(this).scrollTop();
        var $item1 = $('#deguste .item1');
        var $item2 = $('#deguste .item2');
        var $item3 = $('#deguste .item3');
        if (st > lastScrollTop){
            height1++ + height1++
            $item1.height( height1 )
            height2-- + height2--
            $item2.height( height2 )
            height3++ + height3++
            $item3.height( height3 )
        } else {
            height1-- + height1--
            $item1.height( height1 )
            height2++ + height2++
            $item2.height( height2 )
            height3-- + height3--
            $item3.height( height3 )
        }
        lastScrollTop = st;
    });
});