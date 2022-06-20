<!-- Vendor JS Files -->
<script src="{{asset("nice/assets/vendor/apexcharts/apexcharts.min.js")}}"></script>
<script src="{{asset("nice/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("nice/assets/vendor/chart.js/chart.min.js")}}"></script>
<script src="{{asset("nice/assets/vendor/echarts/echarts.min.js")}}"></script>
<script src="{{asset("nice/assets/vendor/quill/quill.min.js")}}"></script>
<script src="{{asset("nice/assets/vendor/simple-datatables/simple-datatables.js")}}"></script>
<script src="{{asset("nice/assets/vendor/tinymce/tinymce.min.js")}}"></script>
<script src="{{asset("nice/assets/vendor/php-email-form/validate.js")}}"></script>

<!-- Template Main JS File -->
<script src="{{asset("nice/assets/js/main.js")}}"></script>

<script src="https://kit.fontawesome.com/2af315f426.js" crossorigin="anonymous"></script>
<script src="https://cdn.tiny.cloud/1/fu7h4kg25ve4cn6mdvjk1zfwzgi0f9dbqqjdrndmex7hk7tc/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
  <script>
      tinymce.init({
          selector: 'textarea',
          toolbar_mode: 'floating',
          menubar: false,
          statusbar: false,
          max_height: 380,
          plugins: 'autoresize advlist autolink link directionality image lists charmap print preview hr anchor pagebreak searchreplace wordcount visualblocks code fullscreen insertdatetime media nonbreaking table emoticons template paste help save cancel',
          toolbar: 'undo redo | fontsizeselect | alignleft aligncenter alignright | bold italic underline | bullist numlist |  alignjustify indent outdent | rtl ltr | forecolor backcolor | strikethrough subscript superscript | searchreplace wordcount | table hr charmap | pagebreak | preview fullscreen | cancel',
      })
  </script>