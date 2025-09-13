
/* Mobile behavior:
 - hamburger toggles nav-list
 - clicking any parent (.has-sub > a) toggles that parent's .active (accordion)
*/
(function(){
  const MOBILE_BREAKPOINT = 991;
  const menuToggle = document.querySelector('.menu-toggle');
  const navList = document.querySelector('.nav-list');

  if(menuToggle){
    menuToggle.addEventListener('click', () => {
      navList.classList.toggle('open');
    });
  }

  // Add click toggles for any item that has children
  document.querySelectorAll('.has-sub > a').forEach(anchor => {
    anchor.addEventListener('click', function(e){
      const parentLi = this.parentElement;
      if(window.innerWidth <= MOBILE_BREAKPOINT){
        // prevent default so top-level isn't followed on mobile
        e.preventDefault();
        parentLi.classList.toggle('active');
      }
      // on desktop do nothing (hover controls dropdown)
    });
  });

  // optional: close mobile nav when clicking outside
  document.addEventListener('click', (e)=>{
    if(window.innerWidth <= MOBILE_BREAKPOINT){
      const inside = e.target.closest('.nav-container');
      if(!inside){
        navList.classList.remove('open');
        document.querySelectorAll('.has-sub.active').forEach(li => li.classList.remove('active'));
      }
    }
  });

  // cleanup on resize
  window.addEventListener('resize', () => {
    if(window.innerWidth > MOBILE_BREAKPOINT){
      navList.classList.remove('open');
      document.querySelectorAll('.has-sub.active').forEach(li => li.classList.remove('active'));
    }
  });
})();
