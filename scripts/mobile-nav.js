document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const svgArrow = mobileMenuToggle.querySelector('svg');
  
    if (mobileMenuToggle && mobileMenu && svgArrow) {
      mobileMenuToggle.addEventListener('click', function () {
        if (mobileMenu.classList.contains('hidden')) {
          mobileMenu.classList.remove('hidden');
          mobileMenu.classList.add('flex');
          svgArrow.classList.add('rotate-180');
        } else {
          mobileMenu.classList.remove('flex');
          mobileMenu.classList.add('hidden');
          svgArrow.classList.remove('rotate-180');
        }
        
        // Update the aria-expanded attribute for accessibility.
        const isExpanded = mobileMenuToggle.getAttribute('aria-expanded') === 'true';
        mobileMenuToggle.setAttribute('aria-expanded', !isExpanded);
      });
    }
  });
  
  document.addEventListener('DOMContentLoaded', function () {
    const header = document.getElementById('site-header');
    if (!header) {
      console.warn('Header element not found');
      return;
    }
  
    let lastScrollY = window.pageYOffset;
  
    window.addEventListener('scroll', function () {
      const currentScrollY = window.pageYOffset;
      
      // Only trigger the effect if scrolled past the header's height
      if (currentScrollY > header.offsetHeight) {
        if (currentScrollY > lastScrollY) {
          // Scrolling down: hide the header
          header.style.transform = 'translateY(-100%)';
        } else {
          // Scrolling up: show the header
          header.style.transform = 'translateY(0)';
        }
      } else {
        // At the top of the page, keep header visible
        header.style.transform = 'translateY(0)';
      }
      
      lastScrollY = currentScrollY;
    });
  });
  
  