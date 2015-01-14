//include gulp
var gulp = require('gulp');

//include plugins
var minifyCss = require('gulp-minify-css');
var uglify = require('gulp-uglify');
var util = require('gulp-util');
var concat = require('gulp-concat');

var assetPath = 'metronic/theme/assets/';

var paths = {
  css: [
       assetPath+'global/plugins/font-awesome/css/font-awesome.min.css',
       assetPath+'global/plugins/simple-line-icons/simple-line-icons.min.css',
       assetPath+'global/plugins/bootstrap/css/bootstrap.min.css',
       assetPath+'global/plugins/uniform/css/uniform.default.css',
       assetPath+'global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
       assetPath+'global/css/components.css',
       assetPath+'global/css/plugins.css',
       assetPath+'admin/layout/css/layout.css',
       assetPath+'admin/layout/css/themes/default.css',
       assetPath+'admin/layout/css/custom.css',
       'metronic/theme/assets/global/plugins/typeahead/typeahead.css',
       'metronic/theme/assets/global/plugins/bootstrap-toastr/toastr.css'
  ],
  cssLogin: [
       assetPath+'global/plugins/font-awesome/css/font-awesome.min.css',
       assetPath+'global/plugins/simple-line-icons/simple-line-icons.min.css',
       assetPath+'global/plugins/bootstrap/css/bootstrap.min.css',
       assetPath+'global/plugins/uniform/css/uniform.default.css',

       assetPath+'global/plugins/select2/select2.css',
       assetPath+'admin/pages/css/login-soft.css',

       assetPath+'global/css/components.css',
       assetPath+'global/css/plugins.css',
       assetPath+'admin/layout/css/layout.css',
       assetPath+'admin/layout/css/themes/default.css',
       assetPath+'admin/layout/css/custom.css'
  ],
  scripts: [
       // assetPath+'global/plugins/jquery.min.js',
       'bower_components/jquery/dist/jquery.min.js',
       assetPath+'global/plugins/jquery-migrate.min.js',
       assetPath+'global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js',
       assetPath+'global/plugins/bootstrap/js/bootstrap.min.js',
       assetPath+'global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
       assetPath+'global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
       assetPath+'global/plugins/jquery.blockui.min.js',
       assetPath+'global/plugins/jquery.cokie.min.js',
       assetPath+'global/plugins/uniform/jquery.uniform.min.js',
       assetPath+'global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
       assetPath+'global/scripts/metronic.js',
       assetPath+'admin/layout/scripts/layout.js',
       assetPath+'admin/layout/scripts/quick-sidebar.js',
       assetPath+'admin/layout/scripts/demo.js',
       'bower_components/angular/angular.min.js',
       'bower_components/angular-resource/angular-resource.min.js',
       'metronic/theme/assets/global/plugins/typeahead/typeahead.bundle.js',
       'metronic/theme/assets/global/plugins/bootstrap-toastr/toastr.min.js'
       ],
  scriptsLogin: [
       assetPath+'global/plugins/jquery.min.js',
       assetPath+'global/plugins/jquery-migrate.min.js',
       assetPath+'global/plugins/bootstrap/js/bootstrap.min.js',
       assetPath+'global/plugins/jquery.blockui.min.js',
       assetPath+'global/plugins/uniform/jquery.uniform.min.js',
       assetPath+'global/plugins/jquery-validation/js/jquery.validate.min.js',
       assetPath+'global/plugins/backstretch/jquery.backstretch.min.js',
       assetPath+'global/plugins/select2/select2.min.js',
       assetPath+'global/scripts/metronic.js',
       assetPath+'admin/layout/scripts/layout.js',
       assetPath+'admin/pages/scripts/login-soft.js'
       ],
  images: 'client/img/**/*',

  //BLUIMP FILES
  css_big: [
    'vendor/blueimp-gallery/css/blueimp-gallery.min.css',
    'vendor/blueimp-gallery/css/blueimp-gallery-indicator.css',
    'vendor/blueimp-gallery/css/blueimp-gallery-video.css'
  ],
  // js_big: [
  //   'vendor/blueimp-gallery/js/blueimp-helper.js',
  //   'vendor/blueimp-gallery/js/blueimp-gallery.js',
  //   'vendor/blueimp-gallery/js/blueimp-gallery-fullscreen.js',
  //   'vendor/blueimp-gallery/js/blueimp-gallery-indicator.js',
  //   'vendor/blueimp-gallery/js/blueimp-gallery-video.js',
  //   'vendor/blueimp-gallery/js/blueimp-gallery-vimeo.js',
  //   'vendor/blueimp-gallery/js/blueimp-gallery-youtube.js',
  //   'vendor/blueimp-gallery/js/blueimp-gallery.min.js',
  // ]

  js_big: [
    'public/assets/FileUpload/vendor/jquery.ui.widget.js'
    ,'public/assets/FileUpload/jquery.blueimp-gallery2.min.js'
    ,'public/assets/FileUpload/jquery.iframe-transport.js'
    ,'public/assets/FileUpload/jquery.fileupload.js'
    ,'public/assets/FileUpload/jquery.fileupload-process.js'
    ,'public/assets/FileUpload/jquery.fileupload-image.js'
    ,'public/assets/FileUpload/jquery.fileupload-audio.js'
    ,'public/assets/FileUpload/jquery.fileupload-video.js'
    ,'public/assets/FileUpload/jquery.fileupload-validate.js'
    ,'public/assets/FileUpload/jquery.fileupload-ui.js'
  ]

};

gulp.task('css', function() {
     return gulp.src(paths.css)
          .pipe(concat('all.min.css'))
          .pipe(minifyCss())
          .pipe(gulp.dest('public/assets'));
});

gulp.task('cssL', function() {
     return gulp.src(paths.cssLogin)
          .pipe(concat('login.min.css'))
          .pipe(minifyCss())
          .pipe(gulp.dest('public/assets'));
});

gulp.task('css_big', function() {
     return gulp.src(paths.css_big)
          .pipe(concat('big.min.css'))
          .pipe(minifyCss())
          .pipe(gulp.dest('public/assets'));
});

gulp.task('scripts', function() {
     return gulp.src(paths.scripts)
          .pipe(concat('all.min.js'))
          .pipe(uglify())
          .pipe(gulp.dest('public/assets'));
});

gulp.task('js_login', function() {
     return gulp.src(paths.scriptsLogin)
          .pipe(concat('login.min.js'))
          .pipe(uglify())
          .pipe(gulp.dest('public/assets'));
});

gulp.task('js_big', function() {
     return gulp.src(paths.js_big)
          .pipe(concat('big.min.js'))
          .pipe(uglify())
          .pipe(gulp.dest('public/assets'));
});

gulp.task('watch', function() {
  // watch scss files
  gulp.watch('app/css/*.css', function() {
    gulp.run('css');
  });

  gulp.watch('app/js/*.js', function() {
    gulp.run('scripts');
  });
});

// // Concatenate & Minify JS
// gulp.task('scripts', function() {
//     return gulp.src('js/*.js')
//         .pipe(concat('all.js'))
//         .pipe(gulp.dest('dist'))
//         .pipe(rename('all.min.js'))
//         .pipe(uglify())
//         .pipe(gulp.dest('dist'));
// });