module.exports = function (grunt) {

    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    grunt.initConfig({
        cssmin: {
            combine: {
              files: {
                  'public/css/style.min.css' : ['public/bower_components/FlexSlider/flexslider.css','public/css/style.css']
              }
            }
        },
        uglify: {
            dev: {
                files:{
                    "public/scripts/main.min.js" : "public/scripts/main.js"
                }
            }
        }
    });
}