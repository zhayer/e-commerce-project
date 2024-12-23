/**
 * Theme JS file.
 */
jQuery(function($) {
  "use strict";

  // Search focus handler
  function searchFocusHandler() {
    const searchFirstTab = $('.inner_searchbox input[type="search"]');
    const searchLastTab = $('button.search-close');

    $(".open-search").click(function(e) {
      e.preventDefault();
      e.stopPropagation();
      $('body').addClass("search-focus");
      searchFirstTab.focus();
    });

    $("button.search-close").click(function(e) {
      e.preventDefault();
      e.stopPropagation();
      $('body').removeClass("search-focus");
      $(".open-search").focus();
    });

    // Redirect last tab to first input
    searchLastTab.on('keydown', function(e) {
      if ($('body').hasClass('search-focus') && e.which === 9 && !e.shiftKey) {
        e.preventDefault();
        searchFirstTab.focus();
      }
    });

    // Redirect first shift+tab to last input
    searchFirstTab.on('keydown', function(e) {
      if ($('body').hasClass('search-focus') && e.which === 9 && e.shiftKey) {
        e.preventDefault();
        searchLastTab.focus();
      }
    });

    // Allow escape key to close menu
    $('.inner_searchbox').on('keyup', function(e) {
      if ($('body').hasClass('search-focus') && e.keyCode === 27) {
        $('body').removeClass('search-focus');
        searchLastTab.focus();
      }
    });
  }

  // Call the search focus handler
  searchFocusHandler();

  // Preloader
  $(document).ready(function() {
    setTimeout(function() {
      $(".loader").fadeOut("slow");
    }, 1000);
  });

  // Scroll to top
  $(function() {
    $(window).scroll(function() {
      if ($(this).scrollTop() >= 50) {
        $('#return-to-top').fadeIn(200);
      } else {
        $('#return-to-top').fadeOut(200);
      }
    });
    $('#return-to-top').click(function() {
      $('body,html').animate({
        scrollTop: 0
      }, 500);
    });
  });

});


// Define functions in the global scope
function fashion_accessories_menu_open_nav() {
  jQuery(".sidenav").addClass('open');
}

function fashion_accessories_menu_close_nav() {
  jQuery(".sidenav").removeClass('open');
}

function fashion_accessories_projetcs_tab(evt, tabId) {
    // Hide all tab content elements
    jQuery('.tabcontent').hide();
    
    // Show the selected tab content
    jQuery('#' + tabId).show();

    // Destroy any existing Owl Carousel instance in the current tab
    jQuery('.tabcontent .owl-carousel').trigger('destroy.owl.carousel');
    
    // Initialize Owl Carousel only in the active tab content
    jQuery('#' + tabId + ' .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            1000: { items: 3 }
        }
    });

    // Remove 'active' class from all tab buttons
    jQuery('.tab button').removeClass('active');
    
    // Add 'active' class to the clicked tab button
    jQuery(evt.currentTarget).addClass('active');
}

// On page load, trigger click on the first tab to initialize the first carousel
jQuery(document).ready(function($) {
    $('.tab button').first().trigger('click');
});