<script src="{{asset('./admin/assets/js/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- bootstrap js-->
    <script src="{{asset('./admin/assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('./admin/assets/js/config.js')}}"></script>
    <!-- Sidebar js-->
    <script src="{{asset('./admin/assets/js/sidebar.js')}}"></script>
    <!-- Apexchart js-->
    <script src="{{asset('./admin/assets/js/vendors/apexcharts/dist/apexcharts.min.js')}}"></script>
    <!-- Chart js-->
    <script src="{{asset('./admin/assets/js/vendors/chart.js')}}/dist/chart.umd.js')}}"></script>
    <!-- Datatable js-->
    <script src="{{asset('./admin/assets/js/vendors/simple-datatables/dist/umd/simple-datatables.js')}}"></script>
    <!-- default dashboard js-->
    <script src="{{asset('./admin/assets/js/dashboard/default.js')}}"></script>
    <!-- scrollbar js-->
    <script src="{{asset('./admin/assets/js/scrollbar/simplebar.js')}}"></script>
    <script src="{{asset('./admin/assets/js/scrollbar/custom.js')}}"></script>
    <!-- scrollable-->
    <!-- customizer-->
    <script src="{{asset('./admin/assets/js/theme-customizer/customizer.js')}}"></script>
    <!-- custom script -->
    <script src="{{asset('./admin/assets/js/script.js')}}"></script>
    <script>
       document.getElementById('image').addEventListener('change',(event)=>{
    const file = event.target.file[0];
    const image = document.getElementById('preview');

    if(file){
        const reader = new fileReader();
        reader.addEventListener('load',(e)=>{
            image.src = e.target.result // cập nhật đường dẫn hình ảnh
            image.style.display = 'block'//hiển thị hình ảnh
        })
        reader.readAsDataURL(file);// Đọc thông tin tập tin đã được đăng tải
    }else{
      image.src="";//xóa hình ảnh nếu không có file
      image.style.display = 'none' // không hiển thị hình ảnh
    }
})
    </script>