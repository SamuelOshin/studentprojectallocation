<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.11.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>



<script>
$(document).ready(function(){
    $('.project_table').DataTable();
});

$(document).ready(function() {
    // Add click event listener to navbar links
    $('.navbar-nav a').on('click', function() {
      // Remove 'active' class from all navbar items
      $('.navbar-nav a').removeClass('active');

      // Add 'active' class to the clicked navbar item
      $(this).addClass('active');
    });

    // Close the dropdown menu when clicking outside of it
    $(document).on('click', function(e) {
      if (!$(e.target).closest('.nav-item.dropdown').length) {
        $('.nav-item.dropdown').removeClass('show');
      }
    });
  });
</script>
</body>
</html>
