
    <footer class="app-footer fixed-bottom">
      <div>
        <a href="https://coreui.io">CoreUI</a>
        <span>&copy; 2018 creativeLabs.</span>
      </div>
      <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://coreui.io">CoreUI</a>
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
    <script src="{{ asset('admin/node_modules/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js') }}"></script>
    <script src="{{ asset('admin/js/main.js') }}"></script>
  </body>


  <script type="text/javascript">
    $('#createCategory').on('click', function(){
            $('#createCategoryModel').modal('show');
       });
  </script>
</html>