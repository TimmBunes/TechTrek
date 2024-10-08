<!-- Bootstrap & JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
  window.onscroll = function() {
    var navbar = document.querySelector('.navbar'); // Select ng navbar
    if (window.pageYOffset > 50) { // Check ng scroll
      navbar.classList.add('scrolled'); // Add "scrolled" class
    } else {
      navbar.classList.remove('scrolled'); // Remove the "scrolled" class when at the top
    }
  };

  document.querySelectorAll('.collapsible').forEach(button => {
    button.addEventListener('click', () => {
        button.classList.toggle('active');
        let content = button.nextElementSibling;
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + 'px';
        }
    });
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    once: true,
  });
</script>