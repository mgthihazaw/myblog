
    <footer class="app-footer fixed-bottom">
      <div>
        <a href="https://coreui.io">MyBlog</a>
        <span>&copy; 2018 creativeLabs.</span>
      </div>
      <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://coreui.io">Microstack.co</a>
      </div>
    </footer>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('admin/node_modules/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admin/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/node_modules/pace-progress/pace.min.js') }}"></script>
    <script src="{{ asset('admin/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/node_modules/@coreui/coreui/dist/js/coreui.min.js') }}"></script>
    <!-- Plugins and scripts required by this view-->
    <<!-- script src="{{ asset('admin/node_modules/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js') }}"></script> -->
    <!-- <script src="{{ asset('admin/js/main.js') }}"></script> -->
   <!--  <script type="text/javascript" src="{{ asset('vendor/tinymce/js/tinymce/tinymce.min.js') }}"></script> -->
   <script src="https://cdn.tinymce.com/4/tinymce.min.js"></script>


   <!--hightlight.js-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/highlight.min.js"></script>
 <script>$(document).ready(function() {
 


  $('pre code').each(function(i, block) {
    hljs.highlightBlock(block);
  });
});</script>

  </body>


  <script type="text/javascript">

 
 
  // plugins: "autolink lists link image charmap print preview hr anchor pagebreak searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media",
  //   toolbar:'insertfile undo redo | styleselect |bold italic |code link media image |bulist numlist'
  
  //  });


    $('#createCategory').on('click', function(){
            $('#createCategoryModel').modal('show');
       });

    $(".deleteCategory").on("submit", function(){
        return confirm("Are you sure to Delete?");
    });
     var size = $('textarea').css('height','400px');


  var editor_config = {
    path_absolute : "{{URL::to('/')}}",
    selector: "textarea",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern textcolor colorpicker"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image forecolor backcolor",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + '/laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);

  </script>
</html>