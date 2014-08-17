module.exports = function (grunt) {

    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    grunt.initConfig({
        cssmin: {
            minify: {
                expand: true,
                cwd: 'resources/styles/',
                src: ['*.css', '!*.min.css'],
                dest: 'resources/styles/',
                ext: '.min.css'
            }
        },
        uglify: {
            dev: {
                files:{
                    "resources/scripts/app.min.js" : "resources/scripts/app.js"
                }
            }
        }
    });
}