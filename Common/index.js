document.getElementById('toggle-sidebar').addEventListener('click', function() {
    var sidebar = document.querySelector('.sidebar');
    var content = document.querySelector('#content');
    var sidebarContent = document.getElementById('sidebar-content');

    sidebar.classList.toggle('collapsed-sidebar');
    content.classList.toggle('collapsed-content');

    if (sidebar.classList.contains('collapsed-sidebar')) {
      sidebarContent.style.display = 'none';
    } else {
      sidebarContent.style.display = 'block';
    }
  });



  var sidebarItems = document.querySelectorAll('.sidebar-item');
  sidebarItems.forEach(function(item) {
    item.addEventListener('click', async function() { 
      var url =item.getAttribute('data-url');
      document.getElementById('frame').src  = './Vistas/'+url;
     });
  });
  
  
  