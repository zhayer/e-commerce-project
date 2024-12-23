( function( window, document ) {
  function fashion_accessories_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const fashion_accessories_nav = document.querySelector( '.sidenav' );
      if ( ! fashion_accessories_nav || ! fashion_accessories_nav.classList.contains( 'open' ) ) {
        return;
      }
      const elements = [...fashion_accessories_nav.querySelectorAll( 'input, a, button' )],
        fashion_accessories_lastEl = elements[ elements.length - 1 ],
        fashion_accessories_firstEl = elements[0],
        fashion_accessories_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;
      if ( ! shiftKey && tabKey && fashion_accessories_lastEl === fashion_accessories_activeEl ) {
        e.preventDefault();
        fashion_accessories_firstEl.focus();
      }
      if ( shiftKey && tabKey && fashion_accessories_firstEl === fashion_accessories_activeEl ) {
        e.preventDefault();
        fashion_accessories_lastEl.focus();
      }
    } );
  }
  fashion_accessories_keepFocusInMenu();
} )( window, document );