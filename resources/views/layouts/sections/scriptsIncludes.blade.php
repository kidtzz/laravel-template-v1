<!-- laravel style -->
<script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
<script src="{{ asset('assets/js/config.js') }}"></script>
<script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());
  gtag('config', 'GA_MEASUREMENT_ID');


  // summernote
  $("#summernote").summernote({
    placeholder: "deskripsi",
    tabsize: 2,
    height: 300,
  });

  $(document).ready(function() {
    $(".files_upload").attr('data-before', "Drag file here or click the above button");
    $('input[type="file"]').change(function(e) {
      var fileName = e.target.files[0].name;
      $(".files").attr('data-before', fileName);

    });
  });
</script>